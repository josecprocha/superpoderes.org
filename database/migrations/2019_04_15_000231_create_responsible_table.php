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

namespace person;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * People responsible for children.
 */
class CreateResponsibleTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('responsible', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('people_id')->references('id')->on('people'); // A person of legal age ...
            $table->foreign('kinships_id')->references('id')->on('kinships');
            $table->foreign('people_id')->references('id')->on('people'); // Can be responsible for n children.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('responsible');
    }
}
