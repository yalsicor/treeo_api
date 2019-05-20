<?php

namespace App\Containers\SurveyStatus\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class CreateSurveyStatusAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateSurveyStatusAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'name',
        ]);

        $surveystatus = Apiato::call('SurveyStatus@CreateSurveyStatusTask', [$data]);

        return $surveystatus;
    }
}
