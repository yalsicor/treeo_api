<?php

namespace App\Containers\Village\UI\API\Transformers;

use App\Containers\District\UI\API\Transformers\DistrictTransformer;
use App\Containers\Village\Models\Village;
use App\Ship\Parents\Transformers\Transformer;

/**
 * Class VillageTransformer
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class VillageTransformer extends Transformer
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
        'district',
    ];

    /**
     * @param Village $entity
     *
     * @return array
     */
    public function transform(Village $entity)
    {
        $response = [
            'object'        => 'Village',
            'id'            => $entity->getHashedKey(),
            'name'          => $entity->name,
            'district_id'   => $entity->getHashedKey('district_id'),
            'district'      => optional($entity->district)->name,
            'created_at'    => $entity->created_at,
            'updated_at'    => $entity->updated_at,
        ];

        return $response;
    }

    /**
     * @param Village $entity
     * @return \League\Fractal\Resource\Primitive
     */
    public function includeDistrict(Village $entity)
    {
        return $this->primitive($entity->district, new DistrictTransformer());
    }
}
