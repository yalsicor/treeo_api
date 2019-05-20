<?php

namespace App\Containers\PlantingDistance\Tasks;

use App\Containers\PlantingDistance\Data\Repositories\PlantingDistanceRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class CreatePlantingDistanceTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreatePlantingDistanceTask extends Task
{

    protected $repository;

    /**
     * CreatePlantingDistanceTask constructor.
     * @param PlantingDistanceRepository $repository
     */
    public function __construct(PlantingDistanceRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
