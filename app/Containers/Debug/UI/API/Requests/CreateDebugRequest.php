<?php

namespace App\Containers\Debug\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class CreateDebugRequest
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateDebugRequest extends Request
{

    /**
     * Define which Roles and/or Permissions has access to this request.
     *
     * @var  array
     */
    protected $access = [
        'permissions' => '',
        'roles'       => '',
    ];

    /**
     * @return  array
     */
    public function rules()
    {
        return [
            'timestamp'  => 'required',
            'data'       => 'required',
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
