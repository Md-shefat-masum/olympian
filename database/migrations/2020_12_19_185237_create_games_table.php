<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('game_title');
            $table->string('game_subtitle')->nullable();
            $table->string('game_company')->nullable();
            $table->text('game_description1')->nullable();
            $table->text('game_description2')->nullable();
            $table->text('game_description3')->nullable();
            $table->text('game_description4')->nullable();
            $table->string('game_photo1')->nullable();
            $table->string('game_photo2')->nullable();
            $table->string('game_button')->nullable();
            $table->string('game_url')->nullable();
            $table->timestamp('game_launchdate')->nullable();
            $table->text('game_note1')->nullable();
            $table->text('game_note2')->nullable();
            $table->text('game_note3')->nullable();
            $table->text('game_note4')->nullable();
            $table->string('game_feature_title1')->nullable();
            $table->text('game_feature_subtitle1')->nullable();
            $table->string('game_feature_title2')->nullable();
            $table->text('game_feature_subtitle2')->nullable();
            $table->string('game_feature_title3')->nullable();
            $table->text('game_feature_subtitle3')->nullable();
            $table->string('game_feature_title4')->nullable();
            $table->text('game_feature_subtitle4')->nullable();
            $table->boolean('game_status')->default(true);
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
        Schema::dropIfExists('games');
    }
}
