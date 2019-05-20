<?php

namespace App\Containers\Village\Tasks;

use App\Containers\Village\Data\Repositories\VillageRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class DeleteVillageTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeleteVillageTask extends Task
{

    protected $repository;

    /**
     * DeleteVillageTask constructor.
     * @param VillageRepository $repository
     */
    public function __construct(VillageRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $id
     * @return int
     */
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
