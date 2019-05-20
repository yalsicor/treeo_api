<?php

namespace App\Containers\Plot\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class DeletePlotPolygonAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeletePlotPolygonAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $plot = Apiato::call('Plot@FindPlotByIdentifierTask', [$request->id]);

        if ($polygon = $plot->polygon) {
            Apiato::call('Geo@DeletePolygonTask', [$polygon->id]);
        }

        $plot->polygon()->dissociate();
        $plot->calculated_polygon = false;
        $plot->save();

    }
}
