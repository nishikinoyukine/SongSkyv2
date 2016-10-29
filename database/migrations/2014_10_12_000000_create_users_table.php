<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('Nombre');
            $table->string('Apellidos');
            $table->string('Personal_Image');
            $table->string('Banner_Image');
            $table->string('Principal_Song');
            $table->string('Nombre_user');
            $table->string('password');
            $table->string('Fecha_Nacimiento');
            $table->string('Sexo');
            $table->string('Calle');
            $table->string('Numero');
            $table->string('Colonia');
            $table->string('Municipio');
            $table->string('Estado');
            $table->integer('codigo_Postal');
            $table->rememberToken();
            $table->timestamps();
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
