<?php

namespace App\Containers\Tree\Tasks;

use App\Containers\Tree\Data\Repositories\TreeRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class FindTreeByIdentifierTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindTreeByIdentifierTask extends Task
{

    protected $repository;

    /**
     * FindTreeByIdentifierTask constructor.
     * @param TreeRepository $repository
     */
    public function __construct(TreeRepository $repository)
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
            return $this->repository->findWhere(['identifier' => $id])->first();
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
