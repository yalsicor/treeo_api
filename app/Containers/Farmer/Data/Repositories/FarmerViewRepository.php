<?php

namespace App\Containers\Farmer\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class FarmerViewRepository
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FarmerViewRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id'                        => '=',
        'name'                      => '=',
        'identifier'                => '=',
        'story'                     => '=',
        'children'                  => '=',
        'birthday'                  => '=',
        'photo_id'                  => '=',
        'photo'                     => '=',
        'main_occupation'           => '=',
        'side_occupation'           => '=',
        'spouse_name'               => '=',
        'spouse_birthday'           => '=',
        'spouse_main_occupation'    => '=',
        'spouse_side_occupation'    => '=',
        'family_income_idr'         => '=',
        'address'                   => '=',
        'import_id'                 => '=',
        'user_id'                   => '=',
        'gender_id'                 => '=',
        'project_id'                => '=',
        'project'                   => '=',
        'created_at'                => '=',
        'updated_at'                => '=',
        'gender'                    => '=',
        'email'                     => '=',
    ];

}
