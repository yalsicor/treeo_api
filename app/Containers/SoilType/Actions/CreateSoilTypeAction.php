<?php

namespace App\Containers\SoilType\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class CreateSoilTypeAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateSoilTypeAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'name',
        ]);

        $soiltype = Apiato::call('SoilType@CreateSoilTypeTask', [$data]);

        return $soiltype;
    }
}
