<?php

namespace App\Containers\PlantingDistance\Tasks;

use App\Containers\PlantingDistance\Data\Repositories\PlantingDistanceRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class DeletePlantingDistanceTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeletePlantingDistanceTask extends Task
{

    protected $repository;

    /**
     * DeletePlantingDistanceTask constructor.
     * @param PlantingDistanceRepository $repository
     */
    public function __construct(PlantingDistanceRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $id
     * @return int
     */
    public function run($id)
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
