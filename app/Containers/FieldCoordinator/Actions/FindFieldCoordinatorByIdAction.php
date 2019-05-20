<?php

namespace App\Containers\FieldCoordinator\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class FindFieldCoordinatorByIdAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindFieldCoordinatorByIdAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $fieldcoordinator = Apiato::call('FieldCoordinator@FindFieldCoordinatorByIdTask', [$request->id]);

        return $fieldcoordinator;
    }
}
