<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_ar')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_tr')->nullable();

            $table->string('slug')->nullable();

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
        Schema::dropIfExists('activity_types');
    }
}
