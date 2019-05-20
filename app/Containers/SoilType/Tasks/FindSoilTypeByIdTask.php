<?php

namespace App\Containers\SoilType\Tasks;

use App\Containers\SoilType\Data\Repositories\SoilTypeRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class FindSoilTypeByIdTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindSoilTypeByIdTask extends Task
{

    protected $repository;

    /**
     * FindSoilTypeByIdTask constructor.
     * @param SoilTypeRepository $repository
     */
    public function __construct(SoilTypeRepository $repository)
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
