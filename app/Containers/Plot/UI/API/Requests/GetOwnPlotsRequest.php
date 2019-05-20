<?php

namespace App\Containers\Plot\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class GetOwnPlotsRequest
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetOwnPlotsRequest extends Request
{
    /**
     * Define which Roles and/or Permissions has access to this request.
     *
     * @var  array
     */
    protected $access = [
        'permissions' => '',
        'roles'       => 'farmer',
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
