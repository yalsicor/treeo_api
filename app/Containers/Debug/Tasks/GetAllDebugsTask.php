<?php

namespace App\Containers\Debug\Tasks;

use App\Containers\Debug\Data\Repositories\DebugRepository;
use App\Ship\Parents\Tasks\Task;

/**
 * Class GetAllDebugsTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllDebugsTask extends Task
{

    protected $repository;

    /**
     * GetAllDebugsTask constructor.
     * @param DebugRepository $repository
     */
    public function __construct(DebugRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return mixed
     */
    public function run()
    {
        return $this->repository->paginate();
    }
}
