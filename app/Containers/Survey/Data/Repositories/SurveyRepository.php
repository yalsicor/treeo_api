<?php

namespace App\Containers\Survey\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class SurveyRepository
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class SurveyRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'date_start',
        'date_end',
        'date_import',
        'plot_id',
        'notes',
        'user_created',
        'amigo_id',
        'status_id',
        'treecount',
    ];

}
