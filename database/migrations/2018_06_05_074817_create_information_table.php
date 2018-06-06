<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_ch')->nullable();
            $table->string('name_en')->nullable();
            $table->string('school')->nullable();
            $table->string('degree')->nullable();
            $table->string('self_intro')->nullable();
            $table->json('about')->nullable();
            $table->json('projects')->nullable();
            $table->json('skills')->nullable();
            $table->json('contact_info')->nullable();
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
        Schema::dropIfExists('information');
    }
}
