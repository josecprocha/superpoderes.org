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

namespace Database\Migrations\Insertions\Skills_Meta; //educational politics;

// Brazilian elementary School (Ensino Fundamental), BNCC
// Religious Education (Ensino Religiosa)

DB::table('skills_metas')->insert([
    [
        'skills_id' => 'BR00EF09ER06',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF09ER06',
        'property_name' => 'Componente',
        'property_value' => 'Ensino Religioso',
    ],
    [
        'skills_id' => 'BR00EF09ER06',
        'property_name' => 'Ano/Faixa',
        'property_value' => '9º',
    ],
    [
        'skills_id' => 'BR00EF09ER06',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Crenças religiosas e filosofias de vida',
    ],
    [
        'skills_id' => 'BR00EF09ER06',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Princípios e valores éticos',
    ],
    [
        'skills_id' => 'BR00EF09ER07',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF09ER07',
        'property_name' => 'Componente',
        'property_value' => 'Ensino Religioso',
    ],
    [
        'skills_id' => 'BR00EF09ER07',
        'property_name' => 'Ano/Faixa',
        'property_value' => '9º',
    ],
    [
        'skills_id' => 'BR00EF09ER07',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Crenças religiosas e filosofias de vida',
    ],
    [
        'skills_id' => 'BR00EF09ER07',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Princípios e valores éticos',
    ],
    [
        'skills_id' => 'BR00EF09ER08',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF09ER08',
        'property_name' => 'Componente',
        'property_value' => 'Ensino Religioso',
    ],
    [
        'skills_id' => 'BR00EF09ER08',
        'property_name' => 'Ano/Faixa',
        'property_value' => '9º',
    ],
    [
        'skills_id' => 'BR00EF09ER08',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Crenças religiosas e filosofias de vida',
    ],
    [
        'skills_id' => 'BR00EF09ER08',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Princípios e valores éticos',
    ],
]);
