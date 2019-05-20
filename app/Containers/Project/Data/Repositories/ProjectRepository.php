<?php

namespace App\Containers\Project\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class ProjectRepository
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class ProjectRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'name' => 'like',
        'created_at',
        'updated_at',
    ];

}
