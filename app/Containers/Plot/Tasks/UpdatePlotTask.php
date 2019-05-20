<?php

namespace App\Containers\Plot\Tasks;

use App\Containers\Plot\Data\Repositories\PlotRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class UpdatePlotTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdatePlotTask extends Task
{

    protected $repository;

    /**
     * UpdatePlotTask constructor.
     * @param PlotRepository $repository
     */
    public function __construct(PlotRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $id
     * @param array $data
     * @return mixed
     */
    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
