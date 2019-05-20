<?php

namespace App\Containers\Geo\Tasks;

use App\Containers\Geo\Data\Repositories\GeoPointRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteGeoPointTask extends Task
{

    private $repository;

    public function __construct(GeoPointRepository $repository)
    {
        $this->repository = $repository;
    }

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
