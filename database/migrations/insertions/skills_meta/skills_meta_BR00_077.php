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
// Art (Arte)

DB::table('skills_metas')->insert([
    [
        'skills_id' => 'BR00EF69AR35',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF69AR35',
        'property_name' => 'Componente',
        'property_value' => 'Arte',
    ],
    [
        'skills_id' => 'BR00EF69AR35',
        'property_name' => 'Ano/Faixa',
        'property_value' => '6º; 7º; 8º; 9º',
    ],
    [
        'skills_id' => 'BR00EF69AR35',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Artes integradas',
    ],
    [
        'skills_id' => 'BR00EF69AR35',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Arte e tecnologia',
    ],
    [
        'skills_id' => 'BR00EF69AR35',
        'property_name' => 'Comentário',
        'property_value' => 'Esta habilidade se refere a conhecer e a utilizar a tecnologia e os recursos digitais para a arte, o que amplia as possibilidades de fruir, produzir, registrar e compartilhar práticas e repertório artístico. O mundo digital aproxima o aluno da imaterialidade na arte, sensibilizando-o para novas aprendizagens que demandam cuidados éticos e responsáveis. A imaterialidade é um termo que é usado aqui como tudo aquilo que não é possível tocar fisicamente, que não se desgasta com o tempo, como imagens que podem ser reproduzidas infinitamente e estão salvas em arquivos digitais e virtuais, o que se dá quando se trabalha com fotografia digital, seja com máquina fotográfica ou celular, com audiovisual, vídeos ou arte computacional.',
    ],
    [
        'skills_id' => 'BR00EF69AR35',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, é possível propor gradativamente, ao longo dos anos finais do Ensino Fundamental, pesquisas e exercícios que permitam ao aluno manipular os meios tecnológicos e digitais para criação e interação em processos criativos com outras linguagens artísticas.',
    ],
]);
