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
 * Aux table: language.
 */
class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->string('id')->primary(); // IETF BCP 47 language tag
            $table->string('language_name');
            $table->string('language_en');
            $table->softDeletes();
        });
        require 'insertions/090_languages.php';
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('languages');
    }
}
