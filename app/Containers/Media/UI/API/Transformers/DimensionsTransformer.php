<?php

namespace App\Containers\Media\UI\API\Transformers;

use App\Containers\Media\Models\Media;
use App\Ship\Parents\Transformers\Transformer;

class DimensionsTransformer extends Transformer
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
     * @param Media $entity
     *
     * @return array
     */
    public function transform(Media $entity)
    {
        $response = [
            'object'        => 'Dimensions',
            'small_square'  => $entity->small_square,
            'large_square'  => $entity->large_square,
            'thumbnail'     => $entity->thumbnail,
            'small'         => $entity->small,
            'small320'      => $entity->small320,
            'medium'        => $entity->medium,
            'medium640'     => $entity->medium640,
            'medium800'     => $entity->medium800,
            'large'         => $entity->large,
            'large1600'     => $entity->large1600,
            'large2048'     => $entity->large2048,
            'avatar'        => $entity->avatar,
            'original'      => $entity->orig,
        ];

        return $response;
    }
}
