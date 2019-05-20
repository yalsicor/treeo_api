<?php

namespace App\Containers\LegalStatus\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class CreateLegalStatusAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateLegalStatusAction extends Action
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

        $legalstatus = Apiato::call('LegalStatus@CreateLegalStatusTask', [$data]);

        return $legalstatus;
    }
}
