<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre')->required();
			$table->string('apellido');
			$table->string('email')->unique();
			$table->integer('fkSexo')->unsigned;
			$table->integer('fkNivel')->unsigned;
			$table->string('usuario');
			$table->string('password',60)->index();
			$table->tinyInteger('estado',1);
			$table->string('remember_token')->index();
			$table->timestamp('created_at');
			$table->timestamp('updated_at');
			$table->foreign('fkSexo')->references('idSexo')->on('sexos');
			$table->foreign('fkNivel')->references('idNivel')->on('niveles');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuarios');
	}

}
