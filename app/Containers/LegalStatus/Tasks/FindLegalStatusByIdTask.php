<?php

namespace App\Containers\LegalStatus\Tasks;

use App\Containers\LegalStatus\Data\Repositories\LegalStatusRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class FindLegalStatusByIdTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindLegalStatusByIdTask extends Task
{

    protected $repository;

    public function __construct(LegalStatusRepository $repository)
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
