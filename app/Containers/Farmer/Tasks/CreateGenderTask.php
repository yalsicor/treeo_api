<?php

namespace App\Containers\Farmer\Tasks;

use App\Containers\Farmer\Data\Repositories\GenderRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class CreateGenderTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateGenderTask extends Task
{

    protected $repository;

    public function __construct(GenderRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function run(string $name)
    {
        try {
            return $this->repository->create([
                'name' => $name,
            ]);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
