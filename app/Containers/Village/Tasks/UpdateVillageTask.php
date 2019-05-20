<?php

namespace App\Containers\Village\Tasks;

use App\Containers\Village\Data\Repositories\VillageRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class UpdateVillageTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdateVillageTask extends Task
{

    protected $repository;

    /**
     * UpdateVillageTask constructor.
     * @param VillageRepository $repository
     */
    public function __construct(VillageRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $id
     * @param array $data
     * @return mixed
     */
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
