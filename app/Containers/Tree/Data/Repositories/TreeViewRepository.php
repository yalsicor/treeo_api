<?php

namespace App\Containers\Tree\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class TreeViewRepository
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class TreeViewRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'survey_id' => '=',
        'species_id' => '=',
        'dbh_cm' => '=',
        'height_m' => '=',
        'health' => '=',
        'comment' => '=',
        'identifier' => '=',
        'point_id' => '=',
        'timestamp' => '=',
        'image_id' => '=',
        'import_id' => '=',
        'created_at' => '=',
        'updated_at' => '=',
        'image' => '=',
        'species' => '=',
        'volume' => '=',
        'plot_id'       => '=',
        'farmer_id'     => '=',
        'farmer_name'   => '=',
        'project_name'  => '=',
    ];

}
