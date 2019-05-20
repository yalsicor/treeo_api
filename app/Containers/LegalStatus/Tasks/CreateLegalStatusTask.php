<?php

namespace App\Containers\LegalStatus\Tasks;

use App\Containers\LegalStatus\Data\Repositories\LegalStatusRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class CreateLegalStatusTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateLegalStatusTask extends Task
{

    protected $repository;

    public function __construct(LegalStatusRepository $repository)
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
