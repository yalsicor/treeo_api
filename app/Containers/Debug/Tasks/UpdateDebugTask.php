<?php

namespace App\Containers\Debug\Tasks;

use App\Containers\Debug\Data\Repositories\DebugRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class UpdateDebugTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdateDebugTask extends Task
{

    protected $repository;

    /**
     * UpdateDebugTask constructor.
     * @param DebugRepository $repository
     */
    public function __construct(DebugRepository $repository)
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
