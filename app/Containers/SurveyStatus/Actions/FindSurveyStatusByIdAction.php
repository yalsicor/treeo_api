<?php

namespace App\Containers\SurveyStatus\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class FindSurveyStatusByIdAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindSurveyStatusByIdAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $surveystatus = Apiato::call('SurveyStatus@FindSurveyStatusByIdTask', [$request->id]);

        return $surveystatus;
    }
}
