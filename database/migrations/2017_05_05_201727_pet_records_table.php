<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PetRecordsTable extends Migration
{

    public function up()
    {
        // Schema::create('petRecords', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->integer('petId')->unsigned();
        //     $table->foreign('petId')->references('id')->on('pets');
        });
    }

    public function down()
    {
        // Schema::drop('petRecords');
    }
}


