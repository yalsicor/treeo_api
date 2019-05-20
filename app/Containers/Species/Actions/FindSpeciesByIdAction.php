<?php

namespace App\Containers\Species\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class FindSpeciesByIdAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindSpeciesByIdAction extends Action
{
    public function run(Request $request)
    {
        $species = Apiato::call('Species@FindSpeciesByIdTask', [$request->id]);

        return $species;
    }
}
