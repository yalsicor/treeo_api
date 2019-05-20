<?php

namespace App\Containers\PlantingDistance\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class UpdatePlantingDistanceAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdatePlantingDistanceAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'name',
        ]);

        $plantingdistance = Apiato::call('PlantingDistance@UpdatePlantingDistanceTask', [$request->id, $data]);

        return $plantingdistance;
    }
}
