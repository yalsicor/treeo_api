<?php

namespace Yalsicor\LaravelGeoImporter\Geometries;

use Exception;
use Phaza\LaravelPostgis\Geometries\GeometryInterface;
use Phaza\LaravelPostgis\Geometries\MultiPolygon;
use Phaza\LaravelPostgis\Geometries\Point;
use Phaza\LaravelPostgis\Geometries\Polygon;

class Feature
{

    /**
     * @var null
     */
    private $id;
    /**
     * @var null
     */
    private $boundingBox;
    /**
     * @var null
     */
    private $crs;
    /**
     * @var null
     */
    private $properties;
    /**
     * @var GeometryInterface
     */
    private $polygon;
    /**
     * @var Point
     */
    private $point;

    public function __construct(GeometryInterface $polygon = null, Point $point = null, $properties = null, $id = null, $boundingBox = null, $crs = null)
    {
        $this->id = $id;
        $this->boundingBox = $boundingBox;
        $this->crs = $crs;
        $this->properties = $properties;
        $this->polygon = $polygon;
        $this->point = $point;
    }

    /**
     * @return null
     */
    public function getProperties()
    {
        return ($this->hasProperties())?$this->properties:null;
    }

    /**
     * @return bool
     */
    public function hasProperties()
    {
        return (is_array($this->properties) && !empty($this->properties));
    }

    /**
     * @param $key
     * @return null
     */
    public function getProperty($key)
    {
        return $this->properties[$key] ?? null;
    }

    /**
     * @return bool
     */
    public function hasPoint()
    {
        return (
            $this->point instanceof Point
        );
    }

    /**
     * @return null|Point
     * @throws Exception
     */
    public function getPoint()
    {
        if (!$this->hasPoint()) $this->point = $this->calculateCenterPoint();
        return $this->point;
    }

    /**
     * @return null|Point
     * @throws Exception
     */
    public function calculateCenterPoint()
    {
        if ($this->hasPolygon()) {
            return $this->getCentroid($this->getPointsFromPolygon($this->polygon));
        }
        elseif ($this->hasMultiPolygon()) {
            $points = [];
            foreach ($this->polygon->getPolygons() as $polygon)
            {
                $points[] = $this->getCentroid($this->getPointsFromPolygon($polygon));
            }
            return $this->getCentroid($points);
        }
        else throw new Exception("Centroid cannot be calculated.");
    }

    /**
     * @return bool
     */
    public function hasPolygon()
    {
        return ($this->polygon instanceof Polygon);
    }

    /**
     * @return bool
     */
    public function hasMultiPolygon()
    {
        return ($this->polygon instanceof MultiPolygon || $this->polygon instanceof Polygon);
    }

    /**
     * @return null|GeometryInterface
     */
    public function getPolygon()
    {
        return ($this->hasPolygon())?$this->polygon:null;
    }

    /**
     * @return null|GeometryInterface|MultiPolygon
     */
    public function getMultiPolygon()
    {
        if ($this->hasPolygon()) return new MultiPolygon([$this->polygon]);
        if ($this->hasMultiPolygon()) return $this->polygon;
        return null;
    }

    /**
     * @return bool
     */
    public function hasNoGeometry()
    {
        return !($this->hasMultiPolygon() || $this->hasPoint());
    }

    /**
     * @param array $points
     * @return null|Point
     */
    protected function getCentroid(array $points)
    {
        $centroid = array_reduce( $points, function ($x,$y) use ($points) {
            $len = count($points);
            return new Point($x->getLat() + $y->getLat()/$len, $x->getLng() + $y->getLng()/$len);
        }, new Point(0, 0));
        return $centroid;
    }

    /**
     * @param GeometryInterface $polygon
     * @return array
     * @throws Exception
     */
    protected function getPointsFromPolygon(GeometryInterface $polygon)
    {
        if (!$polygon instanceof Polygon) throw new Exception("No polygon given.");
        $points = [];
        foreach ($polygon->getLineStrings() as $linestring) {
            $points = array_merge($points, $linestring->getPoints());
        }
        return $points;
    }

    /**
     * @param bool $onlyPoint
     * @return array
     * @throws Exception
     */
    public function getGeoFeatureCollection($onlyPoint = false)
    {
        return [
            'type' => 'FeatureCollection',
            'features' => $this->getGeoFeature($onlyPoint),
        ];
    }

    /**
     * @param bool $onlyPoint
     * @return array
     * @throws Exception
     */
    public function getGeoFeature($onlyPoint = false)
    {
        $features[] = $this->getPoint();
        if (!$onlyPoint && $this->hasMultiPolygon()) $features[] = $this->getMultiPolygon();

        return array_map(function($elem){
            return [
                'type' => 'Feature',
                'geometry' => $elem,
            ];
        }, $features);
    }


    /**
     * @return false|string
     * @throws Exception
     */
    public function exportGeoJson()
    {
        $features[] = $this->getPoint();
        if ($this->hasMultiPolygon()) $features[] = $this->getMultiPolygon();

        return json_encode([
          'type' => 'FeatureCollection',
          'features' => array_map(function($elem){
              return [
                  'type' => 'Feature',
                  'geometry' => $elem,
              ];
          }, $features),
        ]);
    }

    public function exportKml()
    {}

}