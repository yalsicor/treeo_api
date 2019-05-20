<?php

namespace App\Containers\Settings\Data\Seeders;

use App\Containers\Settings\Models\Setting;
use App\Ship\Parents\Seeders\Seeder;

/**
 * Class SettingsDefaultSettingsSeeder
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class SettingsDefaultSettingsSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'key'       => 'formfactor',
            'value'     => '0.8',
        ]);
        Setting::create([
            'key'       => 'idr_per_m3',
            'value'     => '600000',
        ]);
        Setting::create([
            'key'       => 'conversion_ird_to_usd',
            'value'     => '0.0000688750',
        ]);

    }
}
