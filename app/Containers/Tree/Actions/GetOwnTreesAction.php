<?php

namespace App\Containers\Tree\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class GetOwnTreesAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetOwnTreesAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $user = Apiato::call('Authentication@GetAuthenticatedUserTask');

        $trees = Apiato::call('Tree@GetAllTreesTask', [
            $this->getIncludes($request)
        ], [
            ['own' => [$user]],
            ['survey' => [$request->survey_id]],
        ]);

        return $trees;
    }
}
