<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PetsTable extends Migration
{

    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('species');
            $table->string('breed');
            $table->string('sex');
            $table->integer('weight');
            $table->string('color');
            $table->integer('age');
            $table->integer('owner_id')->unsigned();
            $table->foreign('owner_id')->references('id')->on('users');
            $table->integer('vet_id')->unsigned();
            $table->foreign('vet_id')->references('id')->on('users');
            $table->string('img');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('pets');
    }
}
