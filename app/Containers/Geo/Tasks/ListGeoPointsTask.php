<?php

namespace App\Containers\Geo\Tasks;

use App\Containers\Geo\Data\Repositories\GeoPointRepository;
use App\Ship\Parents\Tasks\Task;

class ListGeoPointsTask extends Task
{

    private $repository;

    public function __construct(GeoPointRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
