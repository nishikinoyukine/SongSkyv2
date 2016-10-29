<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Conlista extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('listacon', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
                       $table->integer('cancion_id')->unsigned();
            $table->foreign('cancion_id')->references('id')->on('cancion');
                       $table->integer('lista_id')->unsigned();
            $table->foreign('lista_id')->references('id')->on('listarep');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('listacon');
    }
}
