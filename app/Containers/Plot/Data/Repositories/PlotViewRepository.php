<?php

namespace App\Containers\Plot\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class PlotViewRepository
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class PlotViewRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'farmer_id' => '=',
        'polygon_id' => '=',
        'species_id' => '=',
        'soil_type_id' => '=',
        'legal_status_id' => '=',
        'village_id' => '=',
        'point_id' => '=',
        'planting_distance_id' => '=',
        'supporter_id' => '=',
        'nursery_id' => '=',
        'planting_date' => '=',
        'video_url' => '=',
        'identifier' => '=',
        'neighbors' => '=',
        'landscape_features' => '=',
        'general_conditions' => '=',
        'fire_fighting' => '=',
        'active' => '=',
        'sample' => '=',
        'plants_planted' => '=',
        'import_id' => '=',
        'created_at' => '=',
        'updated_at' => '=',
        'deleted_at' => '=',
        'farmer' => '=',
        'project' => '=',
        'area_m2' => '=',
        'species' => '=',
        'survey_count' => '=',
        'latest_survey_treecount' => '=',
        'latest_survey_date' => '=',
        'latest_survey_dbh_mean' => '=',
        'latest_survey_height_mean' => '=',
        'trees_per_ha' => '=',
        'latest_survey_tree_volume' => '=',
        'latest_survey_value_ird' => '=',
        'latest_survey_value_usd' => '=',
        'soil_type' => '=',
        'legal_status' => '=',
        'village' => '=',
        'district' => '=',
        'planting_distance' => '=',
        'supporter' => '=',
        'nursery' => '=',
        'field_coordinator' => '=',
    ];

}
