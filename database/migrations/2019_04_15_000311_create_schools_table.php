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

//school;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Schools!
 */
class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->bigIncrements('id');
            // educational system
            $table->foreign('educational_systems_id')->references('id')->on('educational_systems');
            $table->string('school_name');
            $table->string('email');
            $table->string('phone');
            $table->foreign('addresses_id')->references('id')->on('addresses');
            $table->foreign('administration_type_id')->references('id')->on('administration_type');
            $table->foreign('localization_type_id')->references('id')->on('localization_type');
            $table->timestamps();
        });
        include 'sensible_insertions/311_schools.php';
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('schools');
    }
}
