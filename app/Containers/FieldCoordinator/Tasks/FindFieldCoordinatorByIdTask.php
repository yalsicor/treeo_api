<?php

namespace App\Containers\FieldCoordinator\Tasks;

use App\Containers\FieldCoordinator\Data\Repositories\FieldCoordinatorRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class FindFieldCoordinatorByIdTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindFieldCoordinatorByIdTask extends Task
{

    protected $repository;

    /**
     * FindFieldCoordinatorByIdTask constructor.
     * @param FieldCoordinatorRepository $repository
     */
    public function __construct(FieldCoordinatorRepository $repository)
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
