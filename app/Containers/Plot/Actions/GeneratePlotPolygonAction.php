<?php

namespace App\Containers\Plot\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;
use Exception;

/**
 * Class GeneratePlotPolygonAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GeneratePlotPolygonAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     * @throws Exception
     */
    public function run(Request $request)
    {
        $plot = Apiato::call('Plot@FindPlotByIdentifierTask', [$request->id]);

//        if ($plot->calculated_polygon) return $plot;

        //survey
        $survey = $plot->surveys()->latest();

        //no new survey
        if (! $survey) throw new Exception('No surveys found.');

        //less than 20 trees
        if ($survey->trees()->has('point')->count() < 20) throw new Exception('Survey needs at least 20 trees with geodata for plot calculation.');

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
