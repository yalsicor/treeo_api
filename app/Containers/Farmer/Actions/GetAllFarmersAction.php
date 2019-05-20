<?php

namespace App\Containers\Farmer\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllFarmersAction extends Action
{
    public function run(Request $request)
    {
        $farmers = Apiato::call('Farmer@GetAllFarmersTask', [
            $this->getIncludes($request)
        ], ['addRequestCriteria']);

        return $farmers;
    }
}
