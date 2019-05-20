<?php

namespace App\Containers\Tree\UI\API\Requests;

/**
 * Class UpdateTreeRequest
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdateTreeRequest extends AbstractTreeRequest
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
    ];

    /**
     * @return  array
     */
    public function rules()
    {
        return [
            'id'         => 'required|exists:trees,identifier',
            'survey_id'  => 'required|exists:surveys,identifier',
            'species_id' => 'required|exists:species,id',
            'fbh_cm'     => 'nullable|numeric',
            'height_m'   => 'nullable|numeric',
            'health'     => 'nullable|numeric',
            'comment'    => 'nullable|max:191',
            'timestamp'  => 'nullable|date',
            'amigo_id'   => 'nullable|max:191',
            'image'      => 'nullable|image',
            'geodata'    => '',
            'accuracy'   => 'nullable|numeric',
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
