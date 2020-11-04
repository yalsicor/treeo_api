<?php

namespace App\Ship\Parents\Repositories;

use Apiato\Core\Abstracts\Repositories\Repository as AbstractRepository;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class Repository.
 *
 * @author  Mahmoud Zalt <mahmoud@zalt.me>
 */
abstract class Repository extends AbstractRepository
{

    /**
     * Boot up the repository, pushing criteria.
     */
    public function boot()
    {
        parent::boot();
    }

    public function chunk($limit, callable $callback)
    {
        $this->applyCriteria();
        $this->applyScope();

        if($this->model instanceof Builder) {
            $modelQuery = $this->model->getQuery();
        } else {
            $modelQuery = $this->model;
        }

        $underlyingQueryBuilder = $modelQuery;
        if (empty($underlyingQueryBuilder->orders) && empty($underlyingQueryBuilder->unionOrders)) {
            $this->model->orderBy($modelQuery->getModel()->getQualifiedKeyName(), 'asc');
        }

        $presenterFunction = \Closure::bind(function($results,$page) use (&$callback) {
            return $callback($this->parserResult($results), $page);
        }, $this);

        return $this->model->chunk($limit, $presenterFunction);
    }

}
