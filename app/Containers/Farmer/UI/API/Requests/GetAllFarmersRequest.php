<?php

namespace App\Containers\Farmer\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class GetAllFarmersRequest.
 *
 *  @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllFarmersRequest extends Request
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
