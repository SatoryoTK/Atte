<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestTable extends Migration
{
    public function up()
    {
        Schema::create('rest', function (Blueprint $table) {
            $table->unsinedBigInteger('id');
            $table->foreign('attendaces id')->references('id')->on('attendaces');
            $table->time('start time');
            $table->time('end time');
            $table->timestamp('created at')->useCurrent()->nullable();
            $table->timestamp('updated at')->useCurrent()->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rest');
    }
}
