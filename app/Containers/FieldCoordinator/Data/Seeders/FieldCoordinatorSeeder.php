<?php

namespace App\Containers\FieldCoordinator\Data\Seeders;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Seeders\Seeder;

/**
 * Class FieldCoordinatorSeeder
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FieldCoordinatorSeeder extends Seeder
{
    public function run()
    {
        //seed initial data
        Apiato::call('FieldCoordinator@CreateFieldCoordinatorTask', [[
            'name' => 'Rentas Gunawan',
        ]]);

        Apiato::call('FieldCoordinator@CreateFieldCoordinatorTask', [[
            'name' => 'Hendra',
        ]]);

        Apiato::call('FieldCoordinator@CreateFieldCoordinatorTask', [[
            'name' => 'Jonie',
        ]]);

        Apiato::call('FieldCoordinator@CreateFieldCoordinatorTask', [[
            'name' => 'Suadi',
        ]]);

        Apiato::call('FieldCoordinator@CreateFieldCoordinatorTask', [[
            'name' => 'Jhony Sheva',
        ]]);

        Apiato::call('FieldCoordinator@CreateFieldCoordinatorTask', [[
            'name' => 'Marliadi',
        ]]);

    }
}
