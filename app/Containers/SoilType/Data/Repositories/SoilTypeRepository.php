<?php

namespace App\Containers\SoilType\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class SoilTypeRepository
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class SoilTypeRepository extends Repository
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
