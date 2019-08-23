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

// Brazilian kindergarten (Ensino Infantil), BNCC

DB::table('skills_metas')->insert([
    [
        'skills_id' => 'BR00EI03CG04',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'Conforme as crianças pequenas ganham consciência de si, passam a reconhecer-se como sujeito ativo, capaz de criar e se cuidar com independência do outro. Primeiramente, as crianças pequenas se encantam com as descobertas das ações que conseguem fazer e, na sequência, com a descoberta de que podem fazer coisas sozinhas. Nesse contexto, aprender sobre o cuidado com seu próprio corpo e valorizar suas ações de protagonismo e independência nessas situações é uma importante conquista para as aprendizagens e o desenvolvimento das crianças nessa faixa etária. Portanto, é importante que elas tenham oportunidade de participar de experiências relacionadas à adoção de hábitos de autocuidado, observando de que forma isso impacta seu corpo, observando hábitos dos(as) professores(as) e de outras crianças, por exemplo, relacionados a cuidados básicos, ou participando de situações em que reconhecem e fazem uso de noções básicas de cuidado consigo mesmas, como colocar o casaco ao sentir frio, limpar o nariz quando está escorrendo, ir ao banheiro quando sente vontade ou limpar o prato e guardá-lo junto com os talheres no local indicado ao terminar de comer.',
    ],
    [
        'skills_id' => 'BR00EI03CG04',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças pequenas, é possível construir objetivos específicos relacionados às ações e hábitos a serem desenvolvidos pelas crianças. Por exemplo, realizar, de forma independente, ações de cuidado com o próprio corpo — buscar água quando sente sede, identificar e valorizar alguns alimentos saudáveis, reconhecer e fazer uso de noções básicas de cuidado consigo mesmo ou servir-se e alimentar-se com independência. O currículo local pode, ainda, trazer objetivos específicos relacionados a hábitos de sua cultura local, além de abordar atitudes a serem desenvolvidas, como interessar-se por participar do cuidado dos espaços coletivos da escola, como o banheiro e o refeitório.',
    ],
    [
        'skills_id' => 'BR00EI02CG03',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças bem pequenas (1 ano e 7 meses a 3 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI02CG03',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'Crianças bem pequenas têm uma automotivação para suas explorações e descobertas envolvendo o uso do seu corpo. Conforme crescem, as suas experiências podem continuar engajando-as e apoiando-as em suas descobertas, bem como desafiando-as de forma a sustentar seu interesse, a realizar ações cada vez mais complexas e a ampliar seu conhecimento sobre seu corpo no espaço, seguindo ou criando suas próprias orientações e resgatando ações já conhecidas e organizando-as em sequências cada vez mais complexas. Nesse contexto, é importante que crianças bem pequenas possam vivenciar situações individuais e de pequenos grupos e participar de brincadeiras que as incentivem a deslocar seu corpo no espaço de diferentes formas: pulando, andando, dançando etc. Além disso, é interessante que essas vivências e brincadeiras também as incentivem a responder a orientações para movimentos simples, como pegar o brinquedo quando solicitado, mostrar ao colega onde ficam os seus pertences etc., a seguir orientações verbais e visuais simples em situações de dança, brincadeiras e circuitos e a adquirir maior domínio de seus movimentos corporais, desenvolvendo habilidades motoras e o controle de seu movimentos no deslocamento do espaço, alternando diferentes velocidades, direções e posições.',
    ],
    [
        'skills_id' => 'BR00EI02CG03',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças bem pequenas, que começam a explorar novas formas de deslocamento no espaço, é possível construir objetivos específicos relacionados às ações e às possibilidades de seguir orientações. Por exemplo, responder a orientações para movimentos simples, explorar espaços simples e familiares, fazendo uso de movimentos como andar, correr, saltar ou rastejar-se. O currículo pode considerar objetivos específicos relacionados ao seu interesse em narrar seus movimentos e compartilhar, como, por exemplo, descrever seus movimentos enquanto os realiza; descobrir diferentes possibilidades de exploração de um mesmo espaço e compartilhar com os colegas; explorar espaços maiores, com mais desafios, variando os movimentos e mostrando maior domínio sobre eles. O currículo local pode, ainda, trazer objetivos específicos de aprendizagem e desenvolvimento relacionados à aquisição de movimentos corporais típicos de diferentes culturas, bem como objetivos relacionados ao prazer e às conquistas de suas aprendizagens com os movimentos corporais, como, por exemplo, ficar contente com suas conquistas e desfrutar o bem-estar ao realizar atividades corporais e vencer desafios.',
    ],
    [
        'skills_id' => 'BR00EI03CG03',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças pequenas (4 anos a 5 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI03CG03',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'As crianças pequenas têm um forte interesse por se expressar por meio de movimentos. Desde bebês, seus movimentos são formas de explorar e descobrir o mundo ao seu redor e, por meio dessas ações, ao longo do tempo, acumulam uma diversidade de movimentos conhecidos. Considerando que as crianças pequenas já são capazes de recuperar imagens e lembranças passadas, pois já desenvolveram sua capacidade de representação, o uso do movimento para se expressar passa a ser mais uma linguagem de que as crianças lançam mão para se expressar, comunicar e continuar suas explorações e descobertas sobre o mundo. Nesse contexto, é importante que as crianças pequenas possam participar de situações relacionadas à criação de movimentos, gestos, olhares e mímicas, e possam criar formas de expressar suas preferências, interesses e necessidades afetivas, bem como que possam também participar de situações em que fruem, descrevem, avaliam e reproduzem apresentações de dança de diferentes gêneros e outras expressões da cultura corporal (circo, esportes, mímica, teatro etc.) feitas por adultos amadores e profissionais ou por outras crianças; teatralizem histórias conhecidas para outras crianças e adultos apresentando movimentos e expressões corporais adequados às suas composições; encenem histórias com bonecos, fantoches ou figuras de sombras destacando gestos, movimentos, voz, caráter dos personagens etc.',
    ],
    [
        'skills_id' => 'BR00EI03CG03',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para os currículos e/ou propostas curriculares, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças pequenas, é possível construir objetivos específicos relacionados às ações que envolvem um uso criativo dos movimentos. Por exemplo, envolver-se em situações nas quais façam utilizem criativamente os seus movimentos, solucionar problemas relacionados a eles ou explorar movimentos corporais ao dançar e brincar. O currículo pode considerar objetivos específicos relacionados à complexidade dessas ações, como, por exemplo, criar movimentos dançando ou dramatizando para expressarem-se em suas brincadeiras, combinar seus movimentos com os de outras crianças e explorar novos movimentos usando gestos, seu corpo e sua voz. O currículo local pode, ainda, trazer objetivos específicos de aprendizagem e desenvolvimento relacionados com brincadeiras e atividades artísticas típicas de sua cultura local ou abordar atitudes a serem desenvolvidas, como ter prazer em criar movimentos e gestos ao brincar, dançar, representar etc.',
    ],
    [
        'skills_id' => 'BR00EI01CG04',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Bebês (zero a 1 ano e 6 meses)',
    ],
    [
        'skills_id' => 'BR00EI01CG04',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'Nas situações de cuidado de seu corpo e promoção do seu bem-estar, os bebês, em interação com os adultos que lhes cuidam, aprendem sobre si mesmos, suas ações e como relacionar-se. As experiências vividas nesses momentos são fundamentais para desenvolverem confiança em si e nos outros e apropriarem-se de práticas de cuidado e bem-estar. A forma como vivem essas primeiras relações são muito importantes, na medida em que influenciam a maneira como desenvolverão seus hábitos de cuidado e relação com os outros. Nesse contexto, é importante que os bebês possam participar de situações de cuidado de si e da promoção do seu bem-estar, envolvendo-se de forma ativa e com progressiva autonomia em momentos como troca de fraldas, alimentação e sono, partilhando com o(a) professor(a) algumas ações como segurar a mamadeira ou buscar seu travesseiro.',
    ],
    [
        'skills_id' => 'BR00EI01CG04',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para os bebês, estabelecer relações de vínculo com professores(as) e com outros adultos da instituição é um grande desafio. O currículo pode construir objetivos específicos relacionados a essas aprendizagens, como reconhecer as pessoas que lhe cuidam, solicitar colo ou aconchego ao(à) professor(a) referência de seus cuidados, participar das situações de troca interagindo com ele(a), buscar o(a) professor(a) quando sente algum desconforto ou desprazer, e relacionados à ampliação dos vínculos e expressões de suas necessidades, como, por exemplo, avisar quando fez cocô, sensibilizar-se quando algum colega chora, buscar objetos de conforto para si ou para seus colegas, reconhecer o local onde estão seus pertences ou segurar a fralda no momento da troca. O currículo local pode, ainda, trazer exemplos de ações e interações entre adultos e crianças, ou entre as crianças, que são típicos da cultura local, dos hábitos e valores dos familiares que frequentam a instituição.',
    ],
    [
        'skills_id' => 'BR00EI02CG04',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças bem pequenas (1 ano e 7 meses a 3 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI02CG04',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'Aprender a cuidar de seu próprio corpo é uma importante conquista para as crianças bem pequenas. O processo dessa aprendizagem se dá, primordialmente, em situações de interação com os(as) professores(as), que lhes garantem um vínculo profundo e estável e, por meio de uma escuta atenta e de suas observações, são responsivos às necessidades e interesses das crianças, partilhando com elas situações acolhedoras nas quais têm a oportunidade de aprender diferentes formas de cuidar de si mesmas. A partir dessas relações e em um ambiente seguro e de confiança, a diversidade de situações de cuidado nas quais as crianças são incentivadas a assumir pequenas responsabilidades em relação ao cuidado com seu próprio corpo ajudam-nas no aprendizado de sua progressiva independência em situações como alimentar-se, usar o vaso sanitário, colocar e tirar roupas e encontrar soluções para resolver suas necessidades pessoais. Nesse contexto, é importante que as crianças bem pequenas participem de situações nas quais possam: refletir sobre o cuidado do seu próprio corpo, reconhecendo, por exemplo, a necessidade de limpar o nariz, ou solicitando ajuda caso seja necessário; se adaptar a rotinas básicas de cuidado em um contexto diferente do de sua casa; manifestar preferências por determinados alimentos e reconhecer progressivamente as atividades ao ar livre como positivas para seu bem-estar e sua saúde; e apropriar-se de gestos envolvidos no ato de calçar meias e sapatos, vestir o agasalho, pentear o cabelo e outras tarefas de cuidado pessoal.',
    ],
    [
        'skills_id' => 'BR00EI02CG04',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças bem pequenas, que começam a descobrir que conseguem realizar ações de cuidado do seu próprio corpo, é possível construir objetivos específicos relacionados às ações que começam a realizar com o apoio do(a) professor(a). Por exemplo, ir ao banheiro solicitando ajuda para limpar-se; lavar as mãos com ajuda; vestir-se com ou sem ajuda; e alimentar-se solicitando ajuda quando necessário. O currículo local pode, ainda, trazer objetivos específicos relacionados às rotinas básicas do grupo ao qual as crianças fazem parte, além de abordar atitudes a serem desenvolvidas, como interessar-se por experimentar novos alimentos ou interessar-se progressivamente pelo cuidado com o próprio corpo, executando ações simples relacionadas à saúde e higiene.',
    ],
    [
        'skills_id' => 'BR00EI01CG05',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Bebês (zero a 1 ano e 6 meses)',
    ],
    [
        'skills_id' => 'BR00EI01CG05',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'Ao manipular diferentes objetos e materiais em diferentes situações, os bebês têm oportunidades de aprimorar sua coordenação e integrar seus movimentos, ao mesmo tempo em que descobrem a propriedade e o uso de materiais e objetos ampliando seu conhecimento sobre o mundo. Nesse contexto, é importante que os bebês participem de situações nas quais: possam utilizar movimentos específicos de preensão, encaixe e lançamento por meio de brinquedos, brincadeiras e simulações diversas etc. que utilizarão movimentos específicos; possam segurar o giz de cera ou outras ferramentas gráficas e fazer marcas em diferentes suportes, como papéis, azulejos, chão, lousa etc.; possam arremessar uma bola ou outro material na direção de um objeto ou pessoa, além de utilizar pequenos objetos com coordenação e precisão, como colocar argolas em pinos, encaixar chaves em fechaduras etc.',
    ],
    [
        'skills_id' => 'BR00EI01CG05',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para os bebês, a exploração e o uso de diferentes objetos e materiais é uma forma de ampliar suas noções e habilidades. É possível construir objetivos específicos relacionados a essas aprendizagens, como alcançar objetos próximos, jogar e deixar cair objetos, transferir objetos de uma mão para outra ou colocar objetos dentro de outros objetos. O currículo pode construir objetivos específicos relacionados a ações mais coordenadas e intencionais de seus movimentos — por exemplo, usar suas ações e explorações sobre os objetos para mostrar sua propriedade ou sua função, segurar com a mão objetos de diferentes tamanhos e tipos, e manipular diferentes objetos aprimorando sua coordenação. O currículo local pode, ainda, trazer exemplos de objetos e materiais, e ações com estes, que são típicos da região, comunidade ou cultura local.',
    ],
    [
        'skills_id' => 'BR00EI03CG05',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças pequenas (4 anos a 5 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI03CG05',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'Para as crianças pequenas, coordenar suas habilidades manuais, alcançando produtos como resultados de suas intenções, não é um processo fácil. As crianças pequenas se interessam pelo desafio, pela manipulação e exploração de diferentes materiais e, a partir da variedade de práticas e do tempo dedicado a elas, têm a oportunidade de aprimorar suas habilidades e conquistar outras novas, ampliando suas possibilidades e recursos ao aprender sobre o mundo à sua volta. Nesse contexto, é importante que as crianças pequenas possam participar de situações que envolvam a coordenação de habilidades manuais, como, por exemplo, circular pelo ambiente em que convivem e pegar objetos, brinquedos que estão em posições e alturas diferentes, posicionados estrategicamente pelo(a) professor(a), e também manipular objetos de diferentes tamanhos e pesos, em situações que envolvam habilidades manuais, tais como: empilhar, encaixar, rosquear e pinçar, chutar, arremessar e receber.',
    ],
    [
        'skills_id' => 'BR00EI03CG05',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças pequenas, é possível construir objetivos específicos relacionados às habilidades manuais de menor complexidade. Por exemplo, manipular objetos de diferentes tamanhos e pesos, explorar materiais com barro, massinha de modelar etc., buscando reproduzir modelos, manipular objetos pequenos construindo brinquedos ou jogos e utilizar instrumentos como palitos, rolos e pequenas espátulas nas suas produções com cada vez maior destreza. O currículo local pode, ainda, trazer objetivos específicos relacionados a práticas características de sua cultura local, além de abordar atitudes a serem desenvolvidas, como ter prazer em realizar conquistas relacionadas às suas habilidades manuais.',
    ],
    [
        'skills_id' => 'BR00EI01EF01',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Bebês (zero a 1 ano e 6 meses)',
    ],
    [
        'skills_id' => 'BR00EI01EF01',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'Os bebês, desde o nascimento, buscam estabelecer contatos com os outros e, por meio dessa iniciativa, passam a atribuir significado para suas experiências e desenvolvem um sentimento de pertencimento a um grupo. O nome próprio tem uma carga afetiva para a criança — contribui para marcar sua identidade, ao mesmo tempo em que a apoia a diferenciar-se das outras pessoas, de seus pares. Nesse contexto, é interessante que os bebês possam viver situações em que participem de momentos de cantigas, reconhecendo seu nome e os dos colegas; reconheçam sua foto ao chamar seu nome e o dos colegas; reconheçam seus pertences pessoais quando acompanhados de sua foto ou da foto com a escrita de seu nome.',
    ],
    [
        'skills_id' => 'BR00EI01EF01',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para bebês, é possível construir objetivos específicos relacionados à identificação do nome próprio em momentos de comunicação, como, por exemplo, manifestar-se quando escuta alguém chamando ou olhar e/ou apontar para o colega quando o estão chamando. O currículo local pode, ainda, abordar atitudes a serem desenvolvidas, como interessar-se por reconhecer a si mesmo e aos colegas em fotos, além de destacar brincadeiras e cantigas típicas de seu território envolvendo os nomes das crianças.',
    ],
    [
        'skills_id' => 'BR00EI02EF01',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças bem pequenas (1 ano e 7 meses a 3 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI02EF01',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'As crianças bem pequenas aprendem sobre a linguagem de forma processual, quando imersas em contextos nos quais se envolvem de maneira ativa na tentativa de comunicar seus desejos, necessidades, pensamentos, sentimentos e opiniões. De maneira evolutiva, em suas tentativas, as crianças passam a fazer um uso mais complexo da linguagem, passando da utilização de poucas palavras para frases, de assuntos concretos para outros mais abstratos, de situações contextualizadas no presente para situações do passado e do futuro. Essa progressão se dá a partir das interações comunicativas de qualidade e positivas que as crianças têm a oportunidade de vivenciar em seu cotidiano. Nesse contexto, é muito importante que as crianças bem pequenas tenham diferentes oportunidade de interagir com outras crianças e demais pessoas, falando sobre suas experiências pessoais, relatando fatos significativos, sendo escutadas e acolhidas naquilo que comunicam, expressando-se e comunicando-se por meio do corpo, do movimento, da dança, da mímica, do som, da música, de suas esculturas, desenhos ou do teatro. É importante que o(a) professor(a) crie um clima seguro e engajador para que as crianças falem e se expressem livremente, e que esteja disponível para conversar e interagir com elas, sendo responsivo(a) às suas colocações e criando um efetivo diálogo. Para isso, o(a) professor(a) deve observar e escutar os interesses das crianças bem pequenas, falando sobre eles, incentivando situações de conversas entre as crianças em contextos de brincadeiras, jogos e atividades em pequenos grupos e pares.',
    ],
    [
        'skills_id' => 'BR00EI02EF01',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças bem pequenas, é possível construir objetivos específicos relacionados ao uso de palavras ou construções de frases simples, como, por exemplo, combinar palavras para se expressar, usar verbos e objetivos, ampliar o vocabulário utilizado para se expressar, formular perguntas, iniciar diálogos estruturados e ter atenção ao escutar o outro. O currículo pode construir objetivos relacionados às diferentes formas de se expressar e se comunicar, como, por exemplo, expressar suas ideias, sentimentos e emoções por meio de diferentes linguagens, como a dança, o desenho, a mímica, a música, a linguagem verbal e a escrita. O currículo local pode, ainda, abordar atitudes a serem desenvolvidas, tais como interessar-se por interagir com outras crianças fazendo uso da linguagem verbal e tentando se fazer entender.',
    ],
    [
        'skills_id' => 'BR00EI03EF01',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças pequenas (4 anos a 5 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI03EF01',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'As crianças pequenas aprendem sobre a linguagem de forma processual, quando imersas em contextos nos quais se envolvem de maneira ativa na tentativa de comunicar os seus desejos, pensamentos, sentimentos e ideias sobre suas vivências. No contato diário com um conjunto de materiais impressos e nas diversas situações em que escutam a leitura de diferentes textos, as crianças se motivam para entender como funciona a língua escrita para que possam fazer uso dela. Conforme têm a oportunidade de se expressar por meio de diferentes linguagens, aprimoram e ampliam sua possibilidade de comunicação. Nesse contexto, é muito importante que as crianças pequenas possam expressar-se na linguagem oral, musical, corporal, na dança, no desenho, na escrita, na dramatização e em outras linguagens em vários momentos; participar de rodas de conversa onde discutem seus pontos de vista sobre um assunto; descrever como foi feita uma produção individual ou coletiva de um texto, uma escultura, uma coreografia etc; debater um assunto polêmico do cotidiano da unidade, por exemplo, como organizar o uso dos brinquedos do parque etc; organizar oralmente as etapas de uma tarefa, os passos de uma receita culinária, do preparo de uma tinta ou as regras para uma brincadeira, por exemplo, ou, ainda, expressar oralmente, e à sua maneira, opinião sobre um relato apresentado por um colega ou pelo(a) professor(a). É indicado também conversar com as crianças sobre suas fotos, desenhos e outras formas de expressão, garantindo um clima seguro e receptivo — isso contribui para que se expressem e busquem fazer uso de uma linguagem cada vez mais complexa para se fazerem entender. Encorajar as crianças a escrever umas às outras, aos seus familiares e a pessoas da comunidade escolar também cria um contexto significativo e envolvente para produzirem suas escritas, ainda que de forma não convencional.',
    ],
    [
        'skills_id' => 'BR00EI03EF01',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças pequenas, é possível construir objetivos específicos relacionados à oralidade, como, por exemplo, comunicar-se com diferentes intenções, em diferentes contextos, com diferentes interlocutores, respeitando sua vez de falar e escutando o outro com atenção. O currículo local pode, ainda, abordar atitudes a serem desenvolvidas, como ao interessar-se por fazer uso da escrita espontânea para comunicar suas ideias e opiniões aos colegas e professores(as).',
    ],
    [
        'skills_id' => 'BR00EI01EF02',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Bebês (zero a 1 ano e 6 meses)',
    ],
    [
        'skills_id' => 'BR00EI01EF02',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'Os bebês gostam de jogar com a linguagem desde muito cedo. Conforme têm a oportunidade de se envolver em situações que façam uso de diferentes linguagens e manifestações artísticas culturais, têm a chance de conhecer melhor a cultura na qual estão imersos. Vivências de participação em situações de leitura de poemas ou apresentações de música, dança e teatro convidam as crianças a ampliarem suas possibilidades de expressão, ao mesmo tempo em que podem aprender sobre a linguagem. Nesse contexto, é importante que os bebês tenham a oportunidade de escutar poemas e canções, participar de brincadeiras com os(as) professores(as) envolvendo canções associadas a gestos e movimentos, além de serem convidados a repetir acalantos, cantigas de roda, poesias e parlendas. É importante, ainda, explorar o ritmo, a sonoridade e a conotação das palavras e imitar as variações de entonação e de gestos em situações de leitura de poemas ou escuta musical.',
    ],
    [
        'skills_id' => 'BR00EI01EF02',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para bebês, é possível construir objetivos específicos relacionados às habilidades de comunicação e expressão, como, por exemplo, participar de brincadeiras simples de interação respondendo a comandos por meio de gestos, movimentos, balbucios ou vocalizações, ou participar de situações de escuta de poemas ou músicas imitando o(a) professor(a) ou seus pares, além de abordar atitudes a serem desenvolvidas, como ter prazer por escutar músicas e poemas, solicitando os seus mais queridos. O currículo local pode, ainda, destacar poemas e músicas típicas de seu território.',
    ],
    [
        'skills_id' => 'BR00EI02EF02',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças bem pequenas (1 ano e 7 meses a 3 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI02EF02',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'As crianças bem pequenas gostam de jogar com a linguagem, se interessam por explorar seus sons, seus efeitos e intensidades. Imersas em situações na quais se divertem em brincadeiras de roda cantadas, em dançar com canções conhecidas, em recitar parlendas em suas brincadeiras, em criar novas rimas e divertir-se com suas produções, em participar de situações de declamações, escutar histórias rimadas, em brincar com o ritmo de uma declamação, se interessam por brincar com a linguagem, desenvolvendo a imaginação e a criatividade, ao mesmo tempo em que constroem noções da linguagem oral e escrita. Nesse contexto, é importante que as crianças bem pequenas tenham a oportunidade de escutar e brincar com textos poéticos, como, por exemplo, as canções, os poemas, as parlendas e as histórias com rimas, considerando que elas chamam a atenção das crianças para aspectos da língua por meio de sua musicalidade e de sua forma gráfica. É importante, também, garantir situações em que brinquem com as palavras que rimam nos textos, divertindo-se com seus sons ou criando novas rimas. Escutar várias vezes os mesmos textos de forma que possam recontá-los, usá-los em suas brincadeiras, imitar gestos e entonações dos personagens contribui para criarem o hábito da escuta desses tipos de textos, criando prazer na relação com eles.',
    ],
    [
        'skills_id' => 'BR00EI02EF02',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para crianças bem pequenas, é possível construir objetivos específicos relacionados à recitação de textos poéticos, como, por exemplo, recitar poesias e parlendas criando diferentes entonações e ritmos, declamar textos poéticos conhecidos nas brincadeiras como corre-cotia, pula corda etc. O currículo pode criar objetivos relacionados à identificação de sons e rimas, tais como criar sons enquanto canta ou cria uma música ou um poema, além de abordar atitudes a serem desenvolvidas, como divertir-se ao brincar com a linguagem, criando sons e reconhecendo rimas e aliterações. O currículo local pode, ainda, destacar textos poéticos típicos de seu território.',
    ],
    [
        'skills_id' => 'BR00EI03EF02',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças pequenas (4 anos a 5 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI03EF02',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'As crianças pequenas gostam de jogar com a linguagem, se interessam por explorar seus sons, seus efeitos e intensidades. Imersas em situações na quais conhecem canções, parlendas, poemas e histórias rimadas de forma prazerosa e significativa, em contextos lúdicos e divertidos, se interessam por brincar com a linguagem, desenvolvendo a imaginação, a criatividade e construindo noções da linguagem oral e escrita. Nesse contexto, é importante que as crianças pequenas tenham a oportunidade de participar de situações que desenvolvam o hábito e o prazer por escutar, recitar e ler textos poéticos. Em tais atividades, vão observando a importância dos recursos gráficos, além da estrutura dos textos como poemas, parlendas e canções, brincando e declamando diversas vezes em suas brincadeiras ou outras situações significativas os textos conhecidos, chegando a memorizar trechos, participando de situações de declamação, divertindo-se e conversando sobre as palavras rimadas ao brincar com seu ritmo, identificando rimas, assonâncias e aliterações. Assim, podem compreender as relações entre a oralidade e a escrita ao participar de atividades em pequenos grupos nos quais buscam corresponder a leitura dos textos queridos que já conhecem de memória com sua escrita.',
    ],
    [
        'skills_id' => 'BR00EI03EF02',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para crianças pequenas, é possível construir objetivos específicos relacionados à estrutura dos textos poéticos, como, por exemplo, identificar que os textos se dividem em partes e o verso corresponde a uma delas, ou relacionados à recitação, declamando suas poesias e parlendas preferidas fazendo uso de ritmo e entonação. O currículo pode abordar atitudes a serem desenvolvidas, como divertir-se e interessar-se por brincar com os textos poéticos em suas brincadeiras livres com outras crianças. O currículo local pode, ainda, destacar textos poéticos típicos de seu território.',
    ],
    [
        'skills_id' => 'BR00EI01EF03',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Bebês (zero a 1 ano e 6 meses)',
    ],
    [
        'skills_id' => 'BR00EI01EF03',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'Os bebês aprendem sobre a linguagem, a representação e o pensamento simbólico quando imersos em situações que provocam sua imaginação, que enriquecem suas brincadeiras de faz de conta e que os apoiam a atribuir sentido às relações e ao mundo à sua volta. Os contextos em que escutam histórias, lidas ou contadas, favorecem essas aprendizagens e, quando acompanhadas de convite a interações com os livros, tendo a oportunidade de explorá-los e manuseá-los, aprendem, ainda, ações e comportamentos típicos do uso desse portador de texto. Nesse contexto, é importante que os bebês participem de situações nas quais possam escutar repetidas vezes as mesmas histórias lidas ou contadas pelo(a) professor(a), apropriando-se de um repertório de histórias conhecidas. Além disso, os bebês são convidados a brincar com elementos de sua narrativa, e a imitar, em suas brincadeiras livres, ações e falas dos personagens que lhes são queridos, a partir da organização dos espaços e da disponibilização de brinquedos e materiais. É importante que possam, também, participar de situação individuais, em pares ou trios, nas quais explorem os livros e suas imagens, compartilhem com seus colegas e/ou com o(a) professor(a) seus interesses apontando ilustrações, nomeando imagens que lhes chamam a atenção e manifestando suas emoções a partir das histórias por meio de gestos, movimentos e balbucios.',
    ],
    [
        'skills_id' => 'BR00EI01EF03',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para bebês, é possível construir objetivos específicos relacionados à leitura — por exemplo, conhecer um conjunto de histórias ou formar um repertório de histórias preferidas ou, ainda, imitar comportamentos do(a) professor(a) ou de seus colegas ao explorar livros. O currículo pode construir objetivos relacionados ao vocabulário, como ampliar o conjunto de palavras conhecidas fazendo uso destas ao apontar ilustrações nos livros ou, ainda, abordar atitudes a serem desenvolvidas, como ter prazer ao escutar histórias lidas, contadas com fantoches, representadas em encenações, escutadas em áudios etc. O currículo local pode, ainda, destacar livros típicos de seu território que são adequados a essa faixa etária.',
    ],
    [
        'skills_id' => 'BR00EI02EF03',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças bem pequenas (1 ano e 7 meses a 3 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI02EF03',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'As crianças bem pequenas aprendem a gostar de escutar histórias e outros textos na medida em que participam de situações significativas compartilhadas com seus pares. A escuta da leitura de diferentes tipos de textos favorece que aprendam sobre a linguagem escrita e, mais especificamente, sobre a linguagem que é usada em cada tipo de texto, sua função, seu conteúdo e seu formato. Participar de diversas situações em que observam alguém lendo histórias também favorece que aprendam procedimentos típicos de leitores. Nesse contexto, é importante que as crianças bem pequenas tenham a oportunidade de participar de diferentes e repetidas situações de escuta de textos, apoiadas pela mediação intencional dos(as) professores(as), que propiciam a reflexão sobre a relação das ilustrações com o texto, proporcionado atividades em pequenos grupos, como, por exemplo, nas quais as crianças são desafiadas a ordenar ilustrações de uma história, bem como atividades individuais, nas quais são convidadas a desenhar o momento da narrativa que gostaram mais. Ainda, situações em que os(as) professores(as) são modelos de procedimentos típicos de leitores são interessantes, pois as crianças imitam alguns comportamentos, como, por exemplo, nas situações de leitura em voz alta, ou o ato de acompanhar com o dedo a parte do texto que está sendo lido, de identificar em um índice o número da página em que está o texto a ser lido, usar a ilustração como referência para lembrar uma passagem do texto etc.',
    ],
    [
        'skills_id' => 'BR00EI02EF03',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para crianças bem pequenas, é possível construir objetivos específicos relacionados à ilustração como uma linguagem visual, como, por exemplo, fazer uso de diferentes técnicas, materiais e recursos gráficos para produzir ilustrações ou perceber que algumas apresentam o que está escrito na narrativa e outras complementam ou agregam uma nova informação ao texto. O currículo pode especificar objetivos relacionados aos procedimentos leitores, como buscar o título da história no índice, ler textos memorizados com a ajuda do(a) professor(a), fazendo uso de procedimentos como acompanhar o texto com o dedo seguindo da esquerda para a direita. O currículo local pode, ainda, abordar atitudes a serem desenvolvidas, como interessar-se pelas ilustrações dos livros buscando identificar sua relação com o texto lido.',
    ],
    [
        'skills_id' => 'BR00EI03EF03',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças pequenas (4 anos a 5 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI03EF03',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'As crianças pequenas aprendem a gostar das histórias e dos livros a partir das diferentes situações que vivenciam, nas quais têm prazer e atribuem sentido ao conteúdo das narrativas. Conforme têm a oportunidade de participar de situações de escuta de histórias, desenvolvem o hábito da leitura e, ao vivenciarem diversas oportunidades de escolha das histórias a serem lidas, desenvolvem o gosto pessoal por algumas narrativas. A participação em diferentes situações de leitura do mesmo texto também favorece que as crianças pequenas possam memorizar trechos deles, identificando palavras conhecidas, suas ilustrações, e a parte do texto escrito a que se referem. Nesse contexto, é importante que as crianças pequenas tenham a oportunidade de construir um repertório de histórias conhecidas e memorizadas, participando de situações de leitura com os colegas e sendo convidadas a recontar narrativas, apoiadas nas ilustrações ou na identificação de partes do texto ou de palavras conhecidas. É importante, também, que as crianças tenham acesso aos livros em diferentes momentos do seu cotidiano escolar e que possam explorá-los e manuseá-los com tempo, fazendo suas investigações, brincando com seu enredo e criando contextos de leitura e dramatização em suas brincadeiras individuais ou em pequenos grupos.',
    ],
    [
        'skills_id' => 'BR00EI03EF03',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para crianças pequenas, é possível construir objetivos específicos relacionados ao uso da ilustração como apoio para a leitura, como, por exemplo, ordenar ilustração e corresponder com o texto, e relacionados ao sistema de escrita, como em localizar no texto o nome dos personagens ou escrever lista dos personagens da história. O currículo local pode, ainda, abordar atitudes a serem desenvolvidas, como interessar-se por folhear livros e escolher aqueles que mais gostam para ler em momentos individuais.',
    ],
    [
        'skills_id' => 'BR00EI02EF05',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças bem pequenas (1 ano e 7 meses a 3 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI02EF05',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'As crianças, desde bem pequenas, são comunicadoras natas. Elas aprendem a comunicar-se fazendo uso da linguagem verbal conforme têm a oportunidade de falar sobre as suas experiências, observações, ideias e necessidades. As crianças bem pequenas sentem vontade de conversar porque querem compartilhar suas experiências com pessoas que lhes são importantes, querem falar de suas descobertas e pensamentos com a intenção de construir uma compreensão melhor de suas experiências pessoais. Nesse contexto, é importante que as crianças bem pequenas possam vivenciar diferentes situações nas quais são convidadas e incentivadas a falar livremente com os(as) professores(as), que as escutam atentamente e são responsivos(as) às suas ideias, sentimentos e emoções. Também devem ser incentivadas a conversar umas com as outras, contando seus planos, suas experiências pessoais significativas, descrevendo objetos, acontecimentos e relações, brincando e construindo narrativas comuns, negociando papéis, cenários e lidando com possíveis conflitos. Assim, podem atribuir significado à sua comunicação e construir uma base sólida para a aprendizagem da linguagem.',
    ],
    [
        'skills_id' => 'BR00EI02EF05',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças bem pequenas, é possível construir objetivos específicos relacionados à oralidade, como, por exemplo, expressar-se verbalmente em conversas, narrações e brincadeiras, ampliando seu vocabulário e fazendo uso de estruturas orais que aprimorem suas competências comunicativas, ou compreender o conteúdo e o propósito de diferentes mensagens em diversos contextos. O currículo local pode, ainda, abordar atitudes a serem desenvolvidas, tais como contribuir em situações de conversas em grandes e pequenos grupos ou duplas, relatando suas experiências pessoais e interessando-se por escutar o relato dos colegas.',
    ],
    [
        'skills_id' => 'BR00EI01EF04',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Bebês (zero a 1 ano e 6 meses)',
    ],
    [
        'skills_id' => 'BR00EI01EF04',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'Os bebês aprendem a se comunicar, a fazer uso da linguagem conforme têm a oportunidade de participar de situações em que a linguagem está presente e a interação ajuda a dar significado para suas vivências, por meio de situações de dar e receber. Ao serem convidados a escutar histórias, observando as suas ilustrações, apoiados pelo(a) professor(a) que valoriza e incentiva suas explorações, os bebês aprendem a se comunicar, a atribuir sentido para as imagens representadas nos livros e sua relação com as histórias narradas. Assim, vivem emoções e têm a oportunidade de expressá-las de diferentes formas, usando o corpo, por meio de seus movimentos e gestos, fazendo expressões faciais, balbuciando e reagindo frente às emoções despertadas . Nesse contexto, é importante que os bebês participem de situações nas quais possam escutar repetidas vezes histórias acompanhadas por ilustrações lidas pelo(a) professor(a), sendo valorizados em suas diferentes formas de reagir e expressar seus sentimentos e curiosidades frente à narrativa escutada. Assim, apropriam-se de um repertório de narrações conhecidas. É interessante, ainda, que os bebês participem de jogos rítmicos em que o(a) professor(a) os anima a imitar sons variados, ou em jogos de nomeação em que o(a) professor(a) aponta para algo, propõe a questão: “O que é isso?” e apoia o bebê a responder, e que explorem livros com imagens contando com o olhar e observação atenta do(a) professor(a), que pode valorizar e incentivar suas iniciativas.',
    ],
    [
        'skills_id' => 'BR00EI01EF04',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para bebês, é possível construir objetivos específicos relacionados à leitura, por exemplo, observar e manusear livros com imagens, apontar fotos e figuras em livros, nomear personagens ou objetos conhecidos em ilustrações dos livros, ou, ainda, abordar atitudes a serem desenvolvidas, como interessar-se pelas ilustrações e imagens dos livros buscando atribuir a elas algum significado e expressando-se de diferentes formas ao interagir com a narrativa. O currículo local pode, ainda, destacar livros com imagens típicos de seu território que são adequados a essa faixa etária.',
    ],
    [
        'skills_id' => 'BR00EI02EF04',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças bem pequenas (1 ano e 7 meses a 3 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI02EF04',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'As crianças bem pequenas se interessam pela escuta de histórias e, a partir de um repertório de narrações conhecidas, buscam identificar regularidades nos diferentes textos, conversando e refletindo para além do seu conteúdo, mas também sobre sua estrutura. Apoiar as conversas das crianças sobre a estrutura da história favorece que conheçam melhor o ambiente letrado e tenham uma participação mais ativa no universo dos livros e suas narrativas. Nesse contexto, é importante propiciar situações às crianças bem pequenas nas quais elas possam refletir sobre a estrutura da narrativa, respondendo a perguntas como: "quem?", "o que?", "quando?", "como?" e "por quê?". Essas perguntas as aproximam de aspectos-chave da organização textual. Situações que favorecem essas reflexões implicam que as crianças bem pequenas possam falar sobre os personagens e cenários da história, identificando, por exemplo, algumas de suas características, bem como possam conversar, com o apoio do(a) professor(a), sobre as ações e intenções dos personagens nas diferentes situações da narrativa; ainda, permite às crianças serem convidadas a recontar ou dramatizar a história apoiada nas suas ilustrações.',
    ],
    [
        'skills_id' => 'BR00EI02EF04',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para crianças bem pequenas, é possível construir objetivos específicos relacionados à estrutura do texto, como, por exemplo, identificar personagens e/ou cenários e descrever suas características, ou, ainda, construir objetivos relacionados à sequência da narrativa, como ordenar partes do texto segundo a sequência da história apoiado por ilustrações. O currículo local pode, ainda, abordar atitudes a serem desenvolvidas, como interessar-se por identificar características dos personagens das histórias para incrementar cenários e adereços em suas brincadeiras de faz de conta.',
    ],
]);
