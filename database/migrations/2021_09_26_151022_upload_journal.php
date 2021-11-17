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
        Schema::create('journals', function (Blueprint $table) {
            $table->id();
            $table->string('author_name');
            $table->string('author_email');
            $table->string('title');
            $table->text('abstract');
            $table->string('journal');
            $table->string('doi');
            $table->string('issn');
            $table->string('institution');
            $table->string('institution_email');
            $table->string('affiliation');
            $table->string('country');
            $table->string('category');
            $table->boolean('status')->default(1);
            $table->string('uploaded_by');
            $table->string('featured_img');
            $table->integer('user_id');
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
        Schema::dropIfExists('journals');
    }
}
