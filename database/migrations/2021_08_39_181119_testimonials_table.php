<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TestimonialsTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->nullable();

            $table->string('url')->nullable();



            $table->string('title_ar')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_tr')->nullable();

            $table->text('text_ar')->nullable();
            $table->text('text_en')->nullable();
            $table->text('text_tr')->nullable();

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
        Schema::dropIfExists('testimonials');
    }
}
