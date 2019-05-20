<?php

namespace App\Containers\Plot\Tasks;

use App\Containers\Plot\Data\Repositories\PlotRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class FindPlotByIdTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindPlotByIdTask extends Task
{

    protected $repository;

    /**
     * FindPlotByIdTask constructor.
     * @param PlotRepository $repository
     */
    public function __construct(PlotRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
