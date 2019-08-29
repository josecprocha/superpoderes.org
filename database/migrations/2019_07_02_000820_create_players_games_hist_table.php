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

//game;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * More information about games status of a player.
 */
class CreatePlayersGamesHistTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('players_games_hist', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('player_game_id')->references('id')->on('players_games');
            $table->string('level_id');
            $table->bigInteger('scoreEarned');
            $table->integer('scoreLost');
            $table->integer('lifeLost');
            $table->time('duration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('players_games_hist');
    }
}
