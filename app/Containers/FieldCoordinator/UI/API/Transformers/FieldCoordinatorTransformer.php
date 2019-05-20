<?php

namespace App\Containers\FieldCoordinator\UI\API\Transformers;

use App\Containers\FieldCoordinator\Models\FieldCoordinator;
use App\Ship\Parents\Transformers\Transformer;

/**
 * Class FieldCoordinatorTransformer
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FieldCoordinatorTransformer extends Transformer
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
     * @param FieldCoordinator $entity
     *
     * @return array
     */
    public function transform(FieldCoordinator $entity)
    {
        $response = [
            'object'        => 'FieldCoordinator',
            'id'            => $entity->getHashedKey(),
            'name'          => $entity->name,
            'created_at'    => $entity->created_at,
            'updated_at'    => $entity->updated_at,

        ];

        return $response;
    }
}
