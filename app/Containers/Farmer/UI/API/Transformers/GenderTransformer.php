<?php

namespace App\Containers\Farmer\UI\API\Transformers;

use App\Containers\Farmer\Models\Gender;
use App\Ship\Parents\Transformers\Transformer;

class GenderTransformer extends Transformer
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
     * @param Gender $entity
     *
     * @return array
     */
    public function transform(Gender $entity)
    {
        $response = [
            'object'        => 'Gender',
            'id'            => $entity->getHashedKey(),
            'name'          => $entity->name,
            'created_at'    => $entity->created_at,
            'updated_at'    => $entity->updated_at,
        ];

        return $response;
    }
}
