<?php

namespace App\Containers\FieldCoordinator\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class GetAllFieldCoordinatorsAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllFieldCoordinatorsAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $fieldcoordinators = Apiato::call('FieldCoordinator@GetAllFieldCoordinatorsTask', [], ['addRequestCriteria']);

        return $fieldcoordinators;
    }
}
