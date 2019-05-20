<?php

namespace App\Containers\Nursery\Tasks;

use App\Containers\Nursery\Data\Repositories\NurseryRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class DeleteNurseryTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeleteNurseryTask extends Task
{

    protected $repository;

    public function __construct(NurseryRepository $repository)
    {
        $this->repository = $repository;
    }

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
