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
            $table->foreign('user_id')->references('id')->on('user');
            $table->date('work_day');
            $table->time('start_time');
            $table->time('end_time');
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('attendaces');
    }
}
