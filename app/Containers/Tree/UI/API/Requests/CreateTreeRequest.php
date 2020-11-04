<?php

namespace App\Containers\Tree\UI\API\Requests;

use App\Containers\Survey\Models\Survey;
use App\Ship\Parents\Requests\Request;

/**
 * Class CreateTreeRequest
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateTreeRequest extends Request
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
        'species_id',
    ];

    /**
     * @return  array
     */
    public function rules()
    {
        return [
            'survey_id'  => 'required|exists:surveys,identifier',
            'species_id' => 'required|exists:species,id',
            'fbh_cm'     => 'nullable|numeric',
            'height_m'   => 'nullable|numeric',
            'health'     => 'nullable|numeric',
            'comment'    => 'nullable|max:191',
            'timestamp'  => 'nullable|date',
            'amigo_id'   => 'nullable|max:191',
            'image'      => 'nullable|image',
            'geodata'    => '',
            'accuracy'   => 'nullable|integer',
        ];
    }

    /**
     * @return  bool
     */
    public function authorize()
    {
        return $this->check([
            'hasAccess|isSurveyOwner',
        ]);
    }

    /**
     * @return mixed
     */
    public function isSurveyOwner()
    {
        if ($this->survey_id) {
            $survey = Survey::where('identifier', $this->survey_id)->first();
            if ($survey) {
                $plot = $survey->plot;
                if ($plot) {
                    return $plot->farmer->isOwner($this->user());
                }
            }
        }
        return false;
    }
}
