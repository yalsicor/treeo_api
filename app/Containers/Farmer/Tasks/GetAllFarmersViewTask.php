<?php

namespace App\Containers\Farmer\Tasks;

use App\Containers\Farmer\Data\Repositories\FarmerViewRepository;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Traits\HasQueryCriteriaTrait;

/**
 * Class GetAllFarmersViewTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllFarmersViewTask extends Task
{
    use HasQueryCriteriaTrait;

    protected $repository;

    /**
     * GetAllFarmersViewTask constructor.
     * @param FarmerViewRepository $repository
     */
    public function __construct(FarmerViewRepository $repository)
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
