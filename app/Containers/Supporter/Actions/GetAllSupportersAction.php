<?php

namespace App\Containers\Supporter\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class GetAllSupportersAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllSupportersAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $supporters = Apiato::call('Supporter@GetAllSupportersTask', [], ['addQueryCriteria']);

        return $supporters;
    }
}
