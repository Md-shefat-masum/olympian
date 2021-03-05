<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socials', function (Blueprint $table) {
            $table->id();
            $table->string('sm_facebook')->nullable();
            $table->string('sm_twitter')->nullable();
            $table->string('sm_linkedin')->nullable();
            $table->string('sm_pinterest')->nullable();
            $table->string('sm_instagram')->nullable();
            $table->string('sm_youtube')->nullable();
            $table->string('sm_google')->nullable();
            $table->boolean('sm_status')->default(1);
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
        Schema::dropIfExists('socials');
    }
}
