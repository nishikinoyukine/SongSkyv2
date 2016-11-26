<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comentario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('comentario');
            $table->integer('user_id')->unsigned();
            $table->integer('com_user')->unsigned();
            $table->foreign('com_user')->references('id')->on('users');
            $table->foreign('user_id')->references('id')->on('users');                  
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('comentario');
    }
}
