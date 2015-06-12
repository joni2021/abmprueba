<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sexos extends Migration {
	
	public function up()
	{
	Schema::create('sexos', function(Blueprint $table)
		{
			$table->increments('idSexo');
			$table->string('sexo')->required();
			$table->string('remember_token')->index();
			$table->timestamp('created_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sexos');
	}

}
