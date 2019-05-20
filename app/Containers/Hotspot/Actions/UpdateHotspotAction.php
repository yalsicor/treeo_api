<?php

namespace App\Containers\Hotspot\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;
use Dotenv\Exception\ValidationException;
use Yalsicor\LaravelGeoImporter\LaravelGeoImporter;

/**
 * Class UpdateHotspotAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdateHotspotAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     * @throws \Exception
     */
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'description',
            'name_de',
            'name_en',
            'name_ms',
            'link_de',
            'link_en',
            'link_ms',
        ]);

        $hotspot = Apiato::call('Hotspot@UpdateHotspotTask', [$request->id, $data]);

        //photo
        if ($request->photo) {
            $media = Apiato::call('Media@CreateMediaSubAction', [
                $request->photo,
                $hotspot->name_de,
            ]);
            $hotspot->photo()->associate($media);
            $hotspot->save();
        }

        //point
        if ($geodata = $request->geo_data) {
            //save point
            $feature = LaravelGeoImporter::getFeatureFromGeoJson($geodata);
            if ($feature->hasNoGeometry()) throw new ValidationException('No valid georeference provided', 422);
            if ($feature->hasPoint()) {
                $point = Apiato::call('Geo@CreateGeoPointTask', [$feature->getPoint(), $request->accuracy]);
            }

            $hotspot->point()->associate($point);
            $hotspot->save();
        }


        return $hotspot;
    }
}
