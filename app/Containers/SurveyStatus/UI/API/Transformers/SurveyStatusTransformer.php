<?php

namespace App\Containers\SurveyStatus\UI\API\Transformers;

use App\Containers\SurveyStatus\Models\SurveyStatus;
use App\Ship\Parents\Transformers\Transformer;

/**
 * Class SurveyStatusTransformer
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class SurveyStatusTransformer extends Transformer
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
     * @param SurveyStatus $entity
     *
     * @return array
     */
    public function transform(SurveyStatus $entity)
    {
        $response = [
            'object' => 'SurveyStatus',
            'id' => $entity->getHashedKey(),
            'name' => $entity->name,
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,
        ];

        return $response;
    }
}
