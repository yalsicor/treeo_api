<?php

namespace App\Containers\Farmer\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class GetAllGendersRequest.
 *
 *  @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllGendersRequest extends Request
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
     * Id's that needs decoding before applying the validation rules.
     *
     * @var  array
     */
    protected $decode = [
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
