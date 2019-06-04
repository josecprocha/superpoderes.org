<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsMetasTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('students_metas', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->foreign('students_id')->references('id')->on('students');
      $table->string('attribute_name');
      $table->string('attribute_value');
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
    Schema::dropIfExists('students_metas');
  }
}
