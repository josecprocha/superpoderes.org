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

namespace Database\Migrations; //educational politics;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * More information about skill used in evaluation politcs.
 */
class CreateSkillsMetasTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('skills_metas', function (Blueprint $table) {
            $table->bigIncrement('id');
            $table->foreign('skills_id')->references('id')->on('skills');
            $table->string('property_name');
            $table->string('property_value');
            $table->softDeletes();
        });
        require 'insertions/skills_meta.php';
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('skills_metas');
    }
}
