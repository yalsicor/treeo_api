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
 * Class CreateTreeAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateTreeAction extends Action
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

        //height_m
        if (!$request->height_m) {
            $data['height_m'] = (new Tree())->estimateHeight($request->dbh_cm);
            $data['height_calculated'] = true;
        }

        //survey
        if ($request->survey_id) {
            $survey = Apiato::call('Survey@FindSurveyByIdentifierTask', [$request->survey_id]);
            if ($survey) $data['survey_id'] = $survey->id;
        }

        $tree = Apiato::call('Tree@CreateTreeTask', [$data]);

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

            $tree->point()->associate($point);
            $tree->save();
        }

        return $tree;
    }
}
