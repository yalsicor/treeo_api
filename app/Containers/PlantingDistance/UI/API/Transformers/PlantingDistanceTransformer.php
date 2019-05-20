<?php

namespace App\Containers\PlantingDistance\UI\API\Transformers;

use App\Containers\PlantingDistance\Models\PlantingDistance;
use App\Ship\Parents\Transformers\Transformer;

/**
 * Class PlantingDistanceTransformer
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class PlantingDistanceTransformer extends Transformer
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
     * @param PlantingDistance $entity
     *
     * @return array
     */
    public function transform(PlantingDistance $entity)
    {
        $response = [
            'object'        => 'PlantingDistance',
            'id'            => $entity->getHashedKey(),
            'name'          => $entity->name,
            'created_at'    => $entity->created_at,
            'updated_at'    => $entity->updated_at,
        ];

        return $response;
    }
}
