<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use  Faker\Factory as Facker;


class SexosSeeder extends Seeder {


	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
	
		$faker = Facker::create();
	
		Model::unguard();
		 \DB::table('sexos')->insert(array(
		  		'sexo' => 'masculino'
		));

		 \DB::table('sexos')->insert(array(
		  		'sexo' => 'femenino'
		));
				// $this->call('UserTableSeeder');
	}

}
