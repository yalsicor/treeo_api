<?php

namespace App\Containers\District\Tasks;

use App\Containers\District\Data\Repositories\DistrictRepository;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Traits\HasQueryCriteriaTrait;

/**
 * Class GetAllDistrictsTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllDistrictsTask extends Task
{
    use HasQueryCriteriaTrait;

    protected $repository;

    public function __construct(DistrictRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
