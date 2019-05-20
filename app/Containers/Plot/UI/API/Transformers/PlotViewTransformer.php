<?php

namespace App\Containers\Plot\UI\API\Transformers;

use App\Containers\Plot\Models\PlotView;
use App\Ship\Parents\Transformers\Transformer;

/**
 * Class PlotViewTransformer
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class PlotViewTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    /**
     * @param PlotView $entity
     *
     * @return array
     */
    public function transform(PlotView $entity)
    {
        $response = [
            'object'                        => 'PlotView',
            'id'                            => $entity->identifier,
            'farmer_id'                     => $entity->farmer_id,
            'polygon_id'                    => $entity->getHashedKey('polygon_id'),
            'species_id'                    => $entity->getHashedKey('species_id'),
            'soil_type_id'                  => $entity->getHashedKey('soil_type_id'),
            'legal_status_id'               => $entity->getHashedKey('legal_status_id'),
            'village_id'                    => $entity->getHashedKey('village_id'),
            'point_id'                      => $entity->getHashedKey('point_id'),
            'planting_distance_id'          => $entity->getHashedKey('planting_distance_id'),
            'supporter_id'                  => $entity->getHashedKey('supporter_id'),
            'nursery_id'                    => $entity->getHashedKey('nursery_id'),
            'field_coordinator_id'          => $entity->getHashedKey('field_coordinator_id'),
            'planting_date'                 => $entity->planting_date,
            'video_url'                     => $entity->video_url,
            'neighbors'                     => $entity->neighbors,
            'landscape_features'            => $entity->landscape_features,
            'general_conditions'            => $entity->general_conditions,
            'fire_fighting'                 => $entity->fire_fighting,
            'active'                        => $entity->active,
            'sample'                        => $entity->sample,
            'plants_planted'                => $entity->plants_planted,
            'import_id'                     => $entity->import_id,
            'created_at'                    => $entity->created_at,
            'updated_at'                    => $entity->updated_at,
            'deleted_at'                    => $entity->deleted_at,
            'farmer'                        => $entity->farmer,
            'project'                       => $entity->project,
            'area_m2'                       => $entity->area_m2,
            'species'                       => $entity->species,
            'survey_count'                  => $entity->survey_count,
            'latest_survey_treecount'       => $entity->latest_survey_treecount,
            'latest_survey_date'            => $entity->latest_survey_date,
            'latest_survey_dbh_mean'        => $entity->latest_survey_dbh_mean,
            'latest_survey_height_mean'     => $entity->latest_survey_height_mean,
            'trees_per_ha'                  => $entity->trees_per_ha,
            'latest_survey_tree_volume'     => $entity->latest_survey_tree_volume,
            'latest_survey_value_ird'       => $entity->latest_survey_value_ird,
            'latest_survey_value_usd'       => $entity->latest_survey_value_usd,
            'soil_type'                     => $entity->soil_type,
            'legal_status'                  => $entity->legal_status,
            'village'                       => $entity->village,
            'district'                      => $entity->district,
            'planting_distance'             => $entity->planting_distance,
            'supporter'                     => $entity->supporter,
            'nursery'                       => $entity->nursery,
            'field_coordinator'             => $entity->field_coordinator,
        ];

        return $response;
    }
}
