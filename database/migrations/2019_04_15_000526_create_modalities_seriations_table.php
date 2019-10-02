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
 * Aux table: seriations in accordance to teaching modalities.
 */
class CreateModalitiesSeriationsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('modalities_seriations', function (Blueprint $table) {
            $table->char('id', 6)->primary();
            $table->foreign('teaching_modalities_id')->references('id')->on('teaching_modalities');
            $table->string('seriations_name');
            $table->string('seriations_info')->nullable();
            $table->softDeletes();
        });
        require 'insertions/526_modalities_seriations.php';
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('modalities_seriations');
    }
}
