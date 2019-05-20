<?php

namespace App\Containers\Survey\Tasks;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Plot\Data\Repositories\PlotRepository;
use App\Containers\Plot\Models\Plot;
use App\Containers\Survey\Data\Criterias\PlotCriteria;
use App\Containers\Survey\Data\Criterias\SurveysByUserCriteria;
use App\Containers\Survey\Data\Repositories\SurveyRepository;
use App\Containers\User\Models\User;
use App\Ship\Parents\Tasks\Task;

/**
 * Class GetAllSurveysTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllSurveysTask extends Task
{

    protected $repository;

    /**
     * @var PlotRepository
     */
    private $plot_repository;

    /**
     * GetAllSurveysTask constructor.
     * @param SurveyRepository $repository
     * @param PlotRepository $plot_repository
     */
    public function __construct(
        SurveyRepository $repository,
        PlotRepository $plot_repository
    ){
        $this->repository = $repository;
        $this->plot_repository = $plot_repository;
    }

    /**
     * @param array $eager
     * @return mixed
     */
    public function run(Array $eager = [])
    {
        $this->eagerLoading($this->repository, $eager);

        return $this->repository->paginate();
    }

    /**
     * @param User $user
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function own(User $user)
    {
        $this->repository->pushCriteria(new SurveysByUserCriteria($user));
    }

    /**
     * @param $plot_id
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function plot($plot_id)
    {
        if ($plot_id) {
            //get plot
            $plot = $this->plot_repository->findWhere(['identifier' => $plot_id])->first();
            $this->repository->pushCriteria(new PlotCriteria($plot->id));
        }
    }
}
