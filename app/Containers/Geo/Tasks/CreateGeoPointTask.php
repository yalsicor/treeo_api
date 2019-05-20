<?php

namespace App\Containers\Geo\Tasks;

use App\Containers\Geo\Data\Repositories\GeoPointRepository;
use App\Containers\User\Models\User;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Phaza\LaravelPostgis\Geometries\GeometryInterface;
use Phaza\LaravelPostgis\Geometries\Point;

/**
 * Class CreateGeoPointTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateGeoPointTask extends Task
{

    private $repository;

    /**
     * CreateGeoPointTask constructor.
     * @param GeoPointRepository $repository
     */
    public function __construct(GeoPointRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param GeometryInterface $point
     * @param null $accuracy
     * @return mixed
     * @throws Exception
     */
    public function run(GeometryInterface $point, $accuracy = null)
    {
        try {

            if ($point instanceof Point) {
                return $this->repository->create([
                    'point'     => $point,
                    'accuracy'  => $accuracy,
                ]);
            }
            else throw new Exception("No valid Point to persist to the database.");
        }
        catch (Exception $exception) {
            throw $exception;
        }
    }
}
