<?php

namespace App\Containers\Plot\Tasks;

use App\Containers\Plot\Data\Repositories\PlotRepository;
use App\Containers\Plot\Models\Plot;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class FindPlotByIdentifierTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindPlotByIdentifierTask extends Task
{

    protected $repository;

    /**
     * FindPlotByIdentifierTask constructor.
     * @param PlotRepository $repository
     */
    public function __construct(PlotRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $id
     * @return Plot
     */
    public function run($id) : Plot
    {
        try {
            return $this->repository->findWhere(['identifier' => $id])->first();
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
