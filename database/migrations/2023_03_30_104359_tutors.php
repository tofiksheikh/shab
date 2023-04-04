<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutors', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('user_name')->nullable();
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('user_type');
            $table->string('profile_image')->nullable();
            $table->string('display_video')->nullable();
            $table->string('display_heading')->nullable();
            $table->text('bio')->nullable();
            $table->text('teaching_experience_desc')->nullable();
            $table->text('about_motivational_status')->nullable();
             $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('country')->nullable();
            $table->string('ip')->nullable();
            $table->string('teaching_experience')->nullable();
            $table->string('current_status')->nullable();
            $table->string('age')->nullable();
            $table->string('time_zone')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('tutors');
    }
};
