<?php

namespace App\Containers\Plot\Tasks;

use App\Containers\Plot\Data\Repositories\PlotRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class DeletePlotTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeletePlotTask extends Task
{

    protected $repository;

    /**
     * DeletePlotTask constructor.
     * @param PlotRepository $repository
     */
    public function __construct(PlotRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $id
     * @return int
     */
    public function run($id)
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
