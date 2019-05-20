<?php

namespace App\Containers\Village\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class VillageRepository
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class VillageRepository extends Repository
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
