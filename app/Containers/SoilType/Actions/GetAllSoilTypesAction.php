<?php

namespace App\Containers\SoilType\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class GetAllSoilTypesAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllSoilTypesAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $soiltypes = Apiato::call('SoilType@GetAllSoilTypesTask', [], ['addQueryCriteria']);

        return $soiltypes;
    }
}
