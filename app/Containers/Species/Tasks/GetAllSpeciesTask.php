<?php

namespace App\Containers\Species\Tasks;

use App\Containers\Species\Data\Repositories\SpeciesRepository;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Traits\HasQueryCriteriaTrait;

/**
 * Class GetAllSpeciesTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllSpeciesTask extends Task
{
    use HasQueryCriteriaTrait;

    protected $repository;

    public function __construct(SpeciesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
