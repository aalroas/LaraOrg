<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ActivityImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('activity_id')->unsigned();
            $table->string('activity_image_path');
            $table->foreign('activity_id')->references('id')->on('activities')->onDelete('cascade');
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
        Schema::dropIfExists('activity_images');
    }
}
