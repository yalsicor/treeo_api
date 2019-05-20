<?php

namespace App\Containers\Species\Tasks;

use App\Containers\Species\Data\Repositories\SpeciesRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class FindSpeciesByIdTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindSpeciesByIdTask extends Task
{

    protected $repository;

    public function __construct(SpeciesRepository $repository)
    {
        $this->repository = $repository;
    }

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
