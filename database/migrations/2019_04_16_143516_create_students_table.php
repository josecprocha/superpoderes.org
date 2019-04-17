<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('students', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('student_name');
      $table->date('birthday');
      $table->char('gender', 1); // M/F
      $table->boolean('twin')->default(false); // S/N
      $table->foreign('people_id')->references('id')->on('people');
      $table->foreign('ethnicities_id')->references('id')->on('ethnicities')->default('BR06');
      $table->foreign('legal_conditions_id')->references('id')->on('legal_conditions')->default('BR00');
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
    Schema::dropIfExists('students');
  }
}
