<?php

namespace App\Containers\Village\Tasks;

use App\Containers\Village\Data\Repositories\VillageRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class FindVillageByIdTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindVillageByIdTask extends Task
{

    protected $repository;

    /**
     * FindVillageByIdTask constructor.
     * @param VillageRepository $repository
     */
    public function __construct(VillageRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
