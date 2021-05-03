<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TeamsTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->nullable();

            $table->string('name_ar')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_tr')->nullable();

            $table->string('position_ar')->nullable();
            $table->string('position_en')->nullable();
            $table->string('position_tr')->nullable();

            $table->text('text_ar')->nullable();
            $table->text('text_en')->nullable();
            $table->text('text_tr')->nullable();

            $table->text('e_mail')->nullable();
            $table->text('facebook')->nullable();
            $table->text('instagram')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('twitter')->nullable();
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
        Schema::dropIfExists('teams');
    }
}
