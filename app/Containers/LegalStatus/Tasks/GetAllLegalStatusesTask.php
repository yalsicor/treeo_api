<?php

namespace App\Containers\LegalStatus\Tasks;

use App\Containers\LegalStatus\Data\Repositories\LegalStatusRepository;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Traits\HasQueryCriteriaTrait;

/**
 * Class GetAllLegalStatusesTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllLegalStatusesTask extends Task
{
    use HasQueryCriteriaTrait;

    protected $repository;

    public function __construct(LegalStatusRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
