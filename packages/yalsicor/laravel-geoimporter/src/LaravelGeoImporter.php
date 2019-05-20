<?php

namespace Yalsicor\LaravelGeoImporter;

use Exception;
use GeoJson\GeoJson;
use Illuminate\Support\Collection;
use Phaza\LaravelPostgis\Geometries\LineString;
use Phaza\LaravelPostgis\Geometries\MultiPolygon;
use Phaza\LaravelPostgis\Geometries\Point;
use Phaza\LaravelPostgis\Geometries\Polygon;
use StepanDalecky\KmlParser\Parser;
use Yalsicor\LaravelGeoImporter\Geometries\Feature;

class LaravelGeoImporter
{
    private $kml = null;

    /**
     * @param $geojson
     * @return Collection|null
     * @throws Exception
     */
    public static function importGeoJson($geojson)
    {
        //validate geojson
        try {
            $features = [];
            $featureCollection = GeoJson::jsonUnserialize(json_decode($geojson))->getFeatures();
            foreach ($featureCollection as $feature) {
                $geometry = self::convertGeoJsonGeometry($feature->getGeometry());
                $features[] = new Feature(
                    ($geometry instanceof Polygon || $geometry instanceof MultiPolygon)?$geometry:null,
                    ($geometry instanceof Point)?$geometry:null,
                    $feature->getProperties(),
                    $feature->getId(),
                    $feature->getBoundingBox(),
                    $feature->getCrs()
                );
            }
        } catch (Exception $e) {
            throw $e;
        }
        return new Collection($features);
    }

    /**
     * alias for importGeoJson
     *
     * @param $geojson
     * @return mixed
     * @throws Exception
     */
    public static function getFeaturesFromGeoJson($geojson)
    {
        return self::importGeoJson($geojson);
    }

    /**
     * @param $geojson
     * @return Feature
     * @throws Exception
     */
    public static function getFeatureFromGeoJson($geojson)
    {
        //validate geojson
        try {
            $point = null;
            $polygons = [];
            $properties = [];
            $featureCollection = GeoJson::jsonUnserialize(json_decode($geojson))->getFeatures();
            foreach ($featureCollection as $feature) {
                $geometry = self::convertGeoJsonGeometry($feature->getGeometry());
                if ($feature->getProperties()) $properties = array_merge($feature->getProperties(), $properties);
                if ($geometry instanceof Point) $point = ($point)?$point:$geometry;  //use only first point
                elseif ($geometry instanceof Polygon) $polygons[] = $geometry;
                elseif ($geometry instanceof MultiPolygon) $polygons = array_merge($polygons, $geometry->getPolygons());
                else throw new Exception("Geometry must be Point, Polygon or MultiPolygon, ".end(explode('\\', get_class($geometry)))." given.");
            }
            if (!$point && empty($polygons)) throw new Exception("Geometry information needed to create entity.");
            $feature = new Feature(
                (!empty($polygons))?new MultiPolygon($polygons):null,
                $point,
                (!empty($properties))?$properties:null
            );
        } catch (Exception $e) {
            throw $e;
        }
        return $feature;
    }

    /**
     * @param $kml
     * @return null|Parser
     * @throws Exception
     */
    public static function importKml($kml)
    {
        $instance = new self;

        try {
            $instance->kml = Parser::fromString($kml);
        } catch (Exception $e) {
            throw $e;
        }

        return $instance->kml;
    }

    /**
     * @param $geometry
     * @return MultiPolygon|Point|Polygon
     * @throws Exception
     */
    public static function convertGeoJsonGeometry($geometry)
    {
        if ($geometry->getType() === 'Polygon') {
            return new Polygon(
                array_map(function ($p){
                        return new LineString(array_map(function ($l){
                            //we get coord in lng, lat and need lat, lng
                            return new Point($l[1], $l[0], $l[2] ?? null);
                        } ,$p));
                }, $geometry->getCoordinates())
            );
        }
        if ($geometry->getType() === 'MultiPolygon') {
            return new MultiPolygon(
                array_map(function ($c){
                    return new Polygon(array_map(function ($p){
                        return new LineString(array_map(function ($l){
                            //we get coord in lng, lat and need lat, lng
                            return new Point($l[1], $l[0], $l[2] ?? null);
                        } ,$p));
                    }, $c));
                }, $geometry->getCoordinates())
            );
        }
        if ($geometry->getType() === 'Point') {
            $coordinates = $geometry->getCoordinates();
            //we get coord in lng, lat and need lat, lng
            return new Point($coordinates[1], $coordinates[0], $coordinates[2] ?? null);
        }

        if ($geometry->getType() === 'MultiPoint') throw new Exception("MultiPoint is not supported in geojson import.");

        Throw new Exception("No valid geometry found.");
    }

}