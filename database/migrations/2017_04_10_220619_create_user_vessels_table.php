<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserVesselsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userVessels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('desription')->unique();
            $table->binary('img');
            $table->unsignedInteger('ownerId');
            $table->foreign('ownerId')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userVessels');
    }
}
