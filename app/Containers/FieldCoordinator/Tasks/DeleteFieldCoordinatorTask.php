<?php

namespace App\Containers\FieldCoordinator\Tasks;

use App\Containers\FieldCoordinator\Data\Repositories\FieldCoordinatorRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class DeleteFieldCoordinatorTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeleteFieldCoordinatorTask extends Task
{

    protected $repository;

    /**
     * DeleteFieldCoordinatorTask constructor.
     * @param FieldCoordinatorRepository $repository
     */
    public function __construct(FieldCoordinatorRepository $repository)
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
