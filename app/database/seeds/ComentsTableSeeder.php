<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ComentsTableSeeder extends Seeder {

	public function run()
	{
		
		$coments = array(['user_id' => 1, 'post_id' => 1,'comentario' => 'Buenas Tardes amigos', 'created_at' => new DateTime, 'updated_at' => new DateTime],
					['user_id' => 1, 'post_id' => 2, 'comentario' => 'Buenas Noches aqui instalando Laravel', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
	
		DB::table('coments')->insert($coments);

	}

}