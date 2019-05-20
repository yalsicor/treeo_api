<?php

namespace App\Containers\Geo\UI\API\Transformers;

use App\Containers\Geo\Models\Polygon;
use App\Ship\Parents\Transformers\Transformer;

/**
 * Class PolygonTransformer
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class PolygonTransformer extends Transformer
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
     * @param Polygon $entity
     *
     * @return array
     */
    public function transform(Polygon $entity)
    {
        $response = [
            'object'        => 'Polygon',
            'id'            => $entity->getHashedKey(),
            'polygon'       => $entity->polygon,
            'area_m2'       => $entity->area_m2,
            'created_at'    => $entity->created_at,
            'updated_at'    => $entity->updated_at,

        ];

        return $response;
    }
}
