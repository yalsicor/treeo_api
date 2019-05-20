<?php

namespace App\Containers\SoilType\Tasks;

use App\Containers\SoilType\Data\Repositories\SoilTypeRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class DeleteSoilTypeTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeleteSoilTypeTask extends Task
{

    protected $repository;

    /**
     * DeleteSoilTypeTask constructor.
     * @param SoilTypeRepository $repository
     */
    public function __construct(SoilTypeRepository $repository)
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
