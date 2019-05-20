<?php

namespace App\Containers\Supporter\Tasks;

use App\Containers\Supporter\Data\Repositories\SupporterRepository;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Traits\HasQueryCriteriaTrait;

/**
 * Class GetAllSupportersTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllSupportersTask extends Task
{
    use HasQueryCriteriaTrait;

    protected $repository;

    /**
     * GetAllSupportersTask constructor.
     * @param SupporterRepository $repository
     */
    public function __construct(SupporterRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return mixed
     */
    public function run()
    {
        return $this->repository->paginate();
    }
}
