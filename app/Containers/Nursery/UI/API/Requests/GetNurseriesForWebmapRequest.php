<?php

namespace App\Containers\Nursery\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class GetNurseriesForWebmapRequest
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetNurseriesForWebmapRequest extends Request
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
