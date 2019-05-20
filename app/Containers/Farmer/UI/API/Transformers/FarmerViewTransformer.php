<?php

namespace App\Containers\Farmer\UI\API\Transformers;

use App\Containers\Farmer\Models\FarmerView;
use App\Ship\Parents\Transformers\Transformer;

/**
 * Class FarmerViewTransformer
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FarmerViewTransformer extends Transformer
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
     * @param FarmerView $entity
     *
     * @return array
     */
    public function transform(FarmerView $entity)
    {
        $response = [
            'object'                    => 'Farmer',
            'id'                        => $entity->identifier,
            'user_id'                   => $entity->getHashedKey('user_id'),
            'photo_id'                  => $entity->getHashedKey('photo_id'),
            'project_id'                => $entity->getHashedKey('project_id'),
            'gender_id'                 => $entity->getHashedKey('gender_id'),
            'name'                      => $entity->name,
            'story'                     => $entity->story,
            'children'                  => $entity->children,
            'birthday'                  => $entity->birthday,
            'photo'                     => $entity->photo,
            'main_occupation'           => $entity->main_occupation,
            'side_occupation'           => $entity->side_occupation,
            'spouse_name'               => $entity->spouse_name,
            'spouse_birthday'           => $entity->spouse_birthday,
            'spouse_main_occupation'    => $entity->spouse_main_occupation,
            'spouse_side_occupation'    => $entity->spouse_side_occupation,
            'family_income_idr'         => $entity->family_income_idr,
            'address'                   => $entity->address,
            'import_id'                 => $entity->import_id,
            'project'                   => $entity->project,
            'created_at'                => $entity->created_at,
            'updated_at'                => $entity->updated_at,
            'gender'                    => $entity->gender,
            'email'                     => $entity->email,
        ];

        return $response;
    }
}
