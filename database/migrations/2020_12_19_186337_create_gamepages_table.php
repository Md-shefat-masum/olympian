<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamepagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gamepages', function (Blueprint $table) {
            $table->id();
            $table->string('game_pagename');
            $table->string('game_toplinkone')->nullable();
            $table->string('game_toplinktwo')->nullable();
            $table->string('game_pagebanner')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gamepages');
    }
}
