<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run()
	{
		$posts = array(['titulo' => 'Laravel', 'descripcion' => 'Este es el primer post que se genera en la aplicacion', 'imagen' => 'imagen.jpg', 'contenido' => 'Me gusta mucho usar LARAVEL', 'tags' => 'UTIM', 'user_id' => 1 , 'created_at' => new DateTime, 'updated_at' => new DateTime],
						['titulo' => 'Tutorial', 'descripcion' => 'Por fa de camaradas suban un tutorial :D', 'imagen' => 'imagen2.jpg', 'contenido' => 'No puedo  instalar laravel', 'tags' => 'Linux', 'user_id' => 1 , 'created_at' => new DateTime, 'updated_at' => new DateTime]					
						);
	
		DB::table('posts')->insert($posts);
	}

}