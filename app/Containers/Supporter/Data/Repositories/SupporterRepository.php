<?php

namespace App\Containers\Supporter\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class SupporterRepository
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class SupporterRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'name' => 'like',
        'path' => 'like',
    ];

}
