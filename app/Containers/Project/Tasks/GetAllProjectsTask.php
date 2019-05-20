<?php

namespace App\Containers\Project\Tasks;

use App\Containers\Project\Data\Repositories\ProjectRepository;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Traits\HasQueryCriteriaTrait;

/**
 * Class GetAllProjectsTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllProjectsTask extends Task
{
    use HasQueryCriteriaTrait;

    protected $repository;

    /**
     * GetAllProjectsTask constructor.
     * @param ProjectRepository $repository
     */
    public function __construct(ProjectRepository $repository)
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
