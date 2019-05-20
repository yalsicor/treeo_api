<?php

namespace App\Containers\Plot\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class GetOwnPlotsAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetOwnPlotsAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $user = Apiato::call('Authentication@GetAuthenticatedUserTask');

        $plots = Apiato::call('Plot@GetAllPlotsTask', [
            $this->getIncludes($request)
        ], [
            ['own' => [$user]],
        ]);

        return $plots;
    }
}
