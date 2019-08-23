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
        'skills_id' => 'BR00EI02EO04',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças bem pequenas, é possível construir objetivos específicos relacionados à comunicação não-verbal, como, por exemplo, participar de situações de brincadeira buscando compartilhar enredos e cenários, usar expressões faciais para apoiar seus relatos de situações vividas ou sua opinião sobre uma história escutada, bem como expressar suas ideias, sentimentos e emoções por meio da dança, da música ou da arte. O currículo pode considerar objetivos específicos relacionados à ampliação do vocabulário com foco na interação com adultos e pares como, por exemplo, engajar-se em situações de interações por tempos maiores, fazer perguntas para apoiar suas descobertas sobre o mundo à sua volta, além de descrever situações ou fatos vividos utilizando palavras novas e frases cada vez mais complexas. O currículo local pode, ainda, destacar qual o vocabulário típico de sua comunidade que elas costumam fazer uso ou exemplificar situações de brincadeiras de faz de conta que incentivem a comunicação entre as crianças.',
    ],
    [
        'skills_id' => 'BR00EI03EO04',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças pequenas (4 anos a 5 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI03EO04',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'À medida que evoluem em suas capacidades de linguagem e de representação, as crianças pequenas ganham confiança e maior independência nas suas formas de comunicar ideias e sentimentos a pessoas e grupos diversos. Nesse contexto, é importante oportunizar diferentes situações em que as crianças pequenas sejam convidadas e incentivadas a se comunicar com independência, a fazer coisas por si mesmas, bem como a iniciar uma atividade e persistir por si próprias nas ações e interações necessárias para seu sucesso. É importante que suas diferentes formas de comunicação, seja pelo corpo, pela música, pela narrativa, pela arte ou mesmo pela linguagem verbal possam ser valorizadas e incentivadas, evitando a ideia de que a linguagem verbal deve ser a mais valorizada na escola como forma de expressão e comunicação das crianças.',
    ],
    [
        'skills_id' => 'BR00EI03EO04',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças pequenas, é possível construir objetivos específicos relacionados ao reconhecimento e expressão de emoções em si mesmas, como, por exemplo, identificar emoções ou regulá-las conforme as ações que realizam, ou pode também considerar objetivos específicos relacionados ao reconhecimento e expressão de emoções nos outros, como, por exemplo, expressar e reconhecer diferentes emoções e sentimentos em si mesmos e nos outros. O currículo local pode, ainda, abordar atitudes a serem desenvolvidas, como, por exemplo, expressar raiva sem incomodar os colegas e tentando regular sua emoção.',
    ],
    [
        'skills_id' => 'BR00EI01EO05',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Bebês (zero a 1 ano e 6 meses)',
    ],
    [
        'skills_id' => 'BR00EI01EO05',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'Por meio de situações de interação com professores(as) nos quais confiam, os bebês continuam suas descobertas sobre si mesmos, percebendo-se como um ser individual, com necessidades e desejos próprios. Quando apoiados e encorajados nesse processo de desenvolvimento, começam a construir uma imagem de si próprios e a desenvolver um sentido de si mesmos. As situações de cuidado, envolvendo os momentos de alimentação, higiene, sono ou repouso são privilegiadas para apoiar os bebês nas suas descobertas sobre si e sobre as formas de expressão de suas necessidades e desejos. Nesse contexto, é importante que os bebês possam construir relações de vínculos profundos e estáveis com os(as) professores(as) e que estes(as) sejam responsivos, por meio de uma escuta e observação atenta, aos seus interesses e necessidades, e às suas diferentes formas de expressar-se e comunicar-se. É importante favorecer situações em que os bebês possam fazer coisas por si, experimentando sabores, percebendo os cheiros dos alimentos e escolhendo o que querem comer,  participando junto com outras crianças de refeições gostosas e cheirosas, de descanso diário em ambiente aconchegante e silencioso, de momentos de banho refrescante e participando dos momentos de cuidado assumindo pequenas ações, como, por exemplo, segurar a mamadeira, segurar sua fralda, ajudar esticando os braços ou as pernas ao se vestir, realizar algumas ações de cuidado de si mesmos e de satisfação de suas necessidades e desejos em situações como colocar o casaco ao sentir frio, solicitar água ao sentir sede, buscar aconchego ao sentir sono etc., sempre com a segurança de estar acolhido pelo(a) professor(a), que responde e valoriza suas iniciativas.',
    ],
    [
        'skills_id' => 'BR00EI01EO05',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para bebês, é possível construir objetivos específicos relacionados à expressão de suas emoções no cuidado de si mesmos — por exemplo, expressar desconforto ao necessitar ser trocado, ao estar com fome ou sono. O currículo pode considerar objetivos específicos relacionados à realização de ações simples no cuidado de si mesmo, como, por exemplo, participar com pequenas ações nas situações de troca de fraldas (segurando sua fralda) e de alimentação, tentando alimentar-se por si mesmo. O currículo local pode, ainda, abordar atitudes a serem desenvolvidas, como, por exemplo, demonstrar prazer na participação e adaptação a rotinas relacionadas à sua alimentação, sono, descanso e higiene.',
    ],
    [
        'skills_id' => 'BR00EI02EO05',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças bem pequenas (1 ano e 7 meses a 3 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI02EO05',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'Por meio de experiências positivas de interação com outras crianças e adultos, permeadas por relações vinculares profundas, estáveis e respeitosas, as crianças bem pequenas têm a oportunidade de aprender sobre as suas características físicas e a perceber semelhanças e diferenças em relação aos seus colegas ou outras pessoas próximas.  Nesse contexto, é importante que possam viver situações de explorações de seu próprio corpo e de relações e trocas com seus colegas e professores(as) em um ambiente rico de interações e descobertas pelas crianças sobre si mesmas, suas características físicas, seus gostos e preferências e de seus colegas em um clima de respeito e confiança, favorecendo que as crianças pequenas valorizem e respeitem suas particularidades e diferenças em relação aos outros. Nesse contexto é desejável também que elas possam apoiar parceiros em dificuldade, sem discriminá-los por suas características .',
    ],
    [
        'skills_id' => 'BR00EI02EO05',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças bem pequenas, é possível construir objetivos específicos relacionados ao reconhecimento de suas características, como, por exemplo, identificar progressivamente algumas características físicas suas, reconhecendo diferenças com as de seus colegas. O currículo pode considerar objetivos específicos relacionados ao respeito frente às diferenças, como, por exemplo, brincar de faz de conta assumindo diferentes papéis e imitando ações e comportamentos de seus colegas, expandindo suas formas de expressão e representação. O currículo local pode, ainda, abordar atitudes a serem desenvolvidas, como, por exemplo, interessar-se por relacionar-se com outras crianças respeitando suas formas diferentes de agir.',
    ],
    [
        'skills_id' => 'BR00EI03EO05',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças pequenas (4 anos a 5 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI03EO05',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'As crianças pequenas aprendem a valorizar suas características e a respeitar as dos outros por meio de diversas situações em que podem se expressar de formas variadas, observar as expressões e ações de seus colegas, descobrir seus gostos e preferências, bem como perceber que possuem interesses e características semelhantes e diferentes de seus companheiros, apreciando a descoberta dessa diversidade. Nesse contexto, é importante que as crianças pequenas possam envolver-se em situações de brincadeiras compartilhadas, em brincadeiras com música, dança, mímica, dramatização, bem como atividades diversas de expressão e representação,  preparar uma exposição de objetos relativos às atividades e profissões dos familiares e dos adultos da unidade de Educação Infantil,  realizar com maior autonomia ações de escovar os dentes, colocar sapatos ou o agasalho, pentear os cabelos, servir-se sozinha nas refeições, utilizar talheres adequados, lavar as mãos antes das refeições e depois de usar tinta ou brincar com terra ou areia.',
    ],
    [
        'skills_id' => 'BR00EI03EO05',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças pequenas, é possível construir objetivos específicos relacionados à identificação das características de seu corpo, como, por exemplo, perceber seus atributos corporais, expressando-os de diferentes formas e contribuindo para a construção de sua imagem corporal. O currículo pode considerar objetivos específicos relacionados ao reconhecimento de seus pontos fortes, como, por exemplo, reconhecer gradativamente suas habilidades, expressando-as e usando-as em suas brincadeiras e nas atividades individuais, de pequenos ou grandes grupos. O currículo local pode, ainda, abordar atitudes a serem desenvolvidas, como, por exemplo, apreciar positivamente seu gênero e respeitar o outro em diferentes situações ou identificar e respeitar as diferenças reconhecidas entre as características femininas e masculinas.',
    ],
    [
        'skills_id' => 'BR00EI01EO06',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Bebês (zero a 1 ano e 6 meses)',
    ],
    [
        'skills_id' => 'BR00EI01EO06',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'Por meio das diversas oportunidades de interação positivas que os bebês têm com outras crianças e com seus(uas) professores(as), que se preocupam em estabelecer vínculos profundos e estáveis com eles, garantindo a segurança de que necessitam para suas explorações e descobertas sobre o mundo que os cerca, aprendem a participar e colaborar em situações de convivência em contato com colegas, em dupla, trio, pequeno ou grande grupo, valorizando e descobrindo diferentes formas de estar com os outros. Nesse contexto, é importante que os bebês tenham diversas oportunidades de brincadeiras e situações, sempre em um contexto de segurança, confiança e afetividade que garanta condições de interações positivas em pares ou em grupos maiores. Também é importante que sejam valorizados em suas conquistas e esforços de relações com seus pares, professores(as) e outros adultos da escola.',
    ],
    [
        'skills_id' => 'BR00EI01EO06',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para bebês, é possível construir objetivos específicos relacionados à sua relação com pessoas próximas. Por exemplo, sorrir para o(a) professor(a), buscando contato, mostrar preferência em ser acolhido por pessoas conhecidas ou acalmar-se quando acolhido por seu(ua) professor(a) de referência. O currículo pode considerar objetivos específicos relacionados à sua relação com as outras crianças, como, por exemplo, buscar colegas com quem gosta de brincar ou comunicar-se com seus companheiros imitando gestos, palavras e ações. O currículo local pode, ainda, trazer exemplos de hábitos de convívio específico de sua cultura, além de abordar atitudes a serem desenvolvidas nessas situações, como, por exemplo, mostrar interesse pelas ações e expressões de seus colegas ou ter prazer em interagir com os companheiros em situações de brincadeira, buscando compartilhar significados comuns.',
    ],
    [
        'skills_id' => 'BR00EI02EO06',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças bem pequenas (1 ano e 7 meses a 3 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI02EO06',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'As crianças bem pequenas têm a oportunidade de descobrir e se apropriar das regras básicas de convívio social conforme podem vivenciar diversas situações de interação em cenários de brincadeiras e atividades compartilhadas. Nesse contexto, incentivar o interesse que as crianças bem pequenas têm em estar junto com seus pares, oportunizando situações de jogos colaborativos, atividades simples em pequenos grupos, trios ou mesmo duplas, e situações em que precisam compartilhar objetos ou brinquedos, favorece o desenvolvimento do convívio social positivo entre as crianças. É imporante também que possam participar de situações em que cantem, respeitando sua vez de cantar e ouvindo os companheiros, e decidam com os colegas o tema de uma história a ser por todos dramatizada, usando esclarecimentos, justificativas e argumentos que são muito ligados aos seus sentimentos.',
    ],
    [
        'skills_id' => 'BR00EI02EO06',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças bem pequenas, o currículo pode construir objetivos específicos relacionados às normas simples de convivência, como, por exemplo, começar a seguir, de forma gradativa, regras simples de convívio em momentos de alimentação, cuidado com a saúde e brincadeiras. O currículo pode considerar objetivos específicos relacionados à participação em diferentes situações, como, por exemplo, participar de diferentes manifestações culturais de seu grupo, como festa de aniversário, ritos ou outras festas tradicionais, respeitando e valorizando ações e comportamentos típicos. O currículo local pode, ainda, exemplificar quais são os ritos, festas ou celebrações típicas de sua cultura, além de abordar atitudes a serem desenvolvidas, como, por exemplo, ter prazer em participar de eventos tradicionais de seu território.',
    ],
    [
        'skills_id' => 'BR00EI03EO06',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças pequenas (4 anos a 5 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI03EO06',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'As crianças pequenas aprendem a respeitar as diferentes culturas e modos de vida ao mesmo tempo em que conhecem e valorizam suas próprias características e compreendem como estas contribuem e marcam sua cultura, criando um valor positivo frente às diferenças de gênero, etnia e crenças religiosas. Nesse contexto, é importante que as crianças pequenas vivenciem cotidianamente um ambiente de respeito e aceitação ao outro, reconhecendo e valorizando como positivas as diferenças identificadas. Ter a oportunidade de conhecer outros grupos de crianças ou mesmo outros grupos sociais, seja pessoalmente ou por outro meio de comunicação, ajuda para que se interessem e respeitem as diferentes culturas e modos de vida, bem como ouvir e recontar histórias dos povos indígenas, africanos, asiáticos, europeus, de diferentes regiões do Brasil e de outros países da América, localizar, em um mapa, com apoio do(a) professor(a), sua cidade, aldeia ou assentamento, e o local do Brasil no mapa mundial, pesquisar em casa suas tradições familiares, de modo a reconhecer elementos da sua identidade cultural, estabelecer relações entre o modo de vida característico de seu grupo social e o de outros grupos, conhecer costumes e brincadeiras de outras épocas e de outras civilizações e explorar brincadeiras, tipos de alimentação e de organização social característicos de diferentes culturas.',
    ],
    [
        'skills_id' => 'BR00EI03EO06',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças pequenas, é possível construir objetivos específicos relacionados ao reconhecimento de pessoas de sua comunidade, como, ao reconhecer pessoas que fazem parte de sua comunidade próxima, conversar com elas sobre o que fazem. O currículo pode considerar objetivos específicos relacionados ao conhecimento de outros grupos sociais, como, por exemplo, interessar-se por conhecer e se relacionar com crianças e pessoas de outros grupos sociais, seja por meio de situações presenciais, seja por outros meios de comunicação. O currículo local pode, ainda, trazer exemplos de pessoas que fazem parte de sua comunidade, como o padeiro, o fazendeiro, o pescador etc.',
    ],
    [
        'skills_id' => 'BR00EI02EO07',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças bem pequenas (1 ano e 7 meses a 3 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI02EO07',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'As crianças bem pequenas, ao participarem de situações de interações com outras crianças, acabam se envolvendo em situações de conflitos de relações que, muitas vezes, geram sentimentos de frustração. Nessa faixa etária, estão mais centradas em si mesmas, pensam de uma forma mais concreta e estão adquirindo a conquista do autocontrole. A regulação de suas emoções é importante para que as crianças possam vivenciar situações concretas de conflitos sociais. Nessas vivências, elas devem ser apoiadas na resolução desses conflitos, de forma positiva, pelo(a) professor(a), que as ajuda a aprender, gradativamente, a resolvê-los. Nesse contexto, é importante cuidar das situações cotidianas de conflitos relacionais que as crianças bem pequenas vivem, aceitando e respeitando a situação e, ao mesmo tempo, ajudando-as a reconhecer, expressar e conversar sobre seus sentimentos, apoiando-as na criação de estratégias para a resolução dos conflitos.',
    ],
    [
        'skills_id' => 'BR00EI02EO07',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças bem pequenas, é possível construir objetivos específicos relacionados à busca de apoio para resolver conflitos relacionais, como, por exemplo, procurar o(a) professor(a) para ajudar a resolver conflitos nas brincadeiras e interações com outras crianças. O currículo pode considerar objetivos específicos relacionados ao controle de suas emoções em situações de conflitos, como, por exemplo, aceitar ajuda e conseguir acalmar-se com o apoio do(a) professor(a) ao vivenciar um conflito relacional. O currículo local pode, ainda, abordar atitudes a serem desenvolvidas, como, por exemplo, interessar-se por tentar resolver os conflitos relacionais com o(a) professor(a) em situações de brincadeira.',
    ],
    [
        'skills_id' => 'BR00EI03EO07',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças pequenas (4 anos a 5 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI03EO07',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'As crianças pequenas, por meio das diversas situações de interações que vivenciam em seu cotidiano e das situações de conflitos relacionais geradas por essas interações, aprendem, gradativamente, a criar e fazer uso de estratégias pautadas no respeito mútuo para resolução dos conflitos, por meio de estratégias pacíficas e do diálogo. Nesse contexto, garantir que as crianças pequenas vivam diferentes situações de interação e que possam tomar iniciativa na busca por resolver os problemas relacionais que aparecem, de forma cada vez mais independente, contribui para que percebam as necessidades dos outros e busquem soluções para resolver seus conflitos de forma que satisfaça a todas as crianças envolvidas na situação, e para que possam também discutir em grupo situações-problema ou formas de planejar um evento.',
    ],
    [
        'skills_id' => 'BR00EI03EO07',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças pequenas, é possível construir objetivos específicos relacionados a habilidades para resolver problemas relacionais, como, por exemplo, usar diferentes estratégias simples para resolver conflitos ou utilizar estratégias pacíficas ao tentar resolver conflitos com outras crianças, buscando compreender a posição e o sentimento do outro. O currículo local pode, ainda, abordar atitudes a serem desenvolvidas, como, por exemplo, usar estratégias para resolver seus conflitos relacionais considerando soluções que satisfaçam a ambas as partes.',
    ],
    [
        'skills_id' => 'BR00EI02EO02',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças bem pequenas (1 ano e 7 meses a 3 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI02EO02',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'As crianças bem pequenas aprendem por meio de suas interações e explorações. Ao vivenciarem variadas situações de interação, nas quais têm a oportunidade de decidir o que explorar e como resolver pequenos problemas, vão, aos poucos, desenvolvendo um sentido de autoconfiança. Assim, vão se reconhecendo como alguém que é capaz de fazer coisas por si mesmo e sentindo orgulho em suas conquistas, o que também é importante para o desenvolvimento de sua autonomia e independência. Nesse contexto, é importante oportunizar às crianças bem pequenas diversas situações de exploração e interação nas quais tenham a oportunidade de iniciar suas ações, tomar decisões, fazer escolhas e resolver problemas em um ambiente seguro e estimulante, com professores(as) que valorizam e apoiam suas iniciativas e preferências.',
    ],
    [
        'skills_id' => 'BR00EI02EO02',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças bem pequenas, é possível construir objetivos específicos relacionados à imagem positiva de si, como, por exemplo, reconhecer sua imagem corporal no espelho ou brincando de luz e sombra, manifestando prazer em brincar com seu corpo por meio de gestos e movimentos ou apontar partes do seu corpo e mostrar a correspondência destas em seus colegas. O currículo pode considerar objetivos específicos relacionados à autoconfiança, como, por exemplo, demonstrar satisfação com suas características e possibilidades corporais e na conquista de objetivos simples. O currículo local pode, ainda, abordar atitudes a serem desenvolvidas, como, por exemplo, interessar-se por cuidar da imagem de si mesmo por meio da sua apresentação pessoal, de seus pertences e da manifestação de gostos e preferências por brincadeiras e atividades.',
    ],
    [
        'skills_id' => 'BR00EI03CG01',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças pequenas (4 anos a 5 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI03CG01',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'Para que as crianças pequenas possam criar formas diversificadas de expressão, é importante que tenham oportunidades de expressar-se de diferentes formas, seja pelo teatro, pela dança, música ou suas brincadeiras, bem como de conhecer suas características físicas, seus gostos, interesses, suas sensações e frustrações. Conhecer e aceitar suas características corporais, expressando-as de diferentes formas, é uma importante conquista para a construção de sua imagem corporal positiva. Nesse contexto, é importante que as crianças pequenas possam participar de situações, em pares ou pequenos grupos, nas quais possam se expressar de formas diversificadas, como, por exemplo, expressar-se corporalmente distinguindo emoções e sentimentos, em si mesmo e nos seus colegas, em situações cotidianas, em imagens observadas ou em narrações escutadas. É desejável também que brinquem de andar como robôs, como zumbis, como gatinhos ou como maria-mole, dentre outras formas, e que possam criar histórias e narrativas , dramatizando-as com os colegas, apropriando-se de diferentes gestualidades expressivas.',
    ],
    [
        'skills_id' => 'BR00EI03CG01',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças pequenas, é possível construir objetivos específicos relacionados às ações de expressões de seus sentimentos, sensações e emoções. Por exemplo, representar-se em situações de brincadeiras ou teatro, apresentando suas características corporais, seus interesses, sentimentos, sensações ou emoções ou reconhecer algumas de suas fortalezas, como noções, habilidades ou atitudes, e conseguir usá-las em suas atividades diárias. O currículo pode considerar objetivos específicos relacionados à habilidade de criar com o corpo formas de expressar seus sentimentos, sensações e emoções, como, por exemplo, expressar seu mundo interno por meio da representação de seus sentimentos, fantasias ou emoções, ou expressar e comunicar suas características por meio de diferentes movimentos. O currículo local pode, ainda, destacar ações típicas de sua cultura local, além de abordar atitudes a serem desenvolvidas, como aceitar e valorizar suas características corporais, expressando-se de diferentes formas e construindo uma imagem positiva de si mesmo.',
    ],
    [
        'skills_id' => 'BR00EI02CG05',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças bem pequenas (1 ano e 7 meses a 3 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI02CG05',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'Para as crianças bem pequenas, o movimento físico e as habilidades manuais têm um papel muito importante no apoio às suas aprendizagens. Quando elas conseguem controlar seus movimentos e manipular materiais de diferentes tipos, tamanhos e pesos, começam a se sentir mais confiantes em suas explorações e buscam novas práticas e descobertas. Aprender a medir sua força, adequar os movimentos de seus dedos e exercitar sequências e padrões de movimentos são desafios importantes nesse momento de suas vidas. Nesse contexto, é importante que as crianças bem pequenas possam vivenciar situações relativas ao desenvolvimento de suas habilidades manuais, como, por exemplo, que: possam montar um brinquedo, pegar objetos e manuseá-los com certos cuidados, por exemplo, um origami de papel que exige suavidade no toque, materiais pegajosos etc.; possam participar de práticas nas quais tenham oportunidade de aprimorar a coordenação visio-motora fina, utilizando movimento de preensão com pinça em diferentes situações de uso de objetos, como lápis, pincel, caneta ou jogos de encaixe com peças pequenas; ou, ainda, possam carregar objetos, controlando e equilibrando-os enquanto estão em ação, além de construir, com auxílio do(a) professor(a), brinquedos com sucatas, e casas ou castelos com areia, tocos de madeira e outros materiais, brincar de cantar, de dançar, de desenhar, de escrever, de jogar futebol, de jogar bola ao cesto, boliche, esconde-esconde, mapa do tesouro, brincar de estátua ou de ser malabarista de circo, dentre outros personagens que a criança conhece da escuta de histórias.',
    ],
    [
        'skills_id' => 'BR00EI02CG05',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças bem pequenas, que começam a realizar novos movimentos na medida em que progridem nas suas habilidades manuais, é possível construir objetivos específicos relacionados às habilidades manuais importantes de serem conquistadas. Por exemplo, coordenar o movimento das mãos para segurar o giz de cera, canetas, lápis e fazer suas marcas gráficas; mudar a página do livro ou explorar materiais de construção e brinquedos de encaixe de diferentes tamanhos e formatos; começar a usar a tesoura simples para recortar; adaptar a forma como segura instrumentos gráficos (pincel grosso, fino, pincel de rolinho, giz de cera, giz pastel etc.) para conseguir diferentes marcas gráficas. O currículo local pode, ainda, trazer objetivos específicos relacionados aos objetos, brinquedos ou jogos de sua cultura local, além de abordar atitudes a serem desenvolvidas, como interessar-se por conhecer novos objetos e seus usos ou funções ou manter seu interesse e perseverança nos jogos de encaixe e equilíbrio frente aos desafios encontrados.',
    ],
    [
        'skills_id' => 'BR00EI02CG01',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças bem pequenas (1 ano e 7 meses a 3 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI02CG01',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'As crianças bem pequenas se interessam pelos adultos e outras crianças com as quais convivem e aprendem, em diferentes situações de interação, por meio da observação e imitação de seus gestos e movimentos. Garantir situações e tempo para que as crianças possam observar umas às outras, explorar conjuntamente gestos e movimentos e ensinar umas às outras em situações significativas contribui para que ampliem seus conhecimentos e suas habilidades nas explorações e descobertas que fazem sobre si mesmas, nas relações com o outro e o mundo ao seu redor. Nesse contexto, é importante que as crianças bem pequenas vivenciem situações em que possam acolher as formas de expressão umas das outras, valorizando suas diferenças e apoiando suas investigações e descobertas sobre as diferentes linguagens, sobre os objetos, os materiais, o repertório cultural de sua comunidade e de outras culturas. É importante, também, que possam participar de situações de brincadeiras de faz de conta, utilizando como referência enredos, cenários e personagens do seu entorno social; interessar-se por ensinar jogos de sua cultura familiar e aprender os jogos de seus colegas; relatar práticas de cuidado de si em casa e escutar com atenção os relatos dos colegas; imitar, nas situações de brincadeira, gestos e movimentos aprendidos com os colegas ou professores(as) em situações de conversa, cuidados ou jogos; incorporar algumas práticas de cuidado de si voltadas para vestir-se e alimentar-se, além de situações de descanso e higiene pessoal.',
    ],
    [
        'skills_id' => 'BR00EI02CG01',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças bem pequenas, é possível construir objetivos específicos relacionados à ampliação de noções e habilidades a partir da observação e do contato com novos gestos e movimentos da sua cultura. Por exemplo, conversar com professores(as) e outras crianças sobre o cuidado e a atenção no uso dos diferentes espaços da escola, observar e imitar gestos e movimentos típicos dos profissionais da escola e de sua comunidade próxima, cantar canções imitando os gestos ou seguir ritmos diferentes de músicas com movimentos corporais. O currículo pode considerar a complexidade dos gestos e movimentos — por exemplo, apreciar, explorar e valorizar a escuta de diferentes estilos de música, dança e outras expressões da cultura corporal ou criar novos movimentos e gestos a partir de apresentações artísticas assistidas. O currículo local pode, ainda, destacar os objetos, materiais, expressões culturais corporais, danças, músicas e brincadeiras que são típicas de sua região, de sua cultura, e apontar as aprendizagens a serem conquistadas pelas crianças. Por exemplo, imitar e criar movimentos na dança a partir do contato com diferentes gêneros musicais, imitar movimentos dos artistas no uso do barro para a modelagem, brincar de pescar a partir da observação dos pescadores, fazendo relações entre a situação vivida e o enredo, cenários e personagens em situação de faz de conta.',
    ],
    [
        'skills_id' => 'BR00EI01CG01',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Bebês (zero a 1 ano e 6 meses)',
    ],
    [
        'skills_id' => 'BR00EI01CG01',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'Os bebês buscam, desde cedo, contato com adultos e outras crianças de forma a se comunicarem e criarem um sentido de pertencimento a um grupo. Conforme as experiências que vivem no contato com professores(as) e pares, têm a oportunidade de aprimorar suas formas de expressão, fazendo uso de seu corpo e conseguindo comunicar suas emoções, necessidades e desejos. Experiências positivas de comunicação são muito importantes para que os bebês ganhem confiança e aceitação nas suas formas de explorar e descobrir as relações e o mundo à sua volta. Nesse contexto, é importante que os bebês tenham experiências quanto ao uso do corpo, de forma que possam agir para exprimir suas emoções, necessidades e desejos por meio da interação. Além disso, é importante que suas relações com os(as) professores(as) garantam a construção de vínculos profundos e estáveis. Para isso, é relevante ter professores(as) responsivos, que observam e escutam atentamente suas diferentes formas de se comunicar e de se expressar, e que compreendem que o corpo do bebê é um dos principais meios pelos quais ele se expressa e significa suas vivências.',
    ],
    [
        'skills_id' => 'BR00EI01CG01',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para os bebês, é possível construir objetivos específicos relacionados ao conteúdo a ser expresso — por exemplo, expressar, por meio do corpo, de seus gestos e movimentos, desconforto quando está com a fralda suja, ansiedade, medo, afeição etc. É possível, também, considerar, além do conteúdo a ser expresso, a manifestação de suas expressões no contato com o(a) professor(a) ou outras crianças — por exemplo, perceber o desconforto do colega e oferecer acolhimento pelo toque, começar a perceber que suas emoções, necessidades e desejos têm efeito nos outros, participar de situações coletivas de danças ou outras formas da cultura corporal. O currículo local pode, ainda, destacar situações de relevância — por exemplo, expressar sua angústia frente à despedida dos pais, seu desagrado ao pegarem seu brinquedo em uma situação de exploração entre pares ou sua felicidade ao realizar uma atividade que gosta muito ou, ainda, exemplificar quais gêneros de danças ou expressões culturais corporais típicas de sua cultura as crianças apreciam nessa faixa etária — por exemplo, participar de situações coletivas de dança de frevo, brincadeira com o boi etc.',
    ],
    [
        'skills_id' => 'BR00EI01CG02',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Bebês (zero a 1 ano e 6 meses)',
    ],
    [
        'skills_id' => 'BR00EI01CG02',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'Os bebês experimentam o mundo pelos seus sentidos, usando movimentos simples em suas explorações. São muitas as conquistas dos bebês nesse momento de sua vida em relação à descoberta de novos movimentos de seu corpo e na relação dessas conquistas com a descoberta do mundo ao seu redor. Nesse contexto, é importante promover situações interessantes que mobilizem a automotivação e a curiosidade do bebê nas explorações. Nessas explorações, os bebês utilizam seu corpo para se comunicar, se expressar e descobrir a si mesmos e o mundo ao seu redor, como, por exemplo, ao imitar movimentos de outros bebês ou professores(as) nas situações de jogos e brincadeiras, segurar objetos com as mãos e os pés, passar objetos de uma mão para outra, chutar bola, andar segurando-se nos mobiliários, arrastar-se em busca de brinquedos, virar o corpo com a intenção de pegar um brinquedo, pegar, amassar, empilhar, montar, encaixar, mover, lançar longe, chutar objetos de diferentes formas, cores, pesos, texturas, tamanhos etc. Ainda, brincam com água, com terra, areia, palha e outros elementos naturais, brincam de procurar e achar objetos escondidos, de esconder-se e serem encontrados, de chutar bola e de entrar e sair de espaços pequenos – como caixas e túneis.',
    ],
    [
        'skills_id' => 'BR00EI01CG02',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para os bebês, são muitos os desafios e conquistas, principalmente em seu primeiro ano de vida. O currículo pode construir objetivos específicos relacionados às suas possibilidades corporais, como rolar, levantar o corpo ao estar deitado no chão, sentar com ou sem autonomia, engatinhar ou se arrastar pelo espaço, ou pode também construir objetivos específicos relacionados a ações mais coordenadas de seus movimentos e um maior domínio destes — por exemplo, brincar com o próprio corpo, envolver-se em brincadeiras de cobrir e descobrir o rosto ou alguma outra parte do corpo, ficar em pé com ou sem autonomia, andar com cada vez mais destreza, subir pequenos degraus e depois descer. O currículo local pode, ainda, trazer exemplos de brincadeiras que são tradicionais de sua cultura e que envolvem o corpo do adulto e o corpo da criança como brinquedos e também considerar as especificidades dos espaços externos da instituição ou comunidade para caracterizar as experiências e desafios corporais dos bebês.',
    ],
    [
        'skills_id' => 'BR00EI02CG02',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças bem pequenas (1 ano e 7 meses a 3 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI02CG02',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'Crianças bem pequenas apropriam-se com interesse do espaço à sua volta, seja em sua sala ou no espaço externo, ao ar livre. Gostam de brincar ao lado umas das outras e se interessam pelos objetos, pessoas e ações ao seu redor. Brincar ao seu lado, mostrando desafios, diferentes formas de ocupar o espaço e se deslocar nele, chamando atenção de como seus pares fazem, são ações que apoiam suas explorações e descobertas sobre o espaço. Nesse contexto, é importante que crianças bem pequenas tenham oportunidade de participar de situações de deslocamento de seu corpo no espaço de diversas formas. Por exemplo, explorando os diferentes desafios oferecidos pelo espaço com maior autonomia e presteza por meio de movimentos como andar, correr, saltar, saltitar, pular para baixo, subir, escalar, arrastar-se, pendurar-se, balançar-se, equilibrar-se etc, brincando em pares, trios ou pequenos grupos, com jogos que envolvam marcações visuais no ambiente (amarelinha, por exemplo) ou por meio de brincadeiras de encontrar “tesouros” ou outros objetos escondidos nas dependências da escola ou outros locais. Assim, as crianças bem pequenas podem participar de uma diversidade de situações de percorrer trajetos e brincadeiras no espaço, utilizando, além da posição de seu próprio corpo, referências como “em cima de...”, “embaixo de...”, “perto de...”, “atrás de...”, “mais perto de...”, “entre” para descrever suas ações ou, ainda, conhecer os diferentes espaços da instituição, explorando diferentes caminhos para chegar neles e fazendo uso de noções como perto/longe, em cima, embaixo, à frente e atrás etc.',
    ],
    [
        'skills_id' => 'BR00EI02CG02',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças bem pequenas, que começam a ampliar seu sentido de espaço e a interessar-se por explorar novas descobertas em seus deslocamentos por ele, é possível construir objetivos específicos relacionados à exploração que realizam do espaço. Por exemplo, localizar um brinquedo e buscá-lo, reconhecer onde se encontram seus pertences pessoais, explorar o espaço ao seu redor fazendo movimentos como saltar, correr, se arrastar, brincar com os colegas de esconder e achar brinquedos e objetos no espaço, bem como experimentar novas explorações a partir de diferentes perspectivas, olhando pela janela, em cima da mesa ou do escorregador do parque etc. O currículo pode considerar objetivos específicos relacionados à resolução de problemas simples na exploração do espaço, como, por exemplo, vencer desafios do espaço para alcançar suas intenções, andar pelo espaço segurando objetos na mão, usar triciclos para explorar novos caminhos e descobertas e observar e imitar seus colegas nas diferentes formas de exploração do espaço. O currículo local pode, ainda, trazer exemplos de espaços e objetos que são típicos da região, comunidade, cultura local ou mesmo da sua instituição, valorizando, por exemplo, as explorações nos ambientes internos e externos da escola ou os desafios que podem estar presentes na exploração de cada um dos espaços da instituição.',
    ],
    [
        'skills_id' => 'BR00EI03CG02',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças pequenas (4 anos a 5 anos e 11 meses)',
    ],
    [
        'skills_id' => 'BR00EI03CG02',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'As crianças pequenas aprendem a aprimorar suas habilidades corporais e a adequar seus movimentos às suas intenções na medida em que os(as) professores(as) as apoiam a pensar sobre a consequência de seus movimentos e comportamentos frente às suas experiências de explorações e descobertas. Nesse contexto, é importante proporcionar práticas às crianças pequenas, em pequenos grupos, trios, pares e individualmente, em que possam testar diferentes formas de controlar e adequar o uso do seu corpo, como, por exemplo, dançar ao som de músicas de diferentes gêneros, imitando, criando e coordenando seus movimentos com os dos companheiros, usando diferentes materiais (lenços, bola, fitas, instrumentos etc.), explorando o espaço (em cima, embaixo, para frente, para trás, à esquerda e à direita) e as qualidades do movimento (rápido ou lento, forte ou leve), a partir de estímulos diversos (proposições orais, demarcações no chão, mobiliário, divisórias no espaço etc.). É importante, também, participarem de situações em que possam regular e adaptar seu comportamento em função das necessidades do grupo e/ou de seus colegas em situações de interação e em função das normas de funcionamento do grupo, conquistando progressivamente a autorregulação de suas ações.',
    ],
    [
        'skills_id' => 'BR00EI03CG02',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para as crianças pequenas, é possível construir objetivos específicos relacionados às situações que implicam o controle e a adequação do uso do corpo. Por exemplo, adaptar seus movimentos às situações proporcionadas nas brincadeiras coletivas, de pequenos grupos ou duplas, participar de conversas em pequenos grupos escutando seus colegas e esperando a sua vez de falar ou adequar seus movimentos aos de seus colegas em situações de brincadeiras com o ritmo da música ou da dança. O currículo pode considerar objetivos específicos relacionados à complexidade das habilidades exigidas nas situações que implicam controle e uso do corpo, como, por exemplo, movimentar-se fazendo uso de diferentes movimentos corporais cada vez mais complexos; movimentar-se seguindo orientações dos(as) professores(as), de outras crianças ou criando suas próprias orientações; e movimentar-se seguindo uma sequência e adequando-se ao compasso definido pela música ou pelas coordenadas dadas por seus colegas em brincadeiras ou atividades em pequenos grupos. O currículo local pode, ainda, trazer exemplos de situações ou brincadeiras de sua cultura local em que essas habilidades se fazem necessárias, além de abordar atitudes desenvolvidas nessas situações, como valorizar o esforço em adequar seus movimentos corporais aos de seus colegas em situações de brincadeiras ou atividades coletivas.',
    ],
    [
        'skills_id' => 'BR00EI01CG03',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Bebês (zero a 1 ano e 6 meses)',
    ],
    [
        'skills_id' => 'BR00EI01CG03',
        'property_name' => 'Abordagem das experiências de aprendizagem',
        'property_value' => 'Os bebês têm um interesse natural por outras crianças, adultos e por animais. Promover situações que incentivem seu contato, suas explorações e descobertas a partir desse interesse contribui para seu desenvolvimento e para suas aprendizagens, usando o corpo como principal ferramenta de exploração e descobertas. Nesse contexto, é importante que os bebês vivenciem situações de imitar gestos e movimentos de animais, adultos e outras crianças por meio de jogos e brincadeiras, de observar os colegas e imitar alguns de seus movimentos em situações de exploração, imitar o comportamento do(a) professor(a), participar de situações de jogos simples, em situações de brincadeira, imitar professores(as) ou colegas cuidando da boneca, movimentando o caminhão, utilizar seus gestos e movimentos para chamar a atenção do professor(a) ou do colega, dançar com outras crianças ao som de músicas de diferentes gêneros., acompanhar a narrativa ou leitura de uma história fazendo expressões e gestos para acompanhar a ação dos personagens,  brincar de roda imitando os gestos e cantos do(a) professor(a) e dos colegas, imitar gestos e vocalizações de adultos, crianças ou animais e reproduzir os gestos, movimentos, entonações de voz e expressões de personagens de histórias diversas lidas ou contadas pelo(a) professor(a).',
    ],
    [
        'skills_id' => 'BR00EI01CG03',
        'property_name' => 'Sugestões para o currículo',
        'property_value' => 'Ao formular objetivos de aprendizagem e desenvolvimento específicos para o currículo, é desejável detalhar noções, habilidades, atitudes e/ou especificidades locais para cada um dos objetivos de aprendizagem e desenvolvimento da BNCC. Para os bebês, a observação e a imitação de gestos e movimentos corporais é uma forma de ampliar suas noções e habilidades. O currículo pode construir objetivos específicos relacionados às habilidades de imitação de gestos e movimentos, como observar e imitar outras crianças, copiar gestos ao cantar, imitar animais em situações de brincadeiras, ou pode também construir objetivos específicos relacionados às ações mais coordenadas e intencionais de seus movimentos — por exemplo, começar a brincar compartilhando algumas ações com outras crianças e professores(as), movimentar o corpo ao som da música ou usar o corpo para explorar o espaço, objetos e brinquedos. O currículo local pode, ainda, trazer exemplos de gestos, movimentos ou mesmo citar os animais que são típicos da região, comunidade ou cultura local.',
    ],
    [
        'skills_id' => 'BR00EI03CG04',
        'property_name' => 'Faixas Etárias',
        'property_value' => 'Crianças pequenas (4 anos a 5 anos e 11 meses)',
    ],
]);
