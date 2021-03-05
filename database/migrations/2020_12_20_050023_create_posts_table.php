<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('post_title');
            $table->string('post_slug');
            $table->unsignedBigInteger('user_id');
            $table->text('post_body1')->nullable();
            $table->text('post_body2')->nullable();
            $table->text('post_body3')->nullable();
            $table->text('post_body4')->nullable();
            $table->string('post_image')->nullable();
            $table->string('post_thumb')->nullable();
            $table->boolean('post_status')->default(true);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
