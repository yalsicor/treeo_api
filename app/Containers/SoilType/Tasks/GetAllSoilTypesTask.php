<?php

namespace App\Containers\SoilType\Tasks;

use App\Containers\SoilType\Data\Repositories\SoilTypeRepository;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Traits\HasQueryCriteriaTrait;

/**
 * Class GetAllSoilTypesTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllSoilTypesTask extends Task
{
    use HasQueryCriteriaTrait;

    protected $repository;

    /**
     * GetAllSoilTypesTask constructor.
     * @param SoilTypeRepository $repository
     */
    public function __construct(SoilTypeRepository $repository)
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
