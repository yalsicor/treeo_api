<?php

namespace App\Containers\LegalStatus\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class GetAllLegalStatusesRequest.
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllLegalStatusesRequest extends Request
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
