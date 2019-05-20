<?php

namespace App\Containers\Tree\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class GetOwnTreesRequest
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetOwnTreesRequest extends Request
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
            'survey_id' => 'nullable|exists:surveys,identifier',
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
