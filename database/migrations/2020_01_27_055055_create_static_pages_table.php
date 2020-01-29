<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaticPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('static_pages', function (Blueprint $table) {
            $table->bigIncrements('id');


            $table->string('t_title_ar')->nullable();
            $table->string('t_title_tr')->nullable();
            $table->string('t_title_en')->nullable();
            $table->text('t_text_ar')->nullable();
            $table->text('t_text_en')->nullable();
            $table->text('t_text_tr')->nullable();


            $table->string('p_title_ar')->nullable();
            $table->string('p_title_tr')->nullable();
            $table->string('p_title_en')->nullable();
            $table->text('p_text_ar')->nullable();
            $table->text('p_text_en')->nullable();
            $table->text('p_text_tr')->nullable();



            $table->string('o_title_ar')->nullable();
            $table->string('o_title_tr')->nullable();
            $table->string('o_title_en')->nullable();
            $table->text('o_text_ar')->nullable();
            $table->text('o_text_en')->nullable();
            $table->text('o_text_tr')->nullable();
            $table->string('o_image')->nullable();


            $table->string('g_title_ar')->nullable();
            $table->string('g_title_tr')->nullable();
            $table->string('g_title_en')->nullable();
            $table->text('g_text_ar')->nullable();
            $table->text('g_text_en')->nullable();
            $table->text('g_text_tr')->nullable();
            $table->string('g_pdf')->nullable();



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
        Schema::dropIfExists('static_pages');
    }
}
