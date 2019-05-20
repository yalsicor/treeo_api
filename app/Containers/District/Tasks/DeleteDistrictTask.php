<?php

namespace App\Containers\District\Tasks;

use App\Containers\District\Data\Repositories\DistrictRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class DeleteDistrictTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeleteDistrictTask extends Task
{

    protected $repository;

    public function __construct(DistrictRepository $repository)
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
