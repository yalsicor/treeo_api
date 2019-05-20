<?php

namespace App\Containers\Farmer\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class CreateFarmerRequest.
 *
 *  @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateFarmerRequest extends Request
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
        'gender_id',
        'project_id',
    ];

    /**
     * lowercase some values
     */
    public function prepareForValidation() {
        $this->merge([
            'email' => strtolower($this->email),
        ]);
    }

    /**
     * @return  array
     */
    public function rules()
    {
        return [
            'name'                      => 'required|max:191',
            'email'                     => 'required|email|max:191|unique:users',
            'story'                     => '',
            'project_id'                => 'nullable|exists:projects,id',
            'children'                  => 'nullable|numeric',
            'birthday'                  => 'nullable|date',
            'photo'                     => 'nullable|file|image',
            'main_occupation'           => '',
            'side_occupation'           => '',
            'spouse_name'               => '',
            'spouse_birthday'           => 'nullable|date',
            'spouse_main_occupation'    => '',
            'spouse_side_occupation'    => '',
            'family_income_idr'         => 'nullable|numeric',
            'address'                   => '',
            'gender_id'                 => 'nullable|exists:genders,id',
        ];
    }

    /**
     * @return  bool
     */
    public function authorize()
    {
        return $this->check([
            'hasAccess',
        ]);
    }
}
