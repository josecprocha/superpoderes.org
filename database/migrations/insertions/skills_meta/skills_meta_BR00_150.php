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
        'skills_id' => 'BR00EF03MA24',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Sistema monetário brasileiro: estabelecimento de equivalências de um mesmo valor na utilização de diferentes cédulas e moedas',
    ],
    [
        'skills_id' => 'BR00EF03MA24',
        'property_name' => 'Comentário',
        'property_value' => 'Resolver e elaborar problemas que envolvam a comparação e a equivalência de valores monetários brasileiros se relaciona a conhecer notas e cédulas, bem como saber quantas notas de um valor menor são necessárias para trocar por uma nota de valor maior, ou quantas vezes o valor de uma nota é maior (ou menor) do que o valor de outra.',
    ],
    [
        'skills_id' => 'BR00EF03MA24',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, deve ficar claro que o sistema monetário pode ser explorado por meio de situações-problema nas quais os alunos possam realizar ou simular situações de compra e venda e em que precisem trocar notas, analisar valores, utilizar a noção de desconto e troco. Uma sugestão é a visita a mercados ou feiras locais (ou utilizar folhetos), analisando preços de mercadorias, fazendo lista de compras e até, se possível e conveniente, realizar uma compra de verdade para  analisar o que comprar, quanto gastar e como economizar.',
    ],
    [
        'skills_id' => 'BR00EF03MA25',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF03MA25',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF03MA25',
        'property_name' => 'Ano/Faixa',
        'property_value' => '3º',
    ],
    [
        'skills_id' => 'BR00EF03MA25',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Probabilidade e estatística',
    ],
    [
        'skills_id' => 'BR00EF03MA25',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Análise da ideia de acaso em situações do cotidiano: espaço amostral',
    ],
    [
        'skills_id' => 'BR00EF03MA25',
        'property_name' => 'Comentário',
        'property_value' => 'Identificar, em eventos familiares aleatórios, todos os resultados possíveis implica em analisar e registrar o que pode ocorrer em uma ação sobre a qual se conhecem os possíveis resultados, mas não se têm certeza sobre quais desses resultados podem sair, nem em que ordem. Por exemplo, ao jogar dois dados e anotar a diferença entre os pontos das faces, os resultados possíveis são {0, 1, 2, 3, 4, 5}, embora não se saiba em cada jogada qual deles sairá. No entanto, é possível saber que o resultado 0 tem mais chance de sair do que o resultado 5 porque há seis subtrações com diferença 0 e apenas uma subtração com a diferença 5.',
    ],
    [
        'skills_id' => 'BR00EF03MA25',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, a indicação de situações de jogos com dados são bons contextos para desenvolver a habilidade prevista. Analisar, por exemplo, quais são todas as somas que podem aparecer quando se jogam dois dados e se calcular a adição dos números nas faces superiores, organizar uma tabela de resultados e observar se é mais comum a soma 7 ou a soma 3, por exemplo, permite decidir qual das duas somas têm mais chance de sair durante um jogo que envolva adição de números em dois dados. Ao elaborar o currículo, é importante considerar que a compreensão e aplicação de conceitos iniciais de probabilidade também auxiliam que os alunos desenvolvam a capacidade de fazer previsões (levantar hipóteses) e avaliar a razoabilidade delas por meio de testes.',
    ],
    [
        'skills_id' => 'BR00EF03MA26',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF03MA26',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF03MA26',
        'property_name' => 'Ano/Faixa',
        'property_value' => '3º',
    ],
    [
        'skills_id' => 'BR00EF03MA26',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Probabilidade e estatística',
    ],
    [
        'skills_id' => 'BR00EF03MA26',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Leitura, interpretação e representação de dados em tabelas de dupla entrada e gráficos de barras',
    ],
    [
        'skills_id' => 'BR00EF03MA26',
        'property_name' => 'Comentário',
        'property_value' => 'Resolver problemas com base nos dados apresentados em tabelas de dupla entrada e gráficos exige alguma familiaridade com gráficos e tabelas para que se possa compreender como extrair as informações necessárias ao que está proposto no problema.',
    ],
    [
        'skills_id' => 'BR00EF03MA26',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, é importante que as atividades com gráficos realizadas em sala de aula permitam aos alunos interpretá‑los por meio de questões que envolvam diferentes níveis de compreensão. A leitura e a interpretação de gráficos e tabelas contribui para o desenvolvimento do letramento matemático e das atitudes  de questionar, levantar hipóteses e procurar relações entre os dados. Essas atitudes são inerentes ao processo de leitura de qualquer tipo de texto. Ao propor problemas a partir dos gráficos e tabelas, é importante variar o nível de perguntas a serem feitas, de modo que o aluno estabeleça relações entre os dados, façam estimativas, e previsões. Nesse nível, é possível que o aluno, dependendo da situação, utilizem informação implícita no gráfico, de modo a extrapolar os dados, predizendo algum fato. Há, aqui, oportunidade de trabalho interdisciplinar com as habilidades (EF03LP25), EF35LP20), (EF03LP26), da Língua Portuguesa; (EF03CI06), (EF03CI09), da Ciência; (EF03HI03), da História; e (EF03GE01), da Geografia, associadas a coleta, leitura, comparação e interpretação de dados, com apoio de recursos multissemióticos, incluindo gráficos e tabelas.',
    ],
    [
        'skills_id' => 'BR00EF03MA27',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF03MA27',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF03MA27',
        'property_name' => 'Ano/Faixa',
        'property_value' => '3º',
    ],
    [
        'skills_id' => 'BR00EF03MA27',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Probabilidade e estatística',
    ],
    [
        'skills_id' => 'BR00EF03MA27',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Leitura, interpretação e representação de dados em tabelas de dupla entrada e gráficos de barras',
    ],
    [
        'skills_id' => 'BR00EF03MA27',
        'property_name' => 'Comentário',
        'property_value' => 'Ler, interpretar e comparar dados apresentados em gráficos e tabelas utilizando termos relacionados com frequência envolve a noção de que a frequência de um acontecimento é o número de vezes que ele se repete. Assim, por exemplo, se, ao jogar o dado dez vezes, você notar que em 5 vezes saiu o número 6, então a frequência do número 6 é 5 (as cinco vezes em que o seis apareceu). Esta habilidade prevê o uso desses dados de frequência para entender aspectos relevantes da realidade sociocultural do aluno.',
    ],
    [
        'skills_id' => 'BR00EF03MA27',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, é importante destacar que habilidades relacionadas à estatística tem como foco o desenvolvimento do pensamento estatístico, nesta fase,  pode ser entendido como a capacidade de utilizar e/ou interpretar, de forma adequada, os dados apresentados em tabelas de dupla entrada e de gráficos de colunas. A análise de gráficos presentes nas mídias pode ser feita com muita parcimônia tendo em vista que esses, geralmente  envolvem números decimais, porcentagens, números de ordem de milhões ou mais e gráficos mais complexos. Na elaboração do currículo, é importante dar destaque à resolução de problemas a partir de gráficos e tabelas.',
    ],
    [
        'skills_id' => 'BR00EF03MA28',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF03MA28',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF03MA28',
        'property_name' => 'Ano/Faixa',
        'property_value' => '3º',
    ],
    [
        'skills_id' => 'BR00EF03MA28',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Probabilidade e estatística',
    ],
    [
        'skills_id' => 'BR00EF03MA28',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Coleta, classificação e representação de dados referentes a variáveis categóricas, por meio de tabelas e gráficos',
    ],
    [
        'skills_id' => 'BR00EF03MA28',
        'property_name' => 'Comentário',
        'property_value' => 'Realizar pesquisa envolvendo variável categórica implica em identificar que as variáveis nos estudos estatísticos são os valores que assumem determinadas características dentro de uma pesquisa. Variáveis categóricas ou qualitativas são aquelas que não podem ser expressas numericamente, pois relacionam situações como cor dos olhos, preferência por um time de futebol, preferência por uma marca de automóvel, preferência musical, entre outras. A realização da pesquisa acontece a partir de procedimentos tais como identificar um problema a ser respondido e desenvolver procedimentos que vão da escolha da população investigada a procedimentos de coleta, organização e publicação dos dados da pesquisa e da resolução do problema investigado. Neste ano, a ampliação em relação ao ano anterior está na escolha de uma amostra maior de pessoas e na utilização da tecnologia para tabular e representar dados da pesquisa.',
    ],
    [
        'skills_id' => 'BR00EF03MA28',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, em relação à estatística é importante reiterar que os primeiros passos envolvem o trabalho com a coleta e a organização de dados de uma pesquisa de interesse dos alunos. O planejamento de como fazer a pesquisa ajuda a compreender o papel da estatística na vida cotidiana. Assim, a leitura, a interpretação e a comparação de dados estatísticos apresentados em  tabelas e gráficos têm papel fundamental, bem como a produção de texto escrito para a comunicação de dados e conclusões. Assim, para trabalhar estatística, o professor pode partir do levantamento de temas vivenciados pelos alunos, por exemplo, a observação do número de dias ensolarados, o número de faltas de alunos durante um mês, a coleta de opinião de outras pessoas a respeito de um determinado fato, o levantamento do local de origem da família, entre outros contextos que são adequados para o desenvolvimento de procedimentos de pesquisa estatística. Há, aqui, oportunidade para o trabalho interdisciplinar com as habilidades (EF03LP26), (EF35LP17), da Língua Portuguesa; (EF03HI02) e (EF03HI03), da História, associadas à realização de pesquisas.',
    ],
    [
        'skills_id' => 'BR00EF04MA01',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF04MA01',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF04MA01',
        'property_name' => 'Ano/Faixa',
        'property_value' => '4º',
    ],
    [
        'skills_id' => 'BR00EF04MA01',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Números',
    ],
    [
        'skills_id' => 'BR00EF04MA01',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Sistema de numeração decimal: leitura, escrita, comparação e ordenação de números naturais de até cinco ordens',
    ],
    [
        'skills_id' => 'BR00EF04MA01',
        'property_name' => 'Comentário',
        'property_value' => 'Ler, escrever e ordenar números naturais até a ordem das dezenas de milhar implica em compreender como se representam quantidades dessa magnitude usando a escrita com algarismos e a escrita com palavras. Essa habilidade envolve também a ordenação e a comparação de números naturais, utilizando regras do sistema de numeração decimal. A comparação de números pode ser expressa usando símbolos para a igualdade e  para a desigualdade (diferente, maior e menor).',
    ],
    [
        'skills_id' => 'BR00EF04MA01',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, os contextos para o desenvolvimento desta habilidade são encontrados no uso de tabelas, de textos do cotidiano, tais como jornais e revistas que poderão ser úteis para criar contextos de leitura, escrita e comparação de quantidades. Os alunos deverão ser estimulados a representar quantidades usando algarismos e também palavras. Também é esperado que sejam exploradas contagens com intervalos diferentes, em especial usando múltiplos de 100, que são úteis no desenvolvimento de procedimentos de cálculo. Outro ponto a ser cuidado é a produção e análise de maneiras diversas de registro de quantidades no cotidiano, tais como as que aparecem em legendas de gráficos, ou no uso nas mídias (por exemplo, 200 mil). É importante que os alunos sejam capazes de representar a comparação de números naturais usando diferentes representações, entre elas os sinais convencionais de maior (>), menor (<) e diferente (≠).',
    ],
    [
        'skills_id' => 'BR00EF04MA02',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF04MA02',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF04MA02',
        'property_name' => 'Ano/Faixa',
        'property_value' => '4º',
    ],
    [
        'skills_id' => 'BR00EF04MA02',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Números',
    ],
    [
        'skills_id' => 'BR00EF04MA02',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Composição e decomposição de um número natural de até cinco ordens, por meio de adições e multiplicações por potências de 10',
    ],
    [
        'skills_id' => 'BR00EF04MA02',
        'property_name' => 'Comentário',
        'property_value' => 'Mostrar, por decomposição, que um número natural pode ser escrito por meio de adições e multiplicações por potências de dez, supõe que essa decomposição seja relacionada às propriedades do sistema de numeração decimal. Assim, o aluno deverá ampliar a compreensão da estrutura do  sistema de numeração decimal, observando os princípios que caracterizam um sistema posicional. . Por exemplo, o número 3235 pode ser assim decomposto:  3235 = 3000 + 200 + 30 + 5. Logo, 3235 = 3x1000 + 2x100 + 3x10 + 5. A decomposição facilita a compreensão de que o símbolo 3, que aparece duas vezes, representa valores diferentes, dependendo da posição: 3000 (3x1000) e 30 (3 x 10).  Essas decomposições são úteis para efetuar cálculos, desde os pessoais, como 2 x 128 = 2 x 100 + 2 x 20 + 2 x 8, até os convencionais.',
    ],
    [
        'skills_id' => 'BR00EF04MA02',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, merece destaque que, nesta fase escolar, a decomposição de um número por meio de adições e multiplicações por potências de dez ainda não virá com notação de potência (3235 = 3x103 x 2 x 102 + 3 x 101 + 5 x 100), o que somente será feito nos anos finais do ensino fundamental. No entanto, trabalha-se o princípio da potência quando se compreende que o valor de um algarismo em uma escrita numérica quantitativa depende da posição que ele ocupa e que, para saber isso, multiplica-se o algarismo pelo valor da posição. Destaca-se ainda o fato de que trabalhar com essa característica não implica e valorizar fatos isolados, tais como valor relativo e valor absoluto. Não é o nome que importa aqui, mas as propriedades do sistema decimal. Como indicado anteriormente para o 3º ano, o uso de calculadoras e de materiais didáticos como o ábaco e as fichas sobrepostas serão relevantes para ampliar  a compreensão das características do sistema de numeração decimal, em especial, sua natureza multiplicativa e aditiva: por exemplo, o número 15234, deve ser entendido como  1 x 10000 + 5 x 1000 + 2 x 100 + 30 x 10 + 4, que é a representação por potências de 10. São recomendadas as propostas de desenvolver formas diversas de representar uma mesma quantidade, com decomposições diferentes, considerando o que já foi apresentado para o 3º ano.',
    ],
    [
        'skills_id' => 'BR00EF04MA03',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF04MA03',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF04MA03',
        'property_name' => 'Ano/Faixa',
        'property_value' => '4º',
    ],
    [
        'skills_id' => 'BR00EF04MA03',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Números',
    ],
    [
        'skills_id' => 'BR00EF04MA03',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Propriedades das operações para o desenvolvimento de diferentes estratégias de cálculo com números naturais',
    ],
    [
        'skills_id' => 'BR00EF04MA03',
        'property_name' => 'Comentário',
        'property_value' => 'Resolver problemas com números naturais envolvendo adição e subtração utilizando estratégias diversas de cálculo exige tanto o conhecimento de formas distintas de calcular, quanto a identificação de diferentes significados dessas operações. Ambos os aspectos são essenciais para a elaboração de problemas, uma vez que a experiência em resolver problemas se associa com a capacidade de elaborar problemas.',
    ],
    [
        'skills_id' => 'BR00EF04MA03',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, é importante destacar que a compreensão dos significados da  adição e da subtração deve ser aprofundada neste ano. Para isso é importante a proposição de situações-problemas envolvendo os diferentes significados. Portanto, não é suficiente apenas diversificar os contextos dos problemas. A elaboração e a resolução de problemas criam contextos para que os alunos desenvolvam procedimentos variados de cálculo. No entanto, no 4º ano, espera-se que os alunos compreendam e utilizem as técnicas operatórias convencionais da adição e da subtração com fluência e utilizem diversos procedimentos para o cálculo mental.',
    ],
    [
        'skills_id' => 'BR00EF04MA04',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF04MA04',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF04MA04',
        'property_name' => 'Ano/Faixa',
        'property_value' => '4º',
    ],
    [
        'skills_id' => 'BR00EF04MA04',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Números',
    ],
    [
        'skills_id' => 'BR00EF04MA04',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Propriedades das operações para o desenvolvimento de diferentes estratégias de cálculo com números naturais',
    ],
    [
        'skills_id' => 'BR00EF04MA04',
        'property_name' => 'Comentário',
        'property_value' => 'Utilizar as relações entre adição e subtração com números naturais implica conhecer que se a + b = c então, c – b = a e  c – a = b. Utilizar as relações entre multiplicação e divisão implica saber que, se a x b = c (a ≠ 0 e b ≠ 0) então c ÷ a = b e c ÷ b = a. Conhecer essas relações permite desenvolver estratégias de cálculo mental e é útil especialmente na construção dos fatos básicos da adição e da multiplicação.',
    ],
    [
        'skills_id' => 'BR00EF04MA04',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo é importante considerar a necessidade da proposição de problemas, envolvendo diferentes significados, como contexto para que os alunos utilizem as relações entre a adição e a subtração para a obtenção do valor desconhecido de uma sentença, ampliando assim suas estratégias de cálculo. Esse é um bom momento para a utilização da calculadora como um instrumento para produzir resultados e para construir estratégias de verificação e controle desses resultados. Outro aspecto a considerar é a importância de registrar por escrito as relações percebidas.',
    ],
    [
        'skills_id' => 'BR00EF04MA05',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
]);
