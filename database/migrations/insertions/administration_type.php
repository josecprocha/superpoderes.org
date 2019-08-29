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

DB::table('administration_type')->insert([
    [
        'id' => 'BR01',
        'countries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'administration_name' => 'Federal',
    ],
    [
        'id' => 'BR02',
        'countries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'administration_name' => 'Estadual',
    ],
    [
        'id' => 'BR03',
        'countries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'administration_name' => 'Municipal',
    ],
    [
        'id' => 'BR04',
        'countries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'administration_name' => 'Privada especial (Estadual ou municipal não gratuita, art. 242 da CF)', 'info' => 'Estadual ou municipal não gratuita, art. 242 da CF.',
    ],
    [
        'id' => 'BR05',
        'countries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'administration_name' => 'Privada com fins lucrativos (não comunitária nem confessional)', 'info' => 'Mantida por ente privado que visa o lucro.',
    ],
    [
        'id' => 'BR06',
        'countries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'administration_name' => 'Privada comunitária não beneficente', 'info' => 'Tem representantes da comunidade na mantenedora',
    ],
    [
        'id' => 'BR07',
        'countries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'administration_name' => 'Privada comunitária beneficente', 'info' => 'Tem representantes da comunidade na mantenedora e detém Certificado de Assistência Social',
    ],
    [
        'id' => 'BR08',
        'countries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'administration_name' => 'Privada confessional não beneficente', 'info' => 'Atendem orientação confessional e ideológica',
    ],
    [
        'id' => 'BR09',
        'countries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'administration_name' => 'Privada confessional beneficente', 'info' => 'Atendem orientação confessional e ideológica e detém Certificado de Assistência Social',
    ],
    [
        'id' => 'BR10',
        'countries_id' => 'BR',
        'languages_id' => 'pt_BR',
        'administration_name' => 'Privada filantrópica (não comunitária nem confessional)', 'info' => 'Prestam serviço à população em caráter complementar ao Estado',
    ],
]);
