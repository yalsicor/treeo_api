<?php

namespace App\Containers\Plot\UI\API\Requests;

use App\Containers\Survey\Models\Survey;
use App\Ship\Parents\Requests\Request;

/**
 * Class ForcePlotPolygonRequest
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class ForcePlotPolygonRequest extends AbstractPlotRequest
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
            'survey_id' => 'required|exists:surveys,identifier',
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

    public function isOwner()
    {
        if ($this->survey_id) {
            $survey = Survey::where('identifier', $this->survey_id)->first();
            if ($survey) {
                $plot = $survey->plot;
                if ($plot) {
                    $farmer = $plot->farmer;
                    if ($farmer) return $farmer->isOwner($this->user());
                }
            }
        }
        return false;
    }
}
