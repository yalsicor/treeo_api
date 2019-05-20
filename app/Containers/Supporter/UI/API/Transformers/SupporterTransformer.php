<?php

namespace App\Containers\Supporter\UI\API\Transformers;

use App\Containers\Supporter\Models\Supporter;
use App\Ship\Parents\Transformers\Transformer;

/**
 * Class SupporterTransformer
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class SupporterTransformer extends Transformer
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
     * @param Supporter $entity
     *
     * @return array
     */
    public function transform(Supporter $entity)
    {
        $response = [
            'object'        => 'Supporter',
            'id'            => $entity->getHashedKey(),
            'name'          => $entity->name,
            'path'          => $entity->path,
            'image'         => optional($entity->logo)->file,
            'created_at'    => $entity->created_at,
            'updated_at'    => $entity->updated_at,

        ];

        return $response;
    }
}
