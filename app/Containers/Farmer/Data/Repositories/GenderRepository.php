<?php

namespace App\Containers\Farmer\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class GenderRepository
 *
 *  @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GenderRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id'    => '=',
        'name'  => 'like',
        'created_at',
        'updated_at',
    ];

}
