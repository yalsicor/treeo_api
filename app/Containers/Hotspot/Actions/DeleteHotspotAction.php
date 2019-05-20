<?php

namespace App\Containers\Hotspot\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class DeleteHotspotAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeleteHotspotAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        return Apiato::call('Hotspot@DeleteHotspotTask', [$request->id]);
    }
}
