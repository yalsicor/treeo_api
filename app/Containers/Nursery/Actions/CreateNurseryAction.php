<?php

namespace App\Containers\Nursery\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;
use Dotenv\Exception\ValidationException;
use Yalsicor\LaravelGeoImporter\LaravelGeoImporter;

/**
 * Class CreateNurseryAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateNurseryAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     * @throws \Exception
     */
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'owner',
        ]);

        $nursery = Apiato::call('Nursery@CreateNurseryTask', [$data]);

        //cover
        if ($request->cover) {
            $media = Apiato::call('Media@CreateMediaSubAction', [
                $request->cover,
            ]);
            $nursery->cover()->associate($media);
            $nursery->save();
        }

        //geo_point
        if ($geodata = $request->geo_point) {
            //save point
            $feature = LaravelGeoImporter::getFeatureFromGeoJson($geodata);
            if ($feature->hasNoGeometry()) throw new ValidationException('No valid georeference provided', 422);
            if ($feature->hasPoint()) {
                $point = Apiato::call('Geo@CreateGeoPointTask', [$feature->getPoint(), $request->accuracy]);
            }

            $nursery->point()->associate($point);
            $nursery->save();
        }

        return $nursery;
    }
}
