<?php

namespace App\Containers\Village\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class GetAllVillagesAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllVillagesAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $villages = Apiato::call('Village@GetAllVillagesTask', [], ['addQueryCriteria']);

        return $villages;
    }
}
