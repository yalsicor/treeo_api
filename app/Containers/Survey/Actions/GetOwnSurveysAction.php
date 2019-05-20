<?php

namespace App\Containers\Survey\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class GetOwnSurveysAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetOwnSurveysAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $user = Apiato::call('Authentication@GetAuthenticatedUserTask');

        $surveys = Apiato::call('Survey@GetAllSurveysTask', [
            $this->getIncludes($request)
        ], [
            ['own' => [$user]],
            ['plot' => [$request->plot_id]],
        ]);

        return $surveys;
    }
}
