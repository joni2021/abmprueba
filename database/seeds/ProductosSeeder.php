<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use  Faker\Factory as Facker;


class ProductosSeeder extends Seeder {


	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
	
		$faker = Facker::create();
	
		Model::unguard();
		for ($i=0; $i < 10; $i++) {
		  \DB::table('Routes')->insert(array(
		  		'producto' => $faker->company,
		  		'descripcion' => $faker->text(100),
		  		'precio' => $faker->randomFloat(2,1,100000),
		  		'foto' => $faker->image('C:\xampp\htdocs\laravel\public\img\productos',640,480,'technics'),
		  		'fkUsuario' => $faker->numberBetween(1-40),
		  	));
		}

		// $this->call('UserTableSeeder');
	}

}
