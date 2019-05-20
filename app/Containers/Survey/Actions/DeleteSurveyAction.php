<?php

namespace App\Containers\Survey\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class DeleteSurveyAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeleteSurveyAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $survey = Apiato::call('Survey@FindSurveyByIdentifierTask', [$request->id]);
        return Apiato::call('Survey@DeleteSurveyTask', [$survey->id]);
    }
}
