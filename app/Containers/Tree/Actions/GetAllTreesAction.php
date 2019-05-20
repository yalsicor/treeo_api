<?php

namespace App\Containers\Tree\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class GetAllTreesAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllTreesAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $trees = Apiato::call('Tree@GetAllTreesTask', [], ['addRequestCriteria']);

        return $trees;
    }
}
