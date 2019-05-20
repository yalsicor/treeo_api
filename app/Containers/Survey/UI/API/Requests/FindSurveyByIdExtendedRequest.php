<?php

namespace App\Containers\Survey\UI\API\Requests;

/**
 * Class FindSurveyByIdExtendedRequest
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindSurveyByIdExtendedRequest extends AbstractSurveyRequest
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
            'id' => 'required|exists:surveys,identifier',
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
