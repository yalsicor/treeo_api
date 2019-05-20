<?php

namespace App\Containers\SoilType\UI\API\Transformers;

use App\Containers\SoilType\Models\SoilType;
use App\Ship\Parents\Transformers\Transformer;

/**
 * Class SoilTypeTransformer
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class SoilTypeTransformer extends Transformer
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
     * @param SoilType $entity
     *
     * @return array
     */
    public function transform(SoilType $entity)
    {
        $response = [
            'object'        => 'SoilType',
            'id'            => $entity->getHashedKey(),
            'name'          => $entity->name,
            'created_at'    => $entity->created_at,
            'updated_at'    => $entity->updated_at,
        ];

        return $response;
    }
}
