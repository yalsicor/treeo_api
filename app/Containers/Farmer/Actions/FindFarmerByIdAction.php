<?php

namespace App\Containers\Farmer\Actions;

use App\Containers\Farmer\Models\Farmer;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class FindFarmerByIdAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindFarmerByIdAction extends Action
{
    /**
     * @param Request $request
     * @return Farmer|null
     */
    public function run(Request $request) :?Farmer
    {
        $farmer = Apiato::call('Farmer@FindFarmerByIdentifierTask', [$request->id]);

        return $farmer;
    }
}
