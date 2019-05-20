<?php

namespace App\Containers\Tree\UI\API\Transformers;

use App\Containers\Tree\Models\TreeView;
use App\Ship\Parents\Transformers\Transformer;

/**
 * Class TreeViewTransformer
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class TreeViewTransformer extends Transformer
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
     * @param TreeView $entity
     *
     * @return array
     */
    public function transform(TreeView $entity)
    {
        $response = [
            'object'    => 'TreeView',
            'id'            => $entity->identifier,
            'survey_id'     => $entity->survey_id,
            'species_id'    => $entity->getHashedKey('species_id'),
            'plot_id'       => $entity->plot_id,
            'farmer_id'     => $entity->farmer_id,
            'farmer_name'   => $entity->farmer_name,
            'project_name'  => $entity->project_name,
            'dbh_cm'        => $entity->dbh_cm,
            'height_m'      => $entity->height_m,
            'height_calculated' => $entity->height_calculated,
            'health'        => $entity->health,
            'comment'       => $entity->comment,
            'point_id'      => $entity->getHashedKey('point_id'),
            'timestamp'     => $entity->timestamp,
            'image_id'      => $entity->getHashedKey('image_id'),
            'import_id'     => $entity->import_id,
            'created_at'    => $entity->created_at,
            'updated_at'    => $entity->updated_at,
            'image'         => $entity->image,
            'species'       => $entity->species,
            'volume'        => $entity->volume,
            'point_coords'  => $entity->point_coords,
            'accuracy'      => $entity->accuracy,

        ];

        return $response;
    }
}
