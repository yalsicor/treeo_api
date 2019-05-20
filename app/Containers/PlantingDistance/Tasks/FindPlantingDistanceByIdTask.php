<?php

namespace App\Containers\PlantingDistance\Tasks;

use App\Containers\PlantingDistance\Data\Repositories\PlantingDistanceRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class FindPlantingDistanceByIdTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindPlantingDistanceByIdTask extends Task
{

    protected $repository;

    /**
     * FindPlantingDistanceByIdTask constructor.
     * @param PlantingDistanceRepository $repository
     */
    public function __construct(PlantingDistanceRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
