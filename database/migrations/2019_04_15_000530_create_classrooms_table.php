<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->foreign('schools_id')->references('id')->on('schools');
            $table->year('year');
            $table->bigIncrements('id');
            $table->foreign('teaching_modalities_id')->references('id')->on('teaching_modalities');
            $table->foreign('modalities_seriations_id')->references('id')->on('modalities_seriations')->nullable(); // Sala de recurso não tem seriação
            $table->foreign('classroom_types_id')->references('id')->on('classroom_types');
            $table->foreign('shifts_id')->references('id')->on('shift');
            $table->char('class', 1); // A, B, C...
            $table->foreign('teachers_id')->references('id')->on('teachers')->nullable(); // Representative teacher
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('classrooms');
    }
}
