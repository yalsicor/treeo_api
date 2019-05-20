<?php

namespace App\Containers\SurveyStatus\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class GetAllSurveyStatusesAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllSurveyStatusesAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $surveystatuses = Apiato::call('SurveyStatus@GetAllSurveyStatusesTask', [], ['addQueryCriteria']);

        return $surveystatuses;
    }
}
