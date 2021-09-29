<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UploadJournal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploadJournal', function (Blueprint $table) {
            $table->id();
            $table->string('author_name');
            $table->string('author_email')->unique();
            $table->string('title');
            $table->string('abstract');
            $table->string('journal');
            $table->string('doi');
            $table->string('institution');
            $table->string('institution_email');
            $table->string('affiliation');
            $table->string('country');
            $table->string('category');
            $table->string('author');
            $table->string('featured_img');
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
        Schema::dropIfExists('uploadJournal');
    }
}
