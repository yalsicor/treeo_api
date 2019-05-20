<?php

namespace App\Containers\LegalStatus\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class UpdateLegalStatusAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdateLegalStatusAction extends Action
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

        $legalstatus = Apiato::call('LegalStatus@UpdateLegalStatusTask', [$request->id, $data]);

        return $legalstatus;
    }
}
