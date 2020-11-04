<?php

namespace App\Containers\Plot\Tasks;

use App\Containers\Plot\Data\Criterias\ActiveCriteria;
use App\Containers\Plot\Data\Repositories\PlotViewRepository;
use App\Containers\Plot\Data\Repositories\WebmapPlotViewRepository;
use App\Ship\Parents\Tasks\Task;
use Prettus\Repository\Exceptions\RepositoryException;

/**
 * Class GetPlotsForMapPublicTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetPlotsForMapPublicTask extends Task
{

    protected $repository;

    /**
     * GetPlotsViewTask constructor.
     * @param WebmapPlotViewRepository $repository
     */
    public function __construct(WebmapPlotViewRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param array $eager
     * @return mixed
     * @throws RepositoryException
     */
    public function run(Array $eager = [])
    {
        $this->eagerLoading($this->repository, $eager);

        return $this->repository->all();
    }
}
