<?php

namespace App\Containers\Survey\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class SurveyViewRepository
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class SurveyViewRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'identifier' => '=',
        'date_start' => '=',
        'date_end' => '=',
        'plot_id' => '=',
        'notes' => '=',
        'status_id' => '=',
        'created_at' => '=',
        'updated_at' => '=',
        'treecount' => '=',
        'dbh_mean' => '=',
        'height_mean' => '=',
        'tree_volume' => '=',
        'value_ird' => '=',
        'value_usd' => '=',
        'trees_per_ha' => '=',
        'farmer_id'     => '=',
        'farmer_name'   => '=',
        'project_name'  => '=',
    ];

}
