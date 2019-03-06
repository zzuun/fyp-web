<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDegreeInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('degree_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('merit');
            $table->boolean('shiftMorning');
            $table->boolean('shiftAfternoon');
            $table->bigInteger('fees');
            $table->bigInteger('numberOfViews');
            $table->integer('post_requisites_id');
            $table->integer('degree_id');
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
        Schema::dropIfExists('degree_infos');
    }
}
