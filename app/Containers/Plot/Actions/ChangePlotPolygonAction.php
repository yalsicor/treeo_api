<?php

namespace App\Containers\Plot\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;
use Dotenv\Exception\ValidationException;
use Yalsicor\LaravelGeoImporter\LaravelGeoImporter;

/**
 * Class ChangePlotPolygonAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class ChangePlotPolygonAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     * @throws \Exception
     */
    public function run(Request $request)
    {
        $plot = Apiato::call('Plot@FindPlotByIdentifierTask', [$request->id]);

        //geodata
        if ($geodata = $request->geodata) {
            //save polygon
            $feature = LaravelGeoImporter::getFeatureFromGeoJson($geodata);
            if ($feature->hasNoGeometry()) throw new ValidationException('No valid georeference provided', 422);
            if ($feature->hasMultiPolygon()) {
                $polygon = Apiato::call('Geo@CreatePolygonTask', [$feature->getMultiPolygon()]);
            }

            //calculate centroid
            $point = Apiato::call('Geo@CreateGeoPointTask', [$polygon->calculateCenterPoint()]);

            $plot->polygon()->associate($polygon);
            $plot->point()->associate($point);
            $plot->save();
        }

        return $plot;
    }
}
