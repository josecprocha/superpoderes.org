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

namespace address;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Aux table. Brazil divisions as stated by Brazil's IBGE.
 */
class CreateCountryDivisionsBrTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('country_divisions_br', function (Blueprint $table) {
            $table->char('id', 2)->primary();
            $table->foreign('country_divisions_id')->references('id')->on('country_divisions');
            $table->softDeletes();
        });

        DB::table('country_divisions_br')->insert([
            ['id' => '53', 'country_divisions_id' => 'BR-DF'],
            ['id' => '12', 'country_divisions_id' => 'BR-AC'],
            ['id' => '27', 'country_divisions_id' => 'BR-AL'],
            ['id' => '16', 'country_divisions_id' => 'BR-AP'],
            ['id' => '13', 'country_divisions_id' => 'BR-AM'],
            ['id' => '29', 'country_divisions_id' => 'BR-BA'],
            ['id' => '23', 'country_divisions_id' => 'BR-CE'],
            ['id' => '32', 'country_divisions_id' => 'BR-ES'],
            ['id' => '52', 'country_divisions_id' => 'BR-GO'],
            ['id' => '21', 'country_divisions_id' => 'BR-MA'],
            ['id' => '51', 'country_divisions_id' => 'BR-MT'],
            ['id' => '50', 'country_divisions_id' => 'BR-MS'],
            ['id' => '31', 'country_divisions_id' => 'BR-MG'],
            ['id' => '15', 'country_divisions_id' => 'BR-PA'],
            ['id' => '25', 'country_divisions_id' => 'BR-PB'],
            ['id' => '41', 'country_divisions_id' => 'BR-PR'],
            ['id' => '26', 'country_divisions_id' => 'BR-PE'],
            ['id' => '22', 'country_divisions_id' => 'BR-PI'],
            ['id' => '33', 'country_divisions_id' => 'BR-RJ'],
            ['id' => '24', 'country_divisions_id' => 'BR-RN'],
            ['id' => '43', 'country_divisions_id' => 'BR-RS'],
            ['id' => '11', 'country_divisions_id' => 'BR-RO'],
            ['id' => '14', 'country_divisions_id' => 'BR-RR'],
            ['id' => '42', 'country_divisions_id' => 'BR-SC'],
            ['id' => '35', 'country_divisions_id' => 'BR-SP'],
            ['id' => '28', 'country_divisions_id' => 'BR-SE'],
            ['id' => '17', 'country_divisions_id' => 'BR-TO'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('country_divisions_br');
    }
}
