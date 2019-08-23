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
        'skills_id' => 'BR00EF02MA04',
        'property_name' => 'Comentário',
        'property_value' => 'Compor e decompor números de até três ordens por meio de adições exige conhecer a sequência numérica escrita e falada com números maiores do que 100, bem como compreender que um número pode ser escrito como soma de outros números. Compreender que há diferentes formas de decompor um número por adições (por exemplo, que 234 pode ser decomposto como 230 + 4, 200 + 30 + 4 ou 220 + 14) permitirá desenvolver estratégias de cálculo, bem como apoiará a compreensão das características do sistema de numeração decimal. Por outro lado, as características do sistema apresentadas na habilidade (EF02MA01) serão importantes para a compreensão de formas distintas de compor e decompor números. A habilidade prevê o suporte de materiais manipuláveis.',
    ],
    [
        'skills_id' => 'BR00EF02MA04',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, é possível indicar que a exploração da composição e decomposição de quantidades de até 3 ordens com materiais manipuláveis, como fichas numéricas ou jogos, pode favorecer a compreensão do Sistema de Numeração Decimal. Outro bom contexto pode ser o sistema monetário por meio da análise de formas distintas de se obter uma quantia com cédulas diversas e depois representar as soluções obtidas com escritas aditivas — por exemplo, investigar diferentes formas de representar 150 reais usando apenas cédulas de real e representar as soluções encontradas de pelo menos três maneiras diferentes. Na elaboração do currículo, vale a pena destacar que decompor um número envolve adição, multiplicação ou uma combinação das duas operações e que, nesta etapa, será utilizada apenas a adição. Outro ponto que merece destaque é que um número, por exemplo, 154, pode ter mais do que a decomposição usual expressa em 100 + 50 + 4, sendo possível também ter escritas tais como 150 + 4 ou 120 + 30 + 4 ou, ainda, 100 + 30 + 20 + 4.',
    ],
    [
        'skills_id' => 'BR00EF02MA05',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF02MA05',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF02MA05',
        'property_name' => 'Ano/Faixa',
        'property_value' => '2º',
    ],
    [
        'skills_id' => 'BR00EF02MA05',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Números',
    ],
    [
        'skills_id' => 'BR00EF02MA05',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Construção de fatos fundamentais da adição e da subtração',
    ],
    [
        'skills_id' => 'BR00EF02MA05',
        'property_name' => 'Comentário',
        'property_value' => 'Construir fatos básicos de adição e subtração envolve perceber que eles dizem respeito às relações estabelecidas entre números menores que 10. Por exemplo, 5 + 2 = 7 é um fato básico de adição e 7 - 2 = 5 é um fato básico da subtração. A construção dos fatos básicos envolve compor e decompor quantidades por meio de adições e subtrações, e decorre do desenvolvimento de procedimentos para resolver pequenos problemas de contagem, conhecendo formas diversas de representação, inclusive com a apresentação dos sinais de adição, subtração e igualdade.',
    ],
    [
        'skills_id' => 'BR00EF02MA05',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, é importante deixar claro que, na BNCC, no segundo ano, o domínio de fatos básicos se relaciona diretamente ao cálculo mental e influencia na resolução de problemas, fornece meios de controle sobre possíveis erros em cálculos, amplia o conhecimento do SND e permite uma boa relação do aluno com a aprendizagem das operações. Jogos de arremesso, tais como o de argolas, para contagem de pontos, atividades com calculadora e busca de regularidades em resultados de operações são formas de criar ambiente de desenvolvimento para sua aprendizagem. Sugere-se que a reta numérica seja utilizada para auxiliar na construção dos fatos básicos de adição e subtração.',
    ],
    [
        'skills_id' => 'BR00EF02MA06',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF02MA06',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF02MA06',
        'property_name' => 'Ano/Faixa',
        'property_value' => '2º',
    ],
    [
        'skills_id' => 'BR00EF02MA06',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Números',
    ],
    [
        'skills_id' => 'BR00EF02MA06',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Problemas envolvendo diferentes significados da adição e da subtração (juntar, acrescentar, separar, retirar)',
    ],
    [
        'skills_id' => 'BR00EF02MA06',
        'property_name' => 'Comentário',
        'property_value' => 'Resolver e elaborar problemas de adição e subtração com as ideias de juntar (por exemplo, um grupo de 3 objetos e outro de 8 objetos, quando os juntamos, formam outro com 11 objetos), acrescentar (por exemplo, há um grupo com 8 objetos e, a esses, eu junto mais 3 objetos, então, o grupo passa a ter 11 objetos), separar (por exemplo, há um grupo com 11 objetos e dele teremos que separar um grupo de 8 objetos, o outro grupo terá 3 objetos) e retirar (de um grupo de 11 objetos, retiramos 3 objetos e sobra um grupo com 8 objetos) envolve conhecimento numérico e elaboração de formas pessoais de registrar resolução do problema, incluindo a notação formal.',
    ],
    [
        'skills_id' => 'BR00EF02MA06',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, merece destaque que as atividades que envolvem resolução de situações-problema são das mais relevantes para a aprendizagem da matemática. É importante que, ao elaborar o currículo, essa centralidade esteja explicitada no texto. É esperado que, no segundo ano, os alunos sejam capazes de formular e resolver problemas em diversos contextos, envolvendo a adição e a subtração. Como a BNCC aborda principalmente os problemas relacionados às operações, é importante incluir  problemas não numéricos. Vale destacar também que uma situação-problema, nesta fase, como a própria redação da habilidade indica a utilização de estratégias diversas para a sua resolução. Em especial no que diz respeito aos problemas de adição e subtração, deve-se estar atento ao fato de que envolvem diferentes ideias relativas a essas operações, uma vez que se encontram em um campo conceitual que relaciona as duas operações, o que resulta que a melhor aprendizagem ocorre quando ambas são abordadas conjuntamente, rompendo, assim, com a abordagem tradicional de primeiro ensinar problemas de adição para depois ensinar problemas de subtração. A elaboração de problemas pode ser feita em duplas ou grupos, com estratégias variadas, tais como elaborar uma pergunta, um problema parecido e até uma nova pergunta para o problema. Após a elaboração, será fundamental explorar o texto produzido visando aprimorá-lo, modificá-lo ou reescrevê-lo.',
    ],
    [
        'skills_id' => 'BR00EF02MA07',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF02MA07',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF02MA07',
        'property_name' => 'Ano/Faixa',
        'property_value' => '2º',
    ],
    [
        'skills_id' => 'BR00EF02MA07',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Números',
    ],
    [
        'skills_id' => 'BR00EF02MA07',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Problemas envolvendo adição de parcelas iguais (multiplicação)',
    ],
    [
        'skills_id' => 'BR00EF02MA07',
        'property_name' => 'Comentário',
        'property_value' => 'Para resolver e elaborar problemas de multiplicação com a ideia de adição de parcelas iguais (4 + 4 + 4 = 3 x 4) considera-se necessária a experiência anterior tanto com a resolução e elaboração de problemas quanto com a escrita aditiva. A habilidade introduz as primeiras ideias relacionadas à multiplicação com foco na compreensão da relação entre adição e multiplicação. Não há exigência nessa fase de memorizar fatos básicos da multiplicação, uma vez que o foco está em uma das ideias dessa operação. A representação do tipo a x b = c pode ser incluída como uma forma de representar uma escrita aditiva de parcelas iguais. A expressão da relação multiplicativa pode ser feita com a utilização de recursos de expressão diversos tais como desenhos, esquemas e suporte de imagem.',
    ],
    [
        'skills_id' => 'BR00EF02MA07',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, é importante explicitar que um dos destaques desta habilidade é que ela permite inferir que, em uma proposta curricular, as operações não venham antes dos problemas, mas em conjunto com eles. Aprende-se uma operação resolvendo problemas, expressando a resolução de múltiplas maneiras, sendo uma delas a escrita aritmética. Na elaboração do currículo, vale lembrar que a BNCC apresenta o pressuposto de que, ao longo da escola, seja desenvolvida a competência do letramento matemático e a possibilidade de raciocinar e poder expressar esse raciocínio visando comunicar-se e aprender mais matemática. Isso é algo relevante quando se concebe um currículo de matemática. Ao se considerar a parte metodológica do currículo, torna-se relevante o destaque para incentivar diferentes processos de resolução nos quais seja possível a utilização de representações pessoais (desenhos, esquemas, escritas numéricas), bem como analisar coletivamente e discutir a respeito das soluções encontradas. O incentivo a registros diversos são parte do processo de apoio à construção da linguagem matemática, amplia o raciocínio e a capacidade de argumentar dos alunos. Isso vale para situações-problema em geral.',
    ],
    [
        'skills_id' => 'BR00EF02MA08',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF02MA08',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF02MA08',
        'property_name' => 'Ano/Faixa',
        'property_value' => '2º',
    ],
    [
        'skills_id' => 'BR00EF02MA08',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Números',
    ],
    [
        'skills_id' => 'BR00EF02MA08',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Problemas envolvendo significados de dobro, metade, triplo e terça parte',
    ],
    [
        'skills_id' => 'BR00EF02MA08',
        'property_name' => 'Comentário',
        'property_value' => 'Resolver e elaborar problemas envolvendo dobro, metade, triplo e terça parte exige conhecimento da habilidade anterior (EF02MA07) e a introdução de uma nova ideia, que é a de que dividir em duas ou três partes iguais se relaciona diretamente com metade e terça parte, respectivamente. É importante ter atenção para aprendizagem de palavras novas, tais como dobro e triplo, e relacioná-las com a multiplicação por dois e por três. As primeiras noções de fração como parte de um todo também estão implícitas nesta habilidade. A habilidade prevê elaborar formas pessoais (desenhos, escrita com palavras, esquemas) de resolução e não por procedimentos convencionais. É provável que a aprendizagem desta habilidade se estenda para o terceiro e quarto anos, uma vez que se passará a utilizar procedimentos convencionais.',
    ],
    [
        'skills_id' => 'BR00EF02MA08',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, vale destacar que contagens, problemas, jogos e exploração de receitas simples são excelentes contextos para se explorar as ideias centrais desta habilidade. Em especial a proposição de situações que envolvem a divisão de grandezas discretas em partes iguais (duas ou três partes) com o suporte de materiais manipuláveis (coleções  de botões, figurinhas, etc.) É importante destacar que compreender metade e terça parte passa também pela exploração de objetos que podem ou não ser divididos em duas ou três partes iguais. Não são esperadas as representações numéricas de metade e um terço, mas os alunos devem ser estimulados a fazer desenhos e justificar por escrito ou oralmente as divisões que fazem e as partes que são obtidas dessas divisões.',
    ],
    [
        'skills_id' => 'BR00EF02MA09',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF02MA09',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF02MA09',
        'property_name' => 'Ano/Faixa',
        'property_value' => '2º',
    ],
    [
        'skills_id' => 'BR00EF02MA09',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Álgebra',
    ],
    [
        'skills_id' => 'BR00EF02MA09',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Construção de sequências repetitivas e de sequências recursivas',
    ],
    [
        'skills_id' => 'BR00EF02MA09',
        'property_name' => 'Comentário',
        'property_value' => 'Construir sequências numéricas em ordem crescente e decrescente envolve conhecer a sequência numérica de rotina e diferentes procedimentos de contagem ascendente e descendente (escala de 2 em 2, 3 em 3, 5 em 5, 10 em 10 etc.). Além disso, é importante identificar outras regularidades dessas sequências. Por exemplo, na sequência de 5 em 5 a partir do 0 (0, 5, 20, 15, 20, ...) os números terminam em 0 ou 5 e na sequência de 5 em 5 a partir do 2 (2, 7, 12, 17, 22, ...) os números terminam em 2 ou 7.',
    ],
    [
        'skills_id' => 'BR00EF02MA09',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, um dos aspectos mais importantes para ser considerado em relação à álgebra dos anos iniciais é que ela não se assemelha ao tipo de álgebra que se conhece dos anos finais do Ensino Fundamental e que envolve técnicas algébricas, resolução de equações, por exemplo.  O trabalho com regularidades inicia-se pela organização e pela ordenação de elementos que tenham atributos comuns. A relação da Álgebra com a unidade temática Números é bastante natural no trabalho com sequências numéricas, seja na ação de completar uma sequência com elementos ausentes, seja na construção de sequências segundo uma determinada regra de formação. Por exemplo, construir uma sequência numérica começando pelo número três e que cresça de 5 em 5. Esse trabalho contribui para que os alunos percebam regularidades nos números naturais. Esta habilidade explora um aspecto de buscar padrões e expressá-los em situações de contagem que são muito desafiadoras para alunos desta idade se for proposto como um jogo, um problema a ser investigado. É importante destacar também que o pensamento algébrico evolui se houver possibilidade de se representar o padrão observado, e de se falar a respeito dele.',
    ],
    [
        'skills_id' => 'BR00EF02MA10',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF02MA10',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF02MA10',
        'property_name' => 'Ano/Faixa',
        'property_value' => '2º',
    ],
    [
        'skills_id' => 'BR00EF02MA10',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Álgebra',
    ],
    [
        'skills_id' => 'BR00EF02MA10',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Identificação de regularidade de sequências e determinação de elementos ausentes na sequência',
    ],
    [
        'skills_id' => 'BR00EF02MA10',
        'property_name' => 'Comentário',
        'property_value' => 'Descrever um padrão implica em observar e explorar sequências numéricas ou geométricas, de modo a identificar uma de suas regularidades e, então, expressá-las. Uma sequência é repetitiva quando tem um mesmo padrão de organização que se repete a cada elemento. Por exemplo, na sequência 2, 4, 6, 8, 10..., o padrão de repetição é que um termo é obtido somando 2 ao anterior. Uma sequência recursiva explicita seu primeiro valor (ou primeiros valores) e define outros valores na sequência em termos dos valores iniciais segundo uma regra. Por exemplo, na sequência 1, 1, 2, 3, 5, 8, 13, a recursividade está em que, a partir do segundo termo, que é 1, os demais são obtidos da soma dos dois anteriores: 2 = 1 + 1; 3 = 1 + 2; 5 = 2 + 3 e assim por diante.',
    ],
    [
        'skills_id' => 'BR00EF02MA10',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, um contexto natural para propiciar a aprendizagem das ideias envolvidas nessa  habilidade é a identificação e a exploração propriamente dita dos "segredos" de uma sequência. Observar sequências já iniciadas, construir sequências, representar sequências em retas numéricas e investigar elementos faltantes de uma sequência serão contextos naturais de situações que os alunos precisam resolver. Em termos gerais, o coração da álgebra nos anos iniciais está na identificação dos padrões observados, e na descrição dessas regularidades. As generalizações podem ser expressas de várias maneiras — por meio da linguagem natural, de desenhos, de símbolos e, futuramente, no ensino fundamental II, com o uso da linguagem algébrica.',
    ],
    [
        'skills_id' => 'BR00EF02MA11',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF02MA11',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF02MA11',
        'property_name' => 'Ano/Faixa',
        'property_value' => '2º',
    ],
    [
        'skills_id' => 'BR00EF02MA11',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Álgebra',
    ],
    [
        'skills_id' => 'BR00EF02MA11',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Identificação de regularidade de sequências e determinação de elementos ausentes na sequência',
    ],
    [
        'skills_id' => 'BR00EF02MA11',
        'property_name' => 'Comentário',
        'property_value' => 'Descrever elementos ausentes em uma sequência exige observar e identificar o padrão ou regularidade que a constitui e, a partir disso, descrever as características ou como se calcula os elementos faltantes para, então, completá-la.',
    ],
    [
        'skills_id' => 'BR00EF02MA11',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, as atividades relacionadas a esta habilidade decorrem imediatamente das considerações feitas para as habilidades EF02MA09 e EF02MA10.',
    ],
    [
        'skills_id' => 'BR00EF02MA12',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF02MA12',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF02MA12',
        'property_name' => 'Ano/Faixa',
        'property_value' => '2º',
    ],
    [
        'skills_id' => 'BR00EF02MA12',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Geometria',
    ],
    [
        'skills_id' => 'BR00EF02MA12',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Localização e movimentação de pessoas e objetos no espaço, segundo pontos de referência, e indicação de mudanças de direção e sentido',
    ],
    [
        'skills_id' => 'BR00EF02MA12',
        'property_name' => 'Comentário',
        'property_value' => 'Identificar e registrar a localização de algo ou de alguém segundo um ou mais pontos de referência requer ter conhecimento da importância dos referenciais para essas ações.  Assim, o desenvolvimento dessa habilidade requer a ampliação da linguagem por meio de termos e ícones que indiquem localização segundo um referencial (por exemplo, utilizar um croqui da sala de aula para indicar que uma pessoa está entre outras duas, ou à direita de uma e à esquerda de outra, ou em frente ao quadro e ao lado da porta). Já a identificação e a representação de deslocamentos propiciam  outro tipo de compreensão, que se relaciona à direção e sentido (ir adiante, em linha reta e mudar de direção virando à direita ou à esquerda; caminhar na mesma direção, mas em sentido oposto ao deslocamento de alguém, etc).',
    ],
    [
        'skills_id' => 'BR00EF02MA12',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, contextos interessantes para o desenvolvimento desta habilidade podem estar em aplicativos nos quais os alunos precisem deslocar objetos por trilhas e labirintos. Também pode-se propiciar vivências nas quais os alunos possam descrever trajetos ou realizar percursos usando movimentos corporais ou descrevendo verbalmente a localização de um objeto ou pessoa segundo pontos de referências familiares. Na elaboração do currículo, duas explicitações são importantes: linguagem e representação gráfica. Isso porque uma forma de avaliar a compreensão que o aluno tem do espaço e das possibilidades de nele localizar objetos e pessoas é observando o uso de termos tais como ao lado de, entre, antes de, após o, à esquerda ou à direita. Essas marcas linguísticas indicam a ampliação de conhecimento a respeito da localização e devem ser incentivadas em situações relativas à habilidade. Embora não seja fácil diferenciar o significado de direção do significado de sentido, é importante iniciar esse trabalho propondo atividades que envolvam a distinção entre essas duas noções. Outro ponto importante é sugerir que os alunos representem deslocamentos ou localizações feitas por meio de desenhos. Desenhos e esquemas feitos durante ou após as atividades de localização espacial auxiliam que se amplie a compreensão do espaço.',
    ],
    [
        'skills_id' => 'BR00EF02MA13',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF02MA13',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
]);
