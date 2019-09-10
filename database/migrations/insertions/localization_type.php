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

namespace Database\Migrations\Insertions;

//school;

DB::table('localization_type')->insert([
    [
        'id' => 'BR01',
        'countries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'localization_name' => 'Urbana',
    ],
    [
        'id' => 'BR02',
        'countries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'localization_name' => 'Rural',
    ],
    [
        'id' => 'BR03',
        'countries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'localization_name' => 'Terra indígena',
    ],
    [
        'id' => 'BR04',
        'countries_id' => 'BR',
        'languages_id' => 'pt_BR',
        // https://escolaeducacao.com.br/unidades-de-conservacao-biologia/
        'localization_name' => 'Unidade de uso sustentável',
    ],
    [
        'id' => 'BR05',
        'countries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'localization_name' => 'Unidade de uso sustentável em terra indígena',
    ],
    [
        'id' => 'BR06',
        'countries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'localization_name' => 'Unidade de uso sustentável em área remanescente de quilombos',
    ],
    [
        'id' => 'BR07',
        'countries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'localization_name' => 'Área de assentamento',
    ],
    [
        'id' => 'BR08',
        'countries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'localization_name' => 'Área remanescente de quilombos',
    ],
]);
