<?php

namespace App\Containers\SoilType\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class UpdateSoilTypeAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdateSoilTypeAction extends Action
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

        $soiltype = Apiato::call('SoilType@UpdateSoilTypeTask', [$request->id, $data]);

        return $soiltype;
    }
}
