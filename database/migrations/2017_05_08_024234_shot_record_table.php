<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ShotRecordTable extends Migration
{

    public function up()
    {
        Schema::create('shotRecords', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shot_id')->unsigned();
            $table->foreign('shot_id')->references('id')->on('shots');
            $table->integer('pet_id')->unsigned();
            $table->foreign('pet_id')->references('id')->on('pets');
            $table->string('date_administered');
            $table->string('date_renewal');
            $table->timestamps('created_at');
        });
    }

    public function down()
    {
        Schema::drop('shotRecords');
    }
}
