<?php

namespace App\Containers\Supporter\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class DeleteSupporterAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeleteSupporterAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        return Apiato::call('Supporter@DeleteSupporterTask', [$request->id]);
    }
}
