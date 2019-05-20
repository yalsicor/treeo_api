<?php

namespace App\Containers\Survey\Data\Criterias;

use App\Containers\User\Models\User;
use App\Ship\Parents\Criterias\Criteria;
use Illuminate\Support\Collection;
use Prettus\Repository\Contracts\RepositoryInterface as PrettusRepositoryInterface;

/**
 * Class SurveysByUserCriteria
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class SurveysByUserCriteria extends Criteria
{
    /**
     * @var User
     */
    private $user;

    /**
     * SurveysByUserCriteria constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @param $model
     * @param PrettusRepositoryInterface $repository
     * @return Collection
     */
    public function apply($model, PrettusRepositoryInterface $repository)
    {
        $farmer = $this->user->farmer;

        if ($farmer) {
            $plots = $farmer->plots;
            $plot_ids = $plots->pluck('id');
            return $model->whereIn('plot_id', $plot_ids);
        }

        else return new Collection;


    }
}
