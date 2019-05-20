<?php

namespace App\Containers\Tree\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class GetAllTreesViewAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllTreesViewAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $trees = Apiato::call('Tree@GetAllTreesViewTask', [], ['addQueryCriteria']);

        return $trees;
    }
}
