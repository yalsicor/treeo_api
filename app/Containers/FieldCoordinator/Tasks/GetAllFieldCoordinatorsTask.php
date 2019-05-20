<?php

namespace App\Containers\FieldCoordinator\Tasks;

use App\Containers\FieldCoordinator\Data\Repositories\FieldCoordinatorRepository;
use App\Ship\Parents\Tasks\Task;

/**
 * Class GetAllFieldCoordinatorsTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllFieldCoordinatorsTask extends Task
{

    protected $repository;

    /**
     * GetAllFieldCoordinatorsTask constructor.
     * @param FieldCoordinatorRepository $repository
     */
    public function __construct(FieldCoordinatorRepository $repository)
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
