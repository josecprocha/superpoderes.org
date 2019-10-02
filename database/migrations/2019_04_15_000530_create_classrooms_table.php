<?php

/**
 * This file is part of "School of Super Powers" Project.
 *
 * @author (c) José Cândido Pereira da Rocha <josecprocha@gmail.com>
 *
 * This source file is subject to the {@license ISC} license that is bundled
 * with this source code in the file LICENSE.md. Source is available in {@link
 * https://github.com/josecprocha/superpowers}.
 *
 * Made with Laravel — {@see https://github.com/laravel/laravel to know more
 * about this framework}.
 */

namespace Database\Migrations;

//classroom

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Classroom profiles!
 */
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
            $table->string('class'); // A, B, C...
            $table->foreign('classroom_types_id')->references('id')->on('classroom_types');
            $table->foreign('shifts_id')->references('id')->on('shifts');
            $table->unsignedTinyInteger('duration')->nullable(); // school days
            $table->date('first_day')->nullable();
            $table->date('last_day')->nullable();
            $table->foreign('room_id')->references('id')->on('rooms')->nullable();
            $table->timestamps();
        });
        include 'sensible_insertions/530_classrooms.php';
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('classrooms');
    }
}
