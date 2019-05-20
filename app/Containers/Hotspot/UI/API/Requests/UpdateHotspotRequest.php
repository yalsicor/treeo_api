<?php

namespace App\Containers\Hotspot\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class UpdateHotspotRequest.
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdateHotspotRequest extends Request
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
             'id'           => 'required|exists:hotspots',
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
