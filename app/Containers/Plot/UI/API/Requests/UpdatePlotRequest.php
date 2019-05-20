<?php

namespace App\Containers\Plot\UI\API\Requests;

/**
 * Class UpdatePlotRequest.
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdatePlotRequest extends AbstractPlotRequest
{

    /**
     * Define which Roles and/or Permissions has access to this request.
     *
     * @var  array
     */
    protected $access = [
        'permissions' => '',
        'roles'       => 'manager',
    ];

    /**
     * Id's that needs decoding before applying the validation rules.
     *
     * @var  array
     */
    protected $decode = [
        'species_id',
        'soil_type_id',
        'legal_status_id',
        'village_id',
        'planting_distance_id',
        'supporter_id',
        'nursery_id',
        'field_coordinator_id',
    ];

    /**
     * @return  array
     */
    public function rules()
    {
        return [
            'id'                    => 'required|exists:plots,identifier',
            'farmer_id'             => 'required|exists:farmers,identifier',
            'species_id'            => 'nullable|exists:species,id',
            'soil_type_id'          => 'nullable|exists:soil_types,id',
            'legal_status_id'       => 'nullable|exists:legal_status,id',
            'village_id'            => 'nullable|exists:villages,id',
            'planting_distance_id'  => 'nullable|exists:planting_distances,id',
            'supporter_id'          => 'nullable|exists:supporters,id',
            'nursery_id'            => 'nullable|exists:nurseries,id',
            'identifier'            => '',
            'planting_date'         => 'nullable|date',
            'video_url'             => '',
            'neighbours'            => '',
            'landscape_features'    => '',
            'general_conditions'    => '',
            'fire_fighting'         => '',
            'active'                => 'nullable|boolean',
            'sample'                => 'nullable|boolean',
            'plants_planted'        => 'nullable|numeric',
            'geo_data'              => '',
            'field_coordinator_id'  => 'nullable|exists:field_coordinators,id',
        ];
    }

    /**
     * @return  bool
     */
    public function authorize()
    {
        return $this->check([
            'hasAccess|isOwner',
        ]);
    }
}
