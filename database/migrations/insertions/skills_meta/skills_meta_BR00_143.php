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
        'skills_id' => 'BR00EF01MA09',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Padrões figurais e numéricos: investigação de regularidades ou padrões em sequências',
    ],
    [
        'skills_id' => 'BR00EF01MA09',
        'property_name' => 'Comentário',
        'property_value' => 'Organizar e ordenar objetos se relaciona com observar um conjunto de objetos do cotidiano, identificar um padrão (forma, cor, tamanho etc.) e aplicar o padrão observado na organização de sequências.',
    ],
    [
        'skills_id' => 'BR00EF01MA09',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, merece destaque o enfoque de que a álgebra desenvolve o pensamento algébrico que permeia toda a Matemática e é essencial torná-la útil na vida cotidiana. Agrupar, classificar e ordenar favorece o trabalho com padrões, em especial se os alunos explicitam suas percepções oralmente, por escrito ou por desenho. Os padrões constituem uma forma pela qual os alunos mais novos conseguem reconhecer a ordem e organizar seu mundo, revelando-se muito importantes para explorar o pensamento algébrico.',
    ],
    [
        'skills_id' => 'BR00EF01MA10',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF01MA10',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF01MA10',
        'property_name' => 'Ano/Faixa',
        'property_value' => '1º',
    ],
    [
        'skills_id' => 'BR00EF01MA10',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Álgebra',
    ],
    [
        'skills_id' => 'BR00EF01MA10',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Sequências recursivas: observação de regras usadas utilizadas em seriações numéricas (mais 1, mais 2, menos 1, menos 2, por exemplo)',
    ],
    [
        'skills_id' => 'BR00EF01MA10',
        'property_name' => 'Comentário',
        'property_value' => 'Descrever um padrão implica em observar e explorar sequências numéricas ou geométricas, de modo a perceber sua regularidade e, então, expressá-la. Chamamos de sequência recursiva (ou recorrente) quando um determinado termo pode ser calculado em função de termos antecessores, como, por exemplo, na sequência numérica 0, 2, 4, 6, 8..., na qual cada elemento a partir do segundo é obtido da soma do seu antecessor com 2. É importante acrescentar já no primeiro ano a exploração da ideia de igualdade.',
    ],
    [
        'skills_id' => 'BR00EF01MA10',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, é importante destacar um trabalho envolvendo noções que facilitam o desenvolvimento do pensamento algébrico, como a identificação de regularidades ou padrões. Agrupar, classificar e ordenar favorece o trabalho com padrões, em especial se os alunos explicitam suas percepções oralmente, por escrito ou por desenho. Por meio das experiências escolares com busca de padrões, os alunos deverão ser capazes de identificar o termo seguinte em uma sequência e expressar a regularidade observada em um padrão. Outro aspecto relevante é a exploração da ideia de igualdade, por exemplo, com situações nas quais seja necessário criar um conjunto em que o número de objetos seja maior que, menor que ou igual ao número de objetos em um outro unto. Por ser uma ideia muito nova, vale a pena buscar referências bibliográficas para entender a melhor forma de organizar o currículo em se tratando da álgebra. Considera-se relevante incentivar os alunos a criarem representações visuais das regularidades observadas, bem como o estímulo para que expliquem oralmente suas observações e hipóteses.',
    ],
    [
        'skills_id' => 'BR00EF01MA11',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF01MA11',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF01MA11',
        'property_name' => 'Ano/Faixa',
        'property_value' => '1º',
    ],
    [
        'skills_id' => 'BR00EF01MA11',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Geometria',
    ],
    [
        'skills_id' => 'BR00EF01MA11',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Localização de objetos e de pessoas no espaço, utilizando diversos pontos de referência e vocabulário apropriado',
    ],
    [
        'skills_id' => 'BR00EF01MA11',
        'property_name' => 'Comentário',
        'property_value' => 'Para descrever a localização de pessoas ou objetos no espaço em relação a sua própria posição é necessário conhecer os significados de termos como em frente, atrás, à direita, à esquerda, mais perto, mais longe, entre. Utilizar esse conhecimento para realizar a descrição esperada (João está ali, à minha direita e Maria está atrás de mim.)',
    ],
    [
        'skills_id' => 'BR00EF01MA11',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, é importante destacar que esta habilidade se desenvolve se houver a exploração do espaço pela criança a partir de si mesma. Pode-se prever situações que exigem que os alunos deem e sigam instruções de direção para localizar objetos familiares, bem como em que tenham que descrever as posições relativas de objetos ou pessoas usando linguagem posicional (por exemplo, acima, abaixo, na frente, atrás, dentro, fora, ao lado de, entre, ao longo) ou nas quais necessitem descrever as posições relativas dos objetos em mapas concretos criados em sala de aula. Há, aqui, oportunidade de trabalho interdisciplinar com a habilidade (EF01GE09), da Geografia, no que se refere à descrição da localização de objetos no espaço.',
    ],
    [
        'skills_id' => 'BR00EF01MA12',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF01MA12',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF01MA12',
        'property_name' => 'Ano/Faixa',
        'property_value' => '1º',
    ],
    [
        'skills_id' => 'BR00EF01MA12',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Geometria',
    ],
    [
        'skills_id' => 'BR00EF01MA12',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Localização de objetos e de pessoas no espaço, utilizando diversos pontos de referência e vocabulário apropriado',
    ],
    [
        'skills_id' => 'BR00EF01MA12',
        'property_name' => 'Comentário',
        'property_value' => 'Para descrever a localização de algo ou alguém é preciso reconhecer que é necessário estabelecer um referencial e explicitá-lo nessa descrição.  Essa ação implica em utilizar termos e expressões que denotam localização (longe, em cima, embaixo, ao lado, entre, à direita, à esquerda, mais perto de, mais longe de, o primeiro, o último) e, para realizar a descrição esperada, relacionar o objeto ou pessoa a um referencial (João é o que está mais perto da porta). A descrição pode ser realizada com palavras, esboços, desenhos ou uma combinação de duas ou mais formas.',
    ],
    [
        'skills_id' => 'BR00EF01MA12',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, um aspecto a ser destacado é que, para que os alunos sejam capazes de desenvolver a habilidade em questão, eles precisam de experiências reais de localização, experimentando se colocar em locais e realizar trajetos que depois irão descrever ou representar. Observar um objeto em algum lugar do espaço em que se vive para então descrever sua localização segundo um ponto de referência é o ponto de partida para se desenvolver a habilidade.',
    ],
    [
        'skills_id' => 'BR00EF01MA13',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF01MA13',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF01MA13',
        'property_name' => 'Ano/Faixa',
        'property_value' => '1º',
    ],
    [
        'skills_id' => 'BR00EF01MA13',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Geometria',
    ],
    [
        'skills_id' => 'BR00EF01MA13',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Figuras geométricas espaciais: reconhecimento e relações com objetos familiares do mundo físico',
    ],
    [
        'skills_id' => 'BR00EF01MA13',
        'property_name' => 'Comentário',
        'property_value' => 'Relacionar figuras geométricas a objetos conhecidos ou familiares do mundo físico envolve a introdução dos nomes das figuras que se quer comparar a esses objetos, bem como o reconhecimento de pelo menos algumas características que elas apresentam, em especial no que diz respeito a ter ou não faces e vértices e ser ou não redondas.',
    ],
    [
        'skills_id' => 'BR00EF01MA13',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, sugere-se evidenciar que a observação do mundo ao redor permite ver as aplicações da geometria das figuras tridimensionais em construções, na natureza e na arte. É importante que, já nessa fase, os alunos reconheçam e nomeiem  o cubo, o cilindro, a esfera e o bloco retangular. Também é relevante que sejam estimulados a representá-los por desenhos, mesmo que pouco precisos. Da mesma forma, devem ser estimulados a comparar características comuns e não comuns entre os objetos, usando, para isso, uma linguagem ainda informal e baseada na visualização destes — por exemplo, o cubo tem “pontas” e a esfera não, ou a esfera parece uma bola e o cubo, um dado. O registro em listas coletivas dessas observações auxilia a desenvolver os processos de comunicação matemática que compõem o letramento matemático previsto no documento introdutório. Há, aqui, oportunidade de trabalho interdisciplinar com a habilidade (EF15AR02), da Arte, no que se refere à identificação de elementos gráficos e formas nas artes visuais.',
    ],
    [
        'skills_id' => 'BR00EF01MA14',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF01MA14',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF01MA14',
        'property_name' => 'Ano/Faixa',
        'property_value' => '1º',
    ],
    [
        'skills_id' => 'BR00EF01MA14',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Geometria',
    ],
    [
        'skills_id' => 'BR00EF01MA14',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Figuras geométricas planas: reconhecimento do formato das faces de figuras geométricas espaciais',
    ],
    [
        'skills_id' => 'BR00EF01MA14',
        'property_name' => 'Comentário',
        'property_value' => 'Identificar e nomear figuras geométricas planas em sólidos ou desenhos, independentemente da posição em que aparecem, envolve o conhecimento do nome dessas figuras, bem como observar algumas de suas características. As figuras a serem conhecidas no primeiro ano podem ser prioritariamente quadrado, retângulo, triângulo e círculo, que estão  presentes nos sólidos indicados na habilidade anterior (EF01MA13).',
    ],
    [
        'skills_id' => 'BR00EF01MA14',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, da mesma forma que acontece com as formas tridimensionais, as figuras geométricas planas também estão presentes no cotidiano dos alunos. Por isso, é essencial que sejam exploradas em conjunto com as formas espaciais. Reconhecer as figuras planas como parte das figuras não planas e descrever as figuras verbalmente usando propriedades simples (quantidade de faces e vértices dos sólidos não redondos e quantidade de lados e vértices das figuras planas não redondas) são aquisições importantes nessa fase escolar. Um aspecto relevante a se considerar na elaboração dos currículos locais é o do desenvolvimento da a memória visual (a capacidade de recordar um objeto que não está mais no campo de visão, relacionando suas características com outros objetos).',
    ],
    [
        'skills_id' => 'BR00EF01MA15',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF01MA15',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF01MA15',
        'property_name' => 'Ano/Faixa',
        'property_value' => '1º',
    ],
    [
        'skills_id' => 'BR00EF01MA15',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Grandezas e medidas',
    ],
    [
        'skills_id' => 'BR00EF01MA15',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Medidas de comprimento, massa e capacidade: comparações e unidades de medida não convencionais',
    ],
    [
        'skills_id' => 'BR00EF01MA15',
        'property_name' => 'Comentário',
        'property_value' => 'Comparar duas grandezas e expressar a comparação realizada usando termos indicados na habilidade é um aspecto essencial para as futuras aprendizagens das medidas utilizando unidades padronizadas ou não. Portanto, é necessário identificar tanto o que pode ser medido (comprimento, capacidade, massa) quanto os termos associados  e adequados a cada  comparação (mais leve, mais pesado, mais curto, mais comprido, mais largo, mais estreito, mais cheio, mais vazio, entre outros).',
    ],
    [
        'skills_id' => 'BR00EF01MA15',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, deve se explicitar que, entre as principais aprendizagens a serem feitas, está a identificação do que pode ser medido. Também desde cedo os alunos devem aprender que medir é fazer uma comparação entre grandezas de mesmo tipo. Medimos massa comparando com outra massa, comprimento com outro comprimento e assim por diante. A consciência desse foco auxilia os alunos a não confundirem ser mais velho com ser o maior da classe, por exemplo. Como as medições se fazem medindo, o currículo local pode indicar que as práticas de medição envolvam atividades de experimentação. Merece destaque o fato de que, nessa fase, as medições sejam feitas por meio de comparações que não envolvam ainda as unidades de medida convencionais — por exemplo, medir comprimentos usando palitos de picolé ou partes do corpo; medir a capacidade de determinado recipiente usando copinhos ou utensílios das próprias crianças; etc. Propor problemas relacionados a medidas é importante.',
    ],
    [
        'skills_id' => 'BR00EF01MA16',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF01MA16',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF01MA16',
        'property_name' => 'Ano/Faixa',
        'property_value' => '1º',
    ],
    [
        'skills_id' => 'BR00EF01MA16',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Grandezas e medidas',
    ],
    [
        'skills_id' => 'BR00EF01MA16',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Medidas de tempo: unidades de medida de tempo, suas relações e o uso do calendário',
    ],
    [
        'skills_id' => 'BR00EF01MA16',
        'property_name' => 'Comentário',
        'property_value' => 'Relatar uma sequência de acontecimentos envolve observar, perceber o que acontece, colocar uma ordem na sequência dos fatos para, então, expressar tudo isso com a linguagem necessária para a descrição. (Primeiro, levantei; depois, me arrumei; às 7h saí para a escola...). O registro por escrito uma sequência temporal também está envolvido nesta habilidade, ainda que seja utilizando esquemas e desenhos. O uso dos números com sentido de ordem (primeiro, segundo...) substituem temporariamente o uso de horas, que pode não acontecer no primeiro ano.',
    ],
    [
        'skills_id' => 'BR00EF01MA16',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, é necessário esclarecer que a elaboração do conceito de tempo exige a vivência de experiências para compreender as estruturações temporais. As oportunidades para o desenvolvimento da habilidade em análise estão em atividades que os alunos vivenciem ou que envolvam fatos e acontecimentos reais de seu dia. Em um primeiro momento, as observações e registros podem ser feitas no coletivo, com vivências relacionadas, por exemplo, a um período de aula, ou a descrição de acontecimentos da escola, para, então, se expandir para períodos observados fora da escola. Pode-se ir de períodos curtos a períodos mais longos conforme a aprendizagem evolui. O uso de marcadores temporais, tais como antes de, após isso, entre isso e aquilo devem ser estimulados, bem como são indicadores de avanço na aprendizagem do tempo pelo aluno. Há, aqui, oportunidade de trabalho interdisciplinar com as habilidades (EF01CI05), da Ciência; e (EF01GE05), da Geografia, relacionadas à observação da passagem do tempo.',
    ],
    [
        'skills_id' => 'BR00EF01MA17',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
    [
        'skills_id' => 'BR00EF01MA17',
        'property_name' => 'Componente',
        'property_value' => 'Matemática',
    ],
    [
        'skills_id' => 'BR00EF01MA17',
        'property_name' => 'Ano/Faixa',
        'property_value' => '1º',
    ],
    [
        'skills_id' => 'BR00EF01MA17',
        'property_name' => 'Unidades Temáticas',
        'property_value' => 'Grandezas e medidas',
    ],
    [
        'skills_id' => 'BR00EF01MA17',
        'property_name' => 'Objetos de Conhecimento',
        'property_value' => 'Medidas de tempo: unidades de medida de tempo, suas relações e o uso do calendário',
    ],
    [
        'skills_id' => 'BR00EF01MA17',
        'property_name' => 'Comentário',
        'property_value' => 'Reconhecer e relacionar períodos de tempo exige conhecer os nomes dos dias da semana, dos meses do ano, bem como compreender aspectos tais como o de que uma semana tem sete dias e um mês tem trinta dias, ou que um ano é dividido em doze meses.',
    ],
    [
        'skills_id' => 'BR00EF01MA17',
        'property_name' => 'Possibilidades para o Currículo',
        'property_value' => 'Na elaboração do currículo, é necessário esclarecer que a compreensão do tempo é processual, não se limitando ao estudo do calendário ou à leitura de horas. Para saber o tempo e compreender suas estruturas de intervalo, duração e unidades de medida, os alunos precisam experimentar instrumentos e situações de medida do tempo que lhes permitam compreender o sentido do tempo e as diferentes unidades que são usadas para medi-lo (horas, dias, meses, anos). Pode-se destacar a relevância de utilizar situações que envolvem músicas, exploração de rotinas, brincadeiras de corda, uso de relógios digitais ou de ponteiros como aliados importantes na criação de um contexto problematizador para o tempo. Nessas situações, é importante que os alunos sejam levados a refletir sobre a duração de diferentes eventos, estabelecendo comparações. Há oportunidade de trabalho interdisciplinar com as habilidades (EF01CI05), da Ciência; e (EF01GE05), da Geografia, relacionadas à observação da passagem do tempo.',
    ],
    [
        'skills_id' => 'BR00EF01MA18',
        'property_name' => 'Modalidade',
        'property_value' => 'Ensino Fundamental',
    ],
]);
