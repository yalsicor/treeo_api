<?php

namespace App\Containers\Hotspot\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class FindHotspotByIdAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindHotspotByIdAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $hotspot = Apiato::call('Hotspot@FindHotspotByIdTask', [$request->id]);

        return $hotspot;
    }
}
