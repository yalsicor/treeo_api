<?php

namespace App\Containers\SoilType\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class FindSoilTypeByIdAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindSoilTypeByIdAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $soiltype = Apiato::call('SoilType@FindSoilTypeByIdTask', [$request->id]);

        return $soiltype;
    }
}
