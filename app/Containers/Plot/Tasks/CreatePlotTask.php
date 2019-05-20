<?php

namespace App\Containers\Plot\Tasks;

use App\Containers\Plot\Data\Repositories\PlotRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class CreatePlotTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreatePlotTask extends Task
{

    protected $repository;

    /**
     * CreatePlotTask constructor.
     * @param PlotRepository $repository
     */
    public function __construct(PlotRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function run(array $data)
    {
        try {
            //identifier
            $data['identifier'] = $this->repository->makeModel()->makeIdentifier();
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
