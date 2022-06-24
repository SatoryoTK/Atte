<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestTable extends Migration
{
    public function up()
    {
        Schema::create('rests', function (Blueprint $table) {
            $table->unsinedBigInteger('id');
            $table->foreign('attendaces_id')->references('id')->on('attendaces');
            $table->time('start_time');
            $table->time('end_time');
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rests');
    }
}