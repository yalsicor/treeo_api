<?php

namespace App\Containers\Plot\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class GetPlotsForMapPublicRequest
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetPlotsForMapPublicRequest extends Request
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
