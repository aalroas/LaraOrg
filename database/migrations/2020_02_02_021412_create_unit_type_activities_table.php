<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitTypeActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_type_activities', function (Blueprint $table) {
            // $table->increments('id');
            $table->increments('activity_id')->unsigned()->index();
            $table->integer('unit_type_id')->unsigned()->index();
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
        Schema::dropIfExists('unit_type_activities');
    }
}
