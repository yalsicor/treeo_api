<?php

namespace App\Containers\District\Tasks;

use App\Containers\District\Data\Repositories\DistrictRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class CreateDistrictTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateDistrictTask extends Task
{

    protected $repository;

    public function __construct(DistrictRepository $repository)
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
