<?php

namespace App\Containers\Village\Tasks;

use App\Containers\Village\Data\Repositories\VillageRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class CreateVillageTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateVillageTask extends Task
{

    protected $repository;

    /**
     * CreateVillageTask constructor.
     * @param VillageRepository $repository
     */
    public function __construct(VillageRepository $repository)
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
