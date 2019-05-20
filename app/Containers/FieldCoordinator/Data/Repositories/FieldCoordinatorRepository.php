<?php

namespace App\Containers\FieldCoordinator\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class FieldCoordinatorRepository
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FieldCoordinatorRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'name' => 'like',
    ];

}
