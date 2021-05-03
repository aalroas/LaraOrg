<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_ar');
            $table->string('title_tr');
            $table->string('title_en');
            $table->text('text_ar');
            $table->text('text_tr');
            $table->text('text_en');
            $table->string('slug');
            $table->string('date');
            $table->string('f_image');
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
        Schema::dropIfExists('activities');
    }
}
