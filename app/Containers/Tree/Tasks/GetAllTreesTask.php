<?php

namespace App\Containers\Tree\Tasks;

use App\Containers\Survey\Data\Repositories\SurveyRepository;
use App\Containers\Tree\Data\Criterias\SurveyCriteria;
use App\Containers\Tree\Data\Criterias\TreesByUserCriteria;
use App\Containers\Tree\Data\Repositories\TreeRepository;
use App\Containers\User\Models\User;
use App\Ship\Parents\Tasks\Task;

/**
 * Class GetAllTreesTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllTreesTask extends Task
{

    protected $repository;
    /**
     * @var SurveyRepository
     */
    private $surveyRepository;

    /**
     * GetAllTreesTask constructor.
     * @param TreeRepository $repository
     * @param SurveyRepository $surveyRepository
     */
    public function __construct(
        TreeRepository $repository,
        SurveyRepository $surveyRepository
    )
    {
        $this->repository = $repository;
        $this->surveyRepository = $surveyRepository;
    }

    /**
     * @return mixed
     */
    public function run()
    {
        return $this->repository->paginate();
    }

    /**
     * @param User $user
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function own(User $user)
    {
        $this->repository->pushCriteria(new TreesByUserCriteria($user));
    }

    /**
     * @param $survey_id
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function survey($survey_id)
    {
        if ($survey_id) {
            //survey
            $survey = $this->surveyRepository->findWhere(['identifier' => $survey_id])->first();
            $this->repository->pushCriteria(new SurveyCriteria($survey->id));
        }
    }
}
