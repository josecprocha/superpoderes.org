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
// Physical Education (Educação Física)

DB::table('skills_metas')->insert([
    [
        'skills_id' => 'BR00EF89EF21',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Práticas corporais de aventura na natureza',
    ],
    [
        'skills_id' => 'BR00EF89EF21',
        'property_name' => 'Comentário',
        'property_value' => 'Identificar as características descritas na habilidade refere-se a conhecer o significado de: a) Instrumentos: materiais utilizados para as práticas, como cordas, paraquedas, botes, remos, entre outros; b) Equipamentos de segurança: capacete, luvas, colete salva-vidas, joelheiras, entre outros; c) Indumentária: vestimentas apropriadas para as práticas, como óculos para o paraquedismo, bermuda larga para o surfe, calçados reforçados para o trekking; d) Organização: refere-se a possíveis classificações das práticas, como, por exemplo, o ambiente físico no qual são realizadas (água, ar, terra). Transformações históricas das práticas corporais de aventura na natureza referem-se à evolução e popularização das modalidades, influenciando o seu modo de prática, assim como as suas características.',
    ],
    [
        'skills_id' => 'BR00EF89EF21',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, é interessante que os alunos observem, de acordo com as características descritas na habilidade, quais práticas são acessíveis para a experimentação nos locais onde vivem. Pode-se propor que façam visitas ou convidem praticantes ou entidades que desenvolvem as modalidades, estabelecendo discussões e experimentações alternativas de acordo com o acesso dos alunos aos espaços naturais próximos à escola.  Uma possibilidade de organização da habilidade por anos pode propor inicialmente a investigação das transformações históricas de esportes de aventura de acordo com a sua organização, iniciando com esportes praticados no ar, a seguir, terra e, por fim, água.',
    ],
]);
