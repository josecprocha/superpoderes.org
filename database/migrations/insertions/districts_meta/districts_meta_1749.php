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

namespace Database\Migrations\Insertions\Districts_Meta;

//localization;

DB::table('districts')->insert([
    [
        'districts_id' => '10495',
        'property_name' => 'uf_ibge',
        'property_value' => '52',
    ],
    [
        'districts_id' => '10495',
        'property_name' => 'mesorregiao_ibge',
        'property_value' => '04',
    ],
    [
        'districts_id' => '10495',
        'property_name' => 'mesorregiao_nome',
        'property_value' => 'Leste Goiano',
    ],
    [
        'districts_id' => '10495',
        'property_name' => 'microrregiao_ibge',
        'property_value' => '012',
    ],
    [
        'districts_id' => '10495',
        'property_name' => 'microrregiao_nome',
        'property_value' => 'Entorno de Brasília',
    ],
    [
        'districts_id' => '10495',
        'property_name' => 'municipio_ibge',
        'property_value' => '22302',
    ],
    [
        'districts_id' => '10495',
        'property_name' => 'municipio_ibge_completo',
        'property_value' => '5222302',
    ],
    [
        'districts_id' => '10495',
        'property_name' => 'municipio_nome',
        'property_value' => 'Vila Propício',
    ],
    [
        'districts_id' => '10495',
        'property_name' => 'distrito_ibge',
        'property_value' => '05',
    ],
    [
        'districts_id' => '10495',
        'property_name' => 'distrito_ibge_completo',
        'property_value' => '522230205',
    ],
    [
        'districts_id' => '10496',
        'property_name' => 'uf_ibge',
        'property_value' => '53',
    ],
    [
        'districts_id' => '10496',
        'property_name' => 'mesorregiao_ibge',
        'property_value' => '01',
    ],
    [
        'districts_id' => '10496',
        'property_name' => 'mesorregiao_nome',
        'property_value' => 'Distrito Federal',
    ],
    [
        'districts_id' => '10496',
        'property_name' => 'microrregiao_ibge',
        'property_value' => '001',
    ],
    [
        'districts_id' => '10496',
        'property_name' => 'microrregiao_nome',
        'property_value' => 'Brasília',
    ],
    [
        'districts_id' => '10496',
        'property_name' => 'municipio_ibge',
        'property_value' => '00108',
    ],
    [
        'districts_id' => '10496',
        'property_name' => 'municipio_ibge_completo',
        'property_value' => '5300108',
    ],
    [
        'districts_id' => '10496',
        'property_name' => 'municipio_nome',
        'property_value' => 'Brasília',
    ],
    [
        'districts_id' => '10496',
        'property_name' => 'distrito_ibge',
        'property_value' => '05',
    ],
    [
        'districts_id' => '10496',
        'property_name' => 'distrito_ibge_completo',
        'property_value' => '530010805',
    ],

]);
