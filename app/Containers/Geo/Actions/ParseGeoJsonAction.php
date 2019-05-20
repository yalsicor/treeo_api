<?php

namespace App\Containers\Geo\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;
use Yalsicor\LaravelGeoImporter\LaravelGeoImporter;

/**
 * Class ParseGeoJsonAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class ParseGeoJsonAction extends Action
{
    /**
     * @param Request $request
     * @return array
     * @throws \Exception
     */
    public function run(Request $request)
    {
        $feature = LaravelGeoImporter::getFeatureFromGeoJson(file_get_contents($request->geojson));
        return [
            'geodata' => $feature->getGeoFeatureCollection(),
            'properties' => $feature->getProperties(),
        ];
    }
}
