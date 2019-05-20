<?php

namespace App\Containers\Species\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class UpdateSpeciesAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdateSpeciesAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'name',
            'latin_name',
        ]);

        $species = Apiato::call('Species@UpdateSpeciesTask', [$request->id, $data]);

        return $species;
    }
}
