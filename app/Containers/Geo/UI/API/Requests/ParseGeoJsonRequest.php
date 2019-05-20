<?php

namespace App\Containers\Geo\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class ParseGeoJsonRequest
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class ParseGeoJsonRequest extends Request
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
            'geojson' => 'required|file',
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
