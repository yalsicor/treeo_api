<?php

namespace App\Containers\Hotspot\Tasks;

use App\Containers\Hotspot\Data\Repositories\HotspotRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class UpdateHotspotTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdateHotspotTask extends Task
{

    protected $repository;

    /**
     * UpdateHotspotTask constructor.
     * @param HotspotRepository $repository
     */
    public function __construct(HotspotRepository $repository)
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
