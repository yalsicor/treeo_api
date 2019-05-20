<?php

namespace App\Containers\Nursery\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class CreateNurseryRequest.
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateNurseryRequest extends Request
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
            'owner' => 'min:3|max:191',
            'geo_point' => '',
            'cover' => 'image',
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
