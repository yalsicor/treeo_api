<?php

namespace App\Containers\Plot\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;
use Exception;

/**
 * Class ForcePlotPolygonAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class ForcePlotPolygonAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     * @throws Exception
     */
    public function run(Request $request)
    {
        //survey
        $survey = Apiato::call('Survey@FindSurveyByIdentifierTask', [$request->survey_id]);

        //old survey
        if ($survey->treecount) throw new Exception('Old survey, cannot calculate polygon from that!');

        //less than 20 trees
        if ($survey->trees->count() <= 20) throw new Exception('Not enough tree data. Needs to be at least 20.');


        $plot = $survey->plot;

        $geometry = Apiato::call('Plot@GeneratePolygonFromSurveyTask', [$survey]);

        if ($geometry) {
            //create polygon
            $polygon = Apiato::call('Geo@CreatePolygonTask', [$geometry]);

            //calculate centroid
            $point = Apiato::call('Geo@CreateGeoPointTask', [$polygon->calculateCenterPoint()]);

            $plot->calculated_polygon = true;
            $plot->polygon()->associate($polygon);
            $plot->point()->associate($point);
            $plot->save();
        }

        return $plot->polygon;
    }
}
