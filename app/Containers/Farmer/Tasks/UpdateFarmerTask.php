<?php

namespace App\Containers\Farmer\Tasks;

use App\Containers\Farmer\Data\Repositories\FarmerRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class UpdateFarmerTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdateFarmerTask extends Task
{

    protected $repository;

    /**
     * UpdateFarmerTask constructor.
     * @param FarmerRepository $repository
     */
    public function __construct(FarmerRepository $repository)
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
