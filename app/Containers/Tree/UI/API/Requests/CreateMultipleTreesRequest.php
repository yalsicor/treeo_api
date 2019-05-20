<?php

namespace App\Containers\Tree\UI\API\Requests;

use App\Containers\Survey\Models\Survey;
use App\Ship\Parents\Requests\Request;

/**
 * Class CreateMultipleTreesRequest
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateMultipleTreesRequest extends Request
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
        if ($this->survey_id) {
            $survey = Survey::where('identifier', $this->survey_id)->first();
            if ($survey) {
                $plot = $survey->plot;
                if ($plot) return $plot->farmer->isOwner($this->user());
            }
        }
        return false;
    }

    /**
     * Id's that needs decoding before applying the validation rules.
     *
     * @var  array
     */
    protected $decode = [
        'tree_data.*.species_id',
    ];

    /**
     * @return  array
     */
    public function rules()
    {
        return [
            'survey_id'              => 'required|exists:surveys,identifier',
            'tree_data'              => 'required|array',
            'tree_data.*'            => 'required|array',
            'tree_data.*.species_id' => 'required|exists:species,id',
            'tree_data.*.fbh_cm'     => 'nullable|numeric',
            'tree_data.*.height_m'   => 'nullable|numeric',
            'tree_data.*.health'     => 'nullable|numeric',
            'tree_data.*.comment'    => 'nullable|max:191',
            'tree_data.*.timestamp'  => 'nullable|date',
            'tree_data.*.geodata'    => '',
            'tree_data.*.accuracy'   => 'nullable|numeric',
        ];
    }
}
