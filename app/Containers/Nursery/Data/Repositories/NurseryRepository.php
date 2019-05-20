<?php

namespace App\Containers\Nursery\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class NurseryRepository
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class NurseryRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'owner' => 'like',
        'created_at',
        'updated_at',
    ];

}
