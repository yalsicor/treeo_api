<?php

namespace App\Containers\Survey\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;

/**
 * Class GetSurveyMapAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetSurveyMapAction extends Action
{
    /**
     * @param Request $request
     * @return array|null
     */
    public function run(Request $request) : ?array
    {
        if ($survey = Apiato::call('Survey@FindSurveyByIdentifierTask', [$request->id])) {
            return Apiato::call('Survey@BuildSurveyDataGeoJsonTask', [$survey]);
        }
        return null;
    }
}
