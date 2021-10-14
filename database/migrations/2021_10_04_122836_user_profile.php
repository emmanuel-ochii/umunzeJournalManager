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
        Schema::create('userProfile', function (Blueprint $table) {
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
        Schema::dropIfExists('userProfile');
    }
}
