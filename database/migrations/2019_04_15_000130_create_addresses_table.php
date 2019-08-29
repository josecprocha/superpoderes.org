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

namespace Database\Migrations; //localization;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Addresses for people or institution.
 */
class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('line1'); // Street and number
            $table->string('line2'); // Neighborhood
            // ISO 3166 country
            $table->foreign('countries_id')->references('id')->on('countries')->default('76');
            // Country division
            $table->foreign('countries_divisions_id')->references('id')->on('countries_divisions')->nullable();
            $table->foreign('districts_id')->references('id')->on('districts');
            // https://en.wikipedia.org/wiki/Postal_code
            $table->char('postal_code', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
