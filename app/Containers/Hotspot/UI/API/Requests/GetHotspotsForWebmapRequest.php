<?php

namespace App\Containers\Hotspot\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class GetHotspotsForWebmapRequest
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetHotspotsForWebmapRequest extends Request
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
