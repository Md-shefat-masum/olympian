<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_information', function (Blueprint $table) {
            $table->id();
            $table->string('ci_phone1')->nullable();
            $table->string('ci_phone2')->nullable();
            $table->string('ci_email1')->nullable();
            $table->string('ci_email2')->nullable();
            $table->text('ci_add1')->nullable();
            $table->text('ci_add2')->nullable();
            $table->boolean('ci_status')->default(1);
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
        Schema::dropIfExists('contact_information');
    }
}
