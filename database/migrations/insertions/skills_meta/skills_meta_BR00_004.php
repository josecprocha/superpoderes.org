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
        'skills_id' => 'BR00EI03EF04',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças pequenas (4 anos a 5 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI03EF04',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'As crianças pequenas aprendem a construir e representar histórias conforme têm a oportunidade de participar de situações em que podem se apropriar da estrutura da narrativa, identificando seus personagens e cenários, sua trama e sua sequência cronológica, bem como de situações em que possam brincar com o conteúdo de suas narrativas. Nesse contexto, é importante que as crianças pequenas participem de diversas situações de escuta de histórias, seja por meio da leitura pelo(a) professor(a), por outra criança, por apresentações de teatro, dança, assistindo a filmes ou escutando áudios. A partir da participação nessas situações, as crianças têm a oportunidade de se apropriar das narrativas e se interessam por conversar e brincar com elas, desenvolvendo sua imaginação e sua criatividade, ao mesmo tempo em que se apropriam de noções da linguagem e da escrita. Favorecer que as crianças possam ter um conjunto de histórias conhecidas, sobre as quais tenham conversado acerca dos elementos da estrutura narrativa, identificando personagens, cenários, trama e sequência cronológica, as apoia na construção de roteiros de vídeos ou encenações.',
    ],
    [
        'skills_id' => 'BR00EI03EF04',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças pequenas, é possível construir objetivos específicos relacionados à estrutura da narrativa, como, por exemplo, identificar personagens, cenários, trama, sequência cronológica, ação e intenção dos personagens, ou objetivos relacionados à língua escrita, como encontrar diálogos memorizados no texto escrito ou ditar partes da história ao participar da construção de roteiros de vídeos ou encenações. O currículo local pode, ainda, abordar atitudes a serem desenvolvidas, como envolver-se em situações de pequenos grupos, contribuindo para a construção de roteiros de vídeos ou encenações coletivas.',
    ],
    [
        'skills_id' => 'BR00EI01EF05',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Bebês (zero a 1 ano e 6 meses)',
    ],
    [
        'skills_id' => 'BR00EI01EF05',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'Os bebês aprendem sobre a linguagem em contextos diversos de seu uso – verbal ou não-verbal. As variações de entonação, os gestos e os movimentos que acompanham a leitura de uma história pelo(a) professor(a) auxiliam os bebês a atribuírem sentido à história, a desenvolverem o gosto por escutar, bem como a ampliarem suas formas de expressão e de interação com a narrativa, aumentando seus modos de comunicação e participação nessas situações. Nesse contexto, é importante que os bebês participem de situações nas quais possam escutar repetidas vezes histórias lidas, contadas, representadas por fantoches, narradas por áudio, por encenações de dramatização ou dança, narradas com apoio de imagens etc. É importante considerar que as narrações sejam acompanhadas por diferentes entonações e formas de expressão que dão vida aos personagens ou elementos da narrativa. Recomenda-se propiciar momentos em que os bebês possam observar os(as) professores(as) lendo histórias acompanhadas por gestos e movimentos, sendo convidados a repeti-los ou criá-los. Também é interessante que repitam acalantos, cantigas de roda, poesias e parlendas, explorando o ritmo, a sonoridade e a conotação das palavras, e escutem histórias, contos de repetição e poemas.',
    ],
    [
        'skills_id' => 'BR00EI01EF05',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para bebês, é possível construir objetivos específicos relacionados à comunicação — por exemplo, comunicar-se por meio da vocalização, gestos ou movimentos nas situações de leitura de história ou, em situações de brincadeiras, usar palavras acompanhadas de gestos para comunicar-se e usar palavras aprendidas nas histórias escutadas. O currículo pode construir objetivos relacionados à representação, como brincar com enredos, objetos ou adereços, tendo como referência histórias conhecidas ou, ainda, a leitura, explorar livros buscando contar suas histórias, fazendo uso de diferentes entonações, gestos, expressões ou movimentos corporais. O currículo local pode, ainda, abordar atitudes a serem desenvolvidas, como interessar-se por observar e imitar entonações, gestos, movimentos ou expressões ao participar de situações de leitura de história ou de explorações de livros.',
    ],
    [
        'skills_id' => 'BR00EI03EF05',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças pequenas (4 anos a 5 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI03EF05',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'As crianças pequenas interessam-se por escrever suas histórias e também por ditá-las a um(a) professor(a), que as escreve. A escolha por ditar a história, na maioria das vezes, acontece quando as crianças sabem que aquilo que querem escrever é mais complexo do que a capacidade que possuem para ler. Ao ter a oportunidade de ditar um texto aos(às) professores(as), as crianças podem desenvolver a capacidade de recuperar um texto de memória, de atentar para a sua linguagem, de controlar a velocidade da fala, de conscientizar-se sobre a estabilidade de um texto e sobre a diferença entre o texto escrito e aquilo que se fala sobre ele. Nesse contexto, é importante que as crianças pequenas tenham a oportunidade de escutar diversas vezes as mesmas histórias, de forma a se apropriarem de elementos de sua estrutura narrativa e memorizarem algumas partes. A partir de um bom repertório de narrações conhecidas e memorizadas, é importante que o(a) professor(a) convide e incentive as crianças para que criem e/ou escrevam suas próprias narrativas ou que recontem histórias tendo-o(a) como escriba. Escrever o texto ditado e depois lê-lo para elas faz com que as crianças verifiquem as mudanças necessárias para melhorar o texto escrito. Escrever de forma lenta e organizar contextos de ditado em pequenos grupos ajuda que todos possam participar da atividade. É desejável também que as crianças relatem aos colegas histórias lidas por alguém de sua família,  possam escolher e gravar poemas para enviar a outras crianças ou aos familiares e participem de sarau literário, narrando ou recitando seus textos favoritos.',
    ],
    [
        'skills_id' => 'BR00EI03EF05',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças pequenas, é possível construir objetivos específicos relacionados à língua escrita, como, por exemplo, compreender que a escrita representa a fala ou perceber a diferença entre dizer e ditar. O currículo local pode, ainda, abordar atitudes a serem desenvolvidas, como, por exemplo, interessar-se por participar de situações coletivas de criação ou reconto de histórias.',
    ],
    [
        'skills_id' => 'BR00EI01EF06',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Bebês (zero a 1 ano e 6 meses)',
    ],
    [
        'skills_id' => 'BR00EI01EF06',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'Os bebês aprendem a comunicar-se conforme têm a oportunidade de vivenciar situações significativas de interações, nas quais respondem a uma solicitação ou gesto intencional de comunicação, fazendo uso de diferentes formas de expressão para além da linguagem verbal, como por meio da plástica, da dança, da mímica, da música etc. Assim, aprendem a se comunicar nas situações em que são convidados a fazer uso da linguagem verbal, mas também de outras linguagens, para expressar seus desejos, ideias e necessidades. Por exemplo, por meio dos gestos, podem mostrar a função de determinado objeto, ao mesmo tempo em que imitam o seu barulho — em um contexto de brincadeira, imitar o barulho da buzina de um carro ao apontá-la, dizer cocoricó ao ver a imagem da galinha etc. —, nas situações de leitura de história, olhar para a mesma imagem que o(a) professor(a) está olhando, compartilhando com ele(a) sua atenção e mostrando interesse. Nesse contexto, é importante que os bebês participem de situações de interação com professores(as) atentos(as) e responsivos(as), que atendam às suas manifestações de gestos, expressões e movimentos, atribuindo sentido e valor à sua intencionalidade, que façam uso da linguagem verbal, acreditando e valorizando sua competência comunicativa, solicitando ações individuais, propondo brincadeiras de interação professor(a)-bebê que envolvam jogos corporais — como, por exemplo, esconder partes do corpo e ter prazer ao encontrar, situações de dar e receber —, e tenham a oportunidade de brincar e interagir com seus colegas, buscando se fazer comunicar.',
    ],
    [
        'skills_id' => 'BR00EI01EF06',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para bebês, é possível construir objetivos específicos relacionados a formas de expressão, por exemplo, por meio de gestos, expressando "sim" ou "não" balançando a cabeça, por meio da atenção compartilhada ao olhar para a mesma coisa que o(a) professor(a) ou o colega está olhando, ou construir objetivos específicos relacionados à comunicação, como sinalizar, por meio da vocalização, balbucios, gestos, movimentos e expressões gráficas algo que deseja, além de fazer uso de palavras/frases que possam comunicar uma ideia, uma intenção ou uma necessidade. O currículo local pode, ainda, abordar atitudes a serem desenvolvidas, tais como interessar-se por comunicar-se com professores(as) e colegas fazendo uso de diferentes formas de expressão e buscando se fazer entender e também contextualizar vivências dos bebês nas suas diferentes possibilidades de se expressar, destacando quais os gestos que são comuns em sua cultura — dar tchau balançando a mão, falar "não" mexendo o dedo indicador, brincar com o barco emitindo o som do impacto dele nas águas ou brincar de carro imitando o seu som ao acelerar – “vrummm”.',
    ],
    [
        'skills_id' => 'BR00EI02EF06',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças bem pequenas (1 ano e 7 meses a 3 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI02EF06',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'As crianças bem pequenas gostam de brincar com a linguagem, de escutar a leitura de histórias e de criar ou contar narrativas que criaram e/ou conhecem a outras crianças ou professores(as). Ao criar ou contar suas histórias, sentem-se confiantes em sua capacidade comunicativa, ao mesmo tempo em que se divertem e aprendem sobre o uso da linguagem e sua eficácia como meio de comunicação. Nesse contexto, é importante que as crianças bem pequenas tenham muitas oportunidades de brincar fazendo uso da linguagem, sendo acolhidas na descrição que gostam de fazer sobre suas ações e intenções no brincar. Além disso, também é importante que possam contar aos(às) professores(as) e colegas histórias criadas ou conhecidas, que sejam incentivadas em situações individuais ou em pequenos grupos a criar narrativas a partir da apreciação de fatos, imagens ou de temas que são do seu interesse.',
    ],
    [
        'skills_id' => 'BR00EI02EF06',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças bem pequenas, é possível construir objetivos específicos relacionados ao reconto de histórias, como, por exemplo, recontar histórias ao brincar de faz de conta, fazer relações entre diferentes histórias conhecidas e ditar histórias criadas ou memorizadas ao(à) professor(a). O currículo local pode, ainda, abordar atitudes a serem desenvolvidas, tais como gostar de participar de situações em que é convidado a contar ou criar histórias com ou sem o apoio de imagens, fotos ou temas disparadores.',
    ],
    [
        'skills_id' => 'BR00EI03EF06',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças pequenas (4 anos a 5 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI03EF06',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'As crianças pequenas interessam-se por produzir suas histórias e por escrevê-las, registrando-as de diferentes formas, pela escrita espontânea, ditando ao(à) professor(a), desenhando, brincando de faz de conta etc. Ao ter a oportunidade de produzir suas histórias e comunicá-las em situações com função social significativa, reforçam sua imagem de comunicadores competentes e valorizam sua criatividade. Nesse contexto, é importante que as crianças pequenas tenham a oportunidade de escutar diversas vezes as mesmas histórias, de forma a se apropriarem de elementos de sua estrutura narrativa e memorizar partes do texto, podendo recontá-lo em contextos de função social, como em saraus literários, em uma peça de teatro, na construção da narrativa de uma encenação etc. Da mesma forma, um repertório de histórias conhecidas apoia as crianças na criação de suas próprias narrações, que podem ser contadas nas mesmas situações descritas anteriormente ou, ainda, que possam criar uma história de aventuras, definindo o ambiente em que ela ocorre, e as características e desafios de seus personagens.',
    ],
    [
        'skills_id' => 'BR00EI03EF06',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças pequenas, é possível construir objetivos específicos relacionados à linguagem escrita, como, por exemplo, fazer uso de expressões da linguagem da narrativa, como em "era uma vez", ao recontar ou criar suas próprias histórias. O currículo local pode, ainda, abordar atitudes a serem desenvolvidas, tais como envolver-se em situações de reconto de histórias expressando satisfação e gosto por suas conquistas.',
    ],
    [
        'skills_id' => 'BR00EI02EF08',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças bem pequenas (1 ano e 7 meses a 3 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI02EF08',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'As crianças bem pequenas aprendem sobre os textos ao terem diferentes oportunidades de escutar, explorar e conversar sobre diferentes gêneros textuais, em diferentes suportes. Nesse contexto, é importante que as crianças bem pequenas tenham a oportunidade de participar de diferentes situações de leitura de diversos gêneros textuais, como, por exemplo, as histórias, parlendas, trava-línguas, receitas, indicações de leitura ou programação cultural em jornais ou revistas, leitura da capa de CDs, DVDs etc. Também é importante que esses textos, em seus suportes, estejam disponíveis de forma acessível, para que possam explorá-los e usá-los em suas brincadeiras e atividades individuais ou em pequenos grupos.',
    ],
    [
        'skills_id' => 'BR00EI02EF08',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças bem pequenas, é possível construir objetivos específicos relacionados à familiaridade com diferentes gêneros textuais, como, por exemplo, brincar recitando parlendas, buscar o jornal para encontrar informação sobre uma atividade cultural, participar de atividades de culinária fazendo uso de livros de receitas etc. O currículo local pode, ainda, abordar atitudes a serem desenvolvidas, como interessar-se por participar de situações de exploração de portadores de diferentes gêneros textuais em brincadeiras ou atividades de pequenos grupos e também identificar suportes e gêneros textuais que sejam típicos de seu território.',
    ],
    [
        'skills_id' => 'BR00EI01EF07',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Bebês (zero a 1 ano e 6 meses)',
    ],
    [
        'skills_id' => 'BR00EI01EF07',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'Os bebês aprendem por meio das explorações, investigações e descobertas que fazem com os objetos, brinquedos e materiais do mundo físico e natural. Quando têm a oportunidade de interagir e explorar diferentes materiais, impressos, audiovisuais ou, ainda, outros recursos tecnológicos e midiáticos, em contextos significativos, podem atribuir sentido e significado ao seu uso e propósito. Nesse contexto, é importante que os bebês possam participar de situações individuais, em duplas e pequenos grupos, em que se faça uso de diferentes recursos, como, por exemplo, participar de leitura e momentos de exploração livre de livros, poemas, parlendas, escutar música no rádio, no gravador, no computador/tablet ou no celular, fazer uso de gravadores, filmadoras ou máquinas fotográficas, conversar com os(as) professores(as) e colegas sobre o uso e as possibilidades de manuseio dos materiais e encontrar, nos contextos de suas brincadeiras, esses diferentes recursos. Assim, podem fazer uso segundo suas escolhas e suas atribuições de sentido e significado.',
    ],
    [
        'skills_id' => 'BR00EI01EF07',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para bebês, é possível construir objetivos específicos relacionados à exploração de materiais impressos. Por exemplo, explorar diferentes tipos de materiais impressos imitando ações e comportamentos típicos de um leitor, como virar a página, apontar as imagens, usar palavras, gestos ou vocalizações na intenção de ler em voz alta o que está escrito. O currículo pode criar objetivos relacionados ao uso de recursos tecnológicos ou midiáticos, como identificar o uso e a função de alguns deles, por exemplo, dançando ou cantando quando o(a) professor(a) pega um CD, encenando frente a uma filmadora ou buscando sua imagem na máquina fotográfica. O currículo local pode, ainda, abordar atitudes a serem desenvolvidas, como interessar-se pela exploração de diferentes materiais impressos e audiovisuais, solicitando sua utilização ou fazendo uso deles em suas brincadeiras.',
    ],
    [
        'skills_id' => 'BR00EI02EF07',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças bem pequenas (1 ano e 7 meses a 3 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI02EF07',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'As crianças bem pequenas aprendem sobre a linguagem e a escrita por meio de situações que propiciem vivências significativas do uso de diferentes portadores textuais. Nesse contexto, é importante que as crianças bem pequenas possam interagir em um ambiente com diversidade de materiais de escrita, que as convidem a fazer uso destes, explorando seus usos sociais e criando outros, como, por exemplo, brincar de correio, de escritório, de supermercado, de banco, de livraria etc. Observar as brincadeiras das crianças, seus interesses e seus conhecimentos permite ao(à) professor(a) planejar atividades intencionais que enriqueçam o uso e a apropriação que as crianças fazem desses portadores, como planejar uma visita ao correio etc.',
    ],
    [
        'skills_id' => 'BR00EI02EF07',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças bem pequenas, é possível construir objetivos específicos relacionados ao uso de portadores, como, por exemplo, escrever cartas aos seus colegas ou familiares fazendo uso da escrita espontânea ou folhear livros contando suas histórias para seus colegas em situações de livre escolha. O currículo local pode, ainda, abordar atitudes a serem desenvolvidas, como, por exemplo, interessar-se por portadores textuais, buscando fazer uso deles segundo seus usos sociais.',
    ],
    [
        'skills_id' => 'BR00EI03EF07',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças pequenas (4 anos a 5 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI03EF07',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'As crianças pequenas aprendem sobre os textos ao terem diferentes oportunidades de escutar, explorar e conversar sobre diversos gêneros textuais em diferentes portadores. A apresentação cuidadosa dos diferentes gêneros, em seus portadores, apoia a criança na aproximação dos chamados conceitos letrados, que são aprendidos no contato com o mundo da escrita. Nesse contexto, é importante que as crianças pequenas tenham a oportunidade de conversar e explorar a lógica dos diferentes textos e seus portadores, nomeando alguns de seus elementos, como, por exemplo, a capa, a ilustração, o título, falando de sua estrutura, personagens, ações, informações, estrutura gráfica e observando atitudes típicas de um leitor, como buscar informação de ingredientes em uma receita, buscar o título de uma história no índice do livro etc.',
    ],
    [
        'skills_id' => 'BR00EI03EF07',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças pequenas, é possível construir objetivos específicos relacionados à identificação e uso das diferentes estruturas dos textos segundo seu gênero, como, por exemplo, fazer uso de livros de receitas em situações de brincadeiras de culinária ou buscar informações sobre algum tema a ser estudado em livros ou revistas com textos informativos, fazendo uso da leitura das fotos ou legendas para se apropriar de informações. O currículo local pode, ainda, abordar atitudes a serem desenvolvidas, como, por exemplo, interessar-se pela escuta da leitura de diferentes gêneros textuais.',
    ],
    [
        'skills_id' => 'BR00EI01EF08',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Bebês (zero a 1 ano e 6 meses)',
    ],
    [
        'skills_id' => 'BR00EI01EF08',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'Os bebês aprendem sobre a linguagem, os textos e suas funções a partir das diferentes oportunidades que possuem de escuta e exploração destes em situações significativas, e acompanhadas de conversas e ações que favoreçam a atribuição de sentido e significado de seu uso social. Nesse contexto, é importante que os bebês participem de situações nas quais possam ter contato com diferentes textos em diferentes gêneros, de forma repetida, por meio de escuta em pequenos grupos ou individualmente, em diferentes possibilidades de contextos. Por exemplo, participando de apresentações de teatro, encenação com fantoches, escutando áudios de histórias ou de canções, poemas, parlendas, fazendo uma receita de algo para comer ou de uma tinta para misturar etc.',
    ],
    [
        'skills_id' => 'BR00EI01EF08',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para bebês, é possível construir objetivos específicos relacionados aos gêneros textuais, por exemplo, divertir-se com a escuta de diferentes gêneros textuais como parlendas, poemas, canções, histórias, receitas etc., ou, ainda, divertir-se ao escutar poemas, parlendas e canções brincando com tecidos, registrando suas preferidas por meio de fotografias, áudios, desenhos, modelagens etc. O currículo local pode, ainda, destacar quais suportes ou gêneros textuais são mais valorizados em seu território considerando a adequação à faixa etária.',
    ],
    [
        'skills_id' => 'BR00EI03EF08',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças pequenas (4 anos a 5 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI03EF08',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'As crianças pequenas aprendem sobre os livros e os diferentes gêneros textuais a partir do contato com estes por meio da escuta de leituras e da exploração em suas brincadeiras. Essas atividades podem ser individuais, em pequenos ou grandes grupos, e em situações significativas, nas quais elas são convidadas a fazer uso social dos livros e textos. Nesse contexto, garantir, no cotidiano, diversas situações de escuta e de conversa sobre os diferentes gêneros, criando o gosto e o hábito pela leitura, construindo um repertório de textos e suportes conhecidos, participando de situações em que são convidadas a falar sobre a estrutura dos textos, identificando elementos gráficos, textuais e de conteúdo, contribuem para que as crianças desenvolvam o gosto pessoal por alguns textos e tenham a iniciativa de recorrer a eles de forma automotivada. Também é importante que possam identificar a escrita do nome próprio em listas e objetos e reconhecer o uso social de textos como convites para festas de aniversário, roteiro de atividades do dia, comunicados aos pais e listas variadas.',
    ],
    [
        'skills_id' => 'BR00EI03EF08',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças pequenas, é possível construir objetivos específicos relacionados à identificação de elementos da estrutura de gêneros textuais, como, por exemplo, identificar um livro pela leitura do título, apresentar uma história mostrando a capa do livro, o título e o nome do autor, ler o texto de um poema identificando as palavras que rimam etc. O currículo local pode, ainda, abordar atitudes a serem desenvolvidas, tais como interessar-se por ler diferentes gêneros textuais, e também identificar portadores e gêneros textuais que sejam típicos de seu território.',
    ],
    [
        'skills_id' => 'BR00EI01EF09',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Bebês (zero a 1 ano e 6 meses)',
    ],
    [
        'skills_id' => 'BR00EI01EF09',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'Os bebês aprendem sobre a linguagem e se aproximam da linguagem escrita a partir das diferentes oportunidades que possuem de escuta e exploração de diferentes instrumentos e suportes de escrita, em situações significativas e acompanhadas de conversas e ações que favoreçam a atribuição de sentido e significado ao seu uso social. Nesse contexto, é importante que os bebês participem de situações nas quais possam encontrar, em seus espaços de brincadeira, nas paredes de sua sala, nos objetos e materiais que fazem parte de seu cotidiano, instrumentos e suportes de escrita. Por exemplo, o espaço do faz de conta pode ter embalagens de produto de supermercado, livros variados, como livro brinquedo, livro de imagem, livros com textos, CDs e recursos audiovisuais para escutar e divertir-se com canções, parlendas, poemas etc.',
    ],
    [
        'skills_id' => 'BR00EI01EF09',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para bebês, é possível construir objetivos específicos relacionados aos instrumentos e suportes de escrita, por exemplo, reconhecer os livros demonstrando preferência por alguns, solicitar a leitura de um poema ou a escuta de uma canção apontando para um cartaz ou imagem, ou, ainda, abordar atitudes a serem desenvolvidas, tais como interessar-se por explorar diferentes instrumentos e suportes de escrita em situações de brincadeira ou de pequenos grupos. O currículo local pode, ainda, destacar quais instrumentos ou suportes de escrita são mais valorizados em seu território, considerando a adequação à faixa etária.',
    ],
    [
        'skills_id' => 'BR00EI02EF09',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças bem pequenas (1 ano e 7 meses a 3 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI02EF09',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'As crianças bem pequenas aprendem sobre a escrita e sua representação gráfica a partir do interesse que possuem do texto como um todo, identificando nele a direção da escrita, bem como a presença de letras e de desenhos. A partir das diferentes oportunidades de contato com a leitura de textos e de convites para escrever e se comunicar por meio de suportes de escrita, as crianças vão, aos poucos, distinguindo as imagens da escrita, ainda que utilizem seus desenhos como uma forma de comunicação gráfica que enriquece sua forma de expressar ideias, sentimentos, emoções etc. Nesse contexto, é importante que as crianças bem pequenas tenham a oportunidade de manusear e explorar diferentes suportes de escritas, fazendo uso de diferentes formas de comunicação escrita, por meio, por exemplo, de seus desenhos, do uso de símbolos gráficos que representam letras ou de uma ortografia inventada por elas. É importante, ainda, que imitem comportamentos de escritor ao fazer de conta que escrevem recados.',
    ],
    [
        'skills_id' => 'BR00EI02EF09',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças bem pequenas, é possível construir objetivos específicos relacionados à comunicação escrita, como, por exemplo, conceber seus desenhos como uma forma de comunicação, fazer uso de suas garatujas com a intenção de uma comunicação escrita e fazer uso das letras, ainda que de forma não convencional, em seus registros de comunicação. O currículo local pode, ainda, abordar atitudes a serem desenvolvidas, tais como aceitar o desafio de produzir comunicações escritas.',
    ],
    [
        'skills_id' => 'BR00EI03EF09',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças pequenas (4 anos a 5 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI03EF09',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'As crianças pequenas aprendem sobre a escrita quando apoiadas e incentivadas a se comunicar fazendo uso da linguagem escrita. Nesse processo, as situações em que são convidadas a escrever de seu próprio jeito ajudam a atribuir sentido à sua intenção de comunicação escrita. Além disso, as situações em que refletem sobre o que escreveram são relevantes para enfrentar questões com as quais se deparam ao perceber que sua escrita não corresponde à escrita convencional. Nesse contexto, é importante que as crianças pequenas tenham a oportunidade de escrever, de seu próprio jeito, histórias conhecidas ou criadas por elas, parlendas e cantigas, construindo uma coleção daquelas que são as suas preferidas, além de palavras que rimam, brincando com a linguagem e a escrita. Também é importante que as crianças sejam encorajadas a escrever umas às outras, que sejam convidadas a escrever o nome de uma história conhecida para uma situação de sorteio, para ler o que escreveram comparando com a escrita convencional, que escrevam o nome sempre que for necessário e reconheçam a semelhança entre a letra inicial de seu nome e as iniciais dos nomes dos colegas que possuem a mesma letra, que escrevem cartas, recados ou diários para determinada pessoa, elaborem convites, comunicados e listas, panfletos com as regras de um jogo, ainda que de modo não convencional, que levantem hipóteses sobre o que está escrito e sobre como se escreve e utilizem conhecimentos sobre o sistema de escrita para localizar um nome específico em uma lista de palavras (ingredientes de uma receita culinária, peças do jogo etc.) ou palavras em um texto que sabem de memória, entre tantas outras situações em que a escrita de textos ou de palavras tenham um sentido para a criança.',
    ],
    [
        'skills_id' => 'BR00EI03EF09',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças pequenas, é possível construir objetivos específicos relacionados à escrita, como, por exemplo, produzir listas e textos memorizados, escrever o nome próprio e de alguns colegas, estabelecer relação entre grafema e fonema do nome próprio e de algumas palavras estáveis. O currículo local pode, ainda, abordar atitudes a serem desenvolvidas, tais como aceitar o desafio de confrontar suas escritas espontâneas.',
    ],
    [
        'skills_id' => 'BR00EI01ET01',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Bebês (zero a 1 ano e 6 meses)',
    ],
    [
        'skills_id' => 'BR00EI01ET01',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'Os bebês aprendem com todo o seu corpo e seus sentidos. Por meio de suas ações de explorações, aprendem sobre o mundo à sua volta. A qualidade das vivências de explorações que os bebês têm nesse momento oferece uma base de experiência para interpretarem o mundo. Na sua vontade de interagir e aprender sobre os objetos e materiais, usam como ferramentas aquilo que está ao seu alcance: olhos, nariz, mãos, boca, ouvidos e pés. Nesse contexto, é importante que os bebês participem de situações nas quais possam agir sobre os materiais repetidas vezes, divertindo-se, explorando, investigando, testando diferentes possibilidades de uso e interação, encontrando e resolvendo problemas; que possam explorar objetos com formas e volumes variados e identificar algumas propriedades simples dos materiais, como, por exemplo, a luminosidade, a temperatura, a consistência e a textura; que possam também explorar temperatura e inclinação dos diferentes tipos de solo da unidade de Educação Infantil. Além disso, é importante que possam, por meio da repetição com significado dessas situações, descobrir a permanência do objeto.',
    ],
    [
        'skills_id' => 'BR00EI01ET01',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para bebês, é possível construir objetivos específicos relacionados à identificação de objetos como, por exemplo, por meio da exploração. Além disso, também é possível prever objetivos relacionados ao uso de objetos, como, por exemplo, fazer uso do objeto de forma convencional ou dando um novo significado por meio de sua brincadeira exploratória. O currículo local pode, ainda, destacar quais os alimentos são típicos de seus contextos familiares e quais aqueles que a escola pode ofertar para ampliar as vivências dos bebês e também considerar as diferentes formas de contato que têm com os alimentos (por exemplo, pela consistência — sólidos, pastosos, líquidos —, pelos odores, pelos sabores).',
    ],
    [
        'skills_id' => 'BR00EI02ET01',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças bem pequenas (1 ano e 7 meses a 3 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI02ET01',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'As crianças bem pequenas aprendem sobre o mundo à sua volta por meio das descobertas que fazem a partir de explorações e investigações de diferentes objetos. Cada novo objeto ou grupo de objetos que descobrem proporciona diversas explorações e enriquecem suas interações, curiosidades e interesses, favorecendo uma postura investigativa sobre o meio que as cercam.  Nesse contexto, é importante que as crianças bem pequenas tenham oportunidades diversas de exploração de diferentes objetos: individualmente, em duplas, trios ou pequenos grupos; no espaço da sala, organizado de forma a desafiá-la e atraí-la em suas investigações; e no espaço externo, sensibilizada pelos diferentes elementos da natureza e a diversidade de formas possíveis de explorar. As crianças bem pequenas gostam de contar o que estão fazendo. Enquanto brincam e exploram, criam narrativas sobre suas ações e se divertem e aprendem umas com as outras ao compartilhar seus pensamentos. Nesse contexto, a escuta e a observação atenta do(a) professor(a) para suas ações exploratórias e investigativas podem apoiá-lo(a) a interagir com as crianças a partir de seus interesses e curiosidades, chamando atenção para as propriedades dos objetos (água, terra, areia, farinha etc.) e as suas características, destacando as relações e conexões que as crianças fazem, incentivando que atentem às semelhanças e diferenças e também proporcionando situações de exploração de objetos de diferentes formatos e tamanhos, utilizando o conhecimento de suas propriedades para explorá-los com maior intencionalidade — por exemplo, empilhar objetos do menor para o maior e vice-versa.',
    ],
    [
        'skills_id' => 'BR00EI02ET01',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças bem pequenas, é possível construir objetivos específicos relacionados à identificação de características dos objetos, como, por exemplo, observar e nomear alguns atributos dos objetos que exploram. O currículo pode considerar objetivos específicos relacionados à descrição e identificação de diferenças entre objetos, como, por exemplo, descrever objetos em situações de exploração ou em atividades de trios ou pequenos grupos, apontando suas características, semelhanças e diferenças, além de abordar atitudes a serem desenvolvidas, como mostrar curiosidade em exploração ou interessar-se por identificar semelhanças e diferenças entre objetos. O currículo local pode, ainda, exemplificar situações ou objetos típicos de sua cultura, que as crianças costumam usar em suas explorações, tais como areia e água — misturar areia com água; tinta – brincar com diferentes tipos de tintas; elementos da natureza – terra, lama, plantas etc.',
    ],
    [
        'skills_id' => 'BR00EI03ET01',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças pequenas (4 anos a 5 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI03ET01',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'As crianças pequenas aprendem sobre as características e propriedades dos objetos usando todos os seus sentidos em situações de exploração e investigação. A partir da oportunidade de realizarem repetidas explorações, elas começam a construir conclusões baseadas em suas percepções físicas imediatas, a fazer comparações entre os objetos e a descrever suas diferenças. Nesse contexto, é importante que as crianças pequenas tenham a oportunidade de realizar diversas situações de exploração e investigação de objetos em suas brincadeiras ou em atividades organizadas pelos(as) professores(as), seja individualmente, em duplas, trios ou pequenos grupos; seja no espaço da sala, organizado de forma a desafiá-las e atraí-las em suas investigações, seja no espaço externo, sensibilizadas pelos diferentes elementos da natureza e a diversidade de formas possíveis de explorá-los. É importante que possam participar de situações como explorar relações de peso, tamanho e volume de formas bidimensionais ou tridimensionais e explorar materiais como argila e massa de modelar, percebendo a transformação do espaço tridimensional em bidimensional e vice-versa, a partir da construção e desconstrução. A observação e a escuta atenta do(a) professor(a) permite que converse com as crianças, valorizando seus interesses, necessidades e suas falas, cada vez mais elaboradas, sobre suas explorações, comparações e as descobertas que fazem.',
    ],
    [
        'skills_id' => 'BR00EI03ET01',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças pequenas, é possível construir objetivos específicos relacionados aos tipos de comparação que podem realizar — de tamanhos, pesos, volumes e temperaturas —, estabelecendo relações. O currículo pode considerar objetivos específicos relacionados ao uso de vocabulário próprio ao realizar comparações entre objetos — por exemplo, usar características opostas das grandezas de objetos (grande/pequeno, comprido/curto etc.) ao falar sobre eles. O currículo local pode, ainda, abordar atitudes a serem desenvolvidas, como interessar-se por fazer uso de diferentes procedimentos ao comparar objetos.',
    ],
    [
        'skills_id' => 'BR00EI01ET02',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Bebês (zero a 1 ano e 6 meses)',
    ],
    [
        'skills_id' => 'BR00EI01ET02',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'Os bebês são extremamente motivados por explorar e estão vivendo suas primeiras experiências de contato com o meio físico e natural, de modo que todo esse mundo é para eles uma grande novidade com muitas coisas para descobrir. A exploração dos bebês é marcada pela sua experiência sensorial, de forma que fazem uso de todos os seus sentidos e seu corpo para descobrir sobre si mesmos e sobre os efeitos de suas ações sobre os objetos e pessoas. Nesse contexto, é importante que os bebês possam participar de situações de exploração cada vez mais diversas, nas quais possam fazer uso de todos os seus sentidos e de seu corpo e que apoiem a sua descoberta da permanência do objeto. Dar tempo e valorizar as explorações dos bebês é uma forma de engajá-los nas suas descobertas iniciais sobre o mundo físico e natural à sua volta, como, por exemplo, explorar objetos, empilhando, segurando, jogando, retirando e guardando na caixa, enchendo e esvaziando recipientes com água, areia, folhas, percebendo relações simples de causa e efeito e mostrando interesse no porquê e em como as coisas acontecem em momentos de brincadeiras, em atividades individuais ou em interações em pequenos grupos.',
    ],
]);
