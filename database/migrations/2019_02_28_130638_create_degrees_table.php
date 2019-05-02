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
            $table->float('duration',2,1);
            $table->string('system');
            $table->string('degreeLevel');
            $table->integer('creditHours')->nullable();
            $table->float('lastMerit',4,2)->nullable();
            $table->float('lastMeritA',4,2)->nullable();
            $table->boolean('shiftMorning');
            $table->boolean('shiftAfternoon');
            $table->integer('noOfSeats');
            $table->integer('noOfSeatsA')->nullable()->default(0);
            $table->bigInteger('fees');
            $table->bigInteger('feesA')->nullable()->default(0);
            $table->bigInteger('numberOfViews')->default(0);
            $table->integer('post_requisites_id')->nullable();
            $table->integer('degree_groups_id');
            $table->integer('institute_id');
            $table->integer('department_id')->nullable();
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
