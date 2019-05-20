<?php

namespace App\Containers\Plot\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class DeletePlotAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeletePlotAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $plot = Apiato::call('Plot@FindPlotByIdentifierTask', [$request->id]);

        return Apiato::call('Plot@DeletePlotTask', [$plot->id]);
    }
}
