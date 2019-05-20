<?php

namespace App\Containers\Village\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class CreateVillageRequest.
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateVillageRequest extends Request
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
        'district_id',
    ];

    /**
     * @return  array
     */
    public function rules()
    {
        return [
            'name' => 'min:3|max:191',
            'district_id' => 'required|exists:districts,id',
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
