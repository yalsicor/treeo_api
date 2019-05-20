<?php

namespace App\Containers\SoilType\Tasks;

use App\Containers\SoilType\Data\Repositories\SoilTypeRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class UpdateSoilTypeTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdateSoilTypeTask extends Task
{

    protected $repository;

    /**
     * UpdateSoilTypeTask constructor.
     * @param SoilTypeRepository $repository
     */
    public function __construct(SoilTypeRepository $repository)
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
