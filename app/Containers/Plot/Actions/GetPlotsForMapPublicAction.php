<?php

namespace App\Containers\Plot\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class GetPlotsForMapPublicAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetPlotsForMapPublicAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        return Apiato::call('Plot@GetPlotsForMapPublicTask', [
            $this->getIncludes($request)
        ], []);
    }
}
