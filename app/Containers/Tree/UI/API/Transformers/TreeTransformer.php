<?php

namespace App\Containers\Tree\UI\API\Transformers;

use App\Containers\Tree\Models\Tree;
use App\Ship\Parents\Transformers\Transformer;

/**
 * Class TreeTransformer
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class TreeTransformer extends Transformer
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
     * @param Tree $entity
     *
     * @return array
     */
    public function transform(Tree $entity)
    {
        $response = [
            'object'        => 'Tree',
            'id'            => $entity->identifier,
            'survey_id'     => optional($entity->survey)->identifier,
            'species'       => optional($entity->species)->name,
            'species_id'    => $entity->getHashedKey('species_id'),
            'dbh_cm'        => $entity->dbh_cm,
            'height_m'      => $entity->height_m,
            'height_calculated' => $entity->height_calculated,
            'health'        => $entity->health,
            'comment'       => $entity->comment,
            'timestamp'     => $entity->timestamp,
            'amigo_id'      => $entity->amigo_id,
            'image'         => optional($entity->image)->file,
            'point'         => optional($entity->point)->point,
            'accuracy'      => optional($entity->point)->accuracy,
            'created_at'    => $entity->created_at,
            'updated_at'    => $entity->updated_at,

        ];

        return $response;
    }

}
