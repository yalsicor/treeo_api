<?php

namespace App\Containers\Debug\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class DeleteDebugAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeleteDebugAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        return Apiato::call('Debug@DeleteDebugTask', [$request->id]);
    }
}
