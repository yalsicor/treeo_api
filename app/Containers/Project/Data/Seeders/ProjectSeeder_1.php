<?php

namespace App\Containers\Project\Data\Seeders;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Seeders\Seeder;

/**
 * Class ProjectSeeder_1
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class ProjectSeeder_1 extends Seeder
{
    public function run()
    {
        //create first project
        Apiato::call('Project@CreateProjectTask', [[
            'name' => '1mt',
        ]]);

        //create project for mobile registered farmers
        Apiato::call('project@CreateProjectTask', [[
            'name' => 'Mobile Registration',
        ]]);
    }
}
