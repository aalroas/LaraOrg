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
            $table->bigIncrements('id');

            $table->string('title_ar', 100);
            $table->string('title_tr', 100);
            $table->string('title_en', 100);
            $table->text('text_ar');
            $table->text('text_tr');
            $table->text('text_en');
            $table->string('slug');
            $table->string('date');
            $table->string('f_image');
            $table->integer('unit_type');
            $table->integer('activity_type');
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
