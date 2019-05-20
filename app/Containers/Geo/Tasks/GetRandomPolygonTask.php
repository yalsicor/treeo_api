<?php

namespace App\Containers\Geo\Tasks;

use App\Ship\Parents\Tasks\Task;
use Phaza\LaravelPostgis\Geometries\LineString;
use Phaza\LaravelPostgis\Geometries\Point;
use Phaza\LaravelPostgis\Geometries\Polygon;

class GetRandomPolygonTask extends Task
{

    /**
     * @param $lat
     * @param $lng
     * @param int $precision
     * @return Polygon
     */
    public function run($lat, $lng, $precision = 4)
    {
        $precision = pow(10, $precision);

        $min = 0.0001;
        $max = 0.01;

        $a = mt_rand($min*$precision, $max*$precision)/$precision;
        $b = mt_rand($min*$precision, $max*$precision)/$precision;

        $linestring = new LineString(
            [
                $first = new Point($lat-$a+(mt_rand($min*$precision, $max*$precision)/$precision-($max-$min)/2), $lng-$b+(mt_rand($min*$precision, $max*$precision)/$precision-($max-$min)/2)),
                new Point($lat-$a+(mt_rand($min*$precision, $max*$precision)/$precision-($max-$min)/2), $lng+$b+(mt_rand($min*$precision, $max*$precision)/$precision-($max-$min)/2)),
                new Point($lat+$a+(mt_rand($min*$precision, $max*$precision)/$precision-($max-$min)/2), $lng+$b+(mt_rand($min*$precision, $max*$precision)/$precision-($max-$min)/2)),
                new Point($lat+$a+(mt_rand($min*$precision, $max*$precision)/$precision-($max-$min)/2), $lng-$b+(mt_rand($min*$precision, $max*$precision)/$precision-($max-$min)/2)),
                $first,
            ]
        );

        return new Polygon([$linestring]);
    }
}
