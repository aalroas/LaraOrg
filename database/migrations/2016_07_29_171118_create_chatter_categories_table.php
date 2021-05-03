<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChatterCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('chatter_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->unsigned()->nullable();
            $table->integer('order')->default(1);
            $table->string('name_ar');
            $table->string('name_en');
            $table->string('name_tr');
            $table->string('color', 20);
            $table->string('slug');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('chatter_categories');
    }
}
