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
 * Educational system: groups of schools under the same coordinating institution.
 */
class CreateEducationalSystemsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('educational_systems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('system_name');
            $table->string('responsible_department_name');
            $table->string('email');
            $table->string('phone');
            $table->foreign('addresses_id')->references('id')->on('addresses');
            $table->foreign('administration_type_id')->references('id')->on('administration_type');
            $table->timestamps();
        });
        include 'sensible_insertions/310_educational_systems.php';
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('educational_systems');
    }
}
