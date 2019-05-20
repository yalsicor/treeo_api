<?php

namespace App\Containers\PlantingDistance\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class FindPlantingDistanceByIdAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindPlantingDistanceByIdAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $plantingdistance = Apiato::call('PlantingDistance@FindPlantingDistanceByIdTask', [$request->id]);

        return $plantingdistance;
    }
}
