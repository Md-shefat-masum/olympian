<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basics', function (Blueprint $table) {
            $table->id();
            $table->string('basic_name');
            $table->string('basic_title');
            $table->text('basic_subtitle')->nullable();
            $table->text('basic_aboutus')->nullable();
            $table->text('basic_details')->nullable();
            $table->string('basic_favicon')->nullable();
            $table->string('basic_logo')->nullable();
            $table->string('basic_stickylogo')->nullable();
            $table->string('basic_flogo')->nullable();
            $table->boolean('basic_status')->default(1);
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
        Schema::dropIfExists('basics');
    }
}
