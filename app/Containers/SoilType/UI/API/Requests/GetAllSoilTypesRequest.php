<?php

namespace App\Containers\SoilType\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class GetAllSoilTypesRequest.
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllSoilTypesRequest extends Request
{

    /**
     * Define which Roles and/or Permissions has access to this request.
     *
     * @var  array
     */
    protected $access = [
        'permissions' => '',
        'roles'       => 'manager|farmer',
    ];

    /**
     * @return  array
     */
    public function rules()
    {
        return [
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
