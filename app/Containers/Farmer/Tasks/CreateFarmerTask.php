<?php

namespace App\Containers\Farmer\Tasks;

use App\Containers\Farmer\Data\Repositories\FarmerRepository;
use App\Containers\Farmer\Models\Farmer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class CreateFarmerTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateFarmerTask extends Task
{

    protected $repository;

    /**
     * CreateFarmerTask constructor.
     * @param FarmerRepository $repository
     */
    public function __construct(FarmerRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function run(array $data)
    {
        try {
            //identifier
            $data['identifier'] = $this->repository->makeModel()->makeIdentifier();
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw $exception;
            //            throw new CreateResourceFailedException();
        }
    }
}
