<?php

namespace App\Containers\Farmer\Tasks;

use App\Containers\Farmer\Data\Repositories\FarmerRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class DeleteFarmerTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeleteFarmerTask extends Task
{

    protected $repository;

    public function __construct(FarmerRepository $repository)
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
