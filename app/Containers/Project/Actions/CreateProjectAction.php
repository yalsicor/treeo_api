<?php

namespace App\Containers\Project\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class CreateProjectAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateProjectAction extends Action
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

        $project = Apiato::call('Project@CreateProjectTask', [$data]);

        return $project;
    }
}
