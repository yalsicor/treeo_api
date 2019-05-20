<?php

namespace App\Containers\District\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class UpdateDistrictAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdateDistrictAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'name',
        ]);

        $district = Apiato::call('District@UpdateDistrictTask', [$request->id, $data]);

        return $district;
    }
}
