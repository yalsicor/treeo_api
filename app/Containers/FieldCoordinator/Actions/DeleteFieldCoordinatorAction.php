<?php

namespace App\Containers\FieldCoordinator\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class DeleteFieldCoordinatorAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeleteFieldCoordinatorAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        return Apiato::call('FieldCoordinator@DeleteFieldCoordinatorTask', [$request->id]);
    }
}
