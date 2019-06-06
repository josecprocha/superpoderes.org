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
 * Less-used student's data.
 */
class CreateStudentsMetasTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('students_metas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('students_id')->references('id')->on('students');
            $table->string('attribute_name');
            $table->string('attribute_value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('students_metas');
    }
}
