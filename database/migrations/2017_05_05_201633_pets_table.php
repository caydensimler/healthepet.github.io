<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PetsTable extends Migration
{
    public function up()
    {
        Schema::create('pets', function (Blueprint $table){
            $table->increments('id');
            $table->integer('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('users');
            $table->string('petName');
            $table->string('species');
            $table->string('sex');
            $table->string('breed');
            $table->integer('age');
            $table->string('color');
            $table->integer('weight');
            $table->integer('microchip');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::drop('pets');
    }
}
