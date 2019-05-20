<?php

namespace App\Containers\Species\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class SpeciesRepository
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class SpeciesRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'name' => 'like',
        'latin_name' => 'like',
        'created_at',
        'updated_at',
    ];

}
