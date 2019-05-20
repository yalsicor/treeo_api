<?php

namespace App\Containers\Hotspot\UI\API\Transformers;

use App\Containers\Hotspot\Models\Hotspot;
use App\Containers\Media\UI\API\Transformers\AlbumTransformer;
use App\Ship\Parents\Transformers\Transformer;

/**
 * Class HotspotTransformer
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class HotspotTransformer extends Transformer
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
     * @param Hotspot $entity
     *
     * @return array
     */
    public function transform(Hotspot $entity)
    {
        $response = [
            'object'        => 'Hotspot',
            'id'            => $entity->getHashedKey(),
            'description'   => $entity->description,
            'point'         => $entity->point,
            'photo'         => optional($entity->photo)->file,
            'name_de'       => $entity->name_de,
            'name_en'       => $entity->name_en,
            'name_ms'       => $entity->name_ms,
            'link_de'       => $entity->link_de,
            'link_en'       => $entity->link_en,
            'link_ms'       => $entity->link_ms,
            'created_at'    => $entity->created_at,
            'updated_at'    => $entity->updated_at,

        ];

        return $response;
    }

    /**
     * @param Hotspot $entity
     * @return \League\Fractal\Resource\Collection
     */
    public function includeAlbum(Hotspot $entity)
    {
        return $this->collection($entity->album, new AlbumTransformer());
    }
}
