<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostRequisiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('post_requisites', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer('engineering_group_id');
          $table->integer('medical_group_id');
          $table->integer('fine_arts_group_id');
          $table->integer('commerce_group_id');
          $table->integer('computer_science_group_id');
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
        //
    }
}
