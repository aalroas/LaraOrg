<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateUsersTable.
 */
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid');
            $table->string('full_name_ar');
            $table->string('full_name_tr')->nullable();
            $table->string('full_name_en')->nullable();

            $table->string('profile_image')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('country')->nullable();

            $table->string('position_ar')->nullable();
            $table->string('position_tr')->nullable();
            $table->string('position_en')->nullable();
            $table->unsignedTinyInteger('is_board')->default(0);
            $table->string('slug')->nullable();;









            $table->string('phone');
            $table->integer('gender')->nullable();
            $table->string('company_name_en')->nullable();
            $table->string('company_name_ar');
            $table->string('company_name_tr')->nullable();
            $table->string('sicil_no')->nullable();
            $table->string('year_founded');
            $table->string('main_location_ar');
            $table->string('main_location_en')->nullable();
            $table->string('main_location_tr')->nullable();
            $table->string('agency')->nullable();
            $table->string('number_of_employee')->nullable();
            $table->string('main_address_ar');
            $table->string('main_address_en')->nullable();
            $table->string('main_address_tr')->nullable();
            $table->string('branches_addresses')->nullable();
            $table->string('main_product')->nullable();
            $table->string('brief_description_ar')->nullable();
            $table->string('brief_description_en')->nullable();
            $table->string('brief_description_tr')->nullable();
            $table->string('partner_companies')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('email')->unique();
            $table->string('avatar_type')->default('storage');
            $table->string('password');
            $table->timestamp('password_changed_at')->nullable();
            $table->unsignedTinyInteger('active')->default(0);
            $table->string('confirmation_code')->nullable();
            $table->boolean('confirmed')->default(config('access.users.confirm_email') ? false : true);
            $table->string('timezone')->nullable();
            $table->timestamp('last_login_at')->nullable();
            $table->string('last_login_ip')->nullable();
            $table->boolean('to_be_logged_out')->default(false);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
