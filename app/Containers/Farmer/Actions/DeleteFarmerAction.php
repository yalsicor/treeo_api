<?php

namespace App\Containers\Farmer\Actions;

use App\Containers\Farmer\Models\Farmer;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class DeleteFarmerAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeleteFarmerAction extends Action
{
    /**
     * @param Request $request
     * @return bool
     */
    public function run(Request $request)
    {
        // get farmer
        $farmer = Apiato::call('Farmer@FindFarmerByIdentifierTask', [$request->id]);

        //get user
        $user = $farmer->user;

        $return = Apiato::call('Farmer@DeleteFarmerTask', [$farmer->id]);
        if ($user) $return = $return && Apiato::call('User@DeleteUserTask', [$user]);

        return $return;
    }
}
