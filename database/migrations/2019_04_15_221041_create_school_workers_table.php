<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolWorkersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('school_workers', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->foreign('people_id')->references('id')->on('people');	 // A person
      $table->foreign('schools_id')->references('id')->on('schools'); // Can work in n schools
      $table->foreign('authority_id')->references('id')->on('authority'); // With an administrative or secretarial role
      $table->string('job_title');
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
    Schema::dropIfExists('school_workers');
  }
}
