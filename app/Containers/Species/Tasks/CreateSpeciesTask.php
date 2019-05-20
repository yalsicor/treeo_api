<?php

namespace App\Containers\Species\Tasks;

use App\Containers\Species\Data\Repositories\SpeciesRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class CreateSpeciesTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateSpeciesTask extends Task
{

    protected $repository;

    public function __construct(SpeciesRepository $repository)
    {
        $this->repository = $repository;
    }

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
