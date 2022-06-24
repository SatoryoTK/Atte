<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendacesTable extends Migration
{
    public function up()
    {
        Schema::create('attendaces', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->foreign('user id')->references('id')->on('user');
            $table->date('work day');
            $table->time('start time');
            $table->time('end time');
            $table->timestamp('created at')->useCurrent()->nullable();
            $table->timestamp('updated at')->useCurrent()->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('attendaces');
    }
}
