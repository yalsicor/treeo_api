<?php

namespace App\Containers\District\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class DistrictRepository
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DistrictRepository extends Repository
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
