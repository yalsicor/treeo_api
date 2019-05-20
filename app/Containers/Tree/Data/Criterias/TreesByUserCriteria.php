<?php

namespace App\Containers\Tree\Data\Criterias;

use App\Containers\Survey\Models\Survey;
use App\Containers\User\Models\User;
use App\Ship\Parents\Criterias\Criteria;
use Prettus\Repository\Contracts\RepositoryInterface as PrettusRepositoryInterface;

/**
 * Class TreesByUserCriteria
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class TreesByUserCriteria extends Criteria
{
    /**
     * @var User
     */
    private $user;

    /**
     * TreesByUserCriteria constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @param                                                   $model
     * @param \Prettus\Repository\Contracts\RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, PrettusRepositoryInterface $repository)
    {
        $plots = $this->user->farmer->plots;

        $surveys = Survey::whereIn('plot_id', $plots->pluck('id'));

        return $model->whereIn('survey_id', $surveys->pluck('id'));
    }
}
