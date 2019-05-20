<?php

namespace App\Containers\Species\UI\API\Transformers;

use App\Containers\Species\Models\Species;
use App\Ship\Parents\Transformers\Transformer;

/**
 * Class SpeciesTransformer
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class SpeciesTransformer extends Transformer
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
     * @param Species $entity
     *
     * @return array
     */
    public function transform(Species $entity)
    {
        $response = [
            'object'        => 'Species',
            'id'            => $entity->getHashedKey(),
            'name'          => $entity->name,
            'latin_name'    => $entity->latin_name,
            'created_at'    => $entity->created_at,
            'updated_at'    => $entity->updated_at,
        ];

        return $response;
    }
}
