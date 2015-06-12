<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use  Faker\Factory as Facker;


class NivelesSeeder extends Seeder {


	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
	
		$faker = Facker::create();
	
		Model::unguard();
		 \DB::table('niveles')->insert(array(
		  		'nivel' => 'admin'		  		
		));

		 \DB::table('niveles')->insert(array(
		  		'nivel' => 'user'		  		
		));


				// $this->call('UserTableSeeder');
	}

}
