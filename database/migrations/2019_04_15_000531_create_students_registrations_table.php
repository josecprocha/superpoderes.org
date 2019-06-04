<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('students_registrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->year('year');
            $table->foreign('students_id')->references('id')->on('students');
            $table->foreign('classrooms_id')->references('id')->on('classrooms');
            $table->unsignedTinyInteger('number')->nullable();
            $table->foreign('registrations_id')->references('id')->on('registrations'); // Default = 'Ativo'
            $table->date('registration_date')->nullable();
            $table->date('departure_date')->nullable();
            $table->foreign('performances_id')->references('id')->on('performances'); // Default = 'Cursando'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('students_registrations');
    }
}
