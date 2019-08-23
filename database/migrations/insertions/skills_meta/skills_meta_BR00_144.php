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
// Math (Matemática)

DB::table('skills_metas')->insert([
    [
        'skills_id' => 'BR00EF01MA18',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF01MA18',
        'property_name' => 'Ano/Faixa',
        'property_value' => '1º',
    ],
    [
        'skills_id' => 'BR00EF01MA18',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Grandezas e medidas',
    ],
    [
        'skills_id' => 'BR00EF01MA18',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Medidas de tempo: unidades de medida de tempo, suas relações e o uso do calendário',
    ],
    [
        'skills_id' => 'BR00EF01MA18',
        'property_name' => 'Comentário',
        'property_value' => 'Produzir escrita de datas exige conhecer o calendário e saber como utilizá-lo para fazer marcações temporais. A aprendizagem de notações específicas de marcação de datas (por exemplo, 2/3/2018), entendendo o que cada elemento gráfico dessa notação representa (dia, mês e ano), também está relacionada a esta habilidade.',
    ],
    [
        'skills_id' => 'BR00EF01MA18',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, além do que já foi mencionado nas habilidades anteriores relacionadas ao tempo (EF01MA16) e (EF01MA17), vale indicar a necessidade de utilizar o calendário diariamente, para analisar o mês atual, o mês que veio antes, o que virá depois, assim como criar um ambiente em sala em que haja estímulo para marcações temporais, o que propicia o desenvolvimento da habilidade no aluno. O estímulo a investigar situações nas quais a marcação de datas seja importante (datas de eventos escolares, datas de aniversário, de nascimento, feriados etc.) favorece muito a aprendizagem desta habilidade. Há, aqui, oportunidade de trabalho interdisciplinar com as habilidades (EF01CI05), da Ciência; e (EF01GE05), da Geografia, relacionadas à observação da passagem do tempo.',
    ],
    [
        'skills_id' => 'BR00EF01MA19',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF01MA19',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF01MA19',
        'property_name' => 'Ano/Faixa',
        'property_value' => '1º',
    ],
    [
        'skills_id' => 'BR00EF01MA19',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Grandezas e medidas',
    ],
    [
        'skills_id' => 'BR00EF01MA19',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Sistema monetário brasileiro: reconhecimento de cédulas e moedas',
    ],
    [
        'skills_id' => 'BR00EF01MA19',
        'property_name' => 'Comentário',
        'property_value' => 'Reconhecer e relacionar valores de moedas e cédulas do sistema monetário brasileiro implica em conhecer as moedas e cédulas, saber nomeá-las, identificar como fazer trocas de moedas por outras, analisar quantas moedas ou cédulas de menor valor são necessárias para trocar por outra de valor maior etc.',
    ],
    [
        'skills_id' => 'BR00EF01MA19',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, além das explorações de reconhecimento das notas e moedas do sistema monetário nacional, uma boa forma de contextualizar essa habilidade é incluir no currículo local a indicação de que se explore o valor de compra do dinheiro, bem como formas de utilizá-lo em situações de compra e venda. Uma indicação é a visita  a mercados ou feiras locais, analisar preços de mercadorias, fazer lista de compras e, se possível, realizar uma compra de verdade para poder analisar o que comprar, quanto gastar, como economizar, a relação entre querer comprar e valer a pena gastar etc.',
    ],
    [
        'skills_id' => 'BR00EF01MA20',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF01MA20',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF01MA20',
        'property_name' => 'Ano/Faixa',
        'property_value' => '1º',
    ],
    [
        'skills_id' => 'BR00EF01MA20',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Probabilidade e estatística',
    ],
    [
        'skills_id' => 'BR00EF01MA20',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Noção de acaso',
    ],
    [
        'skills_id' => 'BR00EF01MA20',
        'property_name' => 'Comentário',
        'property_value' => 'Classificar eventos envolvendo o acaso diz respeito a analisar e descrever as possibilidades de algo acontecer ou não. A classificação envolve conhecer e refletir sobre termos tais como provável, improvável, muito ou pouco provável, bem como discutir o grau de probabilidade usando palavras como certo, possível e impossível.',
    ],
    [
        'skills_id' => 'BR00EF01MA20',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, merece destaque que, nesta etapa, as experiências iniciais com probabilidade são informais e visam responder questões acerca da chance de ocorrer determinado acontecimento, recorrendo a expressões como as indicadas na habilidade ou, de modo similar, mais provável, menos provável. A ideia é promover a compreensão entre as crianças de que nem todos os fenômenos são determinísticos, ou seja, que o acaso tem um papel importante em muitas situações. Para isso, o início da proposta de trabalho com probabilidade está centrado no desenvolvimento da noção de aleatoriedade, de modo que os alunos compreendam a existência de eventos certos, outros prováveis ou improváveis e também os impossíveis. Os cálculos de probabilidade só serão estudados depois. As questões acerca de acontecimentos mais ou menos prováveis podem ser feitas a partir das experiências com dados, lançamento de moeda ou situações tais como "tem um cachorro na minha casa, o que é provável que ele faça? O que é impossível que ele faça? O que é certo que ele faça?" Discutir as hipóteses dos alunos e analisar as respostas constituem formas de ajudá-los a analisar possibilidades e previsões.',
    ],
    [
        'skills_id' => 'BR00EF01MA21',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF01MA21',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF01MA21',
        'property_name' => 'Ano/Faixa',
        'property_value' => '1º',
    ],
    [
        'skills_id' => 'BR00EF01MA21',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Probabilidade e estatística',
    ],
    [
        'skills_id' => 'BR00EF01MA21',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Leitura de tabelas e de gráficos de colunas simples',
    ],
    [
        'skills_id' => 'BR00EF01MA21',
        'property_name' => 'Comentário',
        'property_value' => 'Ler dados em gráficos e tabelas simples exige, além do conhecimento dos números envolvidos,   observar e reconhecer nessas representações os elementos que as constituem.',
    ],
    [
        'skills_id' => 'BR00EF01MA21',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, merece destaque o fato de que as primeiras análises de gráficos e tabelas podem ser coletivas, para que os alunos compreendam o que, como  e para que analisam. Para esse trabalho, sugere-se que as perguntas feitas para a análise de um gráfico ou tabela tenham foco também em questões de identificação de dados (qual foi o preferido, qual o menos preferido etc.) e outras que relacionem dados (quantas pessoas a mais  preferem x do que y). Depois disso, pode-se passar a questões numéricas (comparar quantidades, calcular somas e diferenças a partir do gráfico etc.). A utilização de gráficos e tabelas com dados de mídia social também são importantes para dar aos alunos a visão de que esse tipo de texto aparece muito fora da aula de matemática.',
    ],
    [
        'skills_id' => 'BR00EF01MA22',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF01MA22',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF01MA22',
        'property_name' => 'Ano/Faixa',
        'property_value' => '1º',
    ],
    [
        'skills_id' => 'BR00EF01MA22',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Probabilidade e estatística',
    ],
    [
        'skills_id' => 'BR00EF01MA22',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Coleta e organização de informações. Registros pessoais para comunicação de informações coletadas',
    ],
    [
        'skills_id' => 'BR00EF01MA22',
        'property_name' => 'Comentário',
        'property_value' => 'As variáveis categóricas ou qualitativas são aquelas que não são expressas numericamente, ou seja a resposta à pergunta  não é um número,  mas =um nome como cor dos olhos, preferência por um time de futebol,  preferência por uma marca de automóvel, preferência musical, entre outras. A realização da pesquisa acontece a partir de procedimentos tais como identificar uma questão a ser respondida, desenvolver procedimentos que vão da escolha da população investigada a procedimentos de coleta, organização e publicação dos dados da pesquisa; e, finalmente, responder à questão inicial.',
    ],
    [
        'skills_id' => 'BR00EF01MA22',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, vale sugerir que os dados que poderão ser coletados, organizados e representados pelos alunos sejam para responder perguntas cujas respostas não sejam demasiadamente óbvias. Assim, por exemplo, analisar qual é a preferência dos alunos da classe por sorvete de chocolate ou de limão, envolve fazer uma pesquisa, organizar os dados e construir uma representação para finalmente responder à questão, indicando quantos preferem mais um sabor que o outro.',
    ],
    [
        'skills_id' => 'BR00EF02MA01',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF02MA01',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF02MA01',
        'property_name' => 'Ano/Faixa',
        'property_value' => '2º',
    ],
    [
        'skills_id' => 'BR00EF02MA01',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Números',
    ],
    [
        'skills_id' => 'BR00EF02MA01',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Leitura, escrita, comparação e ordenação de números de até três ordens pela compreensão de características do sistema de numeração decimal (valor posicional e papel do zero)',
    ],
    [
        'skills_id' => 'BR00EF02MA01',
        'property_name' => 'Comentário',
        'property_value' => 'Comparar e ordenar números considerando até a ordem das centenas exige conhecer a sequência numérica escrita e falada, bem como estratégias diversas de comparar quantidades. Sugere-se que seja incluída a representação dos números em reta numérica.',
    ],
    [
        'skills_id' => 'BR00EF02MA01',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, deve ficar claro que, neste ano, uma das principais aprendizagens a serem realizadas diz respeito ao sistema de numeração decimal e suas regras. É esperado que os alunos sejam capazes de agrupar unidades em dezenas e centenas e realizar comparação de quantidades. Para que isso ocorra, é possível indicar que as contagens de objetos, as situações para a estimativa, os jogos, a utilização de material estruturado, a resolução de problemas envolvendo ou não o sistema monetário e a exploração de estratégias pessoais de cálculo são formas de auxiliar na compreensão dos princípios do sistema decimal. Entretanto, também é importante indicar que, antes mesmo de a escola ensinar, os alunos têm hipóteses a respeito de como se registra e compara quantidades maiores do que 100. É adequado que sejam consideradas essas pesquisas, uma vez que as habilidades descritas na BNCC estão na forma final da aprendizagem, são o ponto de chegada..',
    ],
    [
        'skills_id' => 'BR00EF02MA02',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF02MA02',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF02MA02',
        'property_name' => 'Ano/Faixa',
        'property_value' => '2º',
    ],
    [
        'skills_id' => 'BR00EF02MA02',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Números',
    ],
    [
        'skills_id' => 'BR00EF02MA02',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Leitura, escrita, comparação e ordenação de números de até três ordens pela compreensão de características do sistema de numeração decimal (valor posicional e papel do zero)',
    ],
    [
        'skills_id' => 'BR00EF02MA02',
        'property_name' => 'Comentário',
        'property_value' => 'Fazer estimativas se relaciona a avaliar a ordem de grandeza de uma quantidade de objetos e atribuir a uma quantidade um valor aproximado, desenvolvendo procedimentos para diferenciar a avaliação de um palpite sem reflexão. Estimar consiste em formar um juízo aproximado relativo a um valor, um cálculo, uma quantia, uma medida etc. O conhecimento da numeração escrita auxilia no registro de estimativas previsto na habilidade.',
    ],
    [
        'skills_id' => 'BR00EF02MA02',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, recomenda-se explicitar que a estimativa ocorre conjuntamente com o sentido de número e com o significado das operações e auxilia no desenvolvimento da capacidade de tomar decisões. O trabalho com estimativas supõe sistematizar estratégias, sendo que seu desenvolvimento e aperfeiçoamento se relaciona a um trabalho contínuo de aplicar, construir, interpretar, analisar, justificar e verificar a partir de resultados exatos. As primeiras experiências que envolvem números já devem valorizar o uso de estimativas para que seja possível ao aluno perceber a importância e o significado do valor estimado (ou aproximado) e seja capaz de utilizá-lo em situações da vida diária que comportam seu uso. Manter na classe cantos de estimativas, nos quais haja desafios para que os alunos estimem a quantidade de objetos de um pote, ou quantos clipes devem ser colocados em uma "corrente" para ter o comprimento de seu pé, ou quantos feijões cabem em um copo , por exemplo, são algumas das possibilidades de atividades que favorecem o desenvolvimento desta habilidade.',
    ],
    [
        'skills_id' => 'BR00EF02MA03',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF02MA03',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF02MA03',
        'property_name' => 'Ano/Faixa',
        'property_value' => '2º',
    ],
    [
        'skills_id' => 'BR00EF02MA03',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Números',
    ],
    [
        'skills_id' => 'BR00EF02MA03',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Leitura, escrita, comparação e ordenação de números de até três ordens pela compreensão de características do sistema de numeração decimal (valor posicional e papel do zero)',
    ],
    [
        'skills_id' => 'BR00EF02MA03',
        'property_name' => 'Comentário',
        'property_value' => 'Esta habilidade envolve estabelecer relações entre duas ou mais quantidades e expressar numericamente a diferença entre elas. Isso exige elaborar estratégias de comparação, o que exige conhecer a ordem de grandeza expressa pelo número que representa a quantidade, o que, no caso de números naturais, implica em perceber quantas unidades há em uma quantidade. Assim, por exemplo, para comparar o número 18 com o número 16, o aluno deverá concluir que 18 é maior do que 16 e expressar a comparação: 16 é dois a menos do que 18 ou que 18 é dois a mais do que 16.  Expressões tais como igual, diferente, maior, menor, a mesma quantidade são importantes, ainda sem o uso de sinais de comparação, exceto o da igualdade e dos símbolos referentes à adição e à subtração.',
    ],
    [
        'skills_id' => 'BR00EF02MA03',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, é interessante destacar a ideia de que a comparação e a estimativa serão, ao mesmo tempo, uma aprendizagem conceitual e um tipo de atividade a ser proposta para que os alunos saibam como comparar e o que torna uma estimativa eficiente ou não. Isso porque, apenas em situações em que efetivamente uma criança seja desafiada a comparar duas quantidades é que ela desenvolverá estratégias para isso. Novamente, serão nas atividades numéricas genuínas (nas quais de fato faz sentido realizar uma comparação) que a comparação se desenvolve. O mesmo vale para a estimativa. Por isso, além do que foi comentado para as habilidades anteriores, é importante sinalizar que, quando um jogo for o contexto de utilização numérica, comparar a quantidade de pontos entre os jogadores é útil para alcançar as habilidades esperadas, bem como criar situações problematizadoras nas quais se deva saber a quantidade atual de objetos de uma coleção em relação a análises anteriores. Destaca-se a necessidade de cuidar que a linguagem matemática seja utilizada pelo professor, uma vez que termos como a mais, a menos, igual, diferente também são aprendizagens esperadas para os alunos e só acontecerão se houver preocupação para que isso ocorra.',
    ],
    [
        'skills_id' => 'BR00EF02MA04',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF02MA04',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF02MA04',
        'property_name' => 'Ano/Faixa',
        'property_value' => '2º',
    ],
    [
        'skills_id' => 'BR00EF02MA04',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Números',
    ],
    [
        'skills_id' => 'BR00EF02MA04',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Composição e decomposição de números naturais (até 1000)',
    ],
]);
