<?php

namespace App\Containers\FieldCoordinator\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class CreateFieldCoordinatorAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateFieldCoordinatorAction extends Action
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

        $fieldcoordinator = Apiato::call('FieldCoordinator@CreateFieldCoordinatorTask', [$data]);

        return $fieldcoordinator;
    }
}
