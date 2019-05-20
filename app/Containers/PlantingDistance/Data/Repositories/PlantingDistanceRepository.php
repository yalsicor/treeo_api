<?php

namespace App\Containers\PlantingDistance\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class PlantingDistanceRepository
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class PlantingDistanceRepository extends Repository
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
