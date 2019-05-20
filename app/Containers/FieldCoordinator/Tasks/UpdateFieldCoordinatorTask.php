<?php

namespace App\Containers\FieldCoordinator\Tasks;

use App\Containers\FieldCoordinator\Data\Repositories\FieldCoordinatorRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class UpdateFieldCoordinatorTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdateFieldCoordinatorTask extends Task
{

    protected $repository;

    /**
     * UpdateFieldCoordinatorTask constructor.
     * @param FieldCoordinatorRepository $repository
     */
    public function __construct(FieldCoordinatorRepository $repository)
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
