<?php

/*
 * This file is part of "School of Super Powers" Project and is writed on top of
 * Laravel framework ({@link https://github.com/laravel/laravel})
 *
 * @author (c) José Cândido Pereira da Rocha <josecprocha@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled with this
 * source code in the file LICENSE.md.
 * Source is available in {@link https://github.com/josecprocha/superpowers}.
 */

namespace institution;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * School workers: educational institution workers other than teachers and
 * administrative workers.
 */
class CreateSchoolWorkersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('school_workers', function (Blueprint $table) {
            $table->bigIncrements('id');
            // A person
            $table->foreign('people_id')->references('id')->on('people');
            // Can work in n schools
            $table->foreign('schools_id')->references('id')->on('schools');
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
        Schema::dropIfExists('school_workers');
    }
}
