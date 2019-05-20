<?php

namespace App\Containers\Plot\Tasks;

use App\Containers\Geo\Models\GeoPoint;
use App\Containers\Plot\Models\Plot;
use App\Containers\Survey\Models\Survey;
use App\Ship\Parents\Tasks\Task;
use Exception;
use GeoJson\GeoJson;
use Illuminate\Support\Facades\DB;
use Phaza\LaravelPostgis\Geometries\MultiPolygon;
use Phaza\LaravelPostgis\Geometries\Polygon;
use Yalsicor\LaravelGeoImporter\LaravelGeoImporter;

/**
 * Class GeneratePolygonFromSurveyTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GeneratePolygonFromSurveyTask extends Task
{

    /**
     * @param Survey $survey
     * @return \Phaza\LaravelPostgis\Geometries\MultiPolygon|\Phaza\LaravelPostgis\Geometries\Point|\Phaza\LaravelPostgis\Geometries\Polygon|null
     * @throws \Exception
     */
    public function run(Survey $survey)
    {
        $points = GeoPoint::whereIn('id', $survey->trees->pluck('point_id')->filter(function($val){
            return (!!$val);
        }))->get();

        //fail if no points available
        if ($points->isEmpty()) return null;

//        if ($points->count() < 20) return null;

        $pointString = "MULTIPOINT(". $points->pluck('point')->map(function($item){
                return "{$item->toPair()}";
            })->implode(', ') .")";

        //create polygon
        $polygon = DB::select("
            --SELECT ST_asGeoJSON(ST_Buffer(ST_ConcaveHull(ST_Collect(ST_GeomFromText('{$pointString}')), 0.3), 1.5)) AS polygon
            SELECT ST_asGeoJSON(ST_ConcaveHull((ST_GeomFromText('{$pointString}')), 0.7)) AS polygon
            ;
        ");

        $geometry = LaravelGeoImporter::convertGeoJsonGeometry(GeoJson::jsonUnserialize(json_decode($polygon[0]->polygon)));

        return $geometry;
    }
}
