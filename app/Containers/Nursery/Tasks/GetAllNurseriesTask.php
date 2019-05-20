<?php

namespace App\Containers\Nursery\Tasks;

use App\Containers\Nursery\Data\Repositories\NurseryRepository;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Traits\HasQueryCriteriaTrait;

/**
 * Class GetAllNurseriesTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllNurseriesTask extends Task
{
    use HasQueryCriteriaTrait;

    protected $repository;

    public function __construct(NurseryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
