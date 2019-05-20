<?php

namespace App\Containers\LegalStatus\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class LegalStatusRepository
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class LegalStatusRepository extends Repository
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
