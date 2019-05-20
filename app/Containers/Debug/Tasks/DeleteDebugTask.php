<?php

namespace App\Containers\Debug\Tasks;

use App\Containers\Debug\Data\Repositories\DebugRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class DeleteDebugTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeleteDebugTask extends Task
{

    protected $repository;

    /**
     * DeleteDebugTask constructor.
     * @param DebugRepository $repository
     */
    public function __construct(DebugRepository $repository)
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
