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

//classroom

DB::table('ethnicities')->insert([
    [
        'id' => 'BR01',
        'countries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'registration_name' => 'Branca',
    ],
    [
        'id' => 'BR02',
        'countries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'registration_name' => 'Preta',
    ],
    [
        'id' => 'BR03',
        'countries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'registration_name' => 'Parda',
    ],
    [
        'id' => 'BR04',
        'countries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'registration_name' => 'Amarela',
    ],
    [
        'id' => 'BR05',
        'countries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'registration_name' => 'Indígena',
    ],
    [
        'id' => 'BR06',
        'countries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'registration_name' => 'Não Declarada',
    ],
]);
