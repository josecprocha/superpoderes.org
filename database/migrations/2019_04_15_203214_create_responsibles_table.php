<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsiblesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('responsibles', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->foreign('people_id')->references('id')->on('people'); // A person of legal age ...
      $table->foreign('kinships_id')->references('id')->on('kinships');
      $table->foreign('people_id')->references('id')->on('people'); // Can be responsible for n children.
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
    Schema::dropIfExists('responsibles');
  }
}
