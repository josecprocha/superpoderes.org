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

//education workers

DB::table('authorities')->insert([
    // escola
    [
        'id' => 1,
        'countries_id' => 'BR',
        'languages_id' => 'pt-BR',
        'authority_title' => 'Apoio Fora da Secretaria',
        'authority_description' => 'Agente de Apoio, Agente de Serviços Escolares, Auxiliares de Serviços Gerais e outros cargos com atividades como vigilância, zeladoria, portaria, limpeza e manutenção da escola. Não lidam com a secretaria.',
    ],
    [
        'id' => 2,
        'countries_id' => 'BR',
        'languages_id' => 'pt-BR',
        'authority_title' => 'Apoio Dentro da Secretaria',
        'authority_description' => 'Agente de Organização, Inspetor, Secretário, Assistentes Administrativos, Auxiliares Administrativos, Assistentes Técnicos, Oficiais Administrativos, Oficiais Operacionais e outros cargos que desenvolvem e executam ações envolvendo documentação e atendimento a pais.',
    ],
    [
        'id' => 3,
        'countries_id' => 'BR',
        'languages_id' => 'pt-BR',
        'authority_title' => 'Auxiliares de Sala de Aula',
        'authority_description' => 'Cuidadores, professores ajudantes, estagiários, monitores e outros profissionais que desenvolvem atividades de cuidado e educação junto a professores como auxiliares.',
    ],
    [
        'id' => 4,
        'countries_id' => 'BR',
        'languages_id' => 'pt-BR',
        'authority_title' => 'Professores',
        'authority_description' => 'Profissionais que constituem o quadro de magistério da instituição.',
    ],
    [
        'id' => 5,
        'countries_id' => 'BR',
        'languages_id' => 'pt-BR',
        'authority_title' => 'Suporte Pedagógico',
        'authority_description' => 'Coordenador, Diretor, Vice-Diretor, Supervisor, Dirigente, Assessor, Secretário de Educação, Analistas e outros profissionais responsáveis pelo suporte ao quadro do magistério',
    ],
]);
