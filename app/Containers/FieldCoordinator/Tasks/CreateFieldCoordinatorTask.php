<?php

namespace App\Containers\FieldCoordinator\Tasks;

use App\Containers\FieldCoordinator\Data\Repositories\FieldCoordinatorRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class CreateFieldCoordinatorTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateFieldCoordinatorTask extends Task
{

    protected $repository;

    /**
     * CreateFieldCoordinatorTask constructor.
     * @param FieldCoordinatorRepository $repository
     */
    public function __construct(FieldCoordinatorRepository $repository)
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
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
