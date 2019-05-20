<?php

namespace App\Containers\Tree\Tasks;

use App\Containers\Tree\Data\Repositories\TreeRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class UpdateTreeTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdateTreeTask extends Task
{

    protected $repository;

    /**
     * UpdateTreeTask constructor.
     * @param TreeRepository $repository
     */
    public function __construct(TreeRepository $repository)
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
