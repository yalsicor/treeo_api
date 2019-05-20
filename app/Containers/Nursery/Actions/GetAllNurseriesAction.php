<?php

namespace App\Containers\Nursery\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class GetAllNurseriesAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllNurseriesAction extends Action
{
    public function run(Request $request)
    {
        $nurseries = Apiato::call('Nursery@GetAllNurseriesTask', [], ['addQueryCriteria']);

        return $nurseries;
    }
}
