<?php

namespace App\Containers\Geo\Data\Criterias;

use App\Ship\Parents\Criterias\Criteria;
use Prettus\Repository\Contracts\RepositoryInterface;

class HasPolygonCriteria extends Criteria
{

    public function apply($model, RepositoryInterface $repository)
    {
        return $model->whereNotNull('polygon_id');
    }
}