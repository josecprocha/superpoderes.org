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

namespace classroom;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Information about a student subcription in a classroom.
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
            $table->foreign('students_id')->references('id')->on('students');
            $table->foreign('classrooms_id')->references('id')->on('classrooms');
            $table->unsignedTinyInteger('number')->nullable();
            $table->date('registration_date')->nullable();
            $table->foreign('performances_id')->references('id')->on('performances'); // Default = 'Cursando'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('enrollments');
    }
}
