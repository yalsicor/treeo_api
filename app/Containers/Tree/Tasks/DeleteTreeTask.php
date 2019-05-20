<?php

namespace App\Containers\Tree\Tasks;

use App\Containers\Tree\Data\Repositories\TreeRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class DeleteTreeTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeleteTreeTask extends Task
{

    protected $repository;

    /**
     * DeleteTreeTask constructor.
     * @param TreeRepository $repository
     */
    public function __construct(TreeRepository $repository)
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
