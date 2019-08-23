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
        'skills_id' => 'BR00EF02MA21',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, a probabilidade deve merecer cuidado por ser um tema mais novo aos educadores, em especial dos anos iniciais. A probabilidade é a Matemática da incerteza e se aproxima mais da realidade. Em nosso dia a dia, lidamos mais com a estimativa do que com a precisão. A ideia de aleatório em que não se sabe qual será o resultado, mas se pode prever os resultados possíveis e os impossíveis, são questões centrais ao raciocínio probabilístico. A análise de eventos cotidianos para indicar se eles podem ou não ocorrer, se é muito ou pouco provável é o foco da probabilidade neste ano. Neste momento da escolaridade, as experiências com probabilidade devem ser informais, mas deve ser incentivado o uso de termos que explicitem as análises das chances de algo ocorrer: muito provável, pouco provável, nada provável, impossível e certeza. Essas ideias centrais podem ser exploradas por meio de jogos, análises de situações desenvolvidas para isso ou de perguntas que levem os alunos a analisarem chances de algo acontecer. Em um jogo com dois dados, por exemplo, vale analisar quais as somas que podem sair e quais são impossíveis de sair (13, por exemplo). Jogar um dado 30 vezes, é improvável que saia o 6 nas 30 jogadas, mas não é impossível. Montar uma tabela com todas as somas possíveis e ver quais aquelas que têm mais chance de sair (é mais provável sair soma 7 do que soma 12, por exemplo) é uma boa estratégia para a compreensão dos significados de mais provável, menos provável e igualmente provável..',
    ],
    [
        'skills_id' => 'BR00EF02MA22',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF02MA22',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF02MA22',
        'property_name' => 'Ano/Faixa',
        'property_value' => '2º',
    ],
    [
        'skills_id' => 'BR00EF02MA22',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Probabilidade e estatística',
    ],
    [
        'skills_id' => 'BR00EF02MA22',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Coleta, classificação e representação de dados em tabelas simples e de dupla entrada e em gráficos de colunas',
    ],
    [
        'skills_id' => 'BR00EF02MA22',
        'property_name' => 'Comentário',
        'property_value' => 'Comparar informações de pesquisas nas condições previstas na habilidade envolve algum conhecimento anterior de leitura de gráficos de colunas para que se possa ler o gráfico em barras simples horizontais. Especificamente, a tabela que deve ser lida aqui é uma tabela que relaciona duas variáveis de uma mesma população, ou a análise de uma mesma variável em duas populações diferentes (por exemplo, a relação entre as variáveis idade e número de irmãos em mulheres ou a variável preferência por times de futebol analisada entre homens e mulheres).',
    ],
    [
        'skills_id' => 'BR00EF02MA22',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, um ponto de destaque é analisar o tipo de problematização a ser feita em função das aprendizagens esperadas. Assim, é possível explorar elementos que constituem tabelas e gráficos (mencionados na descrição da habilidade), propor problemas e abrir espaço para que os próprios alunos elaborem perguntas para serem respondidas a partir da tabela e do gráfico. Propor que, dada uma tabela, seja construído um gráfico ou, dado um gráfico, seja construída uma tabela são formas de levar os alunos a alcançar a habilidade em análise Como essa conversão não é nada fácil, sugere-se que o gráfico (ou a tabela) apresentado seja bastante simples, com poucos elementos, por exemplo. Da mesma forma, apresentar um gráfico com algumas afirmações relacionadas a ele, desafiando o aluno a associar a afirmação que melhor o representa é um tipo de problematização que exige uma boa leitura do gráfico. A linguagem e os elementos relacionados à tabela (linhas, colunas, dados, fonte de dados, título, rodapé), assim como a linguagem e os elementos relacionados aos gráficos (título, fonte, eixos, legenda) devem ser progressivamente explorados com os alunos.',
    ],
    [
        'skills_id' => 'BR00EF02MA23',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF02MA23',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF02MA23',
        'property_name' => 'Ano/Faixa',
        'property_value' => '2º',
    ],
    [
        'skills_id' => 'BR00EF02MA23',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Probabilidade e estatística',
    ],
    [
        'skills_id' => 'BR00EF02MA23',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Coleta, classificação e representação de dados em tabelas simples e de dupla entrada e em gráficos de colunas',
    ],
    [
        'skills_id' => 'BR00EF02MA23',
        'property_name' => 'Comentário',
        'property_value' => 'As variáveis categóricas ou qualitativas são aquelas que não são expressas numericamente, pois suas respostas às questões feitas são palavras como cor dos olhos, mês de nascimento, preferência por um time de futebol, preferência musical, entre outras. A realização da pesquisa acontece a partir de procedimentos tais como elaborar as questões sobre o que se pretende pesquisar e desenvolver procedimentos que vão da escolha da população a procedimentos de coleta, organização e publicação dos dados da pesquisa e a respostas às questões investigadas.',
    ],
    [
        'skills_id' => 'BR00EF02MA23',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, deve ficar claro que o foco desta habilidade está em formular questões que possam ser abordadas por meio da coleta, organização e apresentação dos dados relevantes e que permitam responder às questões iniciais do levantamento. A contextualização a ser feita pelos currículos locais diz respeito a sugerir que os gráficos analisados, bem como os dados que poderão ser coletados, organizados e representados pelos alunos tenham relação com as muitas perguntas que eles têm. É importante trabalhar com perguntas cujas respostas não sejam óbvias e deem margem para a coleta e representação de dados, para posterior tomada de decisão a partir do que foi coletado. Assim, por exemplo, analisar como o dono da cantina da escola poderia saber se deve ter em estoque mais sorvete de morango do que de chocolate ou de limão envolve fazer uma pequena pesquisa, organizando os dados e, depois, construir o gráfico para finalmente decidir em função da preferência daqueles alunos que responderam as questões.',
    ],
    [
        'skills_id' => 'BR00EF03MA01',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF03MA01',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF03MA01',
        'property_name' => 'Ano/Faixa',
        'property_value' => '3º',
    ],
    [
        'skills_id' => 'BR00EF03MA01',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Números',
    ],
    [
        'skills_id' => 'BR00EF03MA01',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Leitura, escrita, comparação e ordenação de números naturais de quatro ordens',
    ],
    [
        'skills_id' => 'BR00EF03MA01',
        'property_name' => 'Comentário',
        'property_value' => 'Comparar e ordenar números considerando até a ordem de unidade de milhar exige conhecimento da sequência numérica escrita e falada, bem como estratégias diversas de comparação de quantidades. Sugere-se que seja incluída a representação dos números em reta numérica em escalas de múltiplos de 10 e 100. A habilidade prevê que se dê atenção à representação das quantidades com algarismos e palavras, estabelecendo relação entre elas.',
    ],
    [
        'skills_id' => 'BR00EF03MA01',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, sugerir a leitura de tabelas e de textos que envolvem números da ordem de unidades de milhar para criar contextos de leitura, escrita e comparação de quantidades. Os alunos deverão ser estimulados a representar quantidades usando algarismos ou escrevendo os nomes dos números utilizando a língua materna. Também é esperado que sejam exploradas contagens com intervalos diferentes, em especial usando múltiplos de 10 (10 em 10, 100 em 100, 1000 em 1000), que são úteis no desenvolvimento de procedimentos de cálculo. Estimativas da ordem de grandeza dos números também contribuem para o desenvolvimento do senso numérico.',
    ],
    [
        'skills_id' => 'BR00EF03MA02',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF03MA02',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF03MA02',
        'property_name' => 'Ano/Faixa',
        'property_value' => '3º',
    ],
    [
        'skills_id' => 'BR00EF03MA02',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Números',
    ],
    [
        'skills_id' => 'BR00EF03MA02',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Composição e decomposição de números naturais',
    ],
    [
        'skills_id' => 'BR00EF03MA02',
        'property_name' => 'Comentário',
        'property_value' => 'Identificar as características do sistema de numeração decimal – SND –  implica em saber que ele tem base 10, uma vez que as trocas para uma nova ordem são feitas a cada dez elementos da ordem inferior (a cada dez unidades, uma dezena, a cada dez dezenas, uma centena etc.), possui um símbolo para o zero, bem como que, com dez algarismos (0 a 9), se representa qualquer quantidade e, sobretudo, que é um sistema posicional (o valor de um algarismo no número depende da posição que ele ocupa). Além disso, o SND é aditivo e multiplicativo (3234 =3x1000 + 2 x 100 + 3 x 10 + 4 x 1). Essas são as principais características do SND que começam a ser sistematizadas neste ano e que deverão ser concluídas no 5º ano.',
    ],
    [
        'skills_id' => 'BR00EF03MA02',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, vale destacar que, para aprender o sistema de numeração decimal, há três ações que devem acontecer simultaneamente por meio de atividades desafiadoras: comparar quantidades, produzir escritas numéricas e operar com o sistema (significa que os algoritmos das operações e a aprendizagem do sistema andam juntas). Aos alunos devem ser dadas oportunidades de refletir sobre as características do sistema. O uso de calculadoras, materiais didáticos tais como ábacos e fichas sobrepostas são úteis para a aprendizagem esperada pela habilidade. São recomendadas as propostas de desenvolver formas diversas de representar uma mesma quantidade, com decomposições diferentes, considerando o que já foi apresentado para o 2º ano. A resolução de problemas que envolvam contagens e o  sistema monetário com quantidades expressas por números de até quatro ordens  é um excelente meio para o desenvolvimento do pensamento aritmético, relativamente ao SND. Há, aqui, oportunidade para o trabalho interdisciplinar com as habilidades (EF03LP11) e (EF03LP16), da Língua Portuguesa, no que se refere à leitura, compreensão e utilização de números em receitas.',
    ],
    [
        'skills_id' => 'BR00EF03MA03',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF03MA03',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF03MA03',
        'property_name' => 'Ano/Faixa',
        'property_value' => '3º',
    ],
    [
        'skills_id' => 'BR00EF03MA03',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Números',
    ],
    [
        'skills_id' => 'BR00EF03MA03',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Construção de fatos fundamentais da adição, subtração e multiplicação. Reta numérica',
    ],
    [
        'skills_id' => 'BR00EF03MA03',
        'property_name' => 'Comentário',
        'property_value' => 'Construir fatos básicos de adição e multiplicação envolve perceber que eles dizem respeito às relações estabelecidas entre números menores que 10. Por exemplo, 5 + 2 = 7 é um fato básico de adição e 7 x 2 = 14 é um fato básico da multiplicação. A utilização dos fatos básicos no cálculo básico mental ou escrito se relaciona a memorização de fatos mais simples, que podem ser acionados, quando necessário, para a resolução de atividades numéricas mais complexas.',
    ],
    [
        'skills_id' => 'BR00EF03MA03',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, vale destacar que, a partir deste ano, será enfatizado ainda mais o cálculo mental entendido como o conjunto de procedimentos relativos aos fatos básicos, aos quais se recorre de memória, para obter resultados exatos ou aproximados, sem, contudo, utilizar os algoritmos tradicionais.  O cálculo mental favorece a compreensão do sistema de numeração decimal e influencia na capacidade de resolver problemas. Ou seja, além de o cálculo mental desenvolver o pensamento numérico, ele aumenta a capacidade do aluno em resolver problemas, porque dá a ele ferramentas próprias para operar com quantidades “grandes”. A exploração de regularidades com calculadora e a utilização dos fatos básicos (da adição e da subtração) e da decomposição são essenciais para os cálculos (por exemplo, 57 + 19 = 57 + 20 – 1) são essenciais para que os alunos consigam desenvolver essa habilidade. Deve-se também destacar a reta numérica e sua relação com procedimentos de cálculo.',
    ],
    [
        'skills_id' => 'BR00EF03MA04',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF03MA04',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF03MA04',
        'property_name' => 'Ano/Faixa',
        'property_value' => '3º',
    ],
    [
        'skills_id' => 'BR00EF03MA04',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Números',
    ],
    [
        'skills_id' => 'BR00EF03MA04',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Construção de fatos fundamentais da adição, subtração e multiplicação. Reta numérica',
    ],
    [
        'skills_id' => 'BR00EF03MA04',
        'property_name' => 'Comentário',
        'property_value' => 'Estabelecer a relação entre números naturais e pontos da reta numérica exige conhecer a sequência numérica convencional, de processos de contagem ascendente e descendente com ou sem escala. O uso da régua e a percepção de que há números associados a pontos e a intervalos numéricos também favorecem o desenvolvimento desta habilidade. Para marcar os números na reta numérica é necessário  comparar e ordenar números naturais. A reta numérica é um excelente recurso para a construção dos fatos básicos, utilizando deslocamentos na reta.',
    ],
    [
        'skills_id' => 'BR00EF03MA04',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, deve-se levar em conta que o desenvolvimento desta habilidade favorece a construção de estratégias de cálculo – mental ou escrito, exato ou aproximado. Portanto a construção ,  dos fatos básicos da adição e da subtração é necessária. A utilização da reta numérica pode favorecer essa construção. Assim, a marcação de pontos  de um jogo e a marcação da sequência numérica são contextos  para a construção da reta numérica.',
    ],
    [
        'skills_id' => 'BR00EF03MA05',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF03MA05',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF03MA05',
        'property_name' => 'Ano/Faixa',
        'property_value' => '3º',
    ],
    [
        'skills_id' => 'BR00EF03MA05',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Números',
    ],
    [
        'skills_id' => 'BR00EF03MA05',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Procedimentos de cálculo (mental e escrito) com números naturais: adição e subtração',
    ],
    [
        'skills_id' => 'BR00EF03MA05',
        'property_name' => 'Comentário',
        'property_value' => 'Utilizar diferentes procedimentos de cálculo – mental ou escrito, exato ou aproximado – para a adição e subtração na resolução de problemas, incluindo estratégias pessoais e convencionais, envolve conhecer as ideias e significados dessas operações e seus fatos básicos.',
    ],
    [
        'skills_id' => 'BR00EF03MA05',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, um pressuposto a ser considerado é o de que problema, em matemática, não significa necessariamente um texto escrito que se encerra por um ponto de interrogação. Problema é uma situação que exige investigação, para a qual não se tem uma resposta imediata. Por isso, ao explorar situações problema envolvendo as operações de adição e subtração e formas de resolvê-las no 3º ano, é recomendável que os alunos sejam incentivados a desenvolver estratégias de cálculo. Pode-se, propor, por exemplo, que, antes de utilizar uma técnica convencional para calcular a soma 238 + 497, os alunos possam imaginar meios de realizar o cálculo, produzir registros pessoais das formas encontradas e, posteriormente, dialogar a respeito deles coletivamente. As estratégias convencionais são uma forma, e não a única, de calcular os resultados de adições e de subtrações. Ao final do 3º ano já é esperado que o aluno conheça e utilize os algoritmos convencionais da adição e da subtração com e sem recursos, entre outras estratégias de cálculo. Calculadoras, jogos e materiais didáticos variados também são úteis no desenvolvimento dessa habilidade. Incluir a estimativa da ordem de grandeza do resultado de uma operação antes de realizá-la permite desenvolver um processo de análise da razoabilidade de uma soma ou diferença. A apresentação do algoritmo convencional pode ser feita usando problemas ou materiais manipulativos. É importante, entretanto, que esses algoritmos convivam com as muitas outras formas de efetuar e representar cálculos.',
    ],
    [
        'skills_id' => 'BR00EF03MA06',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF03MA06',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF03MA06',
        'property_name' => 'Ano/Faixa',
        'property_value' => '3º',
    ],
    [
        'skills_id' => 'BR00EF03MA06',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Números',
    ],
    [
        'skills_id' => 'BR00EF03MA06',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Problemas envolvendo significados da adição e da subtração: juntar, acrescentar, separar, retirar, comparar e completar quantidades',
    ],
    [
        'skills_id' => 'BR00EF03MA06',
        'property_name' => 'Comentário',
        'property_value' => 'Resolver e elaborar problemas de adição e subtração com as ideias de juntar (por exemplo, um grupo de 3 objetos e outro de 8 objetos, quando os juntamos, formam outro com 11 objetos), acrescentar (por exemplo, há um grupo com 8 objetos e, se a esses, acrescenta-se 3 objetos forma-se um novo grupo com 11 objetos), separar (por exemplo, há um grupo com 11 objetos e dele separamos um grupo de 8 objetos, o outro grupo terá 3 objetos), retirar (de um grupo de 11 objetos, retiramos 3 objetos e sobra um grupo com 8 objetos), comparar (um grupo com 11 objetos tem 3 objetos a mais do que um grupo de 8 objetos) e completar (em um grupo com 8 objetos, para completar 11, é preciso acrescentar 3) envolve conhecimento numérico e elaboração de formas pessoais de registro da resolução do problema, incluindo a notação formal. A sistematização de diferentes algoritmos de adição e subtração, incluindo o convencional, pode ser feita neste ano.',
    ],
    [
        'skills_id' => 'BR00EF03MA06',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, as orientações para o desenvolvimento desta habilidade devem indicar a necessidade de se propor problemas de modo que os diferentes significados sejam contemplados. Assim, não basta diversificar os contextos, embora seja necessário. Deve-se atentar, , em especial, aos problemas de subtração com as ideias de completar e comparar, que são as ampliações em relação aos anos anteriores. No que se refere à elaboração de problemas, ela tem dupla interpretação, uma vez que é estratégia utilizada pelo professor para que os alunos desenvolvam habilidades de leitura e escrita de textos matemáticos e, simultaneamente, uma aprendizagem a ser feita pelos alunos sobre os significados das operações. A elaboração de problemas pode ter várias propostas distintas, sendo que, para o terceiro ano, elaborar um problema parecido a outro já visto, elaborar um problema dada uma operação ou elaborar perguntas para um problema são as mais indicadas. Em particular, em se tratando da elaboração de problemas com as ideias das operações indicadas na habilidade, outra estratégia didática a ser usada é a de propor aos alunos que elaborem problemas dada uma das ideias estudadas. Há dois aspectos a serem considerados: para elaborar problemas, os alunos precisam ter repertório de resolução, ou seja, referências em problemas já resolvidos; a elaboração do problema implica que haja um trabalho posterior com o texto elaborado, e explicitar esse ponto na proposta é importante. Fazer revisão coletiva de um problema e trocar com o colega para uma análise crítica são estratégias úteis para o processo de explorar o texto elaborado.',
    ],
    [
        'skills_id' => 'BR00EF03MA07',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF03MA07',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF03MA07',
        'property_name' => 'Ano/Faixa',
        'property_value' => '3º',
    ],
]);
