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

//localization;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Aux table. Brazil divisions as stated by Brazil's IBGE.
 */
class CreateCountryDivisionsMetasTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('country_divisions_metas', function (Blueprint $table) {
            $table->bigIncrement('id');
            $table->foreign('country_divisions_id')->references('id')->on('country_divisions');
            $table->string('property_name');
            $table->string('property_value');
            $table->softDeletes();
        });
        require 'insertions/country_divisions_metas.php';
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('country_divisions_br');
    }
}
