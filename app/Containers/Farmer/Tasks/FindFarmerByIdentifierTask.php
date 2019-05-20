<?php

namespace App\Containers\Farmer\Tasks;

use App\Containers\Farmer\Data\Repositories\FarmerRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class FindFarmerByIdentifierTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindFarmerByIdentifierTask extends Task
{

    protected $repository;

    /**
     * FindFarmerByIdentifierTask constructor.
     * @param FarmerRepository $repository
     */
    public function __construct(FarmerRepository $repository)
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
            return $this->repository->findWhere(['identifier' => $id])->first();
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
