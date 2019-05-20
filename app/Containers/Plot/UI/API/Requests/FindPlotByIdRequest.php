<?php

namespace App\Containers\Plot\UI\API\Requests;

/**
 * Class FindPlotByIdRequest.
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindPlotByIdRequest extends AbstractPlotRequest
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
             'id' => 'required|exists:plots,identifier',
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
