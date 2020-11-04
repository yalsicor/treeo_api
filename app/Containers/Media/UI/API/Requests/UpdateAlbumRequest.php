<?php

namespace App\Containers\Media\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class UpdateAlbumRequest.
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdateAlbumRequest extends Request
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
        'nursery_id',
        'hotspot_id',
    ];

    /**
     * @return  array
     */
    public function rules()
    {
        return [
            'id'            => 'required|exists:media',
            'nursery_id'   => 'required_without_all:hotspot_id,plot_id|exists:nurseries,id',
            'hotspot_id'   => 'required_without_all:nursery_id,plot_id|exists:hotspots,id',
            'plot_id'      => 'required_without_all:nursery_id,hotspot_id|exists:plots,identifier',
            'caption'       => 'required|max:255',
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
