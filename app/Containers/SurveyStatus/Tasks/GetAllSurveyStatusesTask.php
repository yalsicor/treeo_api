<?php

namespace App\Containers\SurveyStatus\Tasks;

use App\Containers\SurveyStatus\Data\Repositories\SurveyStatusRepository;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Traits\HasQueryCriteriaTrait;

/**
 * Class GetAllSurveyStatusesTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllSurveyStatusesTask extends Task
{
    use HasQueryCriteriaTrait;

    protected $repository;

    /**
     * GetAllSurveyStatusesTask constructor.
     * @param SurveyStatusRepository $repository
     */
    public function __construct(SurveyStatusRepository $repository)
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
