<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('systems', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->foreign('countries_id')->references('id')->on('countries');
      $Table->string('system_name');
      $Table->foreign('addresses_id')->references('id')->on('addresses');
      $Table->foreign('administration_type_id')->references('id')->on('administration_type');
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
    Schema::dropIfExists('systems');
  }
}
