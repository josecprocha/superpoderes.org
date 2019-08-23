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
        'skills_id' => 'BR00EF05MA11',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Álgebra',
    ],
    [
        'skills_id' => 'BR00EF05MA11',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Propriedades da igualdade e noção de equivalência',
    ],
    [
        'skills_id' => 'BR00EF05MA11',
        'property_name' => 'Comentário',
        'property_value' => 'Resolver e elaborar problemas cuja conversão em sentença matemática seja uma igualdade com uma operação em que um dos termos é desconhecido implica em resolver problemas tais como "Eu tinha 20 reais e agora tenho 12. O que pode ter acontecido?" ou "A Diferença entre dois números é 18 e o maior deles é 37. Qual é o outro número?" ou "Pensei em um número, multipliquei por 12 e obtive 84. Em que número pensei?". O pleno desenvolvimento da habilidade envolve o conhecimento das relações entre as operações (adição e subtração; multiplicação e divisão), assim como o sentido do sinal de igualdade como equivalência, o conhecimento previsto na habilidade (EF05MA10) e, ainda, experiência de resolver e elaborar problemas.',
    ],
    [
        'skills_id' => 'BR00EF05MA11',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, é importante explicitar que o conhecimento desta habilidade depende integralmente de conhecimentos anteriores (expressos nas habilidades EF04MA04, EF04MA05, EF04MA12, EF04MA13 e EF04MA14). No entanto, aqui, as relações anteriores são materializadas como processos de resolução de problemas, envolvendo um valor desconhecido. Não se trata de reduzir a habilidade ao antigo "determinar o valor do quadradinho: 3 + □ = 8", mas de usar as relações estudadas e generalizadas como ferramenta de resolução e elaboração de problemas mais complexos, tendo consciência das relações empregadas e sendo capaz de justificar e explicitar a escolha feita no processo de encontrar o valor desconhecido. Atividades e problemas sugeridos na descrição das habilidades conexas mencionadas são bons contextos para o desenvolvimento desta habilidade, que, em resumo, pode ser entendida como síntese das demais.',
    ],
    [
        'skills_id' => 'BR00EF05MA12',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF05MA12',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF05MA12',
        'property_name' => 'Ano/Faixa',
        'property_value' => '5º',
    ],
    [
        'skills_id' => 'BR00EF05MA12',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Álgebra',
    ],
    [
        'skills_id' => 'BR00EF05MA12',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Grandezas diretamente proporcionais. Problemas envolvendo a partição de um todo em duas partes proporcionais',
    ],
    [
        'skills_id' => 'BR00EF05MA12',
        'property_name' => 'Comentário',
        'property_value' => 'Resolver problemas que envolvam variação de proporcionalidade direta entre duas grandezas implica a compreensão de que a relação de proporcionalidade direta estuda a variação de uma grandeza em relação à outra em uma mesma razão. Ou seja, se uma dobra, a outra dobra; se uma triplica, a outra triplica; se uma é dividida em duas partes iguais, a outra também é reduzida à metade. Associar a quantidade de um produto ao valor a pagar (se um litro custa R$ 10,00, 2,5 litros quanto custarão?), alterar as quantidades de ingredientes de receitas (preciso de 250g de manteiga para uma receita, quanto precisarei para meia receita?), ampliar ou reduzir escala em mapas, entre outros, são aplicações do raciocínio proporcional.',
    ],
    [
        'skills_id' => 'BR00EF05MA12',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, deve-se considerar que o raciocínio proporcional é importante para o desenvolvimento do pensamento algébrico. Quando se refere ao pensamento proporcional, algumas habilidades estão envolvidas, como analisar, estabelecer relações e comparações entre grandezas e quantidades, argumentar e explicar relações proporcionais e compreender as relações multiplicativas. Nos anos iniciais do Ensino Fundamental, é preciso lembrar que um dos objetivos da proporcionalidade está em desenvolver o pensamento algébrico, o que significa: observar um fato ou relação, identificar um padrão, algo que se repete, generalizar esse padrão e fazer deduções a partir dessa generalização. Assim, nos problemas de proporcionalidade, é preciso entender a situação e identificar que a relação entre as grandezas envolvidas é de um tipo especial. Uma vez identificado que se trata de uma relação proporcional direta, é preciso usar esse conhecimento e fazer alguma generalização, usando a relação identificada. Por exemplo, se x dobra, então y dobra ou, se x reduz à metade, y reduz à metade. Finalmente, a partir da relação construída entre as grandezas, desenvolve-se a estratégia de resolução. É desse processo de generalizações contínuas que se desenvolve o pensamento algébrico, ao mesmo tempo em que o aluno do 5º ano aprende aritmética. Além da resolução de problemas envolvendo as situações descritas na redação da habilidade, a exploração de tabelas numéricas nas quais os números da segunda coluna têm uma relação de proporcionalidade com os da primeira também é um contexto interessante para o desenvolvimento da habilidade. Há a possibilidade de relacionar esta habilidade com grandezas e medidas, em situações nas quais os alunos, usando malhas quadriculadas, desenham, por exemplo, um retângulo de lados 2 e 3, calculam a área e quadradinhos, calculam o perímetro contando os lados dos quadradinhos e, depois, desenham outro retângulo cujos lados meçam o dobro do retângulo original, o triplo, a metade etc. Em seguida, calculam perímetro e área dos novos retângulos e comparam com as medidas do retângulo original e verificam que dobrado a medida dos lados o perímetro também dobra, mas a área não dobra (ela quadruplica).',
    ],
    [
        'skills_id' => 'BR00EF05MA13',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF05MA13',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF05MA13',
        'property_name' => 'Ano/Faixa',
        'property_value' => '5º',
    ],
    [
        'skills_id' => 'BR00EF05MA13',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Álgebra',
    ],
    [
        'skills_id' => 'BR00EF05MA13',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Grandezas diretamente proporcionais. Problemas envolvendo a partição de um todo em duas partes proporcionais',
    ],
    [
        'skills_id' => 'BR00EF05MA13',
        'property_name' => 'Comentário',
        'property_value' => 'Resolver problemas envolvendo a partilha de uma quantidade em duas partes desiguais, tais como dividir uma quantidade em duas partes, de modo que uma seja o dobro da outra, com compreensão da ideia de razão entre as partes e delas com o todo, significa ser capaz de resolver problemas do seguinte tipo: "Júlio e Antônio fizeram um trabalho juntos e receberam por ele R$ 4800,00. Júlio dedicou 5 dias a realizar a sua parte do trabalho e Antônio, 7 dias. Quanto cada um receberá pelos dias trabalhados?". Observe que, se eles tivessem trabalhado a mesma quantidade de dias, bastaria dividir o valor recebido por 2. No problema em questão, eles trabalharam quantidades de dias desiguais. Por isso, para saber quanto cada um recebeu por seu trabalho, devemos dividir 4800 por 12, obtendo o valor de um dia de trabalho, e pagar o equivalente a 5 dias para Júlio e 7 dias para Antônio. Outra forma de resolver o problema é pensar que, se Júlio trabalhou 5 de 12 dias e Antônio trabalhou 7 de 12 dias, então Júlio receberá 5/12 de 4800 e Antônio, 7/12 de 4800, o que dá R$ 2000,00 e R$ 2800,00, respectivamente, para cada um, o que mostra, de modo mais explícito, a ideia de razão entre as partes e delas com o todo.',
    ],
    [
        'skills_id' => 'BR00EF05MA13',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, é importante a explicitação de que o contexto para o desenvolvimento da habilidade é a resolução de problemas. No entanto, o essencial é explorar a ideia de divisão em partes proporcionais em si, e não necessariamente a exigência de que a resolução seja expressa em forma de razão. Por isso, a valorização das diferentes formas de representação da resolução de problemas por esquemas, desenhos ou outros registros deve ser valorizada, assim como a representação em forma de razão, que, para ser conquistada, exige um ambiente de análise e comparação de formas diversas de resolver um problema.',
    ],
    [
        'skills_id' => 'BR00EF05MA14',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF05MA14',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF05MA14',
        'property_name' => 'Ano/Faixa',
        'property_value' => '5º',
    ],
    [
        'skills_id' => 'BR00EF05MA14',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Geometria',
    ],
    [
        'skills_id' => 'BR00EF05MA14',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Plano cartesiano: coordenadas cartesianas (1º quadrante) e representação de deslocamentos no plano cartesiano',
    ],
    [
        'skills_id' => 'BR00EF05MA14',
        'property_name' => 'Comentário',
        'property_value' => 'Utilizar e compreender diferentes representações para a localização de objetos no plano, como mapas, células em planilhas eletrônicas e coordenadas geográficas, a fim de desenvolver as primeiras noções de coordenadas cartesianas, implica em desenvolver habilidades verbais, visuais e de representação especificamente relacionadas às estratégias de representação aqui mencionadas, compreendendo seus princípios, legendas, escalas e os termos relacionados na habilidade (direita, esquerda, para cima, para baixo, intersecção, etc). Uma aprendizagem importante será a de que um ponto pode ser localizado usando duas coordenadas e um sistema de eixos perpendiculares, numerados e orientados.',
    ],
    [
        'skills_id' => 'BR00EF05MA14',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, deve ser explicitado a ideia de que são necessárias duas coordenadas para a localização de um objeto no plano. Para o desenvolvimento desta habilidade, é interessante a utilização de jogos como batalha naval, de movimentações em malhas quadriculadas, inclusive as desenhadas no chão para que os alunos possam se deslocar, a utilização de jogos eletrônicos para que os alunos localizem objetos usando coordenadas, a utilização de mapas de rua para que os alunos localizem endereços específicos. Planilhas eletrônicas que são organizadas em linhas e colunas são também interessantes para o desenvolvimento desta habilidade, assim como a análise de aplicativos utilizados para orientação de pessoas, tais como o GPS.',
    ],
    [
        'skills_id' => 'BR00EF05MA15',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF05MA15',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF05MA15',
        'property_name' => 'Ano/Faixa',
        'property_value' => '5º',
    ],
    [
        'skills_id' => 'BR00EF05MA15',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Geometria',
    ],
    [
        'skills_id' => 'BR00EF05MA15',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Plano cartesiano: coordenadas cartesianas (1º quadrante) e representação de deslocamentos no plano cartesiano',
    ],
    [
        'skills_id' => 'BR00EF05MA15',
        'property_name' => 'Comentário',
        'property_value' => 'Interpretar, descrever e representar a localização ou movimentação de objetos no plano cartesiano (1º quadrante) utilizando coordenadas cartesianas, indicando mudanças de direção e de sentido e giros envolve que já haja o domínio de processo de localização e representação da movimentação de objetos e pessoas no espaço. Utilizar um vocabulário que expresse a localização (direita, esquerda, mais próximo, mais distante, entre outros) também é relevante. Experiências de representação de trajetos em malhas quadriculadas e de leitura de mapas auxiliam para que, então, possa ser explorada a ampliação das formas de descrição, localização e representação de trajetos e movimentos em um sistema de coordenadas ordenado (cartesiano) formado por um eixo horizontal e outro vertical, numerados e que se interceptam perpendicularmente na origem. O conhecimento da habilidade (EF05MA14) será relevante para a aprendizagem relacionada nesta habilidade. A localização de um ponto se dá por uma coordenada indicada por um par de números, sendo um número do eixo horizontal (OX) e outro, do vertical (OY). Esse sistema de coordenadas completo divide o plano em quatro quadrantes (contados no sentido anti-horário) e, em cada quadrante, há pontos que podem ser localizados com números. No entanto, como apenas o primeiro quadrante tem coordenadas positivas, apenas ele será explorado neste ano. A marcação de mudanças de direção e giros se associam com a compreensão de conceito de ângulo.',
    ],
    [
        'skills_id' => 'BR00EF05MA15',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, deve-se ter a indicação de que esta habilidade se desenvolve no mesmo contexto e conjuntamente com a habilidade (EF05MA14), bem como depende dos conhecimentos explorados na habilidade (EF04MA16). A ampliação em relação à habilidade (EF05MA14) está em marcações de mudanças de direção e sentido, bem como de giros nos deslocamentos registrados no plano. As mudanças de direção e giros são formas de introduzir as primeiras noções de ângulo. Sugere-se, inclusive, que, no currículo, haja a inserção de uma habilidade relacionada à representação de ângulos a partir da ideia de giro. É possível considerar o uso de planilhas eletrônicas para relacionar a localização de uma célula de tabela com as coordenadas de linha e coluna naturais nesse tipo de software, com uma complementação que pode ser feita se a tabela construída na planilha for transformada em gráfico em barras verticais, horizontais ou em linha (sem desconsiderar o tipo de variável representada) e houver o pedido de que as linhas auxiliares horizontais e verticais sejam mostradas no fundo do gráfico. Esse recurso permite associar as coordenadas com as representações de determinados pontos no gráfico.',
    ],
    [
        'skills_id' => 'BR00EF05MA16',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF05MA16',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF05MA16',
        'property_name' => 'Ano/Faixa',
        'property_value' => '5º',
    ],
    [
        'skills_id' => 'BR00EF05MA16',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Geometria',
    ],
    [
        'skills_id' => 'BR00EF05MA16',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Figuras geométricas espaciais: reconhecimento, representações, planificações e características',
    ],
    [
        'skills_id' => 'BR00EF05MA16',
        'property_name' => 'Comentário',
        'property_value' => 'Associar figuras espaciais a suas planificações (prismas, pirâmides, cilindros e cones) e analisar, nomear e comparar seus atributos implica em classificar os sólidos em poliedros e corpos redondos. Separar os poliedros em prismas, pirâmides e outros, explicitando as principais características de cada grupo, em especial relativos ao tipo de superfície que os compõem, bem como à quantidade de arestas e vértices. Compreende também a identificação do cilindro, do cone e da esfera como corpos redondos. Implica, ainda, em conhecer que a planificação é uma representação plana. As representações espaciais, que mostram desenhos de prismas e pirâmides, são uma aprendizagem específica que envolve desde esboço até representações sob diferentes pontos de vista em malhas, incluindo noções simples de perspectiva. O reconhecimento de alguns polígonos é importante para a compreensão de poliedros, em particular os prismas e pirâmides.',
    ],
    [
        'skills_id' => 'BR00EF05MA16',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, merece destaque que as planificações, assim como as representações de desenho em malhas, fazem parte das aprendizagens dos alunos associadas à habilidade. Merecem cuidado os registros por escrito das propriedades dos sólidos em estudo, bem como a utilização de linguagem geométrica em aula. Há a sugestão de que seja dado destaque ao processo de argumentar em sala de aula. Sugere-se, ainda, que, mais do que associar uma planificação a um sólido, algo que já foi proposto em anos anteriores, os alunos analisem se uma determinada planificação permite ou não construir um determinado sólido. A análise de planificações “erradas” permite ampliar a capacidade de visualização dos alunos, bem como faz com que reflitam acerca das características dos sólidos sugeridos na habilidade. É importante, ainda, analisar com os alunos o que permanece inalterado e o que sofre modificações na planificação em relação ao sólido em sua representação tridimensional. Por exemplo, os alunos podem perceber que os ângulos das faces de um cubo continuam retos na planificação, bem como a quantidade de quadrados que formam as faces. No entanto, a planificação não mostra os vértices do cubo. Registros escritos e leitura de pequenos textos explicativos a respeito de sólidos auxiliam os alunos a utilizarem o vocabulário geométrico e identificarem propriedades nos objetos estudados. Associar propostas com arte e leitura de livros de histórias infantis também podem ser recursos interessantes para abordar os conceitos envolvidos na habilidade.',
    ],
    [
        'skills_id' => 'BR00EF05MA17',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF05MA17',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF05MA17',
        'property_name' => 'Ano/Faixa',
        'property_value' => '5º',
    ],
    [
        'skills_id' => 'BR00EF05MA17',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Geometria',
    ],
    [
        'skills_id' => 'BR00EF05MA17',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Figuras geométricas planas: características, representações e ângulos',
    ],
    [
        'skills_id' => 'BR00EF05MA18',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF05MA18',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF05MA18',
        'property_name' => 'Ano/Faixa',
        'property_value' => '5º',
    ],
    [
        'skills_id' => 'BR00EF05MA18',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Geometria',
    ],
    [
        'skills_id' => 'BR00EF05MA18',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Ampliação e redução de figuras poligonais em malhas quadriculadas: reconhecimento da congruência dos ângulos e da proporcionalidade dos lados correspondentes',
    ],
    [
        'skills_id' => 'BR00EF05MA18',
        'property_name' => 'Comentário',
        'property_value' => 'Reconhecer a congruência dos ângulos e a proporcionalidade entre os lados correspondentes de figuras poligonais em situações de ampliação e de redução em malhas quadriculadas e usando tecnologias digitais implica na exploração dos elementos que não se alteram e dos que se modificam na ampliação e na redução de figuras geométricas planas, envolvendo a aprendizagem do efeito da relação de proporcionalidade entre uma figura e sua ampliação/redução.',
    ],
    [
        'skills_id' => 'BR00EF05MA18',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, deve ficar claro que a utilização de malhas permitirá perceber a ideia de ampliação de figuras relacionadas à proporcionalidade. Dada uma figura, apresenta-se a proposta de ampliá-la, por exemplo, dobrando a medida dos lados. Da mesma forma, pode-se desenhar na malha uma versão reduzida da figura, dividindo a medida dos lados pela metade. Após a ampliação ou a redução, é interessante propor que se comparem elementos das duas figuras (a medida dos lados, a medida dos ângulos por sobreposição, o perímetro e a área) para ver o que ocorre e com isso produza uma justificativa oral e/ou por escrito. Por exemplo, percebe que o perímetro dobrou, mas a área não. Usando recorte e sobreposição das figuras, é possível que investiguem o que aconteceu com os ângulos da figura ampliada/reduzida em relação à figura original. Essa possibilidade de criar argumentos para explicar uma percepção em geometria contribui para desenvolver a capacidade de argumentar, característica do letramento matemático, bem como faz parte de uma ação para promover as habilidades lógicas (analisar argumentos, definições; reconhecer argumentos válidos e não válidos; dar contraexemplos) e verbais (capacidade de expressar percepções; elaborar e discutir argumentos, justificativas, definições; capacidade de descrever objetos geométricos; usar vocabulário geométrico oralmente ou por escrito).',
    ],
    [
        'skills_id' => 'BR00EF05MA19',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF05MA19',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF05MA19',
        'property_name' => 'Ano/Faixa',
        'property_value' => '5º',
    ],
    [
        'skills_id' => 'BR00EF05MA19',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Grandezas e medidas',
    ],
    [
        'skills_id' => 'BR00EF05MA19',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Medidas de comprimento, área, massa, tempo, temperatura e capacidade: utilização de unidades convencionais e relações entre as unidades de medida mais usuais',
    ],
    [
        'skills_id' => 'BR00EF05MA19',
        'property_name' => 'Comentário',
        'property_value' => 'Resolver e elaborar problemas envolvendo medidas das grandezas comprimento, área, massa, tempo, temperatura e capacidade, recorrendo a transformações entre as unidades mais usuais em contextos socioculturais, implica em identificar as grandezas, compreender o que é medi-las (comparando com outra grandeza de mesma espécie, escolhendo uma unidade e expressando a medição numericamente com a identificação da unidade utilizada), conhecer as principais unidades padrão de medida e estabelecer relações entre elas, incluindo a expressão por meio de frações ou decimais. O conhecimento das grandezas e suas respectivas unidades de medida deverão ser aplicados em leituras de textos cotidianos, respeitando a diversidade local.',
    ],
    [
        'skills_id' => 'BR00EF05MA19',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, é importante relacionar esta habilidade com os números racionais na sua forma fracionária e decimal e incluir situações-problema envolvendo o uso das medições, dos instrumentos de medida e a exploração da relação entre unidades de medida de uma mesma grandeza. Estimativas de medida também devem ser consideradas. Todas as sugestões de contexto que foram dadas para o estudo de grandezas e medidas nos anos anteriores se aplicam aqui, considerando apenas uma evolução com foco nas relações entre as unidades padrão mais usuais de cada grandeza. Além disso, nesta etapa escolar, já é possível explorar, em forma de um projeto, a utilização das medidas em situações cotidianas diversas. Ter um olhar voltado para a medição presente nas ações cotidianas é importante para a valorização desse conhecimento.',
    ],
    [
        'skills_id' => 'BR00EF05MA20',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF05MA20',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
]);
