<?php

namespace App\Containers\FieldCoordinator\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class FindFieldCoordinatorByIdRequest
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindFieldCoordinatorByIdRequest extends Request
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
        'id',
    ];

    /**
     * @return  array
     */
    public function rules()
    {
        return [
            'id' => 'required|exists:field_coordinators',
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
