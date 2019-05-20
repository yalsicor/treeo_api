<?php

namespace App\Containers\SoilType\Tasks;

use App\Containers\SoilType\Data\Repositories\SoilTypeRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class CreateSoilTypeTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateSoilTypeTask extends Task
{

    protected $repository;

    /**
     * CreateSoilTypeTask constructor.
     * @param SoilTypeRepository $repository
     */
    public function __construct(SoilTypeRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param array $data
     * @return mixed
     */
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
