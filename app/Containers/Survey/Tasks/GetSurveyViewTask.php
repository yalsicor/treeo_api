<?php

namespace App\Containers\Survey\Tasks;

use App\Containers\Survey\Data\Repositories\SurveyViewRepository;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Traits\HasQueryCriteriaTrait;

/**
 * Class GetSurveyViewTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetSurveyViewTask extends Task
{
    use HasQueryCriteriaTrait;

    protected $repository;

    /**
     * GetAllSurveysTask constructor.
     * @param SurveyViewRepository $repository
     */
    public function __construct(SurveyViewRepository $repository)
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
