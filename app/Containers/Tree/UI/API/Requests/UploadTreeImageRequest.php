<?php

namespace App\Containers\Tree\UI\API\Requests;


/**
 * Class UploadTreeImageRequest
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UploadTreeImageRequest extends AbstractTreeRequest
{
    /**
     * Define which Roles and/or Permissions has access to this request.
     *
     * @var  array
     */
    protected $access = [
        'permissions' => '',
        'roles'       => 'farmer',
    ];

    /**
     * @return  array
     */
    public function rules()
    {
        return [
            'id'    => 'required|exists:trees,identifier',
            'image' => 'required|image',
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
