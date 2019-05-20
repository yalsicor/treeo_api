<?php

namespace App\Containers\Farmer\Tasks;

use App\Containers\Farmer\Data\Repositories\GenderRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllGendersTask extends Task
{

    protected $repository;

    public function __construct(GenderRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->get();
    }
}
