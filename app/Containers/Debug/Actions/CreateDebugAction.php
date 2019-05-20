<?php

namespace App\Containers\Debug\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class CreateDebugAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateDebugAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'timestamp',
            'data',
        ]);

        $data['user_id'] = Apiato::call('Authentication@GetAuthenticatedUserTask');

        $debug = Apiato::call('Debug@CreateDebugTask', [$data]);

        return $debug;
    }
}
