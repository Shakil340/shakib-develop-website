<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeServiceSubTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_service_sub_titles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('home_services_id');
            $table->string('name');
            $table->tinyInteger('status');
            $table->timestamps();

            $table->foreign('home_services_id')->on('home_services')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_service_sub_titles');
    }
}
