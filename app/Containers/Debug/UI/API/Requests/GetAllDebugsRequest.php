<?php

namespace App\Containers\Debug\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class GetAllDebugsRequest
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllDebugsRequest extends Request
{

    /**
     * Define which Roles and/or Permissions has access to this request.
     *
     * @var  array
     */
    protected $access = [
        'permissions' => '',
        'roles'       => 'admin',
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
