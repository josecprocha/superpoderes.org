<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('addresses', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('line1'); // Street and number
      $table->string('line2'); // District
      $table->foreign('countries_id')->references('id')->on('countries')->default('76'); // ISO 3166
      $table->foreign('country_divisions_id')->references('id')->on('country_divisions')->nullable(); // UF
        // $table->foreign('country_divisions_br_id')->references('id')->on('country_divisions_br'); // UF
      $table->string('city');
        // $table->foreign('districts_br_id')->references('id')->('districts_br');
      $table->char('postal_code', 10); // https://en.wikipedia.org/wiki/Postal_code
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
    Schema::dropIfExists('addresses');
  }
}
