<?php

namespace App\Containers\Plot\Data\Criterias;

use App\Containers\Plot\Models\Plot;
use App\Containers\User\Models\User;
use App\Ship\Parents\Criterias\Criteria;
use Illuminate\Support\Collection;
use Prettus\Repository\Contracts\RepositoryInterface as PrettusRepositoryInterface;

/**
 * Class ActiveCriteria.
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class ActiveCriteria extends Criteria
{
    /**
     * @param $model
     * @param PrettusRepositoryInterface $repository
     * @return Collection
     */
    public function apply($model, PrettusRepositoryInterface $repository)
    {
        return $model->where('active', true);
    }
}
