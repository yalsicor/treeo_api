<?php

namespace App\Containers\PlantingDistance\Tasks;

use App\Containers\PlantingDistance\Data\Repositories\PlantingDistanceRepository;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Traits\HasQueryCriteriaTrait;

/**
 * Class GetAllPlantingDistancesTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllPlantingDistancesTask extends Task
{
    use HasQueryCriteriaTrait;

    protected $repository;

    /**
     * GetAllPlantingDistancesTask constructor.
     * @param PlantingDistanceRepository $repository
     */
    public function __construct(PlantingDistanceRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return mixed
     */
    public function run()
    {
        return $this->repository->paginate();
    }
}
