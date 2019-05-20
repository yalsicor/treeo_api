<?php

namespace App\Containers\SurveyStatus\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class SurveyStatusRepository
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class SurveyStatusRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'name' => 'like',
    ];

}
