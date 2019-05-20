<?php

namespace App\Containers\Nursery\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class FindNurseryByIdAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindNurseryByIdAction extends Action
{
    public function run(Request $request)
    {
        $nursery = Apiato::call('Nursery@FindNurseryByIdTask', [$request->id]);

        return $nursery;
    }
}
