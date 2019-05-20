<?php

namespace App\Containers\Plot\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class PlotRepository
 */
class PlotRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id'                    => '=',
        'identifier'            => 'like',
        'planting_date'         => '=',
        'video_url'             => 'like',
        'neighbours'            => '=',
        'landscape_features'    => 'like',
        'general_conditions'    => 'like',
        'fire_fighting'         => 'like',
        'active'                => '=',
        'sample'                => '=',
        'plants_planted'        => '=',

        'farmer_id'             => '=',
        'polygon_id'            => '=',
        'species_id'            => '=',
        'soil_type_id'          => '=',
        'legal_status_id'       => '=',
        'village_id'            => '=',
        'point_id'              => '=',
        'planting_distance_id'  => '=',
        'supporter_id'          => '=',
        'nursery_id'            => '=',
        'neighbors'             => '=',
        'import_id'             => '=',
        'created_at'            => '=',
        'updated_at'            => '=',
    ];

}
