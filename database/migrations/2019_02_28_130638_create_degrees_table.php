<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDegreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('degrees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('duration');
            $table->string('system');
            $table->integer('noOfSeats');
            $table->integer('creditHours');
            $table->integer('lastMerit');
            $table->boolean('shiftMorning');
            $table->boolean('shiftAfternoon');
            $table->bigInteger('fees');
            $table->bigInteger('numberOfViews');
            $table->integer('post_requisites_id');
            $table->integer('institute_id');
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
        Schema::dropIfExists('degrees');
    }
}
