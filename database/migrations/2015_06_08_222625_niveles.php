<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Niveles extends Migration {
	
	public function up()
	{
	Schema::create('niveles', function(Blueprint $table)
		{
			$table->increments('idNivel');
			$table->string('nivel')->required();
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
		Schema::drop('niveles');
	}

}
