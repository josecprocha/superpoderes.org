<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleMetasTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('people_metas', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->foreign('people_id')->references('id')->on('people');
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
    Schema::dropIfExists('people_metas');
  }
}
