<?php

namespace App\Containers\Village\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class FindVillageByIdAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindVillageByIdAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $village = Apiato::call('Village@FindVillageByIdTask', [$request->id]);

        return $village;
    }
}
