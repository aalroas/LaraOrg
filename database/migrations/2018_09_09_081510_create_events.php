<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->nullable();
			$table->datetime('start_date');
            $table->datetime('end_date');
            $table->text('slug')->nullable();
            $table->text('name_ar');
            $table->text('name_en')->nullable();
            $table->text('name_tr')->nullable();
            $table->longText('text_tr')->nullable();
            $table->longText('text_en')->nullable();
            $table->longText('text_ar');
            $table->string('location_ar');
            $table->string('location_tr');
            $table->string('location_en');
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
        Schema::dropIfExists('events');
    }
}
