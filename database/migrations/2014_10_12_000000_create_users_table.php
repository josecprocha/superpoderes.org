<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->foreign('people_id')->references('id')->on('people'); // children are people, but not users.
      $table->string('email')->unique();
      $table->timestamp('email_verified_at')->nullable(); // null until verified.
      $table->string('password');
      $table->rememberToken(); // used by the framework to help against "remember me" cookie hijacking
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
    Schema::dropIfExists('users');
  }
}
