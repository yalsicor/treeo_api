<?php

namespace App\Containers\LegalStatus\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class DeleteLegalStatusAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeleteLegalStatusAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        return Apiato::call('LegalStatus@DeleteLegalStatusTask', [$request->id]);
    }
}
