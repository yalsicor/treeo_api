<?php

namespace App\Containers\Hotspot\Tasks;

use App\Containers\Hotspot\Data\Repositories\HotspotRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class DeleteHotspotTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeleteHotspotTask extends Task
{

    protected $repository;

    /**
     * DeleteHotspotTask constructor.
     * @param HotspotRepository $repository
     */
    public function __construct(HotspotRepository $repository)
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
