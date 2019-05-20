<?php

namespace App\Containers\Debug\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class DebugRepository
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DebugRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
    ];

}
