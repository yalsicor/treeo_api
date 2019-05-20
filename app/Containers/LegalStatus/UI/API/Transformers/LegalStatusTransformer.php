<?php

namespace App\Containers\LegalStatus\UI\API\Transformers;

use App\Containers\LegalStatus\Models\LegalStatus;
use App\Ship\Parents\Transformers\Transformer;

/**
 * Class LegalStatusTransformer
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class LegalStatusTransformer extends Transformer
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
     * @param LegalStatus $entity
     *
     * @return array
     */
    public function transform(LegalStatus $entity)
    {
        $response = [
            'object'        => 'LegalStatus',
            'id'            => $entity->getHashedKey(),
            'name'          => $entity->name,
            'created_at'    => $entity->created_at,
            'updated_at'    => $entity->updated_at,
        ];

        return $response;
    }
}
