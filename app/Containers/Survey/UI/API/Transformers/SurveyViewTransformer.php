<?php

namespace App\Containers\Survey\UI\API\Transformers;

use App\Containers\Survey\Models\SurveyView;
use App\Ship\Parents\Transformers\Transformer;

/**
 * Class SurveyViewTransformer
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class SurveyViewTransformer extends Transformer
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
     * @param SurveyView $entity
     *
     * @return array
     */
    public function transform(SurveyView $entity)
    {
        $response = [
            'object'        => 'SurveyView',
            'id'            => $entity->identifier,
            'plot_id'       => $entity->plot_id,
            'farmer_id'     => $entity->farmer_id,
            'farmer_name'   => $entity->farmer_name,
            'project_name'  => $entity->project_name,
            'status_id'     => $entity->getHashedKey('status_id'),
            'date_start'    => $entity->date_start,
            'date_end'      => $entity->date_end,
            'notes'         => $entity->notes,
            'treecount'     => $entity->treecount,
            'dbh_mean'      => $entity->dbh_mean,
            'height_mean'   => $entity->height_mean,
            'tree_volume'   => $entity->tree_volume,
            'value_ird'     => $entity->value_ird,
            'value_usd'     => $entity->value_usd,
            'trees_per_ha'  => $entity->trees_per_ha,
            'created_at'    => $entity->created_at,
            'updated_at'    => $entity->updated_at,
        ];

        return $response;
    }
}
