<?php

namespace App\Containers\Debug\UI\API\Transformers;

use App\Containers\Debug\Models\Debug;
use App\Ship\Parents\Transformers\Transformer;

/**
 * Class DebugTransformer
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DebugTransformer extends Transformer
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
     * @param Debug $entity
     *
     * @return array
     */
    public function transform(Debug $entity)
    {
        $response = [
            'object'        => 'Debug',
            'id'            => $entity->getHashedKey(),
            'timestamp'     => $entity->timestamp,
            'data'          => $entity->data,
            'user_id'       => $entity->getHashedKey('user_id'),
            'created_at'    => $entity->created_at,
            'updated_at'    => $entity->updated_at,

        ];

        return $response;
    }
}
