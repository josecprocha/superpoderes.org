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

namespace people;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * People's avatars info.
 */
class CreatePeopleAvatarsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('people_avatars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('people_id')->references('id')->on('people');
            $table->string('avatar_url', 2083);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('people_avatars');
    }
}
