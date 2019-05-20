<?php

namespace App\Containers\Geo\Tasks;

use App\Ship\Parents\Tasks\Task;
use Phaza\LaravelPostgis\Geometries\Point;

class GetRandomPointTask extends Task
{

    public function run($target = [], $precision = 4)
    {
        $lat = isset($target['lat'])?$target['lat']:[-90, 90];
        $lng = isset($target['lng'])?$target['lng']:[-180, 180];

        $precision = pow(10, $precision);

        return new Point(
                mt_rand($lng[0]*$precision, $lng[1]*$precision)/$precision,
                mt_rand($lat[0]*$precision, $lat[1]*$precision)/$precision
            );
    }
}
