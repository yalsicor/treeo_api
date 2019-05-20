<?php

namespace App\Containers\Authorization\Data\Seeders;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Seeders\Seeder;

/**
 * Class AuthorizationDefaultUsersSeeder_3
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class AuthorizationDefaultUsersSeeder_3 extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Default Users (with their roles) ---------------------------------------------
        $user = Apiato::call('User@CreateUserByCredentialsTask', [
            'admin@admin.com',
            'admin',
            $isClient = false,
            'admin',
            'Super Admin',
        ])->assignRole(Apiato::call('Authorization@FindRoleTask', ['admin']));

        //create farmer
        Apiato::call('Farmer@CreateFarmerTask', [[
            'user_id'                   => $user->id,
            'name'                      => 'admin',
            'story'                     => 'my story',
            'children'                  => 0,
            'birthday'                  => '1980-08-25',
            'photo_id'                  => null,
            'main_occupation'           => 'something',
            'side_occupation'           => 'something else',
            'spouse_name'               => 'no idea',
            'spouse_birthday'           => '1980-08-25',
            'spouse_main_occupation'    => 'something',
            'spouse_side_occupation'    => 'something else',
            'family_income_idr'         => 20000,
            'address'                   => 'somewhere',
            'gender_id'                 => 2,
            'import_id'                 => null,
            'project_id'                => 1,
        ]]);

        $user = Apiato::call('User@CreateUserByCredentialsTask', [
            'stefan.haas@openforests.com',
            'openforests',
            $isClient = false,
            'stefan',
            'Stefan Haas',
        ])->assignRole(Apiato::call('Authorization@FindRoleTask', ['admin']));

        //create farmer
        Apiato::call('Farmer@CreateFarmerTask', [[
            'user_id'                   => $user->id,
            'name'                      => 'Stefan',
            'story'                     => 'my story',
            'children'                  => 0,
            'birthday'                  => '1980-08-25',
            'photo_id'                  => null,
            'main_occupation'           => 'something',
            'side_occupation'           => 'something else',
            'spouse_name'               => 'no idea',
            'spouse_birthday'           => '1980-08-25',
            'spouse_main_occupation'    => 'something',
            'spouse_side_occupation'    => 'something else',
            'family_income_idr'         => 20000,
            'address'                   => 'somewhere',
            'gender_id'                 => 2,
            'import_id'                 => null,
            'project_id'                => 1,
        ]]);

        $user = Apiato::call('User@CreateUserByCredentialsTask', [
            'felix.hinze@openforests.com',
            'openforests',
            $isClient = false,
            'felix',
            'Felix Hinze',
        ])->assignRole(Apiato::call('Authorization@FindRoleTask', ['admin']));

        //create farmer
        Apiato::call('Farmer@CreateFarmerTask', [[
            'user_id'                   => $user->id,
            'name'                      => 'Felix',
            'story'                     => 'my story',
            'children'                  => 0,
            'birthday'                  => '1980-08-25',
            'photo_id'                  => null,
            'main_occupation'           => 'something',
            'side_occupation'           => 'something else',
            'spouse_name'               => 'no idea',
            'spouse_birthday'           => '1980-08-25',
            'spouse_main_occupation'    => 'something',
            'spouse_side_occupation'    => 'something else',
            'family_income_idr'         => 20000,
            'address'                   => 'somewhere',
            'gender_id'                 => 2,
            'import_id'                 => null,
            'project_id'                => 1,
        ]]);

        $user = Apiato::call('User@CreateUserByCredentialsTask', [
            'gerrit.balindt@b-lack.io',
            'openforests',
            $isClient = false,
            'gerrit',
            'Gerrit Balindt',
        ])->assignRole(Apiato::call('Authorization@FindRoleTask', ['admin']));

        //create farmer
        Apiato::call('Farmer@CreateFarmerTask', [[
            'user_id'                   => $user->id,
            'name'                      => 'Gerrit',
            'story'                     => 'my story',
            'children'                  => 0,
            'birthday'                  => '1980-08-25',
            'photo_id'                  => null,
            'main_occupation'           => 'something',
            'side_occupation'           => 'something else',
            'spouse_name'               => 'no idea',
            'spouse_birthday'           => '1980-08-25',
            'spouse_main_occupation'    => 'something',
            'spouse_side_occupation'    => 'something else',
            'family_income_idr'         => 20000,
            'address'                   => 'somewhere',
            'gender_id'                 => 2,
            'import_id'                 => null,
            'project_id'                => 1,
        ]]);

        $user = Apiato::call('User@CreateUserByCredentialsTask', [
            'sebastian.weckend@openforests.com',
            'openforests',
            $isClient = false,
            'spokk',
            'Sebastian Weckend',
        ])->assignRole(Apiato::call('Authorization@FindRoleTask', ['admin']));

        //create farmer
        Apiato::call('Farmer@CreateFarmerTask', [[
            'user_id'                   => $user->id,
            'name'                      => 'Spokk',
            'story'                     => 'my story',
            'children'                  => 0,
            'birthday'                  => '1980-08-25',
            'photo_id'                  => null,
            'main_occupation'           => 'something',
            'side_occupation'           => 'something else',
            'spouse_name'               => 'no idea',
            'spouse_birthday'           => '1980-08-25',
            'spouse_main_occupation'    => 'something',
            'spouse_side_occupation'    => 'something else',
            'family_income_idr'         => 20000,
            'address'                   => 'somewhere',
            'gender_id'                 => 2,
            'import_id'                 => null,
            'project_id'                => 1,
        ]]);

        // farmer test account
        $user = Apiato::call('User@CreateUserByCredentialsTask', [
            'gerrit.balindt@gruenecho.de',
            'openforests',
            $isClient = true,
            'farmer',
            'Test Farmer',
        ])->assignRole(Apiato::call('Authorization@FindRoleTask', ['farmer']));

        //create farmer
        Apiato::call('Farmer@CreateFarmerTask', [[
            'user_id'                   => $user->id,
            'name'                      => 'Test Farmer',
            'story'                     => 'my story',
            'children'                  => 0,
            'birthday'                  => '1980-08-25',
            'photo_id'                  => null,
            'main_occupation'           => 'something',
            'side_occupation'           => 'something else',
            'spouse_name'               => 'no idea',
            'spouse_birthday'           => '1980-08-25',
            'spouse_main_occupation'    => 'something',
            'spouse_side_occupation'    => 'something else',
            'family_income_idr'         => 20000,
            'address'                   => 'somewhere',
            'gender_id'                 => 2,
            'import_id'                 => null,
            'project_id'                => 1,
        ]]);

    }
}
