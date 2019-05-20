<?php

namespace App\Containers\Survey\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class GetOwnSurveysRequest
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetOwnSurveysRequest extends Request
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
            'plot_id' => 'nullable|exists:plots,identifier',
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
