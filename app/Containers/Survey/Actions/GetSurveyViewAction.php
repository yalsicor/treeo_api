<?php

namespace App\Containers\Survey\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class GetSurveyViewAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetSurveyViewAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $surveys = Apiato::call('Survey@GetSurveyViewTask', [], ['addQueryCriteria']);

        return $surveys;
    }
}
