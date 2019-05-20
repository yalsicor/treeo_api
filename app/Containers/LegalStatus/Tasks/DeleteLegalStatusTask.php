<?php

namespace App\Containers\LegalStatus\Tasks;

use App\Containers\LegalStatus\Data\Repositories\LegalStatusRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class DeleteLegalStatusTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeleteLegalStatusTask extends Task
{

    protected $repository;

    public function __construct(LegalStatusRepository $repository)
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
