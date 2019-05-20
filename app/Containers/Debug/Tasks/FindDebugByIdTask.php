<?php

namespace App\Containers\Debug\Tasks;

use App\Containers\Debug\Data\Repositories\DebugRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class FindDebugByIdTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindDebugByIdTask extends Task
{

    protected $repository;

    /**
     * FindDebugByIdTask constructor.
     * @param DebugRepository $repository
     */
    public function __construct(DebugRepository $repository)
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
