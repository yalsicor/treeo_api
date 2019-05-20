<?php

namespace App\Containers\Tree\Tasks;

use App\Containers\Tree\Data\Repositories\TreeViewRepository;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Traits\HasQueryCriteriaTrait;

/**
 * Class GetAllTreesViewTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllTreesViewTask extends Task
{
    use HasQueryCriteriaTrait;

    protected $repository;

    /**
     * GetAllTreesTask constructor.
     * @param TreeViewRepository $repository
     */
    public function __construct(TreeViewRepository $repository)
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
