<?php

namespace App\Ship\Parents\Tasks;

use Apiato\Core\Abstracts\Tasks\Task as AbstractTask;
use App\Ship\Parents\Repositories\Repository;

/**
 * Class Task.
 *
 * @author  Mahmoud Zalt <mahmoud@zalt.me>
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
abstract class Task extends AbstractTask
{
    /**
     * @param Repository $repository
     * @param array $eager
     */
    public function eagerLoading(Repository $repository, Array $eager = [])
    {
        //get related model instance
        $model = $repository->model();
        $model = new $model;
        //get only first layer of eager loading
        $eager = array_map(function ($v) {
            return explode('.', $v)[0];
        }, $eager);
        //filter with available model relations
        $eager = array_intersect(array_unique($eager), $model->relationships);

        if (!empty($eager)) $repository->with($eager);
    }
}
