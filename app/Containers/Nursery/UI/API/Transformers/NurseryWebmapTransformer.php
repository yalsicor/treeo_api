<?php

namespace App\Containers\Nursery\UI\API\Transformers;

use App\Containers\Media\UI\API\Transformers\AlbumTransformer;
use App\Containers\Nursery\Models\Nursery;
use App\Ship\Parents\Transformers\Transformer;

/**
 * Class NurseryWebmapTransformer
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class NurseryWebmapTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [
        'album',
    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    /**
     * @param Nursery $entity
     *
     * @return array
     */
    public function transform(Nursery $entity)
    {
        $response = [
            'id'            => $entity->getHashedKey(),
            'owner'         => $entity->owner,
            'point_geo'     => optional($entity->point)->point,
//            'album'         => optional($entity->album)->pluck('file'),
            'photo'         => optional($entity->cover)->file,
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
