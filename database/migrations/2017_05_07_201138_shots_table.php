<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ShotsTable extends Migration
{

    public function up()
    {
        Schema::create('shots', function (Blueprint $table) {
            $table->increments('id');
           
            $table->string('shotName');
            $table->string('species');

            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::drop('shots');
    }
}
