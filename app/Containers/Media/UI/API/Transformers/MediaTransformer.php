<?php

namespace App\Containers\Media\UI\API\Transformers;

use App\Containers\Media\Models\Media;
use App\Ship\Parents\Transformers\Transformer;

class MediaTransformer extends Transformer
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
     * @return array
     */
    public function transform(Media $entity)
    {
        $response = [

            'object' => 'Media',
            'id' => $entity->getHashedKey(),
            'title' => $entity->title,
            'file' => $entity->file,
            'ext' => $entity->ext,
            'description' => $entity->description,
            'alt' => $entity->alt,
            'filename' => $entity->filename,
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,
        ];

        return $response;
    }
}
