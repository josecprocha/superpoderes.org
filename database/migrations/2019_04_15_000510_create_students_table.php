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
 * Students basic profile.
 */
class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_name');
            $table->date('birthday');
            $table->char('gender', 1)->nullable(); // M/F
            $table->boolean('twin')->default(false)->nullable(); // S/N
            $table->string('document_name');
            $table->string('document_code');
            $table->foreign('people_id')->references('id')->on('people')->nullable();
            $table->foreign('ethnicities_id')->references('id')->on('ethnicities')->default('BR06'); // Não Declarada
            $table->foreign('legal_conditions_id')->references('id')->on('legal_conditions')->default('BR00'); // Sem Deficiência
            $table->timestamps();
        });
        include 'sensible_insertions/510_students.php';
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
