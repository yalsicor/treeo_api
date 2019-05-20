<?php

namespace App\Containers\PlantingDistance\Tasks;

use App\Containers\PlantingDistance\Data\Repositories\PlantingDistanceRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class UpdatePlantingDistanceTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdatePlantingDistanceTask extends Task
{

    protected $repository;

    /**
     * UpdatePlantingDistanceTask constructor.
     * @param PlantingDistanceRepository $repository
     */
    public function __construct(PlantingDistanceRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $id
     * @param array $data
     * @return mixed
     */
    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
