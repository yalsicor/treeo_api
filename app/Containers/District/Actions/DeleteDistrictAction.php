<?php

namespace App\Containers\District\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class DeleteDistrictAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeleteDistrictAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('District@DeleteDistrictTask', [$request->id]);
    }
}
