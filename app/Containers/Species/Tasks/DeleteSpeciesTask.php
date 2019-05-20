<?php

namespace App\Containers\Species\Tasks;

use App\Containers\Species\Data\Repositories\SpeciesRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class DeleteSpeciesTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeleteSpeciesTask extends Task
{

    protected $repository;

    public function __construct(SpeciesRepository $repository)
    {
        $this->repository = $repository;
    }

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
