<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialists', function (Blueprint $table) {
            $table->bigIncrements('specialistID');
             $table->string('specialist_name',200);

            $table->unsignedBigInteger('diseaseID')->index()->nullable();
            $table->foreign('diseaseID')->references('diseaseID')->on('diseases')->onDelete('cascade')->onUpdate('No Action');

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
        Schema::dropIfExists('specialists');
    }
}
