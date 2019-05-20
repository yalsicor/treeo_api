<?php

namespace App\Containers\Tree\Actions;

use App\Containers\Tree\Models\Tree;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;
use Carbon\Carbon;
use Dotenv\Exception\ValidationException;
use Yalsicor\LaravelGeoImporter\LaravelGeoImporter;

/**
 * Class UpdateTreeAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdateTreeAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     * @throws \Exception
     */
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'species_id',
            'dbh_cm',
            'height_m',
            'health',
            'comment',
            'amigo_id',
        ]);

        //timestamp
        if ($request->timestamp) {
            $data['timestamp'] = new Carbon($request->timestamp);
        }

        //survey
        if ($request->survey_id) {
            $survey = Apiato::call('Survey@FindSurveyByIdentifierTask', [$request->survey_id]);
            if ($survey) $data['survey_id'] = $survey->id;
        }

        //height_m
        if (!$request->height_m) {
            $data['height_m'] = (new Tree())->estimateHeight($request->dbh_cm);
            $data['height_calculated'] = true;
        }

        $tree = Apiato::call('Tree@FindTreeByIdentifierTask', [$request->id]);
        $tree = Apiato::call('Tree@UpdateTreeTask', [$tree->id, $data]);

        //image
        Apiato::call('Tree@UpdateImageTask', [$request->image, $tree]);

        //geodata
        if ($geodata = $request->geodata) {
            //save point
            $feature = LaravelGeoImporter::getFeatureFromGeoJson($geodata);
            if ($feature->hasNoGeometry()) throw new ValidationException('No valid georeference provided', 422);
            if ($feature->hasPoint()) {
                $point = Apiato::call('Geo@CreateGeoPointTask', [$feature->getPoint(), $request->accuracy]);
            }

            $oldPoint = $tree->point;

            $tree->point()->associate($point);
            $tree->save();

            if ($oldPoint) Apiato::call('Geo@DeleteGeoPointTask', [$oldPoint->id]);
        }

        return $tree;
    }
}
