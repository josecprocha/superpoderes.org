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
        'skills_id' => 'BR00EF05MA02',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, um contexto para o desenvolvimento desta habilidade é a exploração de medidas de comprimento, em especial a relação entre o metro, o decímetro, o centímetro e o milímetro. O uso da relação entre as unidades de medida de comprimento mais usuais, com a inclusão do decímetro para favorecer a exploração de um décimo do metro, a leitura e representação de medições feitas com régua, a comparação de números racionais na forma decimal, bem como a relação com o inteiro e a representação na reta numérica auxilia  os alunos a relacionarem décimos, centésimos e milésimos entre si, da mesma forma que fizeram com unidades, dezenas e centenas. A expressão da relação entre cédulas e moedas de Real, por meio de números racionais na forma decimal, é outro contexto que pode ser útil para a habilidade, especialmente para introduzir escritas de quantidades expressas na forma decimal por decomposição. Ao expressar, usando cédulas e moedas, o valor de R$ 3,50, por exemplo, é possível ter 3 + 0,50 = 3 + 0,25 + 0,25 = 2,00 + 1,00 + 0,50, entre outras escritas. Ao aprofundar o conhecimento dos números racionais,  é necessário que os alunos percebam que deixam de valer algumas ideias que são características dos números naturais, por exemplo, o fato de que, entre os números racionais, não tem sentido falar em antecessor e sucessor, pois, entre dois números racionais quaisquer, é sempre possível encontrar outro racional. Assim, o aluno deverá perceber, por exemplo, que entre 0,7 e 0,8 estão números como 0,71, 0,713 ou 0,79. A representação na reta numérica é um recurso adequado para auxiliar nessa compreensão. Outro ponto importante é que, se entre os números naturais, a quantidade de algarismos era um bom indicador da ordem de grandeza, o mesmo não vale para os números racionais. Por exemplo, 5382 > 475. Entretanto, a comparação entre 5,3 e 1,359 não obedece ao mesmo critério, uma vez que 1,359 < 5,3. Novamente, a representação por aproximação na reta numérica auxilia a compreensão, bem como comparar os dois números utilizando um quadro de valor para representá-lo.',
    ],
    [
        'skills_id' => 'BR00EF05MA03',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF05MA03',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF05MA03',
        'property_name' => 'Ano/Faixa',
        'property_value' => '5º',
    ],
    [
        'skills_id' => 'BR00EF05MA03',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Números',
    ],
    [
        'skills_id' => 'BR00EF05MA03',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Representação fracionária dos números racionais: reconhecimento, significados, leitura e representação na reta numérica',
    ],
    [
        'skills_id' => 'BR00EF05MA03',
        'property_name' => 'Comentário',
        'property_value' => 'Identificar e representar frações (menores e maiores que a unidade), associando-as ao resultado de uma divisão ou à ideia de parte de um todo implica em compreender, simultaneamente, que o traço da fração pode significar a divisão entre o numerador e o denominador e também como indicador de que um inteiro foi dividido em  certo número de partes iguais (indicadas no denominador), sem sobrar resto, e que, dessas partes, foram tomadas algumas (indicadas no numerador). Assim, a fração 2/5 pode significar 2:5 e um inteiro dividido em 5 partes das quais se tomou 2. Essa relação deve ser explorada em frações maiores, menores ou iguais a um inteiro, como, por exemplo: 1/2; 2/2 ou 3/2. Não há necessidade de nomear as frações estudadas em própria, imprópria ou aparente, uma vez que o que importa na habilidade são as duas ideias envolvendo fração (como divisão e como parte de um todo) e a representação na reta numérica.',
    ],
    [
        'skills_id' => 'BR00EF05MA03',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, é importante explicitar que esta é uma habilidade que envolve muitas ideias importantes. A sugestão é que ela seja desdobrada em três: uma que trata de frações como parte de um todo e divisão (em todos discretos e contínuos); outra que aborde as representações de frações maiores, menores ou iguais ao inteiro associadas às duas ideias e, finalmente, a representação das frações maiores, menores ou iguais ao inteiro na reta numérica. É importante que todas elas se relacionem com grandezas e medidas, de modo que os alunos possam fazer conexões matemáticas relativas às duas áreas temáticas em questão. É indicado que sejam propostos  desafios nos quais haja que se pensar no que ocorre quando fracionamos um todo discreto e um todo contínuo e  o que diferencia a fração como parte de um todo ou como divisão. Por exemplo, pode-se propor situações nas quais os alunos tenham que fracionar uma folha de papel, um pedaço de barbante, uma quantidade de fichas ou de botões. Também associarão que a folha e o barbante (exemplo de todo contínuo) são fracionados em partes com o mesmo tamanho, enquanto as fichas e os botões (exemplo de todo discreto), fracionáveis em grupos com a mesma quantidade de unidades. A reta numérica terá uma função relevante na medida em que, associada aos conhecimentos da habilidade (EF05MA02), favorece a compreensão de que existem números racionais, que são escritos em formas diferentes, que representam a mesma quantidade, como é o caso de 1/2 e 0,5 ou 5/10. Da mesma maneira, é interessante propor que representem 1,2 e 1/2 na reta numérica para que vejam graficamente que essas duas escritas não representam a mesma quantidade porque ocupam pontos distintos na reta. Outro material recomendado para explorar frações são quebra-cabeças, tais como o tangram,',
    ],
    [
        'skills_id' => 'BR00EF05MA04',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF05MA04',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF05MA04',
        'property_name' => 'Ano/Faixa',
        'property_value' => '5º',
    ],
    [
        'skills_id' => 'BR00EF05MA04',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Números',
    ],
    [
        'skills_id' => 'BR00EF05MA04',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Comparação e ordenação de números racionais na representação decimal e na fracionária utilizando a noção de equivalência',
    ],
    [
        'skills_id' => 'BR00EF05MA04',
        'property_name' => 'Comentário',
        'property_value' => 'Identificar frações equivalentes implica em compreender que há escritas fracionárias distintas que representam a mesma quantidade ou a mesma parte de um todo. O desenvolvimento desta habilidade se relaciona diretamente com as aprendizagens referentes à habilidade (EF05MA03).',
    ],
    [
        'skills_id' => 'BR00EF05MA04',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, pode-se destacar que a ideia de equivalência é uma das mais importantes a serem aprendidas até o 5º ano de escolaridade. Ela permite que os alunos comparem números racionais na forma fracionária com denominadores diferentes e também que realizem as operações de adição e subtração de frações com denominadores diferentes. Envolve o pensamento algébrico se a equivalência for explorada como uma regularidade entre frações que representam quantidades iguais de um mesmo todo, ainda que expressas com números diferentes. Um aspecto a ser considerado é a utilização, pelos alunos, das expressões \'equivalente a\', \'maior que\', \'menor que\', \' o mesmo valor\' como linguagem a ser adquirida ao longo da exploração dos conceitos envolvidos na habilidade. Problemas com materiais manipulativos, tais como tiras de frações, tangram, entre outros, são adequados para criar contextos de aprendizagem da habilidade. Problemas do seguinte tipo: "Julia e Andreza estão completando um álbum com 240 figurinhas. Júlia já colou metade das figurinhas de seu álbum e Andreza colou dois quartos do total de figurinhas do álbum. Quantas figurinhas cada menina já colou?" são boas situações para colocar em discussão a ideia de frações equivalentes. A representação de frações equivalentes na reta numérica auxilia na observação de que escritas fracionárias diferentes representam quantidades iguais, quando se referem ao mesmo todo, e por isso, são representadas pelo mesmo ponto na reta numérica. Merece atenção que os alunos sejam estimulados sempre a representar as ideias aprendidas de formas diferentes (por escrito, numericamente, com desenhos), justificar suas resoluções e, ainda, escrever as aprendizagens feitas.',
    ],
    [
        'skills_id' => 'BR00EF05MA05',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF05MA05',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF05MA05',
        'property_name' => 'Ano/Faixa',
        'property_value' => '5º',
    ],
    [
        'skills_id' => 'BR00EF05MA05',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Números',
    ],
    [
        'skills_id' => 'BR00EF05MA05',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Comparação e ordenação de números racionais na representação decimal e na fracionária utilizando a noção de equivalência',
    ],
    [
        'skills_id' => 'BR00EF05MA05',
        'property_name' => 'Comentário',
        'property_value' => 'Comparar e ordenar números racionais positivos (representações fracionária e decimal), relacionando-os a pontos na reta numérica implica em compreender o significado de numerador e denominador em uma fração, a compreensão de que uma escrita fracionária representa uma quantidade (de um todo discreto ou contínuo) e que é possível analisar se uma escrita fracionária representa uma quantidade maior, menor ou igual a outra, expressando essa comparação tanto verbalmente (maior que, menor que, igual a, diferente de) quanto pelo uso dos sinais de igualdade ou desigualdade correspondentes às expressões verbais (<,>, = ou ≠).',
    ],
    [
        'skills_id' => 'BR00EF05MA05',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, é preciso considerar que as aprendizagens esperadas por esta habilidade decorrem diretamente do que os alunos aprendem nas habilidades (EF05MA03) e (EF05MA04). Em especial, esta habilidade deverá permitir a utilização de frações equivalentes para que a comparação entre frações aconteça, além da observação da ordem de grandeza de uma fração por sua representação na reta numérica. Assim, não se espera que seja utilizada qualquer regra de comparação de frações, em especial a redução a um mesmo denominador por uso de mínimo múltiplo comum. A utilização de problemas relacionando frações com medidas são bons contextos para favorecer a aprendizagem da habilidade, como: comparar 2/5 de um metro com 4/10 de um metro; reconhecer qual a peça do tangram que representa a maior fração do quadrado formado pelas 7 peças; usando malha quadriculada, mostrar frações que representem menos do que 1/6 da área de um retângulo formado por 24 quadradinhos; investigar frações que representem 1/4 do círculo todo e registrar isso com desenhos e escritas numéricas.',
    ],
    [
        'skills_id' => 'BR00EF05MA06',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF05MA06',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF05MA06',
        'property_name' => 'Ano/Faixa',
        'property_value' => '5º',
    ],
    [
        'skills_id' => 'BR00EF05MA06',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Números',
    ],
    [
        'skills_id' => 'BR00EF05MA06',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Cálculo de porcentagens e representação fracionária',
    ],
    [
        'skills_id' => 'BR00EF05MA06',
        'property_name' => 'Comentário',
        'property_value' => 'Associar as representações 10%, 25%, 50%, 75% e 100% respectivamente à décima parte, quarta parte, metade, três quartos e um inteiro para calcular porcentagens implica em conhecer frações, suas representações e significados, incluindo a ideia de equivalência, que permitirá compreender que 10% é o mesmo que 10/100 ou 1/10, que 25% é o mesmo que 25/100 ou 1/4 e assim por diante. Para que os cálculos sejam realizados utilizando estratégias pessoais, cálculo mental e calculadora, será importante a compreensão do significado de calcular “1/10 de”; “1/4 de”; “1/2 de” uma quantidade. Os contextos de educação financeira, envolvendo a relação com sistema monetário (gastei 10% do previsto; paguei 50% à vista; usei 100% do meu dinheiro) envolve a relação das porcentagens com seu uso cotidiano.',
    ],
    [
        'skills_id' => 'BR00EF05MA06',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, pode ser incluída a sugestão de que os alunos, usando materiais manipulativos, retomem a ideia do que significa calcular 1/2, 1/4, 1/10 de uma quantidade. Outro ponto de relevância é a abordagem da ideia de "por cento" como a representação de uma fração de denominador 100, associando esse sentido ao símbolo de porcentagem, o que é central no que se refere à habilidade. Toda exploração deve ser realizada trazendo procedimentos de cálculo associados a frações e proporcionalidade e não à técnica da regra de três. Deve-se destacar o uso social da porcentagem, em especial em gráficos e situações apresentadas em diferentes textos de circulação ampla (mídia impressa, campanhas, situações de compra e venda etc.). É recomendável que se inclua a ideia de fração como razão para uma maior compreensão do uso da porcentagem em situações estatísticas que denotam preferências. Por exemplo, 15% de preferência a um candidato em uma eleição pode indicar que 15 em cada 100 preferem aquele candidato e isso se representa também pela escrita 15/100, ou que 20% de gastos de uma família com vestuário significa que, de cada 100 reais de gastos da família, 20 são com vestuário, o que pode ser representado como 20/100. São indicadas atividades que propiciem a construção da ideia de que 10% correspondem a 1/10 de uma quantidade, 25% correspondem a 1/4, 50% correspondem a 1/2, 75% correspondem a 3/4 e 100% correspondem ao inteiro. Essas explorações podem ser feitas também usando a calculadora, o que permite inclusive explorar porcentagens em resolução de problemas com números de magnitudes diferentes e que exijam cálculos mais sofisticados de divisão e multiplicação quando em situação de educação financeira. A tecnologia permite, nesse caso, que o foco seja na resolução de problemas. No currículo, a relevância de registros diversos, de trabalho em grupo e de registro das aprendizagens deve ser destacada. A linguagem matemática relativa a frações também precisa ser valorizada como aprendizagem a ser feita pelos alunos.',
    ],
    [
        'skills_id' => 'BR00EF05MA07',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF05MA07',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF05MA07',
        'property_name' => 'Ano/Faixa',
        'property_value' => '5º',
    ],
    [
        'skills_id' => 'BR00EF05MA07',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Números',
    ],
    [
        'skills_id' => 'BR00EF05MA07',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Problemas: adição e subtração de números naturais e números racionais cuja representação decimal é finita',
    ],
    [
        'skills_id' => 'BR00EF05MA07',
        'property_name' => 'Comentário',
        'property_value' => 'Resolver e elaborar problemas de adição e subtração com números naturais e com números racionais, cuja representação decimal seja finita (uma escrita decimal com um número finito de algarismos após a vírgula), utilizando estratégias diversas, como cálculo por estimativa, cálculo mental e algoritmos envolve conhecer as operações com números naturais, utilizando as propriedades do sistema de numeração decimal, relacionar a representação decimal do número racional com as características do sistema de numeração decimal e identificar que uma operação pode ser realizada com diferentes procedimentos de cálculo, analisando vantagens e desvantagens de cada um dependendo da situação e contextos nos quais ela aparece.',
    ],
    [
        'skills_id' => 'BR00EF05MA07',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, deve levar em conta que as habilidades que indicam “resolver/elaborar problemas” são mais complexas no sentido que o aluno deve interpretar a situação para decidir o que deverá ser feito.  É importante que os alunos sejam colocados diante de situações-problema diversas para que apliquem os conhecimentos referentes às habilidades anteriores. Destaca-se a importância de os alunos serem expostos a problemas cuja solução não seja dada pela aplicação imediata de um algoritmo ou conceito, mas que exija deles reflexão e análise. Por isso, é importante ter cuidado com o desenvolvimento desta habilidade, em especial nas recomendações metodológicas. A elaboração de problemas é uma habilidade e, ao mesmo tempo, uma estratégia didática para que os alunos se apropriem da linguagem matemática e de formas de expressão características dessa disciplina, por isso mereceu tanto destaque na BNCC. Ao organizar o currículo, deve-se acrescentar que a elaboração de problemas merece ter tratamento de texto, como se faz em língua portuguesa: precisa de leitor, de revisão, de análise, ter uma finalidade clara etc. Além disso, é importante considerar que, para elaborar bons problemas, o aluno precisa ter repertório de resolução de problemas interessantes e não apenas problemas que na verdade são meros exercícios. A adição e subtração de números decimais de representação finita deverá ser explorada por procedimentos pessoais de cálculo, decomposição ou usando as relações entre inteiro, décimos e centésimos. Recomenda-se que números decimais cuja representação seja finita, mas com mais de duas casas decimais, sejam explorados com calculadora. A estimativa e o cálculo mental são importantes estratégias de resolução que merecem destaque e devem, não apenas nesse momento, mas em vários outros, ser trabalhada.   É esperado que a adição e subtração com números naturais seja explorada com criptogramas e desafios numéricos, uma vez que as técnicas operatórias em si já foram exploradas em anos anteriores, sendo, portanto, uma retomada para os alunos. Problemas envolvendo cálculos com valores monetários e com medidas (incluindo o cálculo de perímetro de figuras) são bons contextos para a exploração de operações de adição e subtração com números racionais, cuja representação decimal seja finita.',
    ],
    [
        'skills_id' => 'BR00EF05MA08',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF05MA08',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF05MA08',
        'property_name' => 'Ano/Faixa',
        'property_value' => '5º',
    ],
    [
        'skills_id' => 'BR00EF05MA08',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Números',
    ],
    [
        'skills_id' => 'BR00EF05MA08',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Problemas: multiplicação e divisão de números racionais cuja representação decimal é finita por números naturais',
    ],
    [
        'skills_id' => 'BR00EF05MA08',
        'property_name' => 'Comentário',
        'property_value' => 'Resolver e elaborar problemas de multiplicação e divisão com números naturais e com números racionais cuja representação decimal seja finita (com multiplicador natural e divisor natural e diferente de zero), utilizando estratégias diversas, como cálculo por estimativa, cálculo mental e algoritmos, envolve conhecer os significados das operações com números naturais e efetuar cálculos, utilizando as propriedades do sistema de numeração decimal, relacionar a representação decimal do número racional com as características do sistema de numeração decimal e identificar que uma operação pode ser realizada com diferentes procedimentos de cálculo, analisando vantagens e desvantagens de cada um dependendo da situação e contextos nos quais ela aparece. A habilidade prevê a sistematização das estratégias de cálculo de divisão com números naturais, incluindo o algoritmo convencional de um número de até cinco algarismos por outro de até dois algarismos, além da divisão entre dois números naturais com quociente decimal.',
    ],
    [
        'skills_id' => 'BR00EF05MA08',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, deve ficar claro que, ao final do 5º ano, é esperado que os alunos dominem diferentes procedimentos de operar com números naturais, incluindo aqui as técnicas operatórias convencionais de multiplicação e divisão. A resolução de problemas envolvendo essas operações é um importante aliado nesse sentido. É recomendável que haja cuidado na utilização, pelo estudante, de termos tais como \'fator\' e \'produto\' na multiplicação, bem como \'dividendo\', \'divisor\', \'quociente\' e \'resto\' na divisão. Também é relevante que se explore, em problemas de divisão, o papel do resto e a relação entre ele e a natureza daquilo que se está dividindo para que haja uma análise da possibilidade de, em uma divisão com resto diferente de zero, saber se pode ou não continuar dividindo, dando origem a um resultado decimal. Assim, as divisões com resultado decimal não devem ser tratadas fora do contexto de um problema para que essa análise seja feita neste ano escolar. Por exemplo, 5 : 2 = 2,5 pode não ser possível se 5 se referir a gatos. Mas, se forem 5m de tecido, a divisão terá quociente 2,5 e resto zero. Recomenda-se, ao longo do trabalho com a divisão, a exploração de estimativa da ordem de grandeza do quociente. Com relação à multiplicação de um número decimal por um natural, é possível utilizar a ideia de adição de parcelas iguais (em casos como 3 x 2,5 = 2,5 + 2,5 + 2,5 = 7,5). Com o conhecimento da propriedade comutativa, eles poderão calcular da mesma forma 2,5 x 3. Outra possibilidade para calcular  3 x 2,5 é usando a propriedade distributiva: 3 x (2,0 + 0,5). Recomenda-se que, utilizando a calculadora, os alunos explorem regularidades da multiplicação de um número decimal por 10, 100 e 1000 para que compreendam melhor as diferentes estratégias de multiplicação previstas na habilidade. Eles também podem explorar o que acontece com o produto de uma multiplicação de dois fatores se multiplicar ou divide os dois fatores por um mesmo número. Podem também explorar a mesma relação para dividendo e divisor. A multiplicação entre números racionais na forma decimal e a divisão entre números desse tipo poderão ser mais bem exploradas no 6º e 7º anos, quando os alunos tiverem um tempo maior de reflexão acerca dos racionais.',
    ],
    [
        'skills_id' => 'BR00EF05MA09',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF05MA09',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF05MA09',
        'property_name' => 'Ano/Faixa',
        'property_value' => '5º',
    ],
    [
        'skills_id' => 'BR00EF05MA09',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Números',
    ],
    [
        'skills_id' => 'BR00EF05MA09',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Problemas de contagem do tipo: “Se cada objeto de uma coleção A for combinado com todos os elementos de uma coleção B, quantos agrupamentos desse tipo podem ser formados?”',
    ],
    [
        'skills_id' => 'BR00EF05MA09',
        'property_name' => 'Comentário',
        'property_value' => 'Resolver e elaborar problemas simples de contagem envolvendo o princípio multiplicativo, como a determinação do número de agrupamentos possíveis ao se combinar cada elemento de uma coleção com todos os elementos de outra coleção, por meio de diagramas de árvore ou por tabelas, implica em associar problemas do tipo: “Se cada objeto de uma coleção A for combinado com todos os elementos de uma coleção B, quantos agrupamentos desse tipo podem ser formados?” . Para a resolução, as estratégias poderão ser diversas, incluindo a multiplicação.',
    ],
    [
        'skills_id' => 'BR00EF05MA09',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, o trabalho com as operações permite aos alunos identificarem conexões entre s diferentes áreas temáticas da matemática. Assim, ao explorar problemas de contagem, o principal raciocínio envolvido é o de combinatória, que poderá ser útil, por exemplo, em probabilidade. Acredita-se que a recomendação principal seja para que os problemas propostos possam ser resolvidos pelos alunos de muitas formas possíveis (diagramas, listas, árvores de possibilidades, tabelas) e que essas formas sejam valorizadas, analisadas, discutidas e validadas em sala. Procedimentos de discussão de soluções para problemas auxiliam os alunos a perceberem que vale a pena dedicar esforço e tempo para enfrentar a resolução de um desafio, que eles são capazes de resolver e criar soluções.',
    ],
    [
        'skills_id' => 'BR00EF05MA10',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF05MA10',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF05MA10',
        'property_name' => 'Ano/Faixa',
        'property_value' => '5º',
    ],
    [
        'skills_id' => 'BR00EF05MA10',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Álgebra',
    ],
    [
        'skills_id' => 'BR00EF05MA10',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Propriedades da igualdade e noção de equivalência',
    ],
    [
        'skills_id' => 'BR00EF05MA10',
        'property_name' => 'Comentário',
        'property_value' => 'Concluir, por meio de investigações, que a relação de igualdade existente entre dois membros permanece ao adicionar, subtrair, multiplicar ou dividir cada um desses membros por um mesmo número, para construir a noção de equivalência, implica que seja compreendido, primeiramente, o sentido de equivalência (se a + b = c + d, então c + d = a + b) associado ao sinal de igualdade. Partindo dessa compreensão, por meio de investigação e observação de regularidades, será possível compreender a relação expressa na habilidade para todas as ações previstas na habilidade: se 3 +17 = 12 + 8, então 3 +17 + 5 = 12 + 8 + 5; se  2 + 6 = 8, então  4 x (2 + 6) = 4 x 8; se 16 - 6 = 10, então, (16 - 6) : 5 = 10 : 5.',
    ],
    [
        'skills_id' => 'BR00EF05MA10',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, deve-se destacar a importância de compreender o significado do sinal de igualdade na aritmética para o desenvolvimento do pensamento algébrico. Uma compreensão relacional do sinal de igualdade implica em entender que ele representa uma relação de equivalência. Nos anos iniciais, essa relação é, muitas vezes, interpretada com o significado "é a mesma quantidade que" ao expressar uma relação entre quantidades equivalentes. Quando se explora a equivalência, os alunos precisam saber que 8 = 8 e 8 = 3 + 5 são escritas verdadeiras e que 8 + 3 = 11 + 8 é falso, já que 8 + 3 e 11 + 8 não são equivalentes. Essa compreensão é necessária para o uso do pensamento relacional na resolução de equações em situações como 9 + 4 = b + 7. É importante que o aluno perceba que se existe uma relação de igualdade entre dois membros, isso implica que se operar um dos membros por um número e o mesmo for feito para o outro membro a relação de igualdade permanece. As investigações a respeito da equivalência são feitas com análise de escritas matemáticas diversas, bem como pela expressão e registro de conclusões.',
    ],
    [
        'skills_id' => 'BR00EF05MA11',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF05MA11',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF05MA11',
        'property_name' => 'Ano/Faixa',
        'property_value' => '5º',
    ],
]);
