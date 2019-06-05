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
            $table->foreign('transferred_country_id')->references('id')->on('countries')->nullable();
            $table->foreign('transferred_country_division_id')->references('id')->on('countries_dividions')->nullable();
            $table->foreign('transferred_city_id')->references('id')->on('cities')->nullable();
            $table->foreign('transferred_school_id')->references('id')->on('schools')->nullable();
            $table->foreign('relocated_classrooms_id')->references('id')->on('classrooms')->nullable();
            $table->boolean('no_attendance_confirmed'); // No attendance = no attendance at classes since enrollment for 60 days
            $table->boolean('abandonment_confirmed'); // Abandonment = 30% of absences or more
            $table->boolean('other'); // student died or is missing
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
