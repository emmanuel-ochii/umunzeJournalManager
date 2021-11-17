<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profile', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('middlename');
            $table->string('job_title');
            $table->string('email')->unique();
            $table->string('institution_email')->unique();
            $table->string('institution_name');
            $table->string('profile_img');
            $table->string('social_linkedin')->unique();
            $table->string('social_facebook')->unique();
            $table->string('social_twitter')->unique();
            $table->string('social_instagram')->unique();
            $table->string('mobile_number')->unique();
            $table->string('home_address')->nullable();
            $table->string('office_number')->unique();
            $table->string('office_address')->nullable();
            $table->string('qualification_1')->nullable();
            $table->string('qualification_2')->nullable();
            $table->string('qualification_3')->nullable();
            $table->string('qualification_4')->nullable();
            $table->string('institution_1');
            $table->string('appointment_1');
            $table->string('institution_2')->nullable();
            $table->string('appointment_2')->nullable();
            $table->string('interests')->nullable();
            $table->string('ctr_1')->nullable();
            $table->string('ctr_2')->nullable();
            $table->string('ctr_3')->nullable();
            $table->string('ctr_4')->nullable();
            $table->string('ctr_5')->nullable();
            $table->string('ctr_6')->nullable();
            $table->string('publication_1')->nullable();
            $table->string('publication_2')->nullable();
            $table->string('publication_3')->nullable();
            $table->string('publication_4')->nullable();
            $table->string('publication_5')->nullable();
            $table->string('publication_6')->nullable();
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
        Schema::dropIfExists('user_profile');
    }
}
