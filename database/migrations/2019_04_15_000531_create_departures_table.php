<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeparturesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('departures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('enrollment_id')->references('id')->on('enrollments');
            $table->date('departure_date');
            $table->foreign('departure_kind_id')->references('id')->on('departure_kinds');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('departures');
    }
}
