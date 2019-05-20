<?php

namespace App\Containers\Farmer\UI\API\Requests;

use App\Containers\Farmer\Models\Farmer;
use App\Ship\Parents\Requests\Request;

/**
 * Class ChangeFarmerProfilePhotoRequest
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class ChangeFarmerProfilePhotoRequest extends Request
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
            'photo'         => 'nullable|image',
            'farmer_id'     => 'nullable|exists:farmers,identifier',
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

    /**
     * @return bool
     */
    public function isOwner()
    {
        if ($this->farmer_id) {
            $farmer = Farmer::where('identifier', $this->farmer_id)->first();
            return $farmer->isOwner($this->user());
        }
        else return true;
    }
}
