<?php

namespace App\Containers\Media\Data\Seeders;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Seeders\Seeder;

class DefaultMediaSeeder_8 extends Seeder
{
    public function run()
    {
        // avatar
        Apiato::call('Media@SaveFileDataToDatabaseTask', [[
            'title' => 'default avatar image',
            'file' => $file = 'default_avatar.png',
            'path' => public_path('storage/defaults').'/'.$file,
            'ext' => 'png',
            'description' => 'default avatar image',
            'alt' => null,
            'filename' => $file,
            'default' => 'avatar',
        ]]);

        // title
        Apiato::call('Media@SaveFileDataToDatabaseTask', [[
            'title' => 'default title image',
            'file' => $file = 'default_header.png',
            'path' => public_path('storage/defaults').'/'.$file,
            'ext' => 'png',
            'description' => 'default title image',
            'alt' => null,
            'filename' => $file,
            'default' => 'title',
        ]]);

        // logo
        Apiato::call('Media@SaveFileDataToDatabaseTask', [[
            'title' => 'default logo image',
            'file' => $file = 'default_logo.png',
            'path' => public_path('storage/defaults').'/'.$file,
            'ext' => 'png',
            'description' => 'default logo image',
            'alt' => null,
            'filename' => $file,
            'default' => 'logo',
        ]]);
    }
}
