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
 * Aux table: departure kinds, to be used by departures table.
 */
class CreateDepartureKindsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('departure_kinds', function (Blueprint $table) {
            $table->char('id', 4)->primary();
            $table->foreign('countries_id')->references('id')->on('countries');
            $table->foreign('languages_id')->references('id')->on('languages');
            $table->string('kind_name');
            $table->softDeletes();
        });

        DB::table('departure_kinds')->insert([
            ['id' => 'BR01', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'kind_name' => 'Ativo'],
            ['id' => 'BR02', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'kind_name' => 'Transferido'],
            ['id' => 'BR03', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'kind_name' => 'Abandono'],
            ['id' => 'BR04', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'kind_name' => 'Não comparece'],
            ['id' => 'BR05', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'kind_name' => 'Outros'],
            ['id' => 'BR06', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'kind_name' => 'Remanejado'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('departure_kinds');
    }
}
