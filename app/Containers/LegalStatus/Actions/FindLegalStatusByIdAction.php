<?php

namespace App\Containers\LegalStatus\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class FindLegalStatusByIdAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindLegalStatusByIdAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $legalstatus = Apiato::call('LegalStatus@FindLegalStatusByIdTask', [$request->id]);

        return $legalstatus;
    }
}
