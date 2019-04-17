<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('people', function (Blueprint $table) {
      $table->bigIncrements('id'); // 18.446.744.073.709.551.615, 19 full decimal places, not 20.
      $table->string('username')->unique();
      $table->string('first_name');
      $table->string('last_name');
      $table->boolean('twin')->default(false); // Yes or no
      $table->date('birthday');
      $table->foreign('current_country')->references('id')->on('countries')->default('BR');	// ISO 3166
      $table->foreign('country_of_birth')->references('id')->on('countries')->default('BR'); // ISO 3166
      $table->string('adorable_io'); //->default(Str::random(15)); // use Illuminate\Support\Str;
      // $table->foreign('disabilities_id')->references('id')->on('disabilities');
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
    Schema::dropIfExists('people');
  }
}
