<?php

namespace App\Containers\District\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class CreateDistrictAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateDistrictAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'name',
        ]);

        $district = Apiato::call('District@CreateDistrictTask', [$data]);

        return $district;
    }
}
