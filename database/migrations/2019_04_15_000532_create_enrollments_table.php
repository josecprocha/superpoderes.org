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
 * Information about a student subscription in a classroom.
 */
class CreateEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->year('year');
            $table->date('registration_date')->nullable();
            $table->foreign('students_id')->references('id')->on('students');
            $table->foreign('classrooms_id')->references('id')->on('classrooms');
            $table->unsignedTinyInteger('number')->nullable();
            $table->date('departure_date')->nullable();
            $table->foreign('enrollments_status_id')->references('id')->on('enrollments_status')->default('BR01'); // default: 'Ativo'
            $table->foreign('performances_id')->references('id')->on('performances'); // Default = 'Cursando'
            $table->timestamps();
        });
        include 'sensible_insertions/532_enrollments.php';
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('enrollments');
    }
}
