<?php

namespace App\Containers\Farmer\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class FarmerRepository
 *
 *  @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FarmerRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id'                        => '=',
        'name'                      => 'like',
        'story'                     => 'like',
        'children'                  => '=',
        'birthday'                  => '=',
        'main_occupation'           => 'like',
        'side_occupation'           => 'like',
        'spouse_name'               => 'like',
        'spouse_birthday'           => '=',
        'spouse_main_occupation'    => 'like',
        'spouse_side_occupation'    => 'like',
        'family_income_idr'         => '=',
        'address'                   => 'like',
    ];

}
