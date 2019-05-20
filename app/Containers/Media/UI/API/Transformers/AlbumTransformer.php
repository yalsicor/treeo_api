<?php

namespace App\Containers\Media\UI\API\Transformers;

use App\Containers\Media\Models\Media;
use App\Ship\Parents\Transformers\Transformer;

/**
 * Class AlbumTransformer
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class AlbumTransformer extends Transformer
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
        'dimensions',
    ];

    /**
     * @param Media $entity
     *
     * @return array
     */
    public function transform(Media $entity)
    {
        $response = [
            'object'        => 'Media',
            'id'            => $entity->getHashedKey(),
            'file'          => $entity->file,
            'caption'       => ($album = $entity->album)?$album->caption:null,
        ];

        return $response;
    }

    /**
     * @param Media $entity
     * @return \League\Fractal\Resource\Item
     */
    public function includeDimensions(Media $entity)
    {
        return $this->item($entity->dimensions(), new DimensionsTransformer());
    }
}
