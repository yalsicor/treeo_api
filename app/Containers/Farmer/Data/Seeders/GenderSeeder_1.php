<?php

namespace App\Containers\Farmer\Data\Seeders;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Seeders\Seeder;

/**
 * Class GenderSeeder_1
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GenderSeeder_1 extends Seeder
{
    public function run()
    {
        Apiato::call('Farmer@CreateGenderTask', ['female']);
        Apiato::call('Farmer@CreateGenderTask', ['male']);
    }
}
