<?php

namespace App\Containers\Geo\Tasks;

use App\Containers\Geo\Data\Repositories\PolygonRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Phaza\LaravelPostgis\Geometries\GeometryInterface;
use Phaza\LaravelPostgis\Geometries\LineString;
use Phaza\LaravelPostgis\Geometries\MultiPolygon;
use Phaza\LaravelPostgis\Geometries\Point;
use Phaza\LaravelPostgis\Geometries\Polygon;

/**
 * Class UpdatePolygonTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdatePolygonTask extends Task
{

    private $repository;

    /**
     * UpdatePolygonTask constructor.
     * @param PolygonRepository $repository
     */
    public function __construct(PolygonRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $id
     * @param GeometryInterface $polygon
     * @return mixed
     */
    public function run($id, GeometryInterface $polygon)
    {
        try {
            if ($polygon instanceof Polygon) $polygon = new MultiPolygon([$polygon]);
            if ($polygon instanceof MultiPolygon) {
                $entity = $this->repository->update([
                    'polygon' => $polygon,
                ], $id);
                //area
                $model = $this->repository->model();
                $polygon = $model::find($entity->id);
                $polygon->update([
                    'area_m2' => $polygon->calculated_area,
                ]);
                return $polygon;
            }
            else throw new Exception("Geometry must be instance of Polygon or Multipolygon.");
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
