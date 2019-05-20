<?php

namespace App\Containers\Plot\Tasks;

use App\Containers\Geo\Models\Polygon;
use App\Containers\Plot\Models\Plot;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Collection;

/**
 * Class BuildPlotDataGeoJsonTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class BuildPlotDataGeoJsonTask extends Task
{

    /**
     * @param Plot $plot
     * @return array
     */
    public function run(Plot $plot)
    {
        $features = [];

        if ($plot) {
            $features = [
                    'type'          => 'Feature',
                    'geometry'      => optional($plot->polygon)->polygon,
                    'properties'    => [
                        'id'          => $id = $plot->identifier,
                    ],
                    'id'            => $id,
                ];
        }

        return array(
            'type' => 'FeatureCollection',
            'features' => $features,
        );
    }
}
