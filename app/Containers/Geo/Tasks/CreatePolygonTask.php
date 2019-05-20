<?php

namespace App\Containers\Geo\Tasks;

use App\Containers\Geo\Data\Repositories\PolygonRepository;
use App\Containers\User\Models\User;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Phaza\LaravelPostgis\Geometries\GeometryInterface;
use Phaza\LaravelPostgis\Geometries\LineString;
use Phaza\LaravelPostgis\Geometries\MultiPolygon;
use Phaza\LaravelPostgis\Geometries\Point;
use Phaza\LaravelPostgis\Geometries\Polygon;

/**
 * Class CreatePolygonTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreatePolygonTask extends Task
{

    private $repository;

    /**
     * CreatePolygonTask constructor.
     * @param PolygonRepository $repository
     */
    public function __construct(PolygonRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param GeometryInterface $polygon
     * @return mixed
     * @throws Exception
     */
    public function run(GeometryInterface $polygon)
    {
        try {
            if ($polygon instanceof Polygon) $polygon = new MultiPolygon([$polygon]);
            if ($polygon instanceof MultiPolygon) {
                $entity = $this->repository->create([
                    'polygon' => $polygon,
                ]);
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
            throw $exception;
        }
    }
}
