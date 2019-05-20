<?php

namespace App\Containers\Plot\Tasks;

use App\Containers\Plot\Data\Repositories\PlotViewRepository;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Traits\HasQueryCriteriaTrait;

/**
 * Class GetPlotsViewTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetPlotsViewTask extends Task
{
    use HasQueryCriteriaTrait;

    protected $repository;

    /**
     * GetPlotsViewTask constructor.
     * @param PlotViewRepository $repository
     */
    public function __construct(PlotViewRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param array $eager
     * @return mixed
     */
    public function run(Array $eager = [])
    {
        $this->eagerLoading($this->repository, $eager);

        return $this->repository->paginate();
    }
}
