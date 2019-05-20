<?php

namespace App\Containers\Geo\Tasks;

use App\Containers\Geo\Data\Repositories\GeoPointRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Phaza\LaravelPostgis\Geometries\GeometryInterface;
use Phaza\LaravelPostgis\Geometries\Point;

class UpdateGeoPointTask extends Task
{

    private $repository;

    public function __construct(
        GeoPointRepository $repository
    )
    {
        $this->repository = $repository;
    }

    public function run($id, GeometryInterface $point)
    {
        try {
            if ($point instanceof Point) {
                return $this->repository->update([
                    'point' => $point,
                ], $id);
            }
            else throw new Exception("No valid Point to persist to the database.");
        }
        catch (Exception $exception) {
//            throw $exception;
            throw new UpdateResourceFailedException();
        }
    }
}
