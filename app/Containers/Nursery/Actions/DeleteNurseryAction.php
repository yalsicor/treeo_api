<?php

namespace App\Containers\Nursery\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class DeleteNurseryAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeleteNurseryAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Nursery@DeleteNurseryTask', [$request->id]);
    }
}
