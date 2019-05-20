<?php

namespace App\Containers\District\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class GetAllDistrictsAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllDistrictsAction extends Action
{
    public function run(Request $request)
    {
        $districts = Apiato::call('District@GetAllDistrictsTask', [], ['addQueryCriteria']);

        return $districts;
    }
}
