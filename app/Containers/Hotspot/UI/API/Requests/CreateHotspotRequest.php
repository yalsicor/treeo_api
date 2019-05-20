<?php

namespace App\Containers\Hotspot\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class CreateHotspotRequest.
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateHotspotRequest extends Request
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
            'description'   => '',
            'geo_data'      => '',
            'photo'         => 'file|image',
            'name_de'       => '',
            'name_en'       => '',
            'name_ms'       => '',
            'link_de'       => '',
            'link_en'       => '',
            'link_ms'       => '',
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
