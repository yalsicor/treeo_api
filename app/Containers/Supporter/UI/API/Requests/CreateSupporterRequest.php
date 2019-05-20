<?php

namespace App\Containers\Supporter\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class CreateSupporterRequest.
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateSupporterRequest extends Request
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
            'name' => 'min:3|max:191',
            'path' => 'min:3|max:191',
            'logo' => 'nullable|image',
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
