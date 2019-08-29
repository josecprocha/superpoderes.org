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

namespace Database\Migrations; //game;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Mini-games basic information.
 */
class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('game_name');
            $table->string('author_name');
            $table->string('author_profile');
            $table->foreign('author_country_id')->references('id')->on('countries');
            $table->string('source');
            $table->string('license');
            $table->string('group');
            $table->string('challenge_type');
            /**
             * Difficulty_types:
             * -------------------------------
             * mechanical: mechanical/reaction,
             * meaning: significant and meaning,
             * concrete: concrete operation,
             * abstract: abstract operation,
             * dialectical: dialectical thinking
             */
            $table->tinyInteger('challenge_level');
            $table->string('computer_requirement'); // pi3, pi4, intel_pc
            $table->timestamps();
        });

        DB::table('games')->insert([
            [
                'id' => 1,
                'game_name' => 'CSS 3D Hartwig chess set',
                'author_name' => 'Julian Garnier',
                'author_photo' => 'https://pbs.twimg.com/profile_images/950137942428798982/qb2iMR_B_400x400.jpg',
                'author_profile' => 'https://twitter.com/juliangarnier',
                'author_country_id' => 'FR',
                'source' => 'https://github.com/gamebytes/3D-Hartwig-chess-set',
                'license' => 'MIT',
                'group' => 'friends',
                'challenge_type' => 'abstract',
                'challenge_level' => -1,
                'computer_requirement' => 'pi3',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
