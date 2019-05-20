<?php

namespace App\Containers\Plot\UI\API\Requests;

/**
 * Class ChangePlotPolygonRequest
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class ChangePlotPolygonRequest extends AbstractPlotRequest
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
            'id'        => 'required|exists:plots,identifier',
            'geodata'   => 'required',
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
