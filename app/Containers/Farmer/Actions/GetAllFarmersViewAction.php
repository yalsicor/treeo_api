<?php

namespace App\Containers\Farmer\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class GetAllFarmersViewAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllFarmersViewAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $farmers = Apiato::call('Farmer@GetAllFarmersViewTask', [], ['addQueryCriteria']);

        return $farmers;
    }
}
