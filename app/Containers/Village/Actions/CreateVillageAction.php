<?php

namespace App\Containers\Village\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class CreateVillageAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateVillageAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'name',
            'district_id',
        ]);

        $village = Apiato::call('Village@CreateVillageTask', [$data]);

        return $village;
    }
}
