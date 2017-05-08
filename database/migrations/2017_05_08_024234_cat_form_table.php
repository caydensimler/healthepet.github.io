<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CatFormTable extends Migration
{

    public function up()
    {
        Schema::create('cats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('breed');
            $table->string('sex');
            $table->integer('age');
            $table->integer('phoneNumber');
            $table->boolean('panleukopenia')->default(false);
            $table->boolean('rhinotracheitis')->default(false);
            $table->boolean('calicivirus')->default(false);
            $table->boolean('rabies')->default(false);
            $table->boolean('feline_leukemia')->default(false);
            $table->boolean('chlamydophila')->default(false);
            $table->boolean('feline_infectious_peritonitis')->default(false);
            $table->boolean('bordetella')->default(false);
            $table->boolean('giardia')->default(false);
            $table->boolean('feline_immunodeficiency_virus')->default(false);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('vet_id')->unsigned();
            $table->foreign('vet_id')->references('id')->on('vets');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::drop('cats');
    }
}
