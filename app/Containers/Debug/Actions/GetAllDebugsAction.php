<?php

namespace App\Containers\Debug\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class GetAllDebugsAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllDebugsAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $debugs = Apiato::call('Debug@GetAllDebugsTask', [], ['addRequestCriteria']);

        return $debugs;
    }
}
