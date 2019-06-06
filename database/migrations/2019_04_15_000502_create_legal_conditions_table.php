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
 * Aux table: Declarations of deficiencies and other conditions with a purpose
 * of social inclusion.
 */
class CreateLegalConditionsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('legal_conditions', function (Blueprint $table) {
            $table->char('id', 4)->primary();
            $table->foreign('countries_id')->references('id')->on('countries');
            $table->foreign('languages_id')->references('id')->on('languages');
            $table->string('condition_name');
            $table->string('condition_type');
            $table->string('legislation');
            $table->softDeletes();
        });

        DB::table('legal_conditions')->insert([
            ['id' => 'BR00', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'condition_name' => 'Sem Deficiência', 'condition_type' => 'Sem Deficiência', 'legislation' => ''],
            ['id' => 'BR01', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'condition_name' => 'Multipla', 'condition_type' => 'Deficiência', 'legislation' => ''],
            ['id' => 'BR02', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'condition_name' => 'Cegueira', 'condition_type' => 'Deficiência', 'legislation' => ''],
            ['id' => 'BR03', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'condition_name' => 'Baixa Visão', 'condition_type' => 'Deficiência', 'legislation' => ''],
            ['id' => 'BR04', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'condition_name' => 'Surdez severa ou profunda', 'condition_type' => 'Deficiência', 'legislation' => ''],
            ['id' => 'BR05', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'condition_name' => 'Surdez leve ou moderada', 'condition_type' => 'Deficiência', 'legislation' => ''],
            ['id' => 'BR06', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'condition_name' => 'Surdocegueira', 'condition_type' => 'Deficiência', 'legislation' => ''],
            ['id' => 'BR07', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'condition_name' => 'Física: paralisia cerebral', 'condition_type' => 'Deficiência', 'legislation' => ''],
            ['id' => 'BR08', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'condition_name' => 'Física: cadeirante', 'condition_type' => 'Deficiência', 'legislation' => ''],
            ['id' => 'BR09', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'condition_name' => 'Física: outros', 'condition_type' => 'Deficiência', 'legislation' => ''],
            ['id' => 'BR10', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'condition_name' => 'Síndrome de Down', 'condition_type' => 'Deficiência', 'legislation' => ''],
            ['id' => 'BR11', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'condition_name' => 'Intelectual', 'condition_type' => 'Deficiência', 'legislation' => ''],
            ['id' => 'BR20', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'condition_name' => 'Transtorno do Espectro Autista (TEA)', 'condition_type' => 'Transtorno Global do Desenvolvimento (TGD)', 'legislation' => ''],
            ['id' => 'BR21', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'condition_name' => 'Síndrome de Asperger', 'condition_type' => 'Transtorno Global do Desenvolvimento (TGD)', 'legislation' => ''],
            ['id' => 'BR22', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'condition_name' => 'Síndrome de Rett', 'condition_type' => 'Transtorno Global do Desenvolvimento (TGD)', 'legislation' => ''],
            ['id' => 'BR23', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'condition_name' => 'Transtorno Desintegrativo da Infância (TDI)', 'condition_type' => 'Transtorno Global do Desenvolvimento (TGD)', 'legislation' => ''],
            ['id' => 'BR30', 'countries_id' => 'BR', 'languages_id' => 'pt_BR', 'condition_name' => 'Altas Habilidades/Superdotação', 'condition_type' => 'Altas Habilidades', 'legislation' => ''],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('legal_conditions');
    }
}
