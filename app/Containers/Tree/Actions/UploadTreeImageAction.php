<?php

namespace App\Containers\Tree\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;

/**
 * Class UploadTreeImageAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UploadTreeImageAction extends Action
{
    public function run(Request $request)
    {
        $tree = Apiato::call('Tree@FindTreeByIdentifierTask', [$request->id]);

        //image
        return Apiato::call('Tree@UpdateImageTask', [$request->image, $tree]);
    }
}
