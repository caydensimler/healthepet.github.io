<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VetsTable extends Migration
{

    public function up()
    {
        Schema::create('vets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clinicId');
            $table->string('email');
            $table->string('address');
            $table->tinyInteger('phoneNumber');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('vets');
    }
}
