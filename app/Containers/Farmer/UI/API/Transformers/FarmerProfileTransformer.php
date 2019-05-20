<?php

namespace App\Containers\Farmer\UI\API\Transformers;

use App\Containers\Farmer\Models\Farmer;
use App\Containers\Media\UI\API\Transformers\MediaTransformer;
use App\Containers\Project\UI\API\Transformers\ProjectTransformer;
use App\Containers\User\UI\API\Transformers\UserTransformer;
use App\Ship\Parents\Transformers\Transformer;

/**
 * Class FarmerProfileTransformer
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FarmerProfileTransformer extends Transformer
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
     * @param Farmer $entity
     *
     * @return array
     */
    public function transform(Farmer $entity)
    {
        $response = [
            'object'                    => 'Farmer',
            'id'                        => $entity->identifier,
            'name'                      => $entity->name,
            'story'                     => $entity->story,
            'children'                  => $entity->children,
            'birthday'                  => $entity->birthday,
            'main_occupation'           => $entity->main_occupation,
            'side_occupation'           => $entity->side_occupation,
            'spouse_name'               => $entity->spouse_name,
            'spouse_birthday'           => $entity->spouse_birthday,
            'spouse_main_occupation'    => $entity->spouse_main_occupation,
            'spouse_side_occupation'    => $entity->spouse_side_occupation,
            'family_income_idr'         => $entity->family_income_idr,
            'address'                   => $entity->address,
            'user_id'                   => $entity->getHashedKey('user_id'),
            'photo'                     => optional($entity->photo)->file,
            'project_id'                => $entity->getHashedKey('project_id'),
            'project'                   => optional($entity->project)->name,
            'gender'                    => optional($entity->gender)->name,
            'gender_id'                 => $entity->getHashedKey('gender_id'),
            'created_at'                => $entity->created_at,
            'updated_at'                => $entity->updated_at,

        ];

        return $response;
    }

}
