<?php

namespace App\Containers\District\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class FindDistrictByIdAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindDistrictByIdAction extends Action
{
    public function run(Request $request)
    {
        $district = Apiato::call('District@FindDistrictByIdTask', [$request->id]);

        return $district;
    }
}
