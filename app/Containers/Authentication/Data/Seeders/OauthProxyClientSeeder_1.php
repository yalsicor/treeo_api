<?php

namespace App\Containers\Authorization\Data\Seeders;

use App\Ship\Parents\Seeders\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class OauthProxyClientSeeder_1
 *
 * @author  Sebastian Weckend  <sebastian.weckend@posteo.de>
 */
class OauthProxyClientSeeder_1 extends Seeder
{

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		// create clients
		DB::table('oauth_clients')->insert([
			[
				'id'                     => 1,
				'secret'                 => 'q3Zxy6hPMx6AFdY59oRKZJWzst6oT7LDc3fRS5Cq',
				'name'                   => "ProjectManager Personal Access Client",
				'redirect'               => 'http://localhost',
				'password_client'        => '0',
				'personal_access_client' => '1',
				'revoked'                => '0',
			],
		]);

		DB::table('oauth_clients')->insert([
			[
				'id'                     => 2,
				'secret'                 => "xURnfLEelqaMHWTD3H4Q94dBQUHcTYO2rlKrUzSq",
				'name'                   => "ProjectManager Password Grant Client",
				'redirect'               => 'http://localhost',
				'password_client'        => '1',
				'personal_access_client' => '0',
				'revoked'                => '0',
			],
		]);

        DB::table('oauth_clients')->insert([
            [
                'id'                     => 3,
                'secret'                 => "eA6T3X6IjMjvkV8BnpADU8nKMmU1Jk822SIhQ7uC",
                'name'                   => "ProjectManager Password Grant Client",
                'redirect'               => 'http://localhost',
                'password_client'        => '1',
                'personal_access_client' => '0',
                'revoked'                => '0',
            ],
        ]);

    }
}
