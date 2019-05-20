<?php

namespace App\Containers\District\Tasks;

use App\Containers\District\Data\Repositories\DistrictRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class UpdateDistrictTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdateDistrictTask extends Task
{

    protected $repository;

    public function __construct(DistrictRepository $repository)
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
