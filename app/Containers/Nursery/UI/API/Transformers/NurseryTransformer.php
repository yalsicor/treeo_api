<?php

namespace App\Containers\Nursery\UI\API\Transformers;

use App\Containers\Media\UI\API\Transformers\AlbumTransformer;
use App\Containers\Nursery\Models\Nursery;
use App\Ship\Parents\Transformers\Transformer;

/**
 * Class NurseryTransformer
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class NurseryTransformer extends Transformer
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
        'album',
    ];

    /**
     * @param Nursery $entity
     *
     * @return array
     */
    public function transform(Nursery $entity)
    {
        $response = [
            'object'        => 'Nursery',
            'id'            => $entity->getHashedKey(),
            'owner'         => $entity->owner,
            'geo_point'     => $entity->point,
            'cover'         => optional($entity->cover)->file,
            'created_at'    => $entity->created_at,
            'updated_at'    => $entity->updated_at,
        ];

        return $response;
    }

    /**
     * @param Nursery $entity
     * @return \League\Fractal\Resource\Collection
     */
    public function includeAlbum(Nursery $entity)
    {
        return $this->collection($entity->album, new AlbumTransformer());
    }
}
