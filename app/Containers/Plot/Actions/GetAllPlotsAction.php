<?php

namespace App\Containers\Plot\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class GetAllPlotsAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllPlotsAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $plots = Apiato::call('Plot@GetAllPlotsTask', [
            $this->getIncludes($request)
        ], ['addQueryCriteria']);

        return $plots;
    }
}
