<?php

namespace App\Containers\Plot\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;
use Dotenv\Exception\ValidationException;
use Yalsicor\LaravelGeoImporter\LaravelGeoImporter;

/**
 * Class UpdatePlotAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdatePlotAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     * @throws \Exception
     */
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'project_id',
            'species_id',
            'soil_type_id',
            'legal_status_id',
            'village_id',
            'planting_distance_id',
            'supporter_id',
            'nursery_id',
            'planting_date',
            'video_url',
            'neighbours',
            'landscape_features',
            'general_conditions',
            'fire_fighting',
            'active',
            'sample',
            'plants_planted',
            'field_coordinator_id',
        ]);

        //farmer
        if ($request->farmer_id) {
            $farmer = Apiato::call('Farmer@FindFarmerByIdentifierTask', [$request->farmer_id]);
            if ($farmer) $data['farmer_id'] = $farmer->id;
        }

        $plot = Apiato::call('Plot@FindPlotByIdentifierTask', [$request->id]);
        $plot = Apiato::call('Plot@UpdatePlotTask', [$plot->id, $data]);

        //geodata
        if ($geodata = $request->geodata) {
            //save polygon
            $feature = LaravelGeoImporter::getFeatureFromGeoJson($geodata);
            if ($feature->hasNoGeometry()) throw new ValidationException('No valid georeference provided', 422);
            if ($feature->hasMultiPolygon()) {
                $polygon = Apiato::call('Geo@CreatePolygonTask', [$feature->getMultiPolygon()]);
            }

            //delete old polygon
            if($plot->polygon) {
                Apiato::call('Geo@DeletePolygonTask', [$plot->polygon->id]);
                if ($plot->point) Apiato::call('Geo@DeleteGeoPointTask', [$plot->point->id]);
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
