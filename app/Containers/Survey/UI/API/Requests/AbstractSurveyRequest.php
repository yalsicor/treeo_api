<?php

namespace App\Containers\Survey\UI\API\Requests;

use App\Containers\Survey\Models\Survey;
use App\Ship\Parents\Requests\Request;

/**
 * Class AbstractSurveyRequest
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
abstract class AbstractSurveyRequest extends Request
{
    /**
     * @return bool
     */
    public function isOwner()
    {
        if ($this->id) {
            $survey = Survey::where('identifier', $this->id)->first();
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
