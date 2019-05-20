<?php

namespace App\Containers\Tree\UI\API\Requests;

/**
 * Class FindTreeByIdRequest
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindTreeByIdRequest extends AbstractTreeRequest
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
            'id' => 'required|exists:trees,identifier',
        ];
    }

    /**
     * @return  bool
     */
    public function authorize()
    {
        return $this->check([
            'hasAccess|isOwner',
        ]);
    }
}
