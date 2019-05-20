<?php

namespace App\Containers\Species\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class CreateSpeciesAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateSpeciesAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'name',
            'latin_name',
        ]);

        $species = Apiato::call('Species@CreateSpeciesTask', [$data]);

        return $species;
    }
}
