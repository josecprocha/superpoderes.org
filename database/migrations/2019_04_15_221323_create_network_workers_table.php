<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNetworkWorkersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('network_workers', function (Blueprint $table) {
      $table->bigIncrements('id')->primary();
      $table->foreign('people_id')->references('id')->on('people');		// A person
      $table->foreign('systems_id')->references('id')->on('systems');	// Can work in n educational systems
      $table->foreign('authority_id')->references('id')->on('authority');	// With an administrative or secretarial role
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
    Schema::dropIfExists('network_workers');
  }
}
