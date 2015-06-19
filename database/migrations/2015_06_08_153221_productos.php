<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Productos extends Migration {
    public function up()
    {
        Schema::create('Routes', function(Blueprint $table)
        {
            $table->increments('idProducto');
            $table->string('producto')->required();
            $table->text('descripcion');
            $table->decimal('precio',6,2);
            $table->string('foto');
            $table->integer('fkUsuario')->unsigned;
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->foreign('fkUsuario')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Routes');
    }

}
