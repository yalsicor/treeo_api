<?php

namespace App\Containers\Species\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class DeleteSpeciesAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeleteSpeciesAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Species@DeleteSpeciesTask', [$request->id]);
    }
}
