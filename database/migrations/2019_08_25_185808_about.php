<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class about extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
   Schema::create('abouts', function (Blueprint $table) {
            $table->integer('id');
            $table->string('about_image')->nullable();
            $table->string('counter_image')->nullable();



            $table->string('about_title_ar')->nullable();
            $table->string('about_title_en')->nullable();
            $table->string('about_title_tr')->nullable();

            $table->text('about_text_ar')->nullable();
            $table->text('about_text_en')->nullable();
            $table->text('about_text_tr')->nullable();



            $table->string('mission_title_ar')->nullable();
            $table->string('mission_title_en')->nullable();
            $table->string('mission_title_tr')->nullable();

            $table->text('mission_text_ar')->nullable();
            $table->text('mission_text_en')->nullable();
            $table->text('mission_text_tr')->nullable();

            $table->string('url')->nullable();

            $table->string('vision_title_ar')->nullable();
            $table->string('vision_title_en')->nullable();
            $table->string('vision_title_tr')->nullable();

            $table->text('vision_text_ar')->nullable();
            $table->text('vision_text_en')->nullable();
            $table->text('vision_text_tr')->nullable();

            $table->string('counter1')->nullable();
            $table->string('counter2')->nullable();
            $table->string('counter3')->nullable();
            $table->string('counter4')->nullable();



            $table->string('objectives_title_ar')->nullable();
            $table->string('objectives_title_en')->nullable();
            $table->string('objectives_title_tr')->nullable();

            $table->text('objectives_text_ar')->nullable();
            $table->text('objectives_text_en')->nullable();
            $table->text('objectives_text_tr')->nullable();

            $table->string('counter_title_ar')->nullable();
            $table->string('counter_title_en')->nullable();
            $table->string('counter_title_tr')->nullable();

            $table->text('counter_text_ar')->nullable();
            $table->text('counter_text_en')->nullable();
            $table->text('counter_text_tr')->nullable();
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
         Schema::dropIfExists('abouts');
    }
}
