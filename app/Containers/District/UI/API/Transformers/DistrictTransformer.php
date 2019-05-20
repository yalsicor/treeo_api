<?php

namespace App\Containers\District\UI\API\Transformers;

use App\Containers\District\Models\District;
use App\Ship\Parents\Transformers\Transformer;

/**
 * Class DistrictTransformer
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DistrictTransformer extends Transformer
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
     * @param District $entity
     *
     * @return array
     */
    public function transform(District $entity)
    {
        $response = [
            'object'        => 'District',
            'id'            => $entity->getHashedKey(),
            'name'          => $entity->name,
            'created_at'    => $entity->created_at,
            'updated_at'    => $entity->updated_at,
        ];

        return $response;
    }
}
