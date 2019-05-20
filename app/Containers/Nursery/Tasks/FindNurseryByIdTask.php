<?php

namespace App\Containers\Nursery\Tasks;

use App\Containers\Nursery\Data\Repositories\NurseryRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class FindNurseryByIdTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindNurseryByIdTask extends Task
{

    protected $repository;

    public function __construct(NurseryRepository $repository)
    {
        $this->repository = $repository;
    }

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
