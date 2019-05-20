<?php

namespace App\Containers\Nursery\Tasks;

use App\Containers\Nursery\Data\Repositories\NurseryRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class UpdateNurseryTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdateNurseryTask extends Task
{

    protected $repository;

    public function __construct(NurseryRepository $repository)
    {
        $this->repository = $repository;
    }

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
