<?php

namespace App\Containers\Project\UI\API\Transformers;

use App\Containers\Project\Models\Project;
use App\Ship\Parents\Transformers\Transformer;

/**
 * Class ProjectTransformer
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class ProjectTransformer extends Transformer
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
     * @param Project $entity
     *
     * @return array
     */
    public function transform(Project $entity)
    {
        $response = [
            'object'        => 'Project',
            'id'            => $entity->getHashedKey(),
            'name'          => $entity->name,
            'created_at'    => $entity->created_at,
            'updated_at'    => $entity->updated_at,
        ];

        return $response;
    }
}
