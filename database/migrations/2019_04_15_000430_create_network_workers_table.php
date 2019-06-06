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

namespace institution;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Network Workers: people in institutions coordinating schools.
 */
class CreateNetworkWorkersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('network_workers', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            // A person
            $table->foreign('people_id')->references('id')->on('people');
            // Can work in n educational systems
            $table->foreign('systems_id')->references('id')->on('systems');
            // With an administrative or secretarial role
            $table->foreign('authority_id')->references('id')->on('authority');
            $table->string('job_title');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('network_workers');
    }
}
