<?php

namespace App\Containers\Plot\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class GetPlotMapRequest
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetPlotMapRequest extends Request
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
            'id' => 'required|exists:plots,identifier',
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
