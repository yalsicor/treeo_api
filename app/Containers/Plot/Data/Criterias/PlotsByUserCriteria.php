<?php

namespace App\Containers\Plot\Data\Criterias;

use App\Containers\Plot\Models\Plot;
use App\Containers\User\Models\User;
use App\Ship\Parents\Criterias\Criteria;
use Illuminate\Support\Collection;
use Prettus\Repository\Contracts\RepositoryInterface as PrettusRepositoryInterface;

/**
 * Class PlotsByUserCriteria.
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class PlotsByUserCriteria extends Criteria
{
    /**
     * @var User
     */
    private $user;

    /**
     * PlotsByUserCriteria constructor.
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

        if ($farmer) return $model->where('farmer_id', $farmer->id);
        else return null;
    }
}
