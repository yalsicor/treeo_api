<?php

namespace App\Containers\Survey\UI\API\Transformers;

use App\Containers\Survey\Models\Survey;
use App\Containers\Tree\UI\API\Transformers\TreeTransformer;
use App\Ship\Parents\Transformers\Transformer;

/**
 * Class SurveyTransformer
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class SurveyTransformer extends Transformer
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
        'trees',
    ];

    /**
     * @param Survey $entity
     *
     * @return array
     */
    public function transform(Survey $entity)
    {
        $response = [
            'object'        => 'Survey',
            'id'            => $entity->identifier,
            'date_start'    => $entity->date_start,
            'date_end'      => $entity->date_end,
            'plot_id'       => optional($entity->plot)->identifier,
            'date_import'   => $entity->date_import,
            'notes'         => $entity->notes,
            'user_created'  => $entity->user_created,
            'amigo_id'      => $entity->amigo_id,
            'status'        => optional($entity->status)->name,
            'status_id'     => $entity->getHashedKey('status_id'),
            'treecount'     => $entity->treecount,
            'created_at'    => $entity->created_at,
            'updated_at'    => $entity->updated_at,

        ];

        return $response;
    }

    /**
     * @param Survey $entity
     * @return \League\Fractal\Resource\Collection
     */
    public function includeTrees(Survey $entity)
    {
        return $this->collection($entity->trees, TreeTransformer::class);
    }
}
