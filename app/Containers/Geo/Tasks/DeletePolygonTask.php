<?php

namespace App\Containers\Geo\Tasks;

use App\Containers\Geo\Data\Repositories\PolygonRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class DeletePolygonTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeletePolygonTask extends Task
{

    private $repository;

    /**
     * DeletePolygonTask constructor.
     * @param PolygonRepository $repository
     */
    public function __construct(PolygonRepository $repository)
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
