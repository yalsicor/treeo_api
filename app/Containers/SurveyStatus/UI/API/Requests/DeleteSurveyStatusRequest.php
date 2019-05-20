<?php

namespace App\Containers\SurveyStatus\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class DeleteSurveyStatusRequest.
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeleteSurveyStatusRequest extends Request
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
             'id' => 'required|exists:survey_status',
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
