<?php

namespace App\Containers\Tree\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class DeleteTreeAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeleteTreeAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $tree = Apiato::call('Tree@FindTreeByIdentifierTask', [$request->id]);
        return Apiato::call('Tree@DeleteTreeTask', [$tree->id]);
    }
}
