<?php

namespace App\Containers\Hotspot\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class GetAllHotspotsAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllHotspotsAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $hotspots = Apiato::call('Hotspot@GetAllHotspotsTask', [], ['addQueryCriteria']);

        return $hotspots;
    }
}
