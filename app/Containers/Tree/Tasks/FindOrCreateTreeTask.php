<?php

namespace App\Containers\Tree\Tasks;

use App\Containers\Tree\Data\Repositories\TreeRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class FindOrCreateTreeTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindOrCreateTreeTask extends Task
{

    protected $repository;

    /**
     * FindOrCreateTreeTask constructor.
     * @param TreeRepository $repository
     */
    public function __construct(TreeRepository $repository)
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

            //try to find duplicate in db
            $tree = $this->repository->findWhere([
                'survey_id'  => $data['survey_id'],
                'timestamp'  => $data['timestamp'],
                'dbh_cm'     => $data['dbh_cm'],
            ])->first();
            if ($tree) return $tree;

            //identifier
            $data['identifier'] = $this->repository->makeModel()->makeIdentifier();
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw $exception;
            throw new CreateResourceFailedException();
        }
    }
}
