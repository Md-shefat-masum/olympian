<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('pagename1');
            $table->string('link1')->nullable();
            $table->string('pagename2');
            $table->string('link2')->nullable();
            $table->string('pagename3');
            $table->string('link3')->nullable();
            $table->string('pagename4');            
            $table->string('link4')->nullable();
            $table->string('home_link')->nullable();
            $table->string('game_pagebanner')->nullable();
            $table->string('gallery_pagebanner')->nullable();
            $table->string('blog_pagebanner')->nullable();
            $table->string('contact_pagebanner')->nullable();
            $table->string('video_title')->nullable();
            $table->text('video_link')->nullable();
            $table->string('map_title')->nullable();
            $table->text('map_link')->nullable();            
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
        Schema::dropIfExists('pages');
    }
}
