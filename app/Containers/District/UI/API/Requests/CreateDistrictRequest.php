<?php

namespace App\Containers\District\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class CreateDistrictRequest.
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateDistrictRequest extends Request
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
     * @return  array
     */
    public function rules()
    {
        return [
            'name' => 'min:3|max:191'
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
