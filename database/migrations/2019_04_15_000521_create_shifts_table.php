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
 * Aux table: List shifts of educational works.
 */
class CreateShiftsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('shifts', function (Blueprint $table) {
            $table->char('id')->primary();
            $table->foreign('countries_id')->references('id')->on('countries');
            $table->foreign('languages_id')->references('id')->on('languages');
            $table->string('shifts_name');
            $table->softDeletes();
        });

        DB::table('shifts')->insert([
            ['id' => 'BR01', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'shifts_name' => 'Matutino'],
            ['id' => 'BR01', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'shifts_name' => 'Intermediário'],
            ['id' => 'BR02', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'shifts_name' => 'Vespertino'],
            ['id' => 'BR03', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'shifts_name' => 'Noturno'],
            ['id' => 'BR04', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'shifts_name' => 'Flexibilizado'],
            ['id' => 'BR05', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'shifts_name' => 'Integral Diurno'],
            ['id' => 'BR06', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'shifts_name' => 'Integral Noturno'],
            ['id' => 'BR07', 'contries_id' => 'BR', 'languages_id' => 'pt_BR', 'shifts_name' => 'Sem Classificação'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('shifts');
    }
}
