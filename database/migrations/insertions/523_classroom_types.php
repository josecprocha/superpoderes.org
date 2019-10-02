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

DB::table('classroom_types')->insert([
    [
        'id' => 'BR00',
        'contries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'type_name' => 'Classe Comum',
    ],
    [
        'id' => 'BR01',
        'contries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'type_name' => 'Classe Multisseriada',
    ],
    [
        'id' => 'BR02',
        'contries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'type_name' => 'Classe EJA Semipresencial',
    ],
    [
        'id' => 'BR03',
        'contries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'type_name' => 'Classe de Aceleração', // https://www.educabrasil.com.br/classes-de-aceleracao/
    ],
    [
        'id' => 'BR04',
        'contries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'type_name' => 'Classe de flexibilização',
    ],
    [
        'id' => 'BR05',
        'contries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'type_name' => 'Classe de Recuperação de Ciclo',
    ],
    [
        'id' => 'BR06',
        'contries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'type_name' => 'Classe de Sala de Recursos',
    ],
    [
        'id' => 'BR08',
        'contries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'type_name' => 'Classe conveniada de Educação Especial',
    ],
    [
        'id' => 'BR10',
        'contries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'type_name' => 'Classe PIC (Projeto Intensivo de Ciclo)',
    ],
    [
        'id' => 'BR11',
        'contries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'type_name' => 'Classe da Educação Especial Itinerante',
    ],
    [
        'id' => 'BR12',
        'contries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'type_name' => 'Classe de Teletec - Segunda a Sexta',
    ],
    [
        'id' => 'BR13',
        'contries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'type_name' => 'Classe de Teletec - Sábados',
    ],
    [
        'id' => 'BR14',
        'contries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'type_name' => 'Classe EJA Telesala',
    ],
    [
        'id' => 'BR15',
        'contries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'type_name' => 'Classe de Sala de Recursos Multifuncional',
    ],
    [
        'id' => 'BR16',
        'contries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'type_name' => 'Classe de Educação Profissional aos Sábados',
    ],
    [
        'id' => 'BR17',
        'contries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'type_name' => 'Classe de Ensino Médio Integral',
    ],
    [
        'id' => 'BR18',
        'contries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'type_name' => 'Ensino Médio Articulado',
    ],
]);
