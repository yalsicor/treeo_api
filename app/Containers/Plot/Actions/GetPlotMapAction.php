<?php

namespace App\Containers\Plot\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;

/**
 * Class GetPlotMapAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetPlotMapAction extends Action
{
    /**
     * @param Request $request
     * @return array|null
     */
    public function run(Request $request) : ?array
    {
        if ($plot = Apiato::call('Plot@FindPlotByIdentifierTask', [$request->id])) {
            return Apiato::call('Plot@BuildPlotDataGeoJsonTask', [$plot]);
        }
        return null;
    }
}
