<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DogFormTable extends Migration
{

    public function up()
    {
        Schema::create('dogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('breed');
            $table->string('sex');
            $table->integer('age');
            $table->integer('phoneNumber');
            $table->boolean('canine_distemper')->default(false);
            $table->boolean('measles')->default(false);
            $table->boolean('parvovirus')->default(false);
            $table->boolean('hepatitis')->default(false);
            $table->boolean('rabies')->default(false);
            $table->boolean('CAV2')->default(false);
            $table->boolean('parainfluenza')->default(false);
            $table->boolean('bordetella')->default(false);
            $table->boolean('leptospirosis')->default(false);
            $table->boolean('coronavirus')->default(false);
            $table->boolean('lyme')->default(false);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('vet_id')->unsigned();
            $table->foreign('vet_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('dogs');
    }
}
