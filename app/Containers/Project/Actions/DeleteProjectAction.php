<?php

namespace App\Containers\Project\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class DeleteProjectAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeleteProjectAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        return Apiato::call('Project@DeleteProjectTask', [$request->id]);
    }
}
