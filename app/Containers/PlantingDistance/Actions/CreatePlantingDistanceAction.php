<?php

namespace App\Containers\PlantingDistance\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class CreatePlantingDistanceAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreatePlantingDistanceAction extends Action
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

        $plantingdistance = Apiato::call('PlantingDistance@CreatePlantingDistanceTask', [$data]);

        return $plantingdistance;
    }
}
