<?php

namespace App\Containers\Hotspot\Tasks;

use App\Containers\Hotspot\Data\Repositories\HotspotRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class FindHotspotByIdTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindHotspotByIdTask extends Task
{

    protected $repository;

    /**
     * FindHotspotByIdTask constructor.
     * @param HotspotRepository $repository
     */
    public function __construct(HotspotRepository $repository)
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
