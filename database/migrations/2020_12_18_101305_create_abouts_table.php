<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('about_pagename');
            $table->string('about_toplinkone')->nullable();
            $table->string('about_toplinktwo')->nullable();
            $table->string('about_pagebanner')->nullable();
            $table->string('about_title');
            $table->text('about_description1')->nullable();
            $table->text('about_description2')->nullable();
            $table->text('about_description3')->nullable();
            $table->string('about_button')->nullable();
            $table->string('about_url')->nullable();
            $table->string('about_photo')->nullable();
            $table->boolean('about_status')->default(true);
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
        Schema::dropIfExists('abouts');
    }
}
