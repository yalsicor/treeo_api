<?php

namespace App\Containers\Debug\Tasks;

use App\Containers\Debug\Data\Repositories\DebugRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class CreateDebugTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateDebugTask extends Task
{

    protected $repository;

    /**
     * CreateDebugTask constructor.
     * @param DebugRepository $repository
     */
    public function __construct(DebugRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
