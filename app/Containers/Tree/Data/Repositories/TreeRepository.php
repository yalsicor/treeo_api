<?php

namespace App\Containers\Tree\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class TreeRepository
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class TreeRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'fbh_cm',
        'height_m',
        'health',
        'comment',
        'timestamp',
        'amigo_id',
    ];

}
