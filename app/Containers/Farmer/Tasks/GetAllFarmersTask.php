<?php

namespace App\Containers\Farmer\Tasks;

use App\Containers\Farmer\Data\Repositories\FarmerRepository;
use App\Ship\Parents\Tasks\Task;

/**
 * Class GetAllFarmersTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllFarmersTask extends Task
{

    protected $repository;

    public function __construct(FarmerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(Array $eager = [])
    {
        $this->eagerLoading($this->repository, $eager);

        return $this->repository->paginate();
    }
}
