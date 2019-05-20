<?php

namespace App\Containers\Nursery\Tasks;

use App\Containers\Nursery\Data\Repositories\NurseryRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class CreateNurseryTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateNurseryTask extends Task
{

    protected $repository;

    public function __construct(NurseryRepository $repository)
    {
        $this->repository = $repository;
    }

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
