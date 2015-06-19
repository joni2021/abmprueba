<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use  Faker\Factory as Facker;


class UsuariosSeeder extends Seeder {


	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
	
		$faker = Facker::create();
	
		Model::unguard();
		for ($i=0; $i < 40; $i++) {
		  \DB::table('usuarios')->insert(array(
		  		'nombre' => $faker->firstName,
		  		'apellido' => $faker->lastName,
		  		'email' => $faker->email,
		  		'fkSexo' => $faker->numberBetween($min = 1, $max = 2),
		  		'fkNivel' => '2',
		  		'usuario' => $faker->userName,
		  		'estado' => 1,
		  		'password' => \Hash::make('1234')
		  	));
		}

		// $this->call('UserTableSeeder');
	}

}
