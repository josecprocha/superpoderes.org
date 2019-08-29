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

//profile;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Relationships between people.
 */
class CreateKinshipsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('kinships', function (Blueprint $table) {
            $table->unsignedTinyInteger('id')->primary();
            $table->string('kinship_description');
            $table->softDeletes();
        });
        require 'insertions/kinships.php';
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('kinships');
    }
}
