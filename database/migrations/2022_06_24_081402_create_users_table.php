<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('name',32);
            $table->string('email',255)->unique();
            $table->string('password',255);
            $table->timestamp('created at')->useCurrent()->nullable();
            $table->timestamp('updated at')->useCurrent()->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
