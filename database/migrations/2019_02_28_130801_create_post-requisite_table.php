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
          $table->integer('engineering_groups_id');
          $table->integer('medical_groups_id');
          $table->integer('fine_arts_groups_id');
          $table->integer('commerce_groups_id');
          $table->integer('computer_science_groups_id');
          $table->integer('degree_id');
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
