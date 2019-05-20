<?php

namespace App\Containers\Tree\Actions;

use App\Containers\Tree\Models\Tree;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;
use Carbon\Carbon;
use Dotenv\Exception\ValidationException;
use Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Yalsicor\LaravelGeoImporter\LaravelGeoImporter;

/**
 * Class CreateMultipleTreesAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateMultipleTreesAction extends Action
{
    /**
     * @param Request $request
     * @return Collection
     */
    public function run(Request $request)
    {
        $survey = Apiato::call('Survey@FindSurveyByIdentifierTask', [$request->survey_id]);

        $treeModel = new Tree();

        DB::beginTransaction();

        try {
            //tree data
            $tree_data = $request->tree_data;

            $trees = new Collection;

            foreach ($tree_data as $raw) {

                $data['species_id'] = $raw['species_id'] ?? null;
                $data['dbh_cm'] = $raw['dbh_cm'] ?? null;
                $data['height_m'] = $raw['height_m'] ?? $treeModel->estimateHeight($data['dbh_cm']);
                $data['height_calculated'] = !isset($raw['height_m']);
                $data['health'] = $raw['health'] ?? null;
                $data['comment'] = $raw['comment'] ?? null;


                //timestamp
                if ($raw['timestamp'] ?? null) {
                    $data['timestamp'] = new Carbon($raw['timestamp']);
                }

                //set survey
                $data['survey_id'] = $survey->id;

                $tree = Apiato::call('Tree@CreateTreeTask', [$data]);

                //geodata
                if ($geodata = ($raw['geodata'] ?? null)) {
                    //save point
                    $feature = LaravelGeoImporter::getFeatureFromGeoJson($geodata);
                    if ($feature->hasNoGeometry()) throw new ValidationException('No valid georeference provided', 422);
                    if ($feature->hasPoint()) {
                        $point = Apiato::call('Geo@CreateGeoPointTask', [$feature->getPoint(), $raw['accuracy']]);
                    }

                    $tree->point()->associate($point);
                    $tree->save();
                }

                $trees->push($tree);
            }
        }
        catch (Exception $exception) {
            DB::rollBack();
//            throw $exception;
            throw new CreateResourceFailedException();
        }

        DB::commit();


        return $trees;
    }
}
