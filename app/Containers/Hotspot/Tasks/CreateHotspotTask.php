<?php

namespace App\Containers\Hotspot\Tasks;

use App\Containers\Hotspot\Data\Repositories\HotspotRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class CreateHotspotTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateHotspotTask extends Task
{

    protected $repository;

    /**
     * CreateHotspotTask constructor.
     * @param HotspotRepository $repository
     */
    public function __construct(HotspotRepository $repository)
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
