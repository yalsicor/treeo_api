<?php

namespace App\Containers\Survey\UI\API\Requests;

use App\Containers\Plot\Models\Plot;
use App\Ship\Parents\Requests\Request;

/**
 * Class CreateSurveyRequest.
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateSurveyRequest extends Request
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
         'status_id',
    ];

    /**
     * @return  array
     */
    public function rules()
    {
        return [
            'date_start'    => 'required|date',
            'date_end'      => 'required|date',
            'date_import'   => 'nullable|date',
            'plot_id'       => 'required|exists:plots,identifier',
            'status_id'     => 'nullable|exists:survey_status,id',
            'notes'         => 'nullable|max:191',
            'user_created'  => 'nullable|max:191',
            'treecount'     => 'nullable|numeric',
        ];
    }

    /**
     * @return  bool
     */
    public function authorize()
    {
        return $this->check([
            'hasAccess|isPlotOwner',
        ]);
    }

    /**
     * @return mixed
     */
    public function isPlotOwner()
    {
        if ($this->plot_id) {
            $plot = Plot::where('identifier', $this->plot_id)->first();
            if ($plot) return $plot->farmer->isOwner($this->user());
        }
        return false;
    }
}
