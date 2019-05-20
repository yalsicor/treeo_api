<?php

namespace App\Containers\Project\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class UpdateProjectAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdateProjectAction extends Action
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

        $project = Apiato::call('Project@UpdateProjectTask', [$request->id, $data]);

        return $project;
    }
}
