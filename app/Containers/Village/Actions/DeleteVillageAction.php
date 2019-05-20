<?php

namespace App\Containers\Village\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class DeleteVillageAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeleteVillageAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        return Apiato::call('Village@DeleteVillageTask', [$request->id]);
    }
}
