<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('schools', function (Blueprint $table) {
      $table->bigIncrements('id');
      $Table->foreign('systems_id')->references('id')->on('systems'); // educational system
      $Table->string('school_name');
      $Table->foreign('addresses_id')->references('id')->on('addresses');
      $Table->string('city');
      // $Table->foreign('cities_id')->references('id')->on('cities');
      $Table->foreign('administration_type_id')->references('id')->on('administration_type');
      $Table->foreign('localization_type_id')->references('id')->on('localization_type');
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
    Schema::dropIfExists('schools');
  }
}
