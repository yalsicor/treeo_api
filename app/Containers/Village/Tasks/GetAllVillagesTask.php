<?php

namespace App\Containers\Village\Tasks;

use App\Containers\Village\Data\Repositories\VillageRepository;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Traits\HasQueryCriteriaTrait;

/**
 * Class GetAllVillagesTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllVillagesTask extends Task
{
    use HasQueryCriteriaTrait;

    protected $repository;

    /**
     * GetAllVillagesTask constructor.
     * @param VillageRepository $repository
     */
    public function __construct(VillageRepository $repository)
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
