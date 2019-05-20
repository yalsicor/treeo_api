<?php

namespace App\Containers\SoilType\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class DeleteSoilTypeAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeleteSoilTypeAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('SoilType@DeleteSoilTypeTask', [$request->id]);
    }
}
