<?php

namespace App\Containers\PlantingDistance\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class GetAllPlantingDistancesAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllPlantingDistancesAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $plantingdistances = Apiato::call('PlantingDistance@GetAllPlantingDistancesTask', [], ['addQueryCriteria']);

        return $plantingdistances;
    }
}
