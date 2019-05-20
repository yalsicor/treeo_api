<?php

namespace App\Containers\Hotspot\Tasks;

use App\Containers\Hotspot\Data\Repositories\HotspotRepository;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Traits\HasQueryCriteriaTrait;

/**
 * Class GetAllHotspotsTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllHotspotsTask extends Task
{
    use HasQueryCriteriaTrait;

    protected $repository;

    /**
     * GetAllHotspotsTask constructor.
     * @param HotspotRepository $repository
     */
    public function __construct(HotspotRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return mixed
     */
    public function run()
    {
        return $this->repository->paginate();
    }
}
