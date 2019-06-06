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

namespace address;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Aux table: set countries divisions.
 */
class CreateCountryDivisionsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('country_divisions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreign('countries_id')->references('id')->on('countries');
            $table->string('division_name');
            $table->string('category');
            $table->softDeletes();
        });

        DB::table('country_divisions')->insert([
            ['id' => 'BR-DF', 'countries_id' => 'BR', 'division_name' => 'Distrito Federal', 'category' => 'federal district'],
            ['id' => 'BR-AC', 'countries_id' => 'BR', 'division_name' => 'Acre', 'category' => 'state'],
            ['id' => 'BR-AL', 'countries_id' => 'BR', 'division_name' => 'Alagoas', 'category' => 'state'],
            ['id' => 'BR-AP', 'countries_id' => 'BR', 'division_name' => 'Amapá', 'category' => 'state'],
            ['id' => 'BR-AM', 'countries_id' => 'BR', 'division_name' => 'Amazonas', 'category' => 'state'],
            ['id' => 'BR-BA', 'countries_id' => 'BR', 'division_name' => 'Bahia', 'category' => 'state'],
            ['id' => 'BR-CE', 'countries_id' => 'BR', 'division_name' => 'Ceará', 'category' => 'state'],
            ['id' => 'BR-ES', 'countries_id' => 'BR', 'division_name' => 'Espírito Santo', 'category' => 'state'],
            ['id' => 'BR-GO', 'countries_id' => 'BR', 'division_name' => 'Goiás', 'category' => 'state'],
            ['id' => 'BR-MA', 'countries_id' => 'BR', 'division_name' => 'Maranhão', 'category' => 'state'],
            ['id' => 'BR-MT', 'countries_id' => 'BR', 'division_name' => 'Mato Grosso', 'category' => 'state'],
            ['id' => 'BR-MS', 'countries_id' => 'BR', 'division_name' => 'Mato Grosso do Sul', 'category' => 'state'],
            ['id' => 'BR-MG', 'countries_id' => 'BR', 'division_name' => 'Minas Gerais', 'category' => 'state'],
            ['id' => 'BR-PA', 'countries_id' => 'BR', 'division_name' => 'Pará', 'category' => 'state'],
            ['id' => 'BR-PB', 'countries_id' => 'BR', 'division_name' => 'Paraíba', 'category' => 'state'],
            ['id' => 'BR-PR', 'countries_id' => 'BR', 'division_name' => 'Paraná', 'category' => 'state'],
            ['id' => 'BR-PE', 'countries_id' => 'BR', 'division_name' => 'Pernambuco', 'category' => 'state'],
            ['id' => 'BR-PI', 'countries_id' => 'BR', 'division_name' => 'Piauí', 'category' => 'state'],
            ['id' => 'BR-RJ', 'countries_id' => 'BR', 'division_name' => 'Rio de Janeiro', 'category' => 'state'],
            ['id' => 'BR-RN', 'countries_id' => 'BR', 'division_name' => 'Rio Grande do Norte', 'category' => 'state'],
            ['id' => 'BR-RS', 'countries_id' => 'BR', 'division_name' => 'Rio Grande do Sul', 'category' => 'state'],
            ['id' => 'BR-RO', 'countries_id' => 'BR', 'division_name' => 'Rondônia', 'category' => 'state'],
            ['id' => 'BR-RR', 'countries_id' => 'BR', 'division_name' => 'Roraima', 'category' => 'state'],
            ['id' => 'BR-SC', 'countries_id' => 'BR', 'division_name' => 'Santa Catarina', 'category' => 'state'],
            ['id' => 'BR-SP', 'countries_id' => 'BR', 'division_name' => 'São Paulo', 'category' => 'state'],
            ['id' => 'BR-SE', 'countries_id' => 'BR', 'division_name' => 'Sergipe', 'category' => 'state'],
            ['id' => 'BR-TO', 'countries_id' => 'BR', 'nome_divisao' => 'Tocantins', 'category' => 'state'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('country_divisions');
    }
}
