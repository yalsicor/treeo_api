<?php

namespace App\Containers\Species\Tasks;

use App\Containers\Species\Data\Repositories\SpeciesRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class UpdateSpeciesTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdateSpeciesTask extends Task
{

    protected $repository;

    public function __construct(SpeciesRepository $repository)
    {
        $this->repository = $repository;
    }

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
