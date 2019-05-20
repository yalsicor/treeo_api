<?php

namespace App\Containers\PlantingDistance\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class DeletePlantingDistanceAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeletePlantingDistanceAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        return Apiato::call('PlantingDistance@DeletePlantingDistanceTask', [$request->id]);
    }
}
