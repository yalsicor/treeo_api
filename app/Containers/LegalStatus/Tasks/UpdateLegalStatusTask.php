<?php

namespace App\Containers\LegalStatus\Tasks;

use App\Containers\LegalStatus\Data\Repositories\LegalStatusRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class UpdateLegalStatusTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdateLegalStatusTask extends Task
{

    protected $repository;

    public function __construct(LegalStatusRepository $repository)
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
