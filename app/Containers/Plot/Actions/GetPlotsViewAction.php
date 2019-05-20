<?php

namespace App\Containers\Plot\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;

/**
 * Class GetPlotsViewAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetPlotsViewAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $plots = Apiato::call('Plot@GetPlotsViewTask', [
            $this->getIncludes($request)
        ], ['addQueryCriteria']);

        return $plots;
    }
}
