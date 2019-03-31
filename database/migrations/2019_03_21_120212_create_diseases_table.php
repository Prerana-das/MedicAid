<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiseasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diseases', function (Blueprint $table) {
            $table->bigIncrements('diseaseID');
            $table->string('disease_name',200);
            $table->text('disease_description');
            $table->text('disease_tag')->nullable();
            $table->text('tips');
             $table->unsignedBigInteger('ageID')->index()->nullable();
            $table->foreign('ageID')->references('ageID')->on('ages')->onDelete('cascade')->onUpdate('No Action');

             $table->unsignedBigInteger('genderID')->index()->nullable();
            $table->foreign('genderID')->references('genderID')->on('genders')->onDelete('cascade')->onUpdate('No Action');

             $table->unsignedBigInteger('symptomID')->index()->nullable();
            $table->foreign('symptomID')->references('symptomID')->on('symptoms')->onDelete('cascade')->onUpdate('No Action');

            $table->unsignedBigInteger('userID')->index()->nullable();
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade')->onUpdate('No Action');
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
        Schema::dropIfExists('diseases');
    }
}
