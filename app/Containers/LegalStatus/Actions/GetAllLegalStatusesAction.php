<?php

namespace App\Containers\LegalStatus\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class GetAllLegalStatusesAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllLegalStatusesAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $legalstatuses = Apiato::call('LegalStatus@GetAllLegalStatusesTask', [], ['addQueryCriteria']);

        return $legalstatuses;
    }
}
