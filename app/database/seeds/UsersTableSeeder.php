<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$users = array(['nombre' => 'Manuel', 'email' => 'manuale_flores07@hotmail.com', 'username' => 'Manu07', 'password' => 'manuel', 'rol' => 'admin', 'activo' => true, 'created_at' => new DateTime, 'updated_at' => new DateTime],
						['nombre' => 'Luis', 'email' => 'luis95@gmail.com', 'username' => 'Luis95', 'password' => 'luis', 'rol' => 'user', 'activo' => true, 'created_at' => new DateTime, 'updated_at' => new DateTime]);
	
		DB::table('users')->insert($users);
	}

}