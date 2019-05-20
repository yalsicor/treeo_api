<?php

namespace App\Containers\SurveyStatus\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class UpdateSurveyStatusAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdateSurveyStatusAction extends Action
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

        $surveystatus = Apiato::call('SurveyStatus@UpdateSurveyStatusTask', [$request->id, $data]);

        return $surveystatus;
    }
}
