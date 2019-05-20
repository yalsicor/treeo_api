<?php

namespace App\Containers\Farmer\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class FindFarmerByIdRequest.
 *
 *  @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindFarmerByIdRequest extends Request
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
             'id' => 'required|exists:farmers,identifier',
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
