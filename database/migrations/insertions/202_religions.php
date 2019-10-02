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

namespace Database\Migrations\Insertions;

// Profile;

/*
 * Based on Wikipedia Religion List:
 * https://en.wikipedia.org/wiki/List_of_religions_and_spiritual_traditions
 * and this:
 * https://arte.folha.uol.com.br/poder/2016/12/25/arvore-religioes/
 */

DB::table('religions')->insert([
    [
        'id' => 0,
        'ancestry' => '/0',
        'religion_name' => 'East Asian religions*',
    ],
    [
        'id' => 1,
        'ancestry' => '/0/1',
        'religion_name' => 'Confucianism',
    ],
    [
        'id' => 2,
        'ancestry' => '/0/1/2',
        'religion_name' => 'Neo-Confucianism',
    ],
    [
        'id' => 3,
        'ancestry' => '/0/1/3',
        'religion_name' => 'New Confucianism',
    ],
    [
        'id' => 4,
        'ancestry' => '/0/4',
        'religion_name' => 'Shinto',
    ],
    [
        'id' => 5,
        'ancestry' => '/0/4/5',
        'religion_name' => 'Koshintō',
    ],
    [
        'id' => 6,
        'ancestry' => '/0/4/6',
        'religion_name' => 'Shugendō',
    ],
    [
        'id' => 7,
        'ancestry' => '/0/4/7',
        'religion_name' => 'Yoshida Shintō',
    ],
    [
        'id' => 8,
        'ancestry' => '/0/8',
        'religion_name' => 'Shinto-inspired religions*',
    ],
    [
        'id' => 9,
        'ancestry' => '/0/8/9',
        'religion_name' => 'Church of World Messianity',
    ],
    [
        'id' => 10,
        'ancestry' => '/0/8/10',
        'religion_name' => 'Happy Science',
    ],
    [
        'id' => 11,
        'ancestry' => '/0/8/11',
        'religion_name' => 'Konkokyo',
    ],
    [
        'id' => 12,
        'ancestry' => '/0/8/12',
        'religion_name' => 'Oomoto',
    ],
    [
        'id' => 13,
        'ancestry' => '/0/8/13',
        'religion_name' => 'PL Kyodan',
    ],
    [
        'id' => 14,
        'ancestry' => '/0/8/14',
        'religion_name' => 'Seicho-no-Ie',
    ],
    [
        'id' => 15,
        'ancestry' => '/0/8/15',
        'religion_name' => 'Shinmeiaishinkai',
    ],
    [
        'id' => 16,
        'ancestry' => '/0/8/16',
        'religion_name' => 'Tenrikyo',
    ],
    [
        'id' => 17,
        'ancestry' => '/0/8/17',
        'religion_name' => 'Zenrinkyo',
    ],
    [
        'id' => 18,
        'ancestry' => '/0/18',
        'religion_name' => 'Taoism',
    ],
    [
        'id' => 19,
        'ancestry' => '/0/18/19',
        'religion_name' => 'Way of the Five Pecks of Rice',
    ],
    [
        'id' => 20,
        'ancestry' => '/0/18/19/20',
        'religion_name' => 'Way of the Celestial Masters',
    ],
    [
        'id' => 21,
        'ancestry' => '/0/18/19/20/21',
        'religion_name' => 'Zhengyi Dao ("Way of the Right Oneness")',
    ],
    [
        'id' => 22,
        'ancestry' => '/0/18/22',
        'religion_name' => 'Shangqing School ("School of the Highest Clarity")',
    ],
    [
        'id' => 23,
        'ancestry' => '/0/18/23',
        'religion_name' => 'Lingbao School ("School of the Numinous Treasure")',
    ],
    [
        'id' => 24,
        'ancestry' => '/0/18/24',
        'religion_name' => 'Quanzhen School ("School of the Fulfilled Virtue")',
    ],
    [
        'id' => 25,
        'ancestry' => '/0/18/24/25',
        'religion_name' => 'Dragon Gate Taoism',
    ],
    [
        'id' => 26,
        'ancestry' => '/0/18/26',
        'religion_name' => 'Wuliupai ("School of Wu-Liu")',
    ],
    [
        'id' => 27,
        'ancestry' => '/0/18/27',
        'religion_name' => 'Yao Taoism (a.k.a. "Meishanism")',
    ],
    [
        'id' => 28,
        'ancestry' => '/0/18/28',
        'religion_name' => 'Faism (a.k.a. "Redhead Taoism")',
    ],
    [
        'id' => 29,
        'ancestry' => '/0/18/29',
        'religion_name' => 'Xuanxue (a.k.a. "Neo-Taoism")',
    ],
    [
        'id' => 30,
        'ancestry' => '/0/30',
        'religion_name' => 'Other*',
    ],
    [
        'id' => 31,
        'ancestry' => '/0/30/31',
        'religion_name' => 'Pagan',
    ],
    [
        'id' => 32,
        'ancestry' => '/0/30/32',
        'religion_name' => 'Chinese*',
    ],
    [
        'id' => 33,
        'ancestry' => '/0/30/32/33',
        'religion_name' => 'Benzhuism',
    ],
    [
        'id' => 34,
        'ancestry' => '/0/30/32/34',
        'religion_name' => 'Chan Buddhism',
    ],
    [
        'id' => 35,
        'ancestry' => '/0/30/32/35',
        'religion_name' => 'Chinese folk religion',
    ],
    [
        'id' => 36,
        'ancestry' => '/0/30/32/36',
        'religion_name' => 'Chinese salvationist religions',
    ],
    [
        'id' => 37,
        'ancestry' => '/0/30/32/37',
        'religion_name' => 'Falun Gong',
    ],
    [
        'id' => 38,
        'ancestry' => '/0/30/32/38',
        'religion_name' => 'Miao folk religion',
    ],
    [
        'id' => 39,
        'ancestry' => '/0/30/32/39',
        'religion_name' => 'Mohism',
    ],
    [
        'id' => 40,
        'ancestry' => '/0/30/32/40',
        'religion_name' => 'Yiguandao',
    ],
    [
        'id' => 41,
        'ancestry' => '/0/30/32/41',
        'religion_name' => 'Wang Hao-te',
    ],
    [
        'id' => 42,
        'ancestry' => '/0/30/32/42',
        'religion_name' => 'Xiantiandao',
    ],
    [
        'id' => 43,
        'ancestry' => '/0/30/32/43',
        'religion_name' => 'Yao folk religion',
    ],
    [
        'id' => 44,
        'ancestry' => '/0/30/32/44',
        'religion_name' => 'Zhuang Shigongism',
    ],
    [
        'id' => 45,
        'ancestry' => '/0/30/45',
        'religion_name' => 'Japanese*',
    ],
    [
        'id' => 46,
        'ancestry' => '/0/30/45/46',
        'religion_name' => 'Aum Shinrikyo',
    ],
    [
        'id' => 47,
        'ancestry' => '/0/30/47',
        'religion_name' => 'Korean*',
    ],
    [
        'id' => 48,
        'ancestry' => '/0/30/47/48',
        'religion_name' => 'Cheondoism',
    ],
    [
        'id' => 49,
        'ancestry' => '/0/30/47/49',
        'religion_name' => 'Daejongism',
    ],
    [
        'id' => 50,
        'ancestry' => '/0/30/47/50',
        'religion_name' => 'Daesun Jinrihoe',
    ],
    [
        'id' => 51,
        'ancestry' => '/0/30/47/51',
        'religion_name' => 'Gasin faith',
    ],
    [
        'id' => 52,
        'ancestry' => '/0/30/47/52',
        'religion_name' => 'Jeung San Do',
    ],
    [
        'id' => 53,
        'ancestry' => '/0/30/47/53',
        'religion_name' => 'Korean shamanism',
    ],
    [
        'id' => 54,
        'ancestry' => '/0/30/47/54',
        'religion_name' => 'Suwunism',
    ],
    [
        'id' => 55,
        'ancestry' => '/0/30/47/55',
        'religion_name' => 'Won Buddhism',
    ],
    [
        'id' => 56,
        'ancestry' => '/0/30/56',
        'religion_name' => 'Manchu*',
    ],
    [
        'id' => 57,
        'ancestry' => '/0/30/56/57',
        'religion_name' => 'Manchu shamanism',
    ],
    [
        'id' => 58,
        'ancestry' => '/0/30/58',
        'religion_name' => 'Vietnamese*',
    ],
    [
        'id' => 59,
        'ancestry' => '/0/30/58/59',
        'religion_name' => 'Đạo Mẫu',
    ],
    [
        'id' => 60,
        'ancestry' => '/0/30/58/60',
        'religion_name' => 'Caodaism',
    ],
    [
        'id' => 61,
        'ancestry' => '/0/30/58/61',
        'religion_name' => 'Đạo Bửu Sơn Kỳ Hương',
    ],
    [
        'id' => 62,
        'ancestry' => '/0/30/58/62',
        'religion_name' => 'Đạo Dừa',
    ],
    [
        'id' => 63,
        'ancestry' => '/0/30/58/63',
        'religion_name' => 'Hòa Hảo',
    ],
    [
        'id' => 64,
        'ancestry' => '/64',
        'religion_name' => 'Indic religions*',
    ],
    [
        'id' => 65,
        'ancestry' => '/64/65',
        'religion_name' => 'Nāstik (Heterodox Indian)',
    ],
    [
        'id' => 66,
        'ancestry' => '/64/65/66',
        'religion_name' => 'Ajivika',
    ],
    [
        'id' => 67,
        'ancestry' => '/64/65/67',
        'religion_name' => 'Ajñana',
    ],
    [
        'id' => 68,
        'ancestry' => '/64/65/68',
        'religion_name' => 'Buddhism',
    ],
    [
        'id' => 69,
        'ancestry' => '/64/65/68/69',
        'religion_name' => 'Mahayana',
    ],
    [
        'id' => 70,
        'ancestry' => '/64/65/68/69/70',
        'religion_name' => 'Tiantai',
    ],
    [
        'id' => 71,
        'ancestry' => '/64/65/68/69/70/71',
        'religion_name' => 'Tendai',
    ],
    [
        'id' => 72,
        'ancestry' => '/64/65/68/69/70/72',
        'religion_name' => 'Cheontae',
    ],
    [
        'id' => 73,
        'ancestry' => '/64/65/68/69/73',
        'religion_name' => 'Buddha-nature',
    ],
    [
        'id' => 74,
        'ancestry' => '/64/65/68/69/73/74',
        'religion_name' => 'Daśabhūmikā',
    ],
    [
        'id' => 75,
        'ancestry' => '/64/65/68/69/73/75',
        'religion_name' => 'Huayan school',
    ],
    [
        'id' => 76,
        'ancestry' => '/64/65/68/69/73/75/76',
        'religion_name' => 'Hwaeom',
    ],
    [
        'id' => 77,
        'ancestry' => '/64/65/68/69/73/75/77',
        'religion_name' => 'Kegon',
    ],
    [
        'id' => 78,
        'ancestry' => '/64/65/68/69/78',
        'religion_name' => 'Chan Buddhism',
    ],
    [
        'id' => 79,
        'ancestry' => '/64/65/68/69/78/79',
        'religion_name' => 'Caodong school',
    ],
    [
        'id' => 80,
        'ancestry' => '/64/65/68/69/78/80',
        'religion_name' => 'Zen',
    ],
    [
        'id' => 81,
        'ancestry' => '/64/65/68/69/78/80/81',
        'religion_name' => 'Sōtō',
    ],
    [
        'id' => 82,
        'ancestry' => '/64/65/68/69/78/80/81/82',
        'religion_name' => 'Keizan line',
    ],
    [
        'id' => 83,
        'ancestry' => '/64/65/68/69/78/80/81/83',
        'religion_name' => 'Jakuen line',
    ],
    [
        'id' => 84,
        'ancestry' => '/64/65/68/69/78/80/81/84',
        'religion_name' => 'Giin line',
    ],
    [
        'id' => 85,
        'ancestry' => '/64/65/68/69/78/85',
        'religion_name' => 'Linji school',
    ],
    [
        'id' => 86,
        'ancestry' => '/64/65/68/69/78/85/86',
        'religion_name' => 'Rinzai school',
    ],
    [
        'id' => 87,
        'ancestry' => '/64/65/68/69/78/85/87',
        'religion_name' => 'Ōbaku',
    ],
    [
        'id' => 88,
        'ancestry' => '/64/65/68/69/78/85/88',
        'religion_name' => 'Fuke-shū',
    ],
    [
        'id' => 89,
        'ancestry' => '/64/65/68/69/78/85/89',
        'religion_name' => 'Won Buddhism',
    ],
    [
        'id' => 90,
        'ancestry' => '/64/65/68/69/78/90',
        'religion_name' => 'Kwan Um School of Zen',
    ],
    [
        'id' => 91,
        'ancestry' => '/64/65/68/69/78/91',
        'religion_name' => 'Sanbo Kyodan',
    ],
    [
        'id' => 92,
        'ancestry' => '/64/65/68/69/92',
        'religion_name' => 'Madhyamaka',
    ],
    [
        'id' => 93,
        'ancestry' => '/64/65/68/69/92/93',
        'religion_name' => 'East Asian Mādhyamaka (a.k.a. the "Three Treatise school")',
    ],
    [
        'id' => 94,
        'ancestry' => '/64/65/68/69/92/94',
        'religion_name' => 'Jonang',
    ],
    [
        'id' => 95,
        'ancestry' => '/64/65/68/69/92/95',
        'religion_name' => 'Prasaṅgika',
    ],
    [
        'id' => 96,
        'ancestry' => '/64/65/68/69/92/96',
        'religion_name' => 'Svatantrika',
    ],
    [
        'id' => 97,
        'ancestry' => '/64/65/68/69/97',
        'religion_name' => 'Nichiren Buddhism',
    ],
    [
        'id' => 98,
        'ancestry' => '/64/65/68/69/97/98',
        'religion_name' => 'Nichiren Shōshū',
    ],
    [
        'id' => 99,
        'ancestry' => '/64/65/68/69/97/99',
        'religion_name' => 'Nichiren Shū',
    ],
    [
        'id' => 100,
        'ancestry' => '/64/65/68/69/97/100',
        'religion_name' => 'Soka Gakkai',
    ],
    [
        'id' => 101,
        'ancestry' => '/64/65/68/69/101',
        'religion_name' => 'Pure Land Buddhism',
    ],
    [
        'id' => 102,
        'ancestry' => '/64/65/68/69/101/102',
        'religion_name' => 'Jōdo Shinshū',
    ],
    [
        'id' => 103,
        'ancestry' => '/64/65/68/69/101/103',
        'religion_name' => 'Jōdo-shū',
    ],
    [
        'id' => 104,
        'ancestry' => '/64/65/68/69/104',
        'religion_name' => 'Yogācāra',
    ],
    [
        'id' => 105,
        'ancestry' => '/64/65/68/69/104/105',
        'religion_name' => 'East Asian Yogācāra',
    ],
    [
        'id' => 106,
        'ancestry' => '/64/65/68/106',
        'religion_name' => 'Nikaya Buddhism (incorrectly called "Hinayana" in the West)',
    ],
    [
        'id' => 107,
        'ancestry' => '/64/65/68/106/107',
        'religion_name' => 'Humanistic Buddhism',
    ],
    [
        'id' => 108,
        'ancestry' => '/64/65/68/106/108',
        'religion_name' => 'Theravada',
    ],
    [
        'id' => 109,
        'ancestry' => '/64/65/68/106/108/109',
        'religion_name' => 'Sangharaj Nikaya (Bangladesh)',
    ],
    [
        'id' => 110,
        'ancestry' => '/64/65/68/106/108/110',
        'religion_name' => 'Mahasthabir Nikaya (Bangladesh)',
    ],
    [
        'id' => 111,
        'ancestry' => '/64/65/68/106/108/111',
        'religion_name' => 'Dwara Nikaya (Burma)',
    ],
    [
        'id' => 112,
        'ancestry' => '/64/65/68/106/108/112',
        'religion_name' => 'Shwegyin Nikaya (Burma)',
    ],
    [
        'id' => 113,
        'ancestry' => '/64/65/68/106/108/113',
        'religion_name' => 'Thudhamma Nikaya (Burma)',
    ],
    [
        'id' => 114,
        'ancestry' => '/64/65/68/106/108/113/114',
        'religion_name' => 'Vipassana tradition of Mahasi Sayadaw and disciples',
    ],
    [
        'id' => 115,
        'ancestry' => '/64/65/68/106/108/115',
        'religion_name' => 'Amarapura Nikaya (Sri Lanka)',
    ],
    [
        'id' => 116,
        'ancestry' => '/64/65/68/106/108/116',
        'religion_name' => 'Ramañña Nikaya (Sri Lanka)',
    ],
    [
        'id' => 117,
        'ancestry' => '/64/65/68/106/108/117',
        'religion_name' => 'Siam Nikaya (Sri Lanka)',
    ],
    [
        'id' => 118,
        'ancestry' => '/64/65/68/106/108/118',
        'religion_name' => 'Dhammayuttika Nikaya (Thailand)',
    ],
    [
        'id' => 119,
        'ancestry' => '/64/65/68/106/108/118/119',
        'religion_name' => 'Thai Forest Tradition',
    ],
    [
        'id' => 120,
        'ancestry' => '/64/65/68/106/108/118/119/120',
        'religion_name' => 'Tradition of Ajahn Chah',
    ],
    [
        'id' => 121,
        'ancestry' => '/64/65/68/106/108/121',
        'religion_name' => 'Maha Nikaya (Thailand)',
    ],
    [
        'id' => 122,
        'ancestry' => '/64/65/68/106/108/121/122',
        'religion_name' => 'Dhammakaya Movement',
    ],
    [
        'id' => 123,
        'ancestry' => '/64/65/68/106/123',
        'religion_name' => 'Vipassana movement',
    ],
    [
        'id' => 124,
        'ancestry' => '/64/65/68/124',
        'religion_name' => 'Vajrayana',
    ],
    [
        'id' => 125,
        'ancestry' => '/64/65/68/124/125',
        'religion_name' => 'Chinese Esoteric Buddhism',
    ],
    [
        'id' => 126,
        'ancestry' => '/64/65/68/124/126',
        'religion_name' => 'Newar Buddhism (Nepal)',
    ],
    [
        'id' => 127,
        'ancestry' => '/64/65/68/124/127',
        'religion_name' => 'Indonesian Esoteric Buddhism',
    ],
    [
        'id' => 128,
        'ancestry' => '/64/65/68/124/128',
        'religion_name' => 'Shingon Buddhism',
    ],
    [
        'id' => 129,
        'ancestry' => '/64/65/68/124/129',
        'religion_name' => 'Tantric Theravada',
    ],
    [
        'id' => 130,
        'ancestry' => '/64/65/68/124/130',
        'religion_name' => 'Tendai Buddhism',
    ],
    [
        'id' => 131,
        'ancestry' => '/64/65/68/124/131',
        'religion_name' => 'Tibetan Buddhism',
    ],
    [
        'id' => 132,
        'ancestry' => '/64/65/68/124/131/132',
        'religion_name' => 'Bon (Tibet, Bhutan, Nepal)',
    ],
    [
        'id' => 133,
        'ancestry' => '/64/65/68/124/131/133',
        'religion_name' => 'Gelug',
    ],
    [
        'id' => 134,
        'ancestry' => '/64/65/68/124/131/134',
        'religion_name' => 'Kagyu',
    ],
    [
        'id' => 135,
        'ancestry' => '/64/65/68/124/131/134/135',
        'religion_name' => 'Dagpo Kagyu',
    ],
    [
        'id' => 136,
        'ancestry' => '/64/65/68/124/131/134/135/136',
        'religion_name' => 'Karma Kagyu',
    ],
    [
        'id' => 137,
        'ancestry' => '/64/65/68/124/131/134/135/137',
        'religion_name' => 'Barom Kagyu',
    ],
    [
        'id' => 138,
        'ancestry' => '/64/65/68/124/131/134/135/138',
        'religion_name' => 'Drukpa Lineage',
    ],
    [
        'id' => 139,
        'ancestry' => '/64/65/68/124/131/134/139',
        'religion_name' => 'Shangpa Kagyu',
    ],
    [
        'id' => 140,
        'ancestry' => '/64/65/68/124/131/140',
        'religion_name' => 'Nyingma',
    ],
    [
        'id' => 141,
        'ancestry' => '/64/65/68/124/131/141',
        'religion_name' => 'Sakya',
    ],
    [
        'id' => 142,
        'ancestry' => '/64/65/68/124/131/142',
        'religion_name' => 'Jonang',
    ],
    [
        'id' => 143,
        'ancestry' => '/64/65/68/124/131/143',
        'religion_name' => 'Bodongpa',
    ],
    [
        'id' => 144,
        'ancestry' => '/64/65/68/144',
        'religion_name' => 'Navayana',
    ],
    [
        'id' => 145,
        'ancestry' => '/64/65/68/144/145',
        'religion_name' => 'Dalit Buddhist movement',
    ],
    [
        'id' => 146,
        'ancestry' => '/64/65/68/146',
        'religion_name' => 'Kirat Mundhum (Nepal)',
    ],
    [
        'id' => 147,
        'ancestry' => '/64/65/147',
        'religion_name' => 'New Buddhist movements',
    ],
    [
        'id' => 148,
        'ancestry' => '/64/65/147/148',
        'religion_name' => 'Neo-Buddhist movement',
    ],
    [
        'id' => 149,
        'ancestry' => '/64/65/147/149',
        'religion_name' => 'Shambhala Buddhism',
    ],
    [
        'id' => 150,
        'ancestry' => '/64/65/147/150',
        'religion_name' => 'Diamond Way Buddhism',
    ],
    [
        'id' => 151,
        'ancestry' => '/64/65/147/151',
        'religion_name' => 'Triratna Buddhist Community',
    ],
    [
        'id' => 152,
        'ancestry' => '/64/65/147/152',
        'religion_name' => 'New Kadampa Tradition',
    ],
    [
        'id' => 153,
        'ancestry' => '/64/65/147/153',
        'religion_name' => 'Share International',
    ],
    [
        'id' => 154,
        'ancestry' => '/64/65/147/154',
        'religion_name' => 'True Buddha School',
    ],
    [
        'id' => 155,
        'ancestry' => '/64/65/147/154/155',
        'religion_name' => 'Nipponzan-Myōhōji-Daisanga',
    ],
    [
        'id' => 156,
        'ancestry' => '/64/65/147/156',
        'religion_name' => 'Hòa Hảo',
    ],
    [
        'id' => 157,
        'ancestry' => '/64/65/157',
        'religion_name' => 'Global variants of Buddhism',
    ],
    [
        'id' => 158,
        'ancestry' => '/64/65/157/158',
        'religion_name' => 'Buddhism in the United States',
    ],
    [
        'id' => 159,
        'ancestry' => '/64/159',
        'religion_name' => 'Charvaka (Historical)',
    ],
    [
        'id' => 160,
        'ancestry' => '/64/160',
        'religion_name' => 'Din-I Ilahi (Historical)',
    ],
    [
        'id' => 161,
        'ancestry' => '/64/161',
        'religion_name' => 'Hinduism',
    ],
    [
        'id' => 162,
        'ancestry' => '/64/161/162',
        'religion_name' => 'Ayyavazhi',
    ],
    [
        'id' => 163,
        'ancestry' => '/64/161/163',
        'religion_name' => 'Shaivism',
    ],
    [
        'id' => 164,
        'ancestry' => '/64/161/163/164',
        'religion_name' => 'Aghori',
    ],
    [
        'id' => 165,
        'ancestry' => '/64/161/163/165',
        'religion_name' => 'Indonesian Shaivism',
    ],
    [
        'id' => 166,
        'ancestry' => '/64/161/163/166',
        'religion_name' => 'Kapalika',
    ],
    [
        'id' => 167,
        'ancestry' => '/64/161/163/167',
        'religion_name' => 'Kashmir Shaivism',
    ],
    [
        'id' => 168,
        'ancestry' => '/64/161/163/168',
        'religion_name' => 'Kaumaram',
    ],
    [
        'id' => 169,
        'ancestry' => '/64/161/163/169',
        'religion_name' => 'Nath',
    ],
    [
        'id' => 170,
        'ancestry' => '/64/161/163/170',
        'religion_name' => 'Pashupata Shaivism',
    ],
    [
        'id' => 171,
        'ancestry' => '/64/161/163/171',
        'religion_name' => 'Shaiva Siddhanta',
    ],
    [
        'id' => 172,
        'ancestry' => '/64/161/163/172',
        'religion_name' => 'Veerashaivism (Lingayatism)',
    ],
    [
        'id' => 173,
        'ancestry' => '/64/161/173',
        'religion_name' => 'Shaktism',
    ],
    [
        'id' => 174,
        'ancestry' => '/64/161/173/174',
        'religion_name' => 'Kalikula',
    ],
    [
        'id' => 175,
        'ancestry' => '/64/161/173/175',
        'religion_name' => 'Srikula',
    ],
    [
        'id' => 176,
        'ancestry' => '/64/161/176',
        'religion_name' => 'Smartism',
    ],
    [
        'id' => 177,
        'ancestry' => '/64/161/177',
        'religion_name' => 'Śrauta',
    ],
    [
        'id' => 178,
        'ancestry' => '/64/161/178',
        'religion_name' => 'Tantrism',
    ],
    [
        'id' => 179,
        'ancestry' => '/64/161/178/179',
        'religion_name' => 'Baul',
    ],
    [
        'id' => 180,
        'ancestry' => '/64/161/178/180',
        'religion_name' => 'Kaula',
    ],
    [
        'id' => 181,
        'ancestry' => '/64/161/181',
        'religion_name' => 'Vaishnavism',
    ],
    [
        'id' => 182,
        'ancestry' => '/64/161/181/182',
        'religion_name' => 'Brahma Sampradaya',
    ],
    [
        'id' => 183,
        'ancestry' => '/64/161/181/182/183',
        'religion_name' => 'Gaudiya Vaishnavism',
    ],
    [
        'id' => 184,
        'ancestry' => '/64/161/181/182/183/184',
        'religion_name' => 'Gaudiya Saraswata Sampradaya',
    ],
    [
        'id' => 185,
        'ancestry' => '/64/161/181/182/183/184/185',
        'religion_name' => 'Gaudiya Mission',
    ],
    [
        'id' => 186,
        'ancestry' => '/64/161/181/182/183/184/186',
        'religion_name' => 'International Society for Krishna Consciousness',
    ],
    [
        'id' => 187,
        'ancestry' => '/64/161/181/182/187',
        'religion_name' => 'Haridasa',
    ],
    [
        'id' => 188,
        'ancestry' => '/64/161/181/182/188',
        'religion_name' => 'Radha-vallabha',
    ],
    [
        'id' => 189,
        'ancestry' => '/64/161/181/182/189',
        'religion_name' => 'Vaishnava-Sahajiya',
    ],
    [
        'id' => 190,
        'ancestry' => '/64/161/181/190',
        'religion_name' => 'Ekasarana Dharma',
    ],
    [
        'id' => 191,
        'ancestry' => '/64/161/181/191',
        'religion_name' => 'Kapadi Sampradaya',
    ],
    [
        'id' => 192,
        'ancestry' => '/64/161/181/192',
        'religion_name' => 'Mahanubhava',
    ],
    [
        'id' => 193,
        'ancestry' => '/64/161/181/193',
        'religion_name' => 'Nimbarka Sampradaya',
    ],
    [
        'id' => 194,
        'ancestry' => '/64/161/181/194',
        'religion_name' => 'Pranami Sampraday',
    ],
    [
        'id' => 195,
        'ancestry' => '/64/161/181/195',
        'religion_name' => 'Rudra Sampradaya',
    ],
    [
        'id' => 196,
        'ancestry' => '/64/161/181/195/196',
        'religion_name' => 'Pushtimarg',
    ],
    [
        'id' => 197,
        'ancestry' => '/64/161/181/195/197',
        'religion_name' => 'Charan Dasi',
    ],
    [
        'id' => 198,
        'ancestry' => '/64/161/181/198',
        'religion_name' => 'Sri Vaishnavism',
    ],
    [
        'id' => 199,
        'ancestry' => '/64/161/181/198/199',
        'religion_name' => 'Ramanandi Sampradaya',
    ],
    [
        'id' => 200,
        'ancestry' => '/64/161/181/198/200',
        'religion_name' => 'Swaminarayan Sampraday',
    ],
    [
        'id' => 201,
        'ancestry' => '/64/161/181/198/200/201',
        'religion_name' => 'Bochasanwasi Shri Akshar Purushottam Swaminarayan Sanstha (BAPS)',
    ],
    [
        'id' => 202,
        'ancestry' => '/64/161/181/198/200/202',
        'religion_name' => 'International Swaminarayan Satsang Mandal (ISSM)',
    ],
    [
        'id' => 203,
        'ancestry' => '/64/161/181/198/200/203',
        'religion_name' => 'International Swaminarayan Satsang Organisation (ISSO)',
    ],
    [
        'id' => 204,
        'ancestry' => '/64/161/181/198/200/204',
        'religion_name' => 'Narnarayan Dev Yuvak Mandal (NNDYM)',
    ],
    [
        'id' => 205,
        'ancestry' => '/64/161/181/198/205',
        'religion_name' => 'Thenkalais',
    ],
    [
        'id' => 206,
        'ancestry' => '/64/161/181/198/205/206',
        'religion_name' => 'Manavala Mamunigal Sabha',
    ],
    [
        'id' => 207,
        'ancestry' => '/64/161/181/198/207',
        'religion_name' => 'Vadakalais',
    ],
    [
        'id' => 208,
        'ancestry' => '/64/161/181/198/207/208',
        'religion_name' => 'Munitraya Sampradayam',
    ],
    [
        'id' => 209,
        'ancestry' => '/64/161/181/209',
        'religion_name' => 'Varkari',
    ],
    [
        'id' => 210,
        'ancestry' => '/64/161/210',
        'religion_name' => 'Bhakti movements',
    ],
    [
        'id' => 211,
        'ancestry' => '/64/161/210/211',
        'religion_name' => 'Sant Mat',
    ],
    [
        'id' => 212,
        'ancestry' => '/64/161/210/211/212',
        'religion_name' => 'Advait Mat',
    ],
    [
        'id' => 213,
        'ancestry' => '/64/161/210/211/213',
        'religion_name' => 'Dadupanth',
    ],
    [
        'id' => 214,
        'ancestry' => '/64/161/210/211/214',
        'religion_name' => 'Kabir Panth',
    ],
    [
        'id' => 215,
        'ancestry' => '/64/161/210/211/215',
        'religion_name' => 'Nanak Panth',
    ],
    [
        'id' => 216,
        'ancestry' => '/64/161/210/211/216',
        'religion_name' => 'Radha Soami',
    ],
    [
        'id' => 217,
        'ancestry' => '/64/161/210/211/216/217',
        'religion_name' => 'Radha Soami Satsang Beas',
    ],
    [
        'id' => 218,
        'ancestry' => '/64/161/210/211/216/218',
        'religion_name' => 'Radha Swami Satsang, Dinod',
    ],
    [
        'id' => 219,
        'ancestry' => '/64/161/210/211/219',
        'religion_name' => 'Ravidassia',
    ],
    [
        'id' => 220,
        'ancestry' => '/64/161/210/211/220',
        'religion_name' => 'Sadh',
    ],
    [
        'id' => 221,
        'ancestry' => '/64/161/210/211/220/221',
        'religion_name' => 'Divine Light Mission',
    ],
    [
        'id' => 222,
        'ancestry' => '/64/161/222',
        'religion_name' => 'Neo-Hinduism',
    ],
    [
        'id' => 223,
        'ancestry' => '/64/161/222/223',
        'religion_name' => 'Adi Dharm/Brahmoism',
    ],
    [
        'id' => 224,
        'ancestry' => '/64/161/222/223/224',
        'religion_name' => 'Brahmo Samaj',
    ],
    [
        'id' => 225,
        'ancestry' => '/64/161/222/225',
        'religion_name' => 'Ananda Marga',
    ],
    [
        'id' => 226,
        'ancestry' => '/64/161/222/226',
        'religion_name' => 'Arya Samaj',
    ],
    [
        'id' => 227,
        'ancestry' => '/64/161/222/227',
        'religion_name' => 'Chinmaya Mission',
    ],
    [
        'id' => 228,
        'ancestry' => '/64/161/222/228',
        'religion_name' => 'Hindutva',
    ],
    [
        'id' => 229,
        'ancestry' => '/64/161/222/229',
        'religion_name' => 'Matua Mahasangha',
    ],
    [
        'id' => 230,
        'ancestry' => '/64/161/222/230',
        'religion_name' => 'Ramakrishna Mission',
    ],
    [
        'id' => 231,
        'ancestry' => '/64/161/222/231',
        'religion_name' => 'Satsang',
    ],
    [
        'id' => 232,
        'ancestry' => '/64/161/222/232',
        'religion_name' => 'Satya Dharma',
    ],
    [
        'id' => 233,
        'ancestry' => '/64/161/222/233',
        'religion_name' => 'Sri Aurobindo Ashram',
    ],
    [
        'id' => 234,
        'ancestry' => '/64/161/234',
        'religion_name' => 'Hindu philosophy major schools and movements',
    ],
    [
        'id' => 235,
        'ancestry' => '/64/161/234/235',
        'religion_name' => 'Nyaya',
    ],
    [
        'id' => 236,
        'ancestry' => '/64/161/234/236',
        'religion_name' => 'Purva mimamsa',
    ],
    [
        'id' => 237,
        'ancestry' => '/64/161/234/237',
        'religion_name' => 'Samkhya',
    ],
    [
        'id' => 238,
        'ancestry' => '/64/161/234/238',
        'religion_name' => 'Vaisheshika',
    ],
    [
        'id' => 239,
        'ancestry' => '/64/161/234/239',
        'religion_name' => 'Vedanta',
    ],
    [
        'id' => 240,
        'ancestry' => '/64/161/234/239/240',
        'religion_name' => 'Advaita Vedanta',
    ],
    [
        'id' => 241,
        'ancestry' => '/64/161/234/239/241',
        'religion_name' => 'Integral Yoga',
    ],
    [
        'id' => 242,
        'ancestry' => '/64/161/234/239/242',
        'religion_name' => 'Dvaita Vedanta',
    ],
    [
        'id' => 243,
        'ancestry' => '/64/161/234/239/243',
        'religion_name' => 'Vishishtadvaita',
    ],
    [
        'id' => 244,
        'ancestry' => '/64/161/234/244',
        'religion_name' => 'Yoga',
    ],
    [
        'id' => 245,
        'ancestry' => '/64/161/234/244/245',
        'religion_name' => 'Ashtanga Yoga',
    ],
    [
        'id' => 246,
        'ancestry' => '/64/161/234/244/246',
        'religion_name' => 'Bhakti yoga',
    ],
    [
        'id' => 247,
        'ancestry' => '/64/161/234/244/247',
        'religion_name' => 'Jnana yoga',
    ],
    [
        'id' => 248,
        'ancestry' => '/64/161/234/244/248',
        'religion_name' => 'Karma yoga',
    ],
    [
        'id' => 249,
        'ancestry' => '/64/161/234/244/249',
        'religion_name' => 'Kundalini yoga',
    ],
    [
        'id' => 250,
        'ancestry' => '/64/161/234/244/250',
        'religion_name' => 'Hatha yoga',
    ],
    [
        'id' => 251,
        'ancestry' => '/64/161/234/244/251',
        'religion_name' => 'Raja yoga',
    ],
    [
        'id' => 252,
        'ancestry' => '/64/161/234/244/252',
        'religion_name' => 'Sahaja Yoga',
    ],
    [
        'id' => 253,
        'ancestry' => '/64/161/234/244/253',
        'religion_name' => 'Siddha Yoga',
    ],
    [
        'id' => 254,
        'ancestry' => '/64/161/234/244/254',
        'religion_name' => 'Surat Shabd Yoga',
    ],
    [
        'id' => 255,
        'ancestry' => '/64/161/234/244/255',
        'religion_name' => 'Tantric Yoga',
    ],
    [
        'id' => 256,
        'ancestry' => '/64/256',
        'religion_name' => 'Jainism',
    ],
    [
        'id' => 257,
        'ancestry' => '/64/256/257',
        'religion_name' => 'Digambara',
    ],
    [
        'id' => 258,
        'ancestry' => '/64/256/257/258',
        'religion_name' => 'Bispanthi',
    ],
    [
        'id' => 259,
        'ancestry' => '/64/256/257/259',
        'religion_name' => 'Digambar Terapanth',
    ],
    [
        'id' => 260,
        'ancestry' => '/64/256/257/260',
        'religion_name' => 'Kanji Panth',
    ],
    [
        'id' => 261,
        'ancestry' => '/64/256/257/261',
        'religion_name' => 'Taran Panth',
    ],
    [
        'id' => 262,
        'ancestry' => '/64/256/262',
        'religion_name' => 'Śvētāmbara',
    ],
    [
        'id' => 263,
        'ancestry' => '/64/256/262/263',
        'religion_name' => 'Murtipujaka',
    ],
    [
        'id' => 264,
        'ancestry' => '/64/256/262/264',
        'religion_name' => 'Sthānakavāsī',
    ],
    [
        'id' => 265,
        'ancestry' => '/64/256/262/265',
        'religion_name' => 'Svetambar Terapanth',
    ],
    [
        'id' => 266,
        'ancestry' => '/64/266',
        'religion_name' => 'Meivazhi',
    ],
    [
        'id' => 267,
        'ancestry' => '/64/267',
        'religion_name' => 'Sarnaism',
    ],
    [
        'id' => 268,
        'ancestry' => '/64/268',
        'religion_name' => 'Sikhism',
    ],
    [
        'id' => 269,
        'ancestry' => '/64/268/269',
        'religion_name' => 'Akhand Kirtani Jatha (AKJ)',
    ],
    [
        'id' => 270,
        'ancestry' => '/64/268/270',
        'religion_name' => 'Amritdhari Sikh',
    ],
    [
        'id' => 271,
        'ancestry' => '/64/268/271',
        'religion_name' => 'Brahm Bunga Trust (Dodra)',
    ],
    [
        'id' => 272,
        'ancestry' => '/64/268/272',
        'religion_name' => 'Bhaniara Bhavsagar',
    ],
    [
        'id' => 273,
        'ancestry' => '/64/268/273',
        'religion_name' => 'Bhindrawale Jatha',
    ],
    [
        'id' => 274,
        'ancestry' => '/64/268/274',
        'religion_name' => 'Damdami Taksal (DDT)',
    ],
    [
        'id' => 275,
        'ancestry' => '/64/268/275',
        'religion_name' => 'Dera Sacha Sauda',
    ],
    [
        'id' => 276,
        'ancestry' => '/64/268/276',
        'religion_name' => 'Haripagni',
    ],
    [
        'id' => 277,
        'ancestry' => '/64/268/277',
        'religion_name' => 'Kahna Dhesian',
    ],
    [
        'id' => 278,
        'ancestry' => '/64/268/278',
        'religion_name' => 'Mahant Sikh',
    ],
    [
        'id' => 279,
        'ancestry' => '/64/268/279',
        'religion_name' => 'Minas (Mirharvan)',
    ],
    [
        'id' => 280,
        'ancestry' => '/64/268/280',
        'religion_name' => 'Namdhari Sikh (Kuka)',
    ],
    [
        'id' => 281,
        'ancestry' => '/64/268/281',
        'religion_name' => 'Nanakpanthi',
    ],
    [
        'id' => 282,
        'ancestry' => '/64/268/282',
        'religion_name' => 'Neeldhari Panth',
    ],
    [
        'id' => 283,
        'ancestry' => '/64/268/283',
        'religion_name' => 'Nihang (Akali)',
    ],
    [
        'id' => 284,
        'ancestry' => '/64/268/284',
        'religion_name' => 'Nirankari',
    ],
    [
        'id' => 285,
        'ancestry' => '/64/268/285',
        'religion_name' => 'Nirmala Panth',
    ],
    [
        'id' => 286,
        'ancestry' => '/64/268/286',
        'religion_name' => 'Nirvair Khalsa Daal',
    ],
    [
        'id' => 287,
        'ancestry' => '/64/268/287',
        'religion_name' => 'Non-Denominational Kesdhari',
    ],
    [
        'id' => 288,
        'ancestry' => '/64/268/288',
        'religion_name' => 'Prof. Darshan Singh Khalsa (SGGS Academy)',
    ],
    [
        'id' => 289,
        'ancestry' => '/64/268/289',
        'religion_name' => 'Radhaswami Sikh',
    ],
    [
        'id' => 290,
        'ancestry' => '/64/268/290',
        'religion_name' => 'Ramraiyya (Ram Rai)',
    ],
    [
        'id' => 291,
        'ancestry' => '/64/268/291',
        'religion_name' => 'Ravidassia Dharam',
    ],
    [
        'id' => 292,
        'ancestry' => '/64/268/292',
        'religion_name' => 'Sanatan Sikh Sabha',
    ],
    [
        'id' => 293,
        'ancestry' => '/64/268/293',
        'religion_name' => 'Sant Mat Movement',
    ],
    [
        'id' => 294,
        'ancestry' => '/64/268/294',
        'religion_name' => 'Sant Nirankari Mission',
    ],
    [
        'id' => 295,
        'ancestry' => '/64/268/295',
        'religion_name' => 'Sehejdhari Daal',
    ],
    [
        'id' => 296,
        'ancestry' => '/64/268/296',
        'religion_name' => 'Sikh Dharma International (SDI)',
    ],
    [
        'id' => 297,
        'ancestry' => '/64/268/297',
        'religion_name' => 'Sindhi Sikhi',
    ],
    [
        'id' => 298,
        'ancestry' => '/64/268/298',
        'religion_name' => 'Tapoban Tat-Gurmat',
    ],
    [
        'id' => 299,
        'ancestry' => '/64/268/299',
        'religion_name' => 'Udasi Sikh',
    ],
    [
        'id' => 300,
        'ancestry' => '/64/300',
        'religion_name' => 'Nepalese religions',
    ],
    [
        'id' => 301,
        'ancestry' => '/64/300/301',
        'religion_name' => 'Bön (Tibet / Nepal)',
    ],
    [
        'id' => 302,
        'ancestry' => '/64/300/302',
        'religion_name' => 'Kirat Mundhum',
    ],
    [
        'id' => 303,
        'ancestry' => '/64/300/303',
        'religion_name' => 'Newar Buddhism',
    ],
    [
        'id' => 304,
        'ancestry' => '/64/300/304',
        'religion_name' => 'Yumaism',
    ],
    [
        'id' => 305,
        'ancestry' => '/305',
        'religion_name' => 'Middle Eastern religions*',
    ],
    [
        'id' => 306,
        'ancestry' => '/305/306',
        'religion_name' => 'Bábism',
    ],
    [
        'id' => 307,
        'ancestry' => '/305/306/307',
        'religion_name' => 'Azali',
    ],
    [
        'id' => 308,
        'ancestry' => '/305/306/308',
        'religion_name' => 'Bahá\'í Faith',
    ],
    [
        'id' => 309,
        'ancestry' => '/305/306/308/309',
        'religion_name' => 'Bahá\'ís Under the Provisions of the Covenant',
    ],
    [
        'id' => 310,
        'ancestry' => '/305/306/308/310',
        'religion_name' => 'Orthodox Bahá\'í Faith',
    ],
    [
        'id' => 311,
        'ancestry' => '/305/311',
        'religion_name' => 'Christianity',
    ],
    [
        'id' => 312,
        'ancestry' => '/305/311/312',
        'religion_name' => 'Eastern Christianity',
    ],
    [
        'id' => 313,
        'ancestry' => '/305/311/312/313',
        'religion_name' => 'Church of the East (incorrectly called "Nestorianism")',
    ],
    [
        'id' => 314,
        'ancestry' => '/305/311/312/313/314',
        'religion_name' => 'Ancient Church of the East',
    ],
    [
        'id' => 315,
        'ancestry' => '/305/311/312/313/315',
        'religion_name' => 'Assyrian Church of the East',
    ],
    [
        'id' => 316,
        'ancestry' => '/305/311/312/313/316',
        'religion_name' => 'Chaldean Catholic Church',
    ],
    [
        'id' => 317,
        'ancestry' => '/305/311/312/317',
        'religion_name' => 'Eastern Catholic Churches',
    ],
    [
        'id' => 318,
        'ancestry' => '/305/311/312/317/318',
        'religion_name' => 'Albanian Greek Catholic Church',
    ],
    [
        'id' => 319,
        'ancestry' => '/305/311/312/317/319',
        'religion_name' => 'Belarusian Greek Catholic Church',
    ],
    [
        'id' => 320,
        'ancestry' => '/305/311/312/317/320',
        'religion_name' => 'Bulgarian Greek Catholic Church',
    ],
    [
        'id' => 321,
        'ancestry' => '/305/311/312/317/321',
        'religion_name' => 'Byzantine Catholic Church of Croatia and Serbia',
    ],
    [
        'id' => 322,
        'ancestry' => '/305/311/312/317/322',
        'religion_name' => 'Greek Byzantine Catholic Church',
    ],
    [
        'id' => 323,
        'ancestry' => '/305/311/312/317/323',
        'religion_name' => 'Hungarian Byzantine Catholic Church',
    ],
    [
        'id' => 324,
        'ancestry' => '/305/311/312/317/324',
        'religion_name' => 'Italo-Albanian Catholic Church (a.k.a. the "Italo-Greek Catholic Church")',
    ],
    [
        'id' => 325,
        'ancestry' => '/305/311/312/317/325',
        'religion_name' => 'Macedonian Catholic Church',
    ],
    [
        'id' => 326,
        'ancestry' => '/305/311/312/317/326',
        'religion_name' => 'Melkite Greek Catholic Church',
    ],
    [
        'id' => 327,
        'ancestry' => '/305/311/312/317/327',
        'religion_name' => 'Romanian Catholic Church',
    ],
    [
        'id' => 328,
        'ancestry' => '/305/311/312/317/328',
        'religion_name' => 'Russian Greek Catholic Church',
    ],
    [
        'id' => 329,
        'ancestry' => '/305/311/312/317/329',
        'religion_name' => 'Ruthenian Greek Catholic Church (a.k.a. the "Byzantine Catholic Church" in the United States)',
    ],
    [
        'id' => 330,
        'ancestry' => '/305/311/312/317/330',
        'religion_name' => 'Slovak Greek Catholic Church',
    ],
    [
        'id' => 331,
        'ancestry' => '/305/311/312/317/331',
        'religion_name' => 'Ukrainian Greek Catholic Church',
    ],
    [
        'id' => 332,
        'ancestry' => '/305/311/312/317/332',
        'religion_name' => 'Chaldean Catholic Church',
    ],
    [
        'id' => 333,
        'ancestry' => '/305/311/312/317/333',
        'religion_name' => 'Syriac Catholic Church',
    ],
    [
        'id' => 334,
        'ancestry' => '/305/311/312/317/334',
        'religion_name' => 'Maronite Church',
    ],
    [
        'id' => 335,
        'ancestry' => '/305/311/312/317/335',
        'religion_name' => 'Syro-Malankara Catholic Church',
    ],
    [
        'id' => 336,
        'ancestry' => '/305/311/312/317/336',
        'religion_name' => 'Syro-Malabar Catholic Church',
    ],
    [
        'id' => 337,
        'ancestry' => '/305/311/312/317/337',
        'religion_name' => 'Independent Eastern Catholic Churches',
    ],
    [
        'id' => 338,
        'ancestry' => '/305/311/312/317/337/338',
        'religion_name' => 'Ukrainian Orthodox Greek Catholic Church',
    ],
    [
        'id' => 339,
        'ancestry' => '/305/311/312/339',
        'religion_name' => 'Eastern Orthodox Church (officially the "Orthodox Catholic Church")',
    ],
    [
        'id' => 340,
        'ancestry' => '/305/311/312/339/340',
        'religion_name' => 'Greek Orthodox Church',
    ],
    [
        'id' => 341,
        'ancestry' => '/305/311/312/339/341',
        'religion_name' => 'Serbian Orthodox Church',
    ],
    [
        'id' => 342,
        'ancestry' => '/305/311/312/339/342',
        'religion_name' => 'Russian Orthodox Church',
    ],
    [
        'id' => 343,
        'ancestry' => '/305/311/312/339/343',
        'religion_name' => 'Romanian Orthodox Church',
    ],
    [
        'id' => 344,
        'ancestry' => '/305/311/312/339/344',
        'religion_name' => 'Bulgarian Orthodox Church',
    ],
    [
        'id' => 345,
        'ancestry' => '/305/311/312/339/345',
        'religion_name' => 'Georgian Orthodox Church',
    ],
    [
        'id' => 346,
        'ancestry' => '/305/311/312/339/346',
        'religion_name' => 'Albanian Orthodox Church',
    ],
    [
        'id' => 347,
        'ancestry' => '/305/311/312/339/347',
        'religion_name' => 'Ukrainian Orthodox Church',
    ],
    [
        'id' => 348,
        'ancestry' => '/305/311/312/339/348',
        'religion_name' => 'Noncanonical/Independent Eastern Orthodox Churches',
    ],
    [
        'id' => 349,
        'ancestry' => '/305/311/312/339/348/349',
        'religion_name' => 'Greek Old Calendarists (a.k.a. "Genuine Orthodox" or "True Orthodox")',
    ],
    [
        'id' => 350,
        'ancestry' => '/305/311/312/339/348/350',
        'religion_name' => 'Russian Old Believers (a.k.a. "Old Ritualists")',
    ],
    [
        'id' => 351,
        'ancestry' => '/305/311/312/339/348/350/351',
        'religion_name' => 'Bezpopovtsy',
    ],
    [
        'id' => 352,
        'ancestry' => '/305/311/312/339/348/350/352',
        'religion_name' => 'Popovtsy',
    ],
    [
        'id' => 353,
        'ancestry' => '/305/311/312/353',
        'religion_name' => 'Oriental Orthodox Churches (a.k.a. "Non-Chalcedonian" or "Miaphysite"/"Monophysite")',
    ],
    [
        'id' => 354,
        'ancestry' => '/305/311/312/353/354',
        'religion_name' => 'Armenian Apostolic Church',
    ],
    [
        'id' => 355,
        'ancestry' => '/305/311/312/353/355',
        'religion_name' => 'Coptic Orthodox Church of Alexandria',
    ],
    [
        'id' => 356,
        'ancestry' => '/305/311/312/353/356',
        'religion_name' => 'Syriac Orthodox Church',
    ],
    [
        'id' => 357,
        'ancestry' => '/305/311/312/353/357',
        'religion_name' => 'Ethiopian Orthodox Church',
    ],
    [
        'id' => 358,
        'ancestry' => '/305/311/312/353/358',
        'religion_name' => 'Eritrean Orthodox Church',
    ],
    [
        'id' => 359,
        'ancestry' => '/305/311/312/353/359',
        'religion_name' => 'Malankara Orthodox Syrian Church (of the St. Thomas Christians in India)',
    ],
    [
        'id' => 360,
        'ancestry' => '/305/311/312/360',
        'religion_name' => 'Spiritual Christianity',
    ],
    [
        'id' => 361,
        'ancestry' => '/305/311/312/360/361',
        'religion_name' => 'Doukhobor',
    ],
    [
        'id' => 362,
        'ancestry' => '/305/311/312/360/362',
        'religion_name' => 'Khlyst',
    ],
    [
        'id' => 363,
        'ancestry' => '/305/311/312/360/363',
        'religion_name' => 'Molokan',
    ],
    [
        'id' => 364,
        'ancestry' => '/305/311/312/360/364',
        'religion_name' => 'Skoptsy',
    ],
    [
        'id' => 365,
        'ancestry' => '/305/311/365',
        'religion_name' => 'Western Christianity',
    ],
    [
        'id' => 366,
        'ancestry' => '/305/311/365/366',
        'religion_name' => 'Proto-Protestantism',
    ],
    [
        'id' => 367,
        'ancestry' => '/305/311/365/366/367',
        'religion_name' => 'Brethren of the Free Spirit (Historical)',
    ],
    [
        'id' => 368,
        'ancestry' => '/305/311/365/366/368',
        'religion_name' => 'Hussites (Historical)',
    ],
    [
        'id' => 369,
        'ancestry' => '/305/311/365/366/368/369',
        'religion_name' => 'Czech Brethren',
    ],
    [
        'id' => 370,
        'ancestry' => '/305/311/365/366/368/370',
        'religion_name' => 'Moravians',
    ],
    [
        'id' => 371,
        'ancestry' => '/305/311/365/366/371',
        'religion_name' => 'Strigolniki (Historical)',
    ],
    [
        'id' => 372,
        'ancestry' => '/305/311/365/366/372',
        'religion_name' => 'Waldensians',
    ],
    [
        'id' => 373,
        'ancestry' => '/305/311/365/373',
        'religion_name' => 'Protestantism',
    ],
    [
        'id' => 374,
        'ancestry' => '/305/311/365/373/374',
        'religion_name' => 'Anabaptists (Radical Protestants)',
    ],
    [
        'id' => 375,
        'ancestry' => '/305/311/365/373/374/375',
        'religion_name' => 'Amish',
    ],
    [
        'id' => 376,
        'ancestry' => '/305/311/365/373/374/376',
        'religion_name' => 'Hutterites',
    ],
    [
        'id' => 377,
        'ancestry' => '/305/311/365/373/374/377',
        'religion_name' => 'Mennonites',
    ],
    [
        'id' => 378,
        'ancestry' => '/305/311/365/373/374/378',
        'religion_name' => 'River Brethren',
    ],
    [
        'id' => 379,
        'ancestry' => '/305/311/365/373/374/379',
        'religion_name' => 'Schwarzenau Brethren',
    ],
    [
        'id' => 380,
        'ancestry' => '/305/311/365/373/374/380',
        'religion_name' => 'Shakers',
    ],
    [
        'id' => 381,
        'ancestry' => '/305/311/365/373/381',
        'religion_name' => 'Anglicanism',
    ],
    [
        'id' => 382,
        'ancestry' => '/305/311/365/373/381/382',
        'religion_name' => 'Anglo-Catholicism',
    ],
    [
        'id' => 383,
        'ancestry' => '/305/311/365/373/381/383',
        'religion_name' => 'Broad church',
    ],
    [
        'id' => 384,
        'ancestry' => '/305/311/365/373/381/384',
        'religion_name' => 'Continuing Anglican movement',
    ],
    [
        'id' => 385,
        'ancestry' => '/305/311/365/373/381/385',
        'religion_name' => 'English Dissenters',
    ],
    [
        'id' => 386,
        'ancestry' => '/305/311/365/373/381/385/386',
        'religion_name' => 'Nonconformists',
    ],
    [
        'id' => 387,
        'ancestry' => '/305/311/365/373/381/387',
        'religion_name' => 'High church',
    ],
    [
        'id' => 388,
        'ancestry' => '/305/311/365/373/381/388',
        'religion_name' => 'Low church',
    ],
    [
        'id' => 389,
        'ancestry' => '/305/311/365/373/381/389',
        'religion_name' => 'Open Evangelicals',
    ],
    [
        'id' => 390,
        'ancestry' => '/305/311/365/373/381/390',
        'religion_name' => 'Puritans',
    ],
    [
        'id' => 391,
        'ancestry' => '/305/311/365/373/391',
        'religion_name' => 'Baptists',
    ],
    [
        'id' => 392,
        'ancestry' => '/305/311/365/373/391/392',
        'religion_name' => 'General Baptists',
    ],
    [
        'id' => 393,
        'ancestry' => '/305/311/365/373/391/392/393',
        'religion_name' => 'Free Will Baptists',
    ],
    [
        'id' => 394,
        'ancestry' => '/305/311/365/373/391/394',
        'religion_name' => 'Landmarkism',
    ],
    [
        'id' => 395,
        'ancestry' => '/305/311/365/373/391/395',
        'religion_name' => 'Missionary Baptists',
    ],
    [
        'id' => 396,
        'ancestry' => '/305/311/365/373/391/396',
        'religion_name' => 'Primitive Baptists',
    ],
    [
        'id' => 397,
        'ancestry' => '/305/311/365/373/391/397',
        'religion_name' => 'Strict Baptists',
    ],
    [
        'id' => 398,
        'ancestry' => '/305/311/365/373/391/397/398',
        'religion_name' => 'Reformed Baptists',
    ],
    [
        'id' => 399,
        'ancestry' => '/305/311/365/373/399',
        'religion_name' => 'Black church',
    ],
    [
        'id' => 400,
        'ancestry' => '/305/311/365/373/399/400',
        'religion_name' => 'Black theology',
    ],
    [
        'id' => 401,
        'ancestry' => '/305/311/365/373/401',
        'religion_name' => 'Christian deism',
    ],
    [
        'id' => 402,
        'ancestry' => '/305/311/365/373/402',
        'religion_name' => 'Confessing Movement',
    ],
    [
        'id' => 403,
        'ancestry' => '/305/311/365/373/403',
        'religion_name' => 'Evangelicalism',
    ],
    [
        'id' => 404,
        'ancestry' => '/305/311/365/373/403/404',
        'religion_name' => 'Charismatic movement',
    ],
    [
        'id' => 405,
        'ancestry' => '/305/311/365/373/403/405',
        'religion_name' => 'Dispensationalist Christian Zionism',
    ],
    [
        'id' => 406,
        'ancestry' => '/305/311/365/373/403/406',
        'religion_name' => 'Emerging church',
    ],
    [
        'id' => 407,
        'ancestry' => '/305/311/365/373/403/407',
        'religion_name' => 'Neo-charismatic movement',
    ],
    [
        'id' => 408,
        'ancestry' => '/305/311/365/373/403/408',
        'religion_name' => 'Neo-Evangelicalism',
    ],
    [
        'id' => 409,
        'ancestry' => '/305/311/365/373/403/409',
        'religion_name' => 'Plymouth Brethren',
    ],
    [
        'id' => 410,
        'ancestry' => '/305/311/365/373/403/409/410',
        'religion_name' => 'Exclusive Brethren',
    ],
    [
        'id' => 411,
        'ancestry' => '/305/311/365/373/403/409/411',
        'religion_name' => 'Open Brethren',
    ],
    [
        'id' => 412,
        'ancestry' => '/305/311/365/373/403/412',
        'religion_name' => 'Progressive Christianity',
    ],
    [
        'id' => 413,
        'ancestry' => '/305/311/365/373/403/413',
        'religion_name' => 'Protestant fundamentalism',
    ],
    [
        'id' => 414,
        'ancestry' => '/305/311/365/373/414',
        'religion_name' => 'Jesuism',
    ],
    [
        'id' => 415,
        'ancestry' => '/305/311/365/373/415',
        'religion_name' => 'Lollardy (Historical)',
    ],
    [
        'id' => 416,
        'ancestry' => '/305/311/365/373/416',
        'religion_name' => 'Lutheranism',
    ],
    [
        'id' => 417,
        'ancestry' => '/305/311/365/373/416/417',
        'religion_name' => 'Laestadianism',
    ],
    [
        'id' => 418,
        'ancestry' => '/305/311/365/373/416/418',
        'religion_name' => 'Pietism',
    ],
    [
        'id' => 419,
        'ancestry' => '/305/311/365/373/419',
        'religion_name' => 'Methodism',
    ],
    [
        'id' => 420,
        'ancestry' => '/305/311/365/373/419/420',
        'religion_name' => 'Calvinistic Methodists',
    ],
    [
        'id' => 421,
        'ancestry' => '/305/311/365/373/419/421',
        'religion_name' => 'Holiness movement',
    ],
    [
        'id' => 422,
        'ancestry' => '/305/311/365/373/419/421/422',
        'religion_name' => 'Church of the Nazarene',
    ],
    [
        'id' => 423,
        'ancestry' => '/305/311/365/373/419/423',
        'religion_name' => 'The Salvation Army',
    ],
    [
        'id' => 424,
        'ancestry' => '/305/311/365/373/419/424',
        'religion_name' => 'Wesleyanism',
    ],
    [
        'id' => 425,
        'ancestry' => '/305/311/365/373/425',
        'religion_name' => 'Pentecostalism',
    ],
    [
        'id' => 426,
        'ancestry' => '/305/311/365/373/425/426',
        'religion_name' => 'Church of God',
    ],
    [
        'id' => 427,
        'ancestry' => '/305/311/365/373/425/427',
        'religion_name' => 'Latter Rain movement',
    ],
    [
        'id' => 428,
        'ancestry' => '/305/311/365/373/425/428',
        'religion_name' => 'Word of Faith',
    ],
    [
        'id' => 429,
        'ancestry' => '/305/311/365/373/425/429',
        'religion_name' => 'Congregação Cristã no Brasil**',
    ],
    [
        'id' => 430,
        'ancestry' => '/305/311/365/373/425/430',
        'religion_name' => 'Assembleia de Deus**',
    ],
    [
        'id' => 431,
        'ancestry' => '/305/311/365/373/425/431',
        'religion_name' => 'Evangelho Quadrangular**',
    ],
    [
        'id' => 432,
        'ancestry' => '/305/311/365/373/425/432',
        'religion_name' => 'Brasil para Cristo**',
    ],
    [
        'id' => 433,
        'ancestry' => '/305/311/365/373/425/433',
        'religion_name' => 'Deus é Amor**',
    ],
    [
        'id' => 434,
        'ancestry' => '/305/311/365/373/425/434',
        'religion_name' => 'Neopentecostalismo**',
    ],
    [
        'id' => 435,
        'ancestry' => '/305/311/365/373/425/434/435',
        'religion_name' => 'Comunidade Evangélica Sara Nossa Terra**',
    ],
    [
        'id' => 436,
        'ancestry' => '/305/311/365/373/425/434/436',
        'religion_name' => 'Igreja Universal do Reino de Deus**',
    ],
    [
        'id' => 437,
        'ancestry' => '/305/311/365/373/425/434/437',
        'religion_name' => 'Igreja Internacional da Graça de Deus**',
    ],
    [
        'id' => 438,
        'ancestry' => '/305/311/365/373/425/434/438',
        'religion_name' => 'Renascer em Cristo**',
    ],
    [
        'id' => 439,
        'ancestry' => '/305/311/365/373/425/434/439',
        'religion_name' => 'Igreja Mundial do Poder de Deus**',
    ],
    [
        'id' => 440,
        'ancestry' => '/305/311/365/373/425/434/440',
        'religion_name' => 'Bola de Neve Church**',
    ],
    [
        'id' => 441,
        'ancestry' => '/305/311/365/373/441',
        'religion_name' => 'Reformed churches',
    ],
    [
        'id' => 442,
        'ancestry' => '/305/311/365/373/441/442',
        'religion_name' => 'Amyraldism (a.k.a."four-point Calvinism")',
    ],
    [
        'id' => 443,
        'ancestry' => '/305/311/365/373/441/443',
        'religion_name' => 'Arminianism',
    ],
    [
        'id' => 444,
        'ancestry' => '/305/311/365/373/441/443/444',
        'religion_name' => 'Remonstrants',
    ],
    [
        'id' => 445,
        'ancestry' => '/305/311/365/373/441/445',
        'religion_name' => 'Calvinism',
    ],
    [
        'id' => 446,
        'ancestry' => '/305/311/365/373/441/446',
        'religion_name' => 'Christian Reconstructionism',
    ],
    [
        'id' => 447,
        'ancestry' => '/305/311/365/373/441/447',
        'religion_name' => 'Congregational churches',
    ],
    [
        'id' => 448,
        'ancestry' => '/305/311/365/373/441/448',
        'religion_name' => 'Continental Reformed churches',
    ],
    [
        'id' => 449,
        'ancestry' => '/305/311/365/373/441/448/449',
        'religion_name' => 'Swiss Reformed',
    ],
    [
        'id' => 450,
        'ancestry' => '/305/311/365/373/441/448/450',
        'religion_name' => 'Dutch Reformed',
    ],
    [
        'id' => 451,
        'ancestry' => '/305/311/365/373/441/448/451',
        'religion_name' => 'French Huguenot',
    ],
    [
        'id' => 452,
        'ancestry' => '/305/311/365/373/441/452',
        'religion_name' => 'Neo-Calvinism',
    ],
    [
        'id' => 453,
        'ancestry' => '/305/311/365/373/441/453',
        'religion_name' => 'Presbyterianism',
    ],
    [
        'id' => 454,
        'ancestry' => '/305/311/365/373/441/454',
        'religion_name' => 'Quakers ("Friends")',
    ],
    [
        'id' => 455,
        'ancestry' => '/305/311/365/373/441/455',
        'religion_name' => 'Zwinglianism (Historical)',
    ],
    [
        'id' => 456,
        'ancestry' => '/305/311/365/373/456',
        'religion_name' => 'Restoration movement',
    ],
    [
        'id' => 457,
        'ancestry' => '/305/311/365/373/456/457',
        'religion_name' => 'Adventism',
    ],
    [
        'id' => 458,
        'ancestry' => '/305/311/365/373/456/457/458',
        'religion_name' => 'Branch Davidians',
    ],
    [
        'id' => 459,
        'ancestry' => '/305/311/365/373/456/457/459',
        'religion_name' => 'Seventh-day Adventist Church',
    ],
    [
        'id' => 460,
        'ancestry' => '/305/311/365/373/456/460',
        'religion_name' => 'Christadelphians',
    ],
    [
        'id' => 461,
        'ancestry' => '/305/311/365/373/456/461',
        'religion_name' => 'Christian Science',
    ],
    [
        'id' => 462,
        'ancestry' => '/305/311/365/373/456/462',
        'religion_name' => 'Churches of Christ',
    ],
    [
        'id' => 463,
        'ancestry' => '/305/311/365/373/456/463',
        'religion_name' => 'Iglesia ni Cristo',
    ],
    [
        'id' => 464,
        'ancestry' => '/305/311/365/373/456/464',
        'religion_name' => 'Jehovah\'s Witnesses',
    ],
    [
        'id' => 465,
        'ancestry' => '/305/311/365/373/456/465',
        'religion_name' => 'Latter Day Saint movement',
    ],
    [
        'id' => 466,
        'ancestry' => '/305/311/365/373/456/465/466',
        'religion_name' => 'Mormon fundamentalism',
    ],
    [
        'id' => 467,
        'ancestry' => '/305/311/365/373/456/467',
        'religion_name' => 'Millerism (Historical)',
    ],
    [
        'id' => 468,
        'ancestry' => '/305/311/365/373/456/468',
        'religion_name' => 'Stone-Campbell movement (a.k.a. "Campbellites")',
    ],
    [
        'id' => 469,
        'ancestry' => '/305/311/365/373/469',
        'religion_name' => 'Swedenborgianism (a.k.a. "The New Church")',
    ],
    [
        'id' => 470,
        'ancestry' => '/305/311/365/373/470',
        'religion_name' => 'Unitarianism',
    ],
    [
        'id' => 471,
        'ancestry' => '/305/311/365/471',
        'religion_name' => 'Roman Catholic Church/Latin Church (a.k.a. "Roman Catholicism" or "Catholicism")',
    ],
    [
        'id' => 472,
        'ancestry' => '/305/311/365/471/472',
        'religion_name' => 'Affirming Catholicism',
    ],
    [
        'id' => 473,
        'ancestry' => '/305/311/365/471/473',
        'religion_name' => 'Breakaway Catholics',
    ],
    [
        'id' => 474,
        'ancestry' => '/305/311/365/471/474',
        'religion_name' => 'Charismatic Catholics',
    ],
    [
        'id' => 475,
        'ancestry' => '/305/311/365/471/475',
        'religion_name' => 'Hebrew Catholics',
    ],
    [
        'id' => 476,
        'ancestry' => '/305/311/365/471/476',
        'religion_name' => 'Independent Catholic churches',
    ],
    [
        'id' => 477,
        'ancestry' => '/305/311/365/471/476/477',
        'religion_name' => 'Old Catholic Church (Union of Utrecht)',
    ],
    [
        'id' => 478,
        'ancestry' => '/305/311/365/471/476/477/478',
        'religion_name' => 'Polish National Catholic Church',
    ],
    [
        'id' => 479,
        'ancestry' => '/305/311/365/471/479',
        'religion_name' => 'Liberal Catholicism',
    ],
    [
        'id' => 480,
        'ancestry' => '/305/311/365/471/480',
        'religion_name' => 'Liberation theology',
    ],
    [
        'id' => 481,
        'ancestry' => '/305/311/365/471/481',
        'religion_name' => 'Modernist Catholics',
    ],
    [
        'id' => 482,
        'ancestry' => '/305/311/365/471/482',
        'religion_name' => 'Traditionalist Catholics',
    ],
    [
        'id' => 483,
        'ancestry' => '/305/311/365/471/482/483',
        'religion_name' => 'Sedevacantism',
    ],
    [
        'id' => 484,
        'ancestry' => '/305/311/484',
        'religion_name' => 'Other*',
    ],
    [
        'id' => 485,
        'ancestry' => '/305/311/484/485',
        'religion_name' => 'Arianism (Historical)',
    ],
    [
        'id' => 486,
        'ancestry' => '/305/311/484/486',
        'religion_name' => 'Bagnolians (Historical)',
    ],
    [
        'id' => 487,
        'ancestry' => '/305/311/484/487',
        'religion_name' => 'Bogomilism (Historical)',
    ],
    [
        'id' => 488,
        'ancestry' => '/305/311/484/488',
        'religion_name' => 'Bosnian Church (Historical)',
    ],
    [
        'id' => 489,
        'ancestry' => '/305/311/484/489',
        'religion_name' => 'Catharism (Historical)',
    ],
    [
        'id' => 490,
        'ancestry' => '/305/311/484/490',
        'religion_name' => 'Cerdonians (Historical)',
    ],
    [
        'id' => 491,
        'ancestry' => '/305/311/484/491',
        'religion_name' => 'Esoteric Christianity',
    ],
    [
        'id' => 492,
        'ancestry' => '/305/311/484/491/492',
        'religion_name' => 'Behmenism',
    ],
    [
        'id' => 493,
        'ancestry' => '/305/311/484/491/493',
        'religion_name' => 'Christian Kabbalah',
    ],
    [
        'id' => 494,
        'ancestry' => '/305/311/484/491/494',
        'religion_name' => 'Martinism',
    ],
    [
        'id' => 495,
        'ancestry' => '/305/311/484/495',
        'religion_name' => 'Christian Universalism',
    ],
    [
        'id' => 496,
        'ancestry' => '/305/311/484/496',
        'religion_name' => 'Eastern Lightning',
    ],
    [
        'id' => 497,
        'ancestry' => '/305/311/484/497',
        'religion_name' => 'Ecclesia Gnostica',
    ],
    [
        'id' => 498,
        'ancestry' => '/305/311/484/498',
        'religion_name' => 'Ecclesia Gnostica Catholica',
    ],
    [
        'id' => 499,
        'ancestry' => '/305/311/484/499',
        'religion_name' => 'Judaizers (Judeo-Christian)',
    ],
    [
        'id' => 500,
        'ancestry' => '/305/311/484/499/500',
        'religion_name' => 'Hebrew Roots',
    ],
    [
        'id' => 501,
        'ancestry' => '/305/311/484/499/501',
        'religion_name' => 'Makuya',
    ],
    [
        'id' => 502,
        'ancestry' => '/305/311/484/499/502',
        'religion_name' => 'Messianic Judaism',
    ],
    [
        'id' => 503,
        'ancestry' => '/305/311/484/499/503',
        'religion_name' => 'Sacred Name Movement',
    ],
    [
        'id' => 504,
        'ancestry' => '/305/311/484/499/504',
        'religion_name' => 'Yehowists',
    ],
    [
        'id' => 505,
        'ancestry' => '/305/311/484/499/505',
        'religion_name' => 'Ebionites (Historical)',
    ],
    [
        'id' => 506,
        'ancestry' => '/305/311/484/506',
        'religion_name' => 'Nondenominational Christianity',
    ],
    [
        'id' => 507,
        'ancestry' => '/305/311/484/507',
        'religion_name' => 'Nontrinitarianism',
    ],
    [
        'id' => 508,
        'ancestry' => '/305/311/484/507/508',
        'religion_name' => 'Unitarianism',
    ],
    [
        'id' => 509,
        'ancestry' => '/305/311/484/507/509',
        'religion_name' => 'Bible Student movement',
    ],
    [
        'id' => 510,
        'ancestry' => '/305/311/484/507/510',
        'religion_name' => 'Christadelphians',
    ],
    [
        'id' => 511,
        'ancestry' => '/305/311/484/507/511',
        'religion_name' => 'Oneness Pentecostalism',
    ],
    [
        'id' => 512,
        'ancestry' => '/305/311/484/507/512',
        'religion_name' => 'Spiritual Christianity',
    ],
    [
        'id' => 513,
        'ancestry' => '/305/311/484/507/513',
        'religion_name' => 'Tolstoyan movement',
    ],
    [
        'id' => 514,
        'ancestry' => '/305/311/484/514',
        'religion_name' => 'Marcionism (Historical)',
    ],
    [
        'id' => 515,
        'ancestry' => '/305/311/484/515',
        'religion_name' => 'Unification Church (Family Federation for World Peace and Unification)',
    ],
    [
        'id' => 516,
        'ancestry' => '/305/311/484/515/516',
        'religion_name' => 'World Peace and Unification Sanctuary Church',
    ],
    [
        'id' => 517,
        'ancestry' => '/305/311/484/517',
        'religion_name' => 'Reformed Eastern Christianity',
    ],
    [
        'id' => 518,
        'ancestry' => '/305/311/484/518',
        'religion_name' => 'Sethianism (Historical)',
    ],
    [
        'id' => 519,
        'ancestry' => '/305/311/484/518/519',
        'religion_name' => 'Basilideans (Historical)',
    ],
    [
        'id' => 520,
        'ancestry' => '/305/311/484/518/520',
        'religion_name' => 'Valentinianism (Historical)',
    ],
    [
        'id' => 521,
        'ancestry' => '/305/311/484/518/520/521',
        'religion_name' => 'Bardesanite School (Historical)',
    ],
    [
        'id' => 522,
        'ancestry' => '/305/311/484/522',
        'religion_name' => 'Simonians (Historical)',
    ],
    [
        'id' => 523,
        'ancestry' => '/305/311/484/523',
        'religion_name' => 'Theosophy',
    ],
    [
        'id' => 524,
        'ancestry' => '/305/524',
        'religion_name' => 'Druze',
    ],
    [
        'id' => 525,
        'ancestry' => '/305/525',
        'religion_name' => 'Islam',
    ],
    [
        'id' => 526,
        'ancestry' => '/305/525/526',
        'religion_name' => 'Khawarij',
    ],
    [
        'id' => 527,
        'ancestry' => '/305/525/526/527',
        'religion_name' => 'Azraqi (Historical)',
    ],
    [
        'id' => 528,
        'ancestry' => '/305/525/526/528',
        'religion_name' => 'Haruriyyah (Historical)',
    ],
    [
        'id' => 529,
        'ancestry' => '/305/525/526/529',
        'religion_name' => 'Ibadi',
    ],
    [
        'id' => 530,
        'ancestry' => '/305/525/526/530',
        'religion_name' => 'Sufri (Historical)',
    ],
    [
        'id' => 531,
        'ancestry' => '/305/525/531',
        'religion_name' => 'Shia Islam',
    ],
    [
        'id' => 532,
        'ancestry' => '/305/525/531/532',
        'religion_name' => 'Isma\'ilism',
    ],
    [
        'id' => 533,
        'ancestry' => '/305/525/531/532/533',
        'religion_name' => 'Mustaali',
    ],
    [
        'id' => 534,
        'ancestry' => '/305/525/531/532/533/534',
        'religion_name' => 'Atba-i-Malak',
    ],
    [
        'id' => 535,
        'ancestry' => '/305/525/531/532/533/534/535',
        'religion_name' => 'Atba-i-Malak Badar',
    ],
    [
        'id' => 536,
        'ancestry' => '/305/525/531/532/533/534/536',
        'religion_name' => 'Atba-i-Malak Vakil',
    ],
    [
        'id' => 537,
        'ancestry' => '/305/525/531/532/533/537',
        'religion_name' => 'Alavi Bohra',
    ],
    [
        'id' => 538,
        'ancestry' => '/305/525/531/532/533/538',
        'religion_name' => 'Dawoodi Bohra',
    ],
    [
        'id' => 539,
        'ancestry' => '/305/525/531/532/533/538/539',
        'religion_name' => 'Progressive Dawoodi Bohra',
    ],
    [
        'id' => 540,
        'ancestry' => '/305/525/531/532/533/540',
        'religion_name' => 'Hebtiahs Bohra',
    ],
    [
        'id' => 541,
        'ancestry' => '/305/525/531/532/533/541',
        'religion_name' => 'Sulaymani Bohra',
    ],
    [
        'id' => 542,
        'ancestry' => '/305/525/531/532/542',
        'religion_name' => 'Nizari',
    ],
    [
        'id' => 543,
        'ancestry' => '/305/525/531/532/543',
        'religion_name' => 'Satpanth',
    ],
    [
        'id' => 544,
        'ancestry' => '/305/525/531/544',
        'religion_name' => 'Ja\'fari jurisprudence',
    ],
    [
        'id' => 545,
        'ancestry' => '/305/525/531/544/545',
        'religion_name' => 'Twelver',
    ],
    [
        'id' => 546,
        'ancestry' => '/305/525/531/544/545/546',
        'religion_name' => 'Akhbari',
    ],
    [
        'id' => 547,
        'ancestry' => '/305/525/531/544/545/547',
        'religion_name' => 'Shaykhism',
    ],
    [
        'id' => 548,
        'ancestry' => '/305/525/531/544/545/548',
        'religion_name' => 'Usuli',
    ],
    [
        'id' => 549,
        'ancestry' => '/305/525/531/544/549',
        'religion_name' => 'Alawites',
    ],
    [
        'id' => 550,
        'ancestry' => '/305/525/531/544/550',
        'religion_name' => 'Alevism',
    ],
    [
        'id' => 551,
        'ancestry' => '/305/525/531/544/550/551',
        'religion_name' => 'Bektashi Order',
    ],
    [
        'id' => 552,
        'ancestry' => '/305/525/531/552',
        'religion_name' => 'Khurramites (Historical)',
    ],
    [
        'id' => 553,
        'ancestry' => '/305/525/531/553',
        'religion_name' => 'Zaidiyyah',
    ],
    [
        'id' => 554,
        'ancestry' => '/305/525/554',
        'religion_name' => 'Sufism',
    ],
    [
        'id' => 555,
        'ancestry' => '/305/525/554/555',
        'religion_name' => 'Bektashi Order',
    ],
    [
        'id' => 556,
        'ancestry' => '/305/525/554/556',
        'religion_name' => 'Chishti Order',
    ],
    [
        'id' => 557,
        'ancestry' => '/305/525/554/557',
        'religion_name' => 'Mevlevi Order',
    ],
    [
        'id' => 558,
        'ancestry' => '/305/525/554/558',
        'religion_name' => 'Moorish Orthodox Church of America',
    ],
    [
        'id' => 559,
        'ancestry' => '/305/525/554/559',
        'religion_name' => 'Naqshbandi',
    ],
    [
        'id' => 560,
        'ancestry' => '/305/525/554/559/560',
        'religion_name' => 'Jahriyya',
    ],
    [
        'id' => 561,
        'ancestry' => '/305/525/554/561',
        'religion_name' => 'Kubrawiya',
    ],
    [
        'id' => 562,
        'ancestry' => '/305/525/554/561/562',
        'religion_name' => 'Khufiyya',
    ],
    [
        'id' => 563,
        'ancestry' => '/305/525/554/563',
        'religion_name' => 'Ni\'matullāhī',
    ],
    [
        'id' => 564,
        'ancestry' => '/305/525/554/564',
        'religion_name' => 'Qadiriyya',
    ],
    [
        'id' => 565,
        'ancestry' => '/305/525/554/565',
        'religion_name' => 'Shadhili',
    ],
    [
        'id' => 566,
        'ancestry' => '/305/525/554/566',
        'religion_name' => 'Suhrawardiyya',
    ],
    [
        'id' => 567,
        'ancestry' => '/305/525/554/567',
        'religion_name' => 'Sufi Order International',
    ],
    [
        'id' => 568,
        'ancestry' => '/305/525/554/568',
        'religion_name' => 'Sufism Reoriented',
    ],
    [
        'id' => 569,
        'ancestry' => '/305/525/554/569',
        'religion_name' => 'Tariqa',
    ],
    [
        'id' => 570,
        'ancestry' => '/305/525/554/570',
        'religion_name' => 'Tijaniyyah',
    ],
    [
        'id' => 571,
        'ancestry' => '/305/525/554/571',
        'religion_name' => 'Universal Sufism',
    ],
    [
        'id' => 572,
        'ancestry' => '/305/525/554/571/572',
        'religion_name' => 'Dances of Universal Peace',
    ],
    [
        'id' => 573,
        'ancestry' => '/305/525/573',
        'religion_name' => 'Sunni Islam',
    ],
    [
        'id' => 574,
        'ancestry' => '/305/525/573/574',
        'religion_name' => 'Hanafi',
    ],
    [
        'id' => 575,
        'ancestry' => '/305/525/573/574/575',
        'religion_name' => 'Ash\'ari',
    ],
    [
        'id' => 576,
        'ancestry' => '/305/525/573/574/576',
        'religion_name' => 'Barelvi',
    ],
    [
        'id' => 577,
        'ancestry' => '/305/525/573/574/577',
        'religion_name' => 'Deobandi',
    ],
    [
        'id' => 578,
        'ancestry' => '/305/525/573/574/578',
        'religion_name' => 'Maturidi',
    ],
    [
        'id' => 579,
        'ancestry' => '/305/525/573/574/579',
        'religion_name' => 'Yihewani',
    ],
    [
        'id' => 580,
        'ancestry' => '/305/525/573/580',
        'religion_name' => 'Hanbali',
    ],
    [
        'id' => 581,
        'ancestry' => '/305/525/573/580/581',
        'religion_name' => 'Wahhabism',
    ],
    [
        'id' => 582,
        'ancestry' => '/305/525/573/580/581/582',
        'religion_name' => 'Salafi movement',
    ],
    [
        'id' => 583,
        'ancestry' => '/305/525/573/583',
        'religion_name' => 'Maliki',
    ],
    [
        'id' => 584,
        'ancestry' => '/305/525/573/584',
        'religion_name' => 'Shafi\'i',
    ],
    [
        'id' => 585,
        'ancestry' => '/305/525/585',
        'religion_name' => 'Other',
    ],
    [
        'id' => 586,
        'ancestry' => '/305/525/585/586',
        'religion_name' => 'Ahmadiyya',
    ],
    [
        'id' => 587,
        'ancestry' => '/305/525/585/586/587',
        'religion_name' => 'Lahore Ahmadiyya Movement for the Propagation of Islam',
    ],
    [
        'id' => 588,
        'ancestry' => '/305/525/585/588',
        'religion_name' => 'Al-Fatiha Foundation',
    ],
    [
        'id' => 589,
        'ancestry' => '/305/525/585/589',
        'religion_name' => 'Ali-Illahism',
    ],
    [
        'id' => 590,
        'ancestry' => '/305/525/585/590',
        'religion_name' => 'Black Muslims',
    ],
    [
        'id' => 591,
        'ancestry' => '/305/525/585/590/591',
        'religion_name' => 'American Society of Muslims',
    ],
    [
        'id' => 592,
        'ancestry' => '/305/525/585/590/592',
        'religion_name' => 'Five-Percent Nation',
    ],
    [
        'id' => 593,
        'ancestry' => '/305/525/585/590/593',
        'religion_name' => 'Moorish Orthodox Church of America',
    ],
    [
        'id' => 594,
        'ancestry' => '/305/525/585/590/594',
        'religion_name' => 'Moorish Science Temple of America',
    ],
    [
        'id' => 595,
        'ancestry' => '/305/525/585/590/595',
        'religion_name' => 'Nation of Islam',
    ],
    [
        'id' => 596,
        'ancestry' => '/305/525/585/590/596',
        'religion_name' => 'United Nation of Islam',
    ],
    [
        'id' => 597,
        'ancestry' => '/305/525/585/597',
        'religion_name' => 'European Islam',
    ],
    [
        'id' => 598,
        'ancestry' => '/305/525/585/598',
        'religion_name' => 'Ittifaq al-Muslimin',
    ],
    [
        'id' => 599,
        'ancestry' => '/305/525/585/599',
        'religion_name' => 'Jadid',
    ],
    [
        'id' => 600,
        'ancestry' => '/305/525/585/600',
        'religion_name' => 'Jamaat al Muslimeen',
    ],
    [
        'id' => 601,
        'ancestry' => '/305/525/585/601',
        'religion_name' => 'Liberal movements within Islam',
    ],
    [
        'id' => 602,
        'ancestry' => '/305/525/585/601/602',
        'religion_name' => 'Muslim Canadian Congress',
    ],
    [
        'id' => 603,
        'ancestry' => '/305/525/585/601/602/603',
        'religion_name' => 'Canadian Muslim Union',
    ],
    [
        'id' => 604,
        'ancestry' => '/305/525/585/601/604',
        'religion_name' => 'Progressive British Muslims',
    ],
    [
        'id' => 605,
        'ancestry' => '/305/525/585/601/605',
        'religion_name' => 'Progressive Muslim Union',
    ],
    [
        'id' => 606,
        'ancestry' => '/305/525/585/606',
        'religion_name' => 'Mahdavia',
    ],
    [
        'id' => 607,
        'ancestry' => '/305/525/585/607',
        'religion_name' => 'Quranism',
    ],
    [
        'id' => 608,
        'ancestry' => '/305/525/585/607/608',
        'religion_name' => 'Tolu-e-Islam',
    ],
    [
        'id' => 609,
        'ancestry' => '/305/525/585/607/609',
        'religion_name' => 'United Submitters International',
    ],
    [
        'id' => 610,
        'ancestry' => '/305/525/585/610',
        'religion_name' => 'Riaz Ahmed Gohar Shahi',
    ],
    [
        'id' => 611,
        'ancestry' => '/305/525/585/610/611',
        'religion_name' => 'Messiah Foundation International',
    ],
    [
        'id' => 612,
        'ancestry' => '/305/525/585/612',
        'religion_name' => 'Xidaotang',
    ],
    [
        'id' => 613,
        'ancestry' => '/305/613',
        'religion_name' => 'Judaism',
    ],
    [
        'id' => 614,
        'ancestry' => '/305/613/614',
        'religion_name' => 'Haymanot',
    ],
    [
        'id' => 615,
        'ancestry' => '/305/613/615',
        'religion_name' => 'Karaite Judaism',
    ],
    [
        'id' => 616,
        'ancestry' => '/305/613/616',
        'religion_name' => 'Kabbalah',
    ],
    [
        'id' => 617,
        'ancestry' => '/305/613/617',
        'religion_name' => 'Noahidism',
    ],
    [
        'id' => 618,
        'ancestry' => '/305/613/618',
        'religion_name' => 'Rabbinic Judaism',
    ],
    [
        'id' => 619,
        'ancestry' => '/305/613/618/619',
        'religion_name' => 'Conservative Judaism (a.k.a. Masorti Judaism)',
    ],
    [
        'id' => 620,
        'ancestry' => '/305/613/618/620',
        'religion_name' => 'Humanistic Judaism',
    ],
    [
        'id' => 621,
        'ancestry' => '/305/613/618/621',
        'religion_name' => 'Jewish Renewal',
    ],
    [
        'id' => 622,
        'ancestry' => '/305/613/618/622',
        'religion_name' => 'Orthodox Judaism',
    ],
    [
        'id' => 623,
        'ancestry' => '/305/613/618/622/623',
        'religion_name' => 'Haredi Judaism',
    ],
    [
        'id' => 624,
        'ancestry' => '/305/613/618/622/624',
        'religion_name' => 'Hasidic Judaism',
    ],
    [
        'id' => 625,
        'ancestry' => '/305/613/618/622/625',
        'religion_name' => 'Modern Orthodox Judaism',
    ],
    [
        'id' => 626,
        'ancestry' => '/305/613/618/626',
        'religion_name' => 'Reconstructionist Judaism',
    ],
    [
        'id' => 627,
        'ancestry' => '/305/613/618/627',
        'religion_name' => 'Reform Judaism',
    ],
    [
        'id' => 628,
        'ancestry' => '/305/613/628',
        'religion_name' => 'Samaritans',
    ],
    [
        'id' => 629,
        'ancestry' => '/305/613/629',
        'religion_name' => 'Subbotniks',
    ],
    [
        'id' => 630,
        'ancestry' => '/305/613/630',
        'religion_name' => 'Historical Judaism',
    ],
    [
        'id' => 631,
        'ancestry' => '/305/613/630/631',
        'religion_name' => 'Essenes',
    ],
    [
        'id' => 632,
        'ancestry' => '/305/613/630/632',
        'religion_name' => 'Pharisees (ancestor of Rabbinic Judaism) (Historical)',
    ],
    [
        'id' => 633,
        'ancestry' => '/305/613/630/633',
        'religion_name' => 'Sadducees (possible ancestor of Karaite Judaism) (Historical)',
    ],
    [
        'id' => 634,
        'ancestry' => '/305/613/630/634',
        'religion_name' => 'Zealots (Judea)',
    ],
    [
        'id' => 635,
        'ancestry' => '/305/613/630/634/635',
        'religion_name' => 'Sicarii',
    ],
    [
        'id' => 636,
        'ancestry' => '/305/613/630/636',
        'religion_name' => 'Messianic sects',
    ],
    [
        'id' => 637,
        'ancestry' => '/305/613/630/636/637',
        'religion_name' => 'Ebionites',
    ],
    [
        'id' => 638,
        'ancestry' => '/305/613/630/636/638',
        'religion_name' => 'Elcesaites',
    ],
    [
        'id' => 639,
        'ancestry' => '/305/613/630/636/639',
        'religion_name' => 'Nazarenes',
    ],
    [
        'id' => 640,
        'ancestry' => '/305/613/630/640',
        'religion_name' => 'Sabbateans',
    ],
    [
        'id' => 641,
        'ancestry' => '/305/613/630/641',
        'religion_name' => 'Second Temple Judaism',
    ],
    [
        'id' => 642,
        'ancestry' => '/305/613/630/642',
        'religion_name' => 'Frankism',
    ],
    [
        'id' => 643,
        'ancestry' => '/305/643',
        'religion_name' => 'Mandaeism',
    ],
    [
        'id' => 644,
        'ancestry' => '/305/643/644',
        'religion_name' => 'Sabians',
    ],
    [
        'id' => 645,
        'ancestry' => '/305/643/644/645',
        'religion_name' => 'Mandaean Nasaraean Sabeans',
    ],
    [
        'id' => 646,
        'ancestry' => '/305/643/644/646',
        'religion_name' => 'Sabians of Harran',
    ],
    [
        'id' => 647,
        'ancestry' => '/305/647',
        'religion_name' => 'Manichaeism',
    ],
    [
        'id' => 648,
        'ancestry' => '/305/648',
        'religion_name' => 'Rastafari',
    ],
    [
        'id' => 649,
        'ancestry' => '/305/648/649',
        'religion_name' => 'Bobo Ashanti',
    ],
    [
        'id' => 650,
        'ancestry' => '/305/648/650',
        'religion_name' => 'Nyabinghi',
    ],
    [
        'id' => 651,
        'ancestry' => '/305/648/651',
        'religion_name' => 'Twelve Tribes of Israel',
    ],
    [
        'id' => 652,
        'ancestry' => '/305/652',
        'religion_name' => 'Black Hebrew Israelites',
    ],
    [
        'id' => 653,
        'ancestry' => '/305/652/653',
        'religion_name' => 'African Hebrew Israelites of Jerusalem',
    ],
    [
        'id' => 654,
        'ancestry' => '/305/652/654',
        'religion_name' => 'Commandment Keepers',
    ],
    [
        'id' => 655,
        'ancestry' => '/305/652/655',
        'religion_name' => 'One West Camp',
    ],
    [
        'id' => 656,
        'ancestry' => '/305/656',
        'religion_name' => 'Shabakism',
    ],
    [
        'id' => 657,
        'ancestry' => '/305/657',
        'religion_name' => 'Yazdânism',
    ],
    [
        'id' => 658,
        'ancestry' => '/305/657/658',
        'religion_name' => 'Yarsanism',
    ],
    [
        'id' => 659,
        'ancestry' => '/305/657/659',
        'religion_name' => 'Yazidi',
    ],
    [
        'id' => 660,
        'ancestry' => '/305/660',
        'religion_name' => 'Zoroastrianism',
    ],
    [
        'id' => 661,
        'ancestry' => '/305/660/661',
        'religion_name' => 'Behafaridians (Historical)',
    ],
    [
        'id' => 662,
        'ancestry' => '/305/660/662',
        'religion_name' => 'Mazdakism (Historical)',
    ],
    [
        'id' => 663,
        'ancestry' => '/305/660/663',
        'religion_name' => 'Zurvanism (Historical)',
    ],
    [
        'id' => 664,
        'ancestry' => '/664',
        'religion_name' => 'Indigenous (ethnic, folk) religions*',
    ],
    [
        'id' => 665,
        'ancestry' => '/664/665',
        'religion_name' => 'African*',
    ],
    [
        'id' => 666,
        'ancestry' => '/664/665/666',
        'religion_name' => 'Aleyhim',
    ],
    [
        'id' => 667,
        'ancestry' => '/664/665/667',
        'religion_name' => 'Traditional African*',
    ],
    [
        'id' => 668,
        'ancestry' => '/664/665/667/668',
        'religion_name' => 'Akan religion',
    ],
    [
        'id' => 669,
        'ancestry' => '/664/665/667/669',
        'religion_name' => 'Akamba religion',
    ],
    [
        'id' => 670,
        'ancestry' => '/664/665/667/670',
        'religion_name' => 'Baluba mythology',
    ],
    [
        'id' => 671,
        'ancestry' => '/664/665/667/671',
        'religion_name' => 'Bantu mythology',
    ],
    [
        'id' => 672,
        'ancestry' => '/664/665/667/671/672',
        'religion_name' => 'Kongo religion',
    ],
    [
        'id' => 673,
        'ancestry' => '/664/665/667/671/673',
        'religion_name' => 'Zulu traditional religion',
    ],
    [
        'id' => 674,
        'ancestry' => '/664/665/667/674',
        'religion_name' => 'Berber religion',
    ],
    [
        'id' => 675,
        'ancestry' => '/664/665/667/675',
        'religion_name' => 'Bushongo mythology',
    ],
    [
        'id' => 676,
        'ancestry' => '/664/665/667/676',
        'religion_name' => 'Dinka religion',
    ],
    [
        'id' => 677,
        'ancestry' => '/664/665/667/677',
        'religion_name' => 'Efik mythology',
    ],
    [
        'id' => 678,
        'ancestry' => '/664/665/667/678',
        'religion_name' => 'Fon and Ewe religion',
    ],
    [
        'id' => 679,
        'ancestry' => '/664/665/667/679',
        'religion_name' => 'Igbo religion',
    ],
    [
        'id' => 680,
        'ancestry' => '/664/665/667/680',
        'religion_name' => 'Ik religion',
    ],
    [
        'id' => 681,
        'ancestry' => '/664/665/667/681',
        'religion_name' => 'Lotuko mythology',
    ],
    [
        'id' => 682,
        'ancestry' => '/664/665/667/682',
        'religion_name' => 'Lozi mythology',
    ],
    [
        'id' => 683,
        'ancestry' => '/664/665/667/683',
        'religion_name' => 'Lugbara mythology',
    ],
    [
        'id' => 684,
        'ancestry' => '/664/665/667/684',
        'religion_name' => 'Maasai mythology',
    ],
    [
        'id' => 685,
        'ancestry' => '/664/665/667/685',
        'religion_name' => 'Mbuti mythology',
    ],
    [
        'id' => 686,
        'ancestry' => '/664/665/667/686',
        'religion_name' => 'San religion',
    ],
    [
        'id' => 687,
        'ancestry' => '/664/665/667/687',
        'religion_name' => 'Serer religion',
    ],
    [
        'id' => 688,
        'ancestry' => '/664/665/667/688',
        'religion_name' => 'Tumbuka mythology',
    ],
    [
        'id' => 689,
        'ancestry' => '/664/665/667/689',
        'religion_name' => 'Urhobo people',
    ],
    [
        'id' => 690,
        'ancestry' => '/664/665/667/690',
        'religion_name' => 'Waaq',
    ],
    [
        'id' => 691,
        'ancestry' => '/664/665/667/691',
        'religion_name' => 'Yoruba religion',
    ],
    [
        'id' => 692,
        'ancestry' => '/664/665/667/691/692',
        'religion_name' => 'Ifá',
    ],
    [
        'id' => 693,
        'ancestry' => '/664/665/693',
        'religion_name' => 'Diasporic African*',
    ],
    [
        'id' => 694,
        'ancestry' => '/664/665/693/694',
        'religion_name' => 'Abakuá',
    ],
    [
        'id' => 695,
        'ancestry' => '/664/665/693/695',
        'religion_name' => 'Candomblé',
    ],
    [
        'id' => 696,
        'ancestry' => '/664/665/693/695/696',
        'religion_name' => 'Candomblé Bantu',
    ],
    [
        'id' => 697,
        'ancestry' => '/664/665/693/695/697',
        'religion_name' => 'Candomblé Jejé',
    ],
    [
        'id' => 698,
        'ancestry' => '/664/665/693/695/698',
        'religion_name' => 'Candomblé Ketu',
    ],
    [
        'id' => 699,
        'ancestry' => '/664/665/693/699',
        'religion_name' => 'Comfa',
    ],
    [
        'id' => 700,
        'ancestry' => '/664/665/693/700',
        'religion_name' => 'Convince',
    ],
    [
        'id' => 701,
        'ancestry' => '/664/665/693/701',
        'religion_name' => 'Cuban Vodú',
    ],
    [
        'id' => 702,
        'ancestry' => '/664/665/693/702',
        'religion_name' => 'Dominican Vudú',
    ],
    [
        'id' => 703,
        'ancestry' => '/664/665/693/703',
        'religion_name' => 'Espiritismo',
    ],
    [
        'id' => 704,
        'ancestry' => '/664/665/693/704',
        'religion_name' => 'Haitian Vodou',
    ],
    [
        'id' => 705,
        'ancestry' => '/664/665/693/705',
        'religion_name' => 'Hoodoo',
    ],
    [
        'id' => 706,
        'ancestry' => '/664/665/693/706',
        'religion_name' => 'Jamaican Maroon religion',
    ],
    [
        'id' => 707,
        'ancestry' => '/664/665/693/706/707',
        'religion_name' => 'Kromanti dance',
    ],
    [
        'id' => 708,
        'ancestry' => '/664/665/693/708',
        'religion_name' => 'Kélé',
    ],
    [
        'id' => 709,
        'ancestry' => '/664/665/693/709',
        'religion_name' => 'Kumina',
    ],
    [
        'id' => 710,
        'ancestry' => '/664/665/693/710',
        'religion_name' => 'Louisiana Voodoo',
    ],
    [
        'id' => 711,
        'ancestry' => '/664/665/693/711',
        'religion_name' => 'Montamentu',
    ],
    [
        'id' => 712,
        'ancestry' => '/664/665/693/712',
        'religion_name' => 'Myal',
    ],
    [
        'id' => 713,
        'ancestry' => '/664/665/693/713',
        'religion_name' => 'Obeah',
    ],
    [
        'id' => 714,
        'ancestry' => '/664/665/693/714',
        'religion_name' => 'Palo',
    ],
    [
        'id' => 715,
        'ancestry' => '/664/665/693/715',
        'religion_name' => 'Quimbanda',
    ],
    [
        'id' => 716,
        'ancestry' => '/664/665/693/716',
        'religion_name' => 'Santería',
    ],
    [
        'id' => 717,
        'ancestry' => '/664/665/693/717',
        'religion_name' => 'Tambor de Mina',
    ],
    [
        'id' => 718,
        'ancestry' => '/664/665/693/718',
        'religion_name' => 'Trinidad Orisha',
    ],
    [
        'id' => 719,
        'ancestry' => '/664/665/693/719',
        'religion_name' => 'Umbanda',
    ],
    [
        'id' => 720,
        'ancestry' => '/664/665/693/720',
        'religion_name' => 'Winti',
    ],
    [
        'id' => 721,
        'ancestry' => '/664/721',
        'religion_name' => 'Altaic*',
    ],
    [
        'id' => 722,
        'ancestry' => '/664/721/722',
        'religion_name' => 'Evenki shamanism',
    ],
    [
        'id' => 723,
        'ancestry' => '/664/721/723',
        'religion_name' => 'Manchu shamanism',
    ],
    [
        'id' => 724,
        'ancestry' => '/664/721/724',
        'religion_name' => 'Turkic-Mongolic religion',
    ],
    [
        'id' => 725,
        'ancestry' => '/664/721/724/725',
        'religion_name' => 'Tengrism',
    ],
    [
        'id' => 726,
        'ancestry' => '/664/721/724/726',
        'religion_name' => 'Burkhanism',
    ],
    [
        'id' => 727,
        'ancestry' => '/664/721/724/727',
        'religion_name' => 'Vattisen Yaly',
    ],
    [
        'id' => 728,
        'ancestry' => '/664/728',
        'religion_name' => 'American*',
    ],
    [
        'id' => 729,
        'ancestry' => '/664/728/729',
        'religion_name' => 'Abenaki mythology',
    ],
    [
        'id' => 730,
        'ancestry' => '/664/728/730',
        'religion_name' => 'Anishinaabe traditional beliefs',
    ],
    [
        'id' => 731,
        'ancestry' => '/664/728/731',
        'religion_name' => 'Blackfoot mythology',
    ],
    [
        'id' => 732,
        'ancestry' => '/664/728/732',
        'religion_name' => 'Californian religions',
    ],
    [
        'id' => 733,
        'ancestry' => '/664/728/732/733',
        'religion_name' => 'Miwok mythology',
    ],
    [
        'id' => 734,
        'ancestry' => '/664/728/732/734',
        'religion_name' => 'Ohlone mythology',
    ],
    [
        'id' => 735,
        'ancestry' => '/664/728/732/735',
        'religion_name' => 'Pomo religion',
    ],
    [
        'id' => 736,
        'ancestry' => '/664/728/736',
        'religion_name' => 'Cherokee mythology',
    ],
    [
        'id' => 737,
        'ancestry' => '/664/728/737',
        'religion_name' => 'Chickasaw religion',
    ],
    [
        'id' => 738,
        'ancestry' => '/664/728/738',
        'religion_name' => 'Chilote mythology',
    ],
    [
        'id' => 739,
        'ancestry' => '/664/728/739',
        'religion_name' => 'Choctaw mythology',
    ],
    [
        'id' => 740,
        'ancestry' => '/664/728/740',
        'religion_name' => 'Creek mythology',
    ],
    [
        'id' => 741,
        'ancestry' => '/664/728/741',
        'religion_name' => 'Guarani mythology',
    ],
    [
        'id' => 742,
        'ancestry' => '/664/728/742',
        'religion_name' => 'Haida mythology',
    ],
    [
        'id' => 743,
        'ancestry' => '/664/728/743',
        'religion_name' => 'Ho-Chunk mythology',
    ],
    [
        'id' => 744,
        'ancestry' => '/664/728/744',
        'religion_name' => 'Hopi mythology',
    ],
    [
        'id' => 745,
        'ancestry' => '/664/728/745',
        'religion_name' => 'Iroquois mythology',
    ],
    [
        'id' => 746,
        'ancestry' => '/664/728/745/746',
        'religion_name' => 'Seneca mythology',
    ],
    [
        'id' => 747,
        'ancestry' => '/664/728/745/747',
        'religion_name' => 'Wyandot religion',
    ],
    [
        'id' => 748,
        'ancestry' => '/664/728/745/748',
        'religion_name' => 'Longhouse Religion',
    ],
    [
        'id' => 749,
        'ancestry' => '/664/728/749',
        'religion_name' => 'Jivaroan religion',
    ],
    [
        'id' => 750,
        'ancestry' => '/664/728/750',
        'religion_name' => 'Kwakwakaʼwakw mythology',
    ],
    [
        'id' => 751,
        'ancestry' => '/664/728/751',
        'religion_name' => 'Lakota mythology',
    ],
    [
        'id' => 752,
        'ancestry' => '/664/728/752',
        'religion_name' => 'Lenape mythology',
    ],
    [
        'id' => 753,
        'ancestry' => '/664/728/753',
        'religion_name' => 'Mapuche religion',
    ],
    [
        'id' => 754,
        'ancestry' => '/664/728/754',
        'religion_name' => 'Mesoamerican religion',
    ],
    [
        'id' => 755,
        'ancestry' => '/664/728/754/755',
        'religion_name' => 'Aztec religion',
    ],
    [
        'id' => 756,
        'ancestry' => '/664/728/754/756',
        'religion_name' => 'Maya religion',
    ],
    [
        'id' => 757,
        'ancestry' => '/664/728/754/757',
        'religion_name' => 'Purépecha religion',
    ],
    [
        'id' => 758,
        'ancestry' => '/664/728/758',
        'religion_name' => 'Midewiwin',
    ],
    [
        'id' => 759,
        'ancestry' => '/664/728/759',
        'religion_name' => 'Muisca mythology',
    ],
    [
        'id' => 760,
        'ancestry' => '/664/728/760',
        'religion_name' => 'Navajo religion',
    ],
    [
        'id' => 761,
        'ancestry' => '/664/728/761',
        'religion_name' => 'Nuu-chah-nulth mythology',
    ],
    [
        'id' => 762,
        'ancestry' => '/664/728/762',
        'religion_name' => 'Pawnee mythology',
    ],
    [
        'id' => 763,
        'ancestry' => '/664/728/763',
        'religion_name' => 'Tsimshian mythology',
    ],
    [
        'id' => 764,
        'ancestry' => '/664/728/764',
        'religion_name' => 'Ute mythology',
    ],
    [
        'id' => 765,
        'ancestry' => '/664/728/765',
        'religion_name' => 'Zuni mythology',
    ],
    [
        'id' => 766,
        'ancestry' => '/664/766',
        'religion_name' => 'Austroasiatic*',
    ],
    [
        'id' => 767,
        'ancestry' => '/664/766/767',
        'religion_name' => 'Sarnaism',
    ],
    [
        'id' => 768,
        'ancestry' => '/664/766/768',
        'religion_name' => 'Vietnamese folk religion',
    ],
    [
        'id' => 769,
        'ancestry' => '/664/766/768/769',
        'religion_name' => 'Caodaism',
    ],
    [
        'id' => 770,
        'ancestry' => '/664/766/768/770',
        'religion_name' => 'Đạo Mẫu',
    ],
    [
        'id' => 771,
        'ancestry' => '/664/766/768/771',
        'religion_name' => 'Hoahaoism',
    ],
    [
        'id' => 772,
        'ancestry' => '/664/772',
        'religion_name' => 'Austronesian*',
    ],
    [
        'id' => 773,
        'ancestry' => '/664/772/773',
        'religion_name' => 'Batak Parmalim',
    ],
    [
        'id' => 774,
        'ancestry' => '/664/772/774',
        'religion_name' => 'Dayak religion',
    ],
    [
        'id' => 775,
        'ancestry' => '/664/772/774/775',
        'religion_name' => 'Kaharingan',
    ],
    [
        'id' => 776,
        'ancestry' => '/664/772/774/776',
        'religion_name' => 'Momolianism',
    ],
    [
        'id' => 777,
        'ancestry' => '/664/772/777',
        'religion_name' => 'Javanese Kejawèn',
    ],
    [
        'id' => 778,
        'ancestry' => '/664/772/778',
        'religion_name' => 'Karo Pemena',
    ],
    [
        'id' => 779,
        'ancestry' => '/664/772/779',
        'religion_name' => 'Malaysian folk religion',
    ],
    [
        'id' => 780,
        'ancestry' => '/664/772/780',
        'religion_name' => 'Philippine Dayawism',
    ],
    [
        'id' => 781,
        'ancestry' => '/664/772/780/781',
        'religion_name' => 'Tagalog beliefs',
    ],
    [
        'id' => 782,
        'ancestry' => '/664/772/782',
        'religion_name' => 'Polynesian mythology',
    ],
    [
        'id' => 783,
        'ancestry' => '/664/772/782/783',
        'religion_name' => 'Hawaiian religion',
    ],
    [
        'id' => 784,
        'ancestry' => '/664/772/782/784',
        'religion_name' => 'Māori religion',
    ],
    [
        'id' => 785,
        'ancestry' => '/664/772/785',
        'religion_name' => 'Sumbese Marapu',
    ],
    [
        'id' => 786,
        'ancestry' => '/664/772/786',
        'religion_name' => 'Sundanese Wiwitan',
    ],
    [
        'id' => 787,
        'ancestry' => '/664/787',
        'religion_name' => 'Chinese*',
    ],
    [
        'id' => 788,
        'ancestry' => '/664/787/788',
        'religion_name' => 'Chinese ritual mastery traditions',
    ],
    [
        'id' => 789,
        'ancestry' => '/664/787/789',
        'religion_name' => 'Chinese salvationist religions',
    ],
    [
        'id' => 790,
        'ancestry' => '/664/787/789/790',
        'religion_name' => 'Xiantiandao',
    ],
    [
        'id' => 791,
        'ancestry' => '/664/787/789/791',
        'religion_name' => 'Yiguandao',
    ],
    [
        'id' => 792,
        'ancestry' => '/664/787/792',
        'religion_name' => 'Luoism',
    ],
    [
        'id' => 793,
        'ancestry' => '/664/787/793',
        'religion_name' => 'Nuo folk religion',
    ],
    [
        'id' => 794,
        'ancestry' => '/664/787/794',
        'religion_name' => 'Yao folk religion',
    ],
    [
        'id' => 795,
        'ancestry' => '/664/795',
        'religion_name' => 'Japanese*',
    ],
    [
        'id' => 796,
        'ancestry' => '/664/795/796',
        'religion_name' => 'Ryukyuan religion',
    ],
    [
        'id' => 797,
        'ancestry' => '/664/795/797',
        'religion_name' => 'Shinto',
    ],
    [
        'id' => 798,
        'ancestry' => '/664/798',
        'religion_name' => 'Korean*',
    ],
    [
        'id' => 799,
        'ancestry' => '/664/798/799',
        'religion_name' => 'Cheondoism',
    ],
    [
        'id' => 800,
        'ancestry' => '/664/798/800',
        'religion_name' => 'Jeungsanism',
    ],
    [
        'id' => 801,
        'ancestry' => '/664/798/801',
        'religion_name' => 'Korean shamanism',
    ],
    [
        'id' => 802,
        'ancestry' => '/664/802',
        'religion_name' => 'Tai*',
    ],
    [
        'id' => 803,
        'ancestry' => '/664/802/803',
        'religion_name' => 'Ahom religion',
    ],
    [
        'id' => 804,
        'ancestry' => '/664/802/804',
        'religion_name' => 'Mo religion',
    ],
    [
        'id' => 805,
        'ancestry' => '/664/805',
        'religion_name' => 'Tibetic*',
    ],
    [
        'id' => 806,
        'ancestry' => '/664/805/806',
        'religion_name' => 'Bon',
    ],
    [
        'id' => 807,
        'ancestry' => '/664/805/807',
        'religion_name' => 'Burmese folk religion',
    ],
    [
        'id' => 808,
        'ancestry' => '/664/805/808',
        'religion_name' => 'Benzhuism',
    ],
    [
        'id' => 809,
        'ancestry' => '/664/805/809',
        'religion_name' => 'Bimoism',
    ],
    [
        'id' => 810,
        'ancestry' => '/664/805/810',
        'religion_name' => 'Bathouism',
    ],
    [
        'id' => 811,
        'ancestry' => '/664/805/811',
        'religion_name' => 'Bongthingism',
    ],
    [
        'id' => 812,
        'ancestry' => '/664/805/812',
        'religion_name' => 'Donyi-Polo',
    ],
    [
        'id' => 813,
        'ancestry' => '/664/805/813',
        'religion_name' => 'Kiratism',
    ],
    [
        'id' => 814,
        'ancestry' => '/664/805/814',
        'religion_name' => 'Qiang folk religion',
    ],
    [
        'id' => 815,
        'ancestry' => '/664/805/815',
        'religion_name' => 'Sanamahism',
    ],
    [
        'id' => 816,
        'ancestry' => '/664/816',
        'religion_name' => 'Uralic*',
    ],
    [
        'id' => 817,
        'ancestry' => '/664/816/817',
        'religion_name' => 'Mari Native Religion',
    ],
    [
        'id' => 818,
        'ancestry' => '/664/816/818',
        'religion_name' => 'Mordvin Native Religion',
    ],
    [
        'id' => 819,
        'ancestry' => '/664/816/819',
        'religion_name' => 'Sámi shamanism',
    ],
    [
        'id' => 820,
        'ancestry' => '/664/816/820',
        'religion_name' => 'Udmurt Vos',
    ],
    [
        'id' => 821,
        'ancestry' => '/664/821',
        'religion_name' => 'Other Indigenous*',
    ],
    [
        'id' => 822,
        'ancestry' => '/664/821/822',
        'religion_name' => 'Australian Aboriginal religion and mythology',
    ],
    [
        'id' => 823,
        'ancestry' => '/664/821/823',
        'religion_name' => 'Circassian (Adyghe Habze)',
    ],
    [
        'id' => 824,
        'ancestry' => '/664/821/824',
        'religion_name' => 'Dravidian folk religion',
    ],
    [
        'id' => 825,
        'ancestry' => '/664/821/825',
        'religion_name' => 'Inuit religion',
    ],
    [
        'id' => 826,
        'ancestry' => '/664/821/826',
        'religion_name' => 'Miao folk religion',
    ],
    [
        'id' => 827,
        'ancestry' => '/664/821/827',
        'religion_name' => 'Ossetian',
    ],
    [
        'id' => 828,
        'ancestry' => '/664/821/828',
        'religion_name' => 'Papuan mythology',
    ],
    [
        'id' => 829,
        'ancestry' => '/664/821/829',
        'religion_name' => 'Siberian shamanism',
    ],
    [
        'id' => 830,
        'ancestry' => '/830',
        'religion_name' => 'New religious movements',
    ],
    [
        'id' => 831,
        'ancestry' => '/830/831',
        'religion_name' => 'Cargo cults*',
    ],
    [
        'id' => 832,
        'ancestry' => '/830/831/832',
        'religion_name' => 'John Frum',
    ],
    [
        'id' => 833,
        'ancestry' => '/830/831/833',
        'religion_name' => 'Johnson cult',
    ],
    [
        'id' => 834,
        'ancestry' => '/830/831/834',
        'religion_name' => 'Prince Philip Movement',
    ],
    [
        'id' => 835,
        'ancestry' => '/830/831/835',
        'religion_name' => 'Vailala Madness',
    ],
    [
        'id' => 836,
        'ancestry' => '/830/836',
        'religion_name' => 'New ethnic religions',
    ],
    [
        'id' => 837,
        'ancestry' => '/830/836/837',
        'religion_name' => 'Black*',
    ],
    [
        'id' => 838,
        'ancestry' => '/830/836/837/838',
        'religion_name' => 'Ausar Auset Society',
    ],
    [
        'id' => 839,
        'ancestry' => '/830/836/837/839',
        'religion_name' => 'Black Hebrew Israelites',
    ],
    [
        'id' => 840,
        'ancestry' => '/830/836/837/839/840',
        'religion_name' => 'Church of God and Saints of Christ',
    ],
    [
        'id' => 841,
        'ancestry' => '/830/836/837/839/841',
        'religion_name' => 'Commandment Keepers',
    ],
    [
        'id' => 842,
        'ancestry' => '/830/836/837/839/842',
        'religion_name' => 'Israelite Church of God in Jesus Christ',
    ],
    [
        'id' => 843,
        'ancestry' => '/830/836/837/839/843',
        'religion_name' => 'Israelite School of Universal Practical Knowledge',
    ],
    [
        'id' => 844,
        'ancestry' => '/830/836/837/839/844',
        'religion_name' => 'Nation of Yahweh',
    ],
    [
        'id' => 845,
        'ancestry' => '/830/836/837/845',
        'religion_name' => 'Dini Ya Msambwa',
    ],
    [
        'id' => 846,
        'ancestry' => '/830/836/837/846',
        'religion_name' => 'Five-Percent Nation',
    ],
    [
        'id' => 847,
        'ancestry' => '/830/836/837/847',
        'religion_name' => 'Moorish Science Temple of America',
    ],
    [
        'id' => 848,
        'ancestry' => '/830/836/837/847/848',
        'religion_name' => 'Moorish Orthodox Church of America',
    ],
    [
        'id' => 849,
        'ancestry' => '/830/836/837/849',
        'religion_name' => 'Mumboism',
    ],
    [
        'id' => 850,
        'ancestry' => '/830/836/837/850',
        'religion_name' => 'Nation of Islam',
    ],
    [
        'id' => 851,
        'ancestry' => '/830/836/837/850/851',
        'religion_name' => 'United Nation of Islam',
    ],
    [
        'id' => 852,
        'ancestry' => '/830/836/837/852',
        'religion_name' => 'Nuwaubian Nation',
    ],
    [
        'id' => 853,
        'ancestry' => '/830/836/853',
        'religion_name' => 'White*',
    ],
    [
        'id' => 854,
        'ancestry' => '/830/836/853/854',
        'religion_name' => 'Ariosophy',
    ],
    [
        'id' => 855,
        'ancestry' => '/830/836/853/855',
        'religion_name' => 'Black Order',
    ],
    [
        'id' => 856,
        'ancestry' => '/830/836/853/856',
        'religion_name' => 'Christian Identity',
    ],
    [
        'id' => 857,
        'ancestry' => '/830/836/853/857',
        'religion_name' => 'Creativity',
    ],
    [
        'id' => 858,
        'ancestry' => '/830/836/853/858',
        'religion_name' => 'Neo-völkisch movements',
    ],
    [
        'id' => 859,
        'ancestry' => '/830/836/853/858/859',
        'religion_name' => 'Wotansvolk',
    ],
    [
        'id' => 860,
        'ancestry' => '/830/836/853/860',
        'religion_name' => 'Order of Nine Angles',
    ],
    [
        'id' => 861,
        'ancestry' => '/830/836/853/861',
        'religion_name' => 'Thule Society',
    ],
    [
        'id' => 862,
        'ancestry' => '/830/836/862',
        'religion_name' => 'Native American*',
    ],
    [
        'id' => 863,
        'ancestry' => '/830/836/862/863',
        'religion_name' => 'Ghost Dance',
    ],
    [
        'id' => 864,
        'ancestry' => '/830/836/862/864',
        'religion_name' => 'Indian Shaker Church',
    ],
    [
        'id' => 865,
        'ancestry' => '/830/836/862/865',
        'religion_name' => 'Native American Church',
    ],
    [
        'id' => 866,
        'ancestry' => '/830/836/866',
        'religion_name' => 'Chicano/Mexican-American',
    ],
    [
        'id' => 867,
        'ancestry' => '/830/836/866/867',
        'religion_name' => 'Mexicayotl',
    ],
    [
        'id' => 868,
        'ancestry' => '/830/868',
        'religion_name' => 'Modern paganism',
    ],
    [
        'id' => 869,
        'ancestry' => '/830/868/869',
        'religion_name' => 'Ethnic neopaganism',
    ],
    [
        'id' => 870,
        'ancestry' => '/830/868/869/870',
        'religion_name' => 'Abkhaz neopaganism',
    ],
    [
        'id' => 871,
        'ancestry' => '/830/868/869/870/871',
        'religion_name' => 'Council of Priests of Abkhazia',
    ],
    [
        'id' => 872,
        'ancestry' => '/830/868/869/872',
        'religion_name' => 'Armenian neopaganism',
    ],
    [
        'id' => 873,
        'ancestry' => '/830/868/869/873',
        'religion_name' => 'Baltic neopaganism',
    ],
    [
        'id' => 874,
        'ancestry' => '/830/868/869/874',
        'religion_name' => 'Caucasian neopaganism',
    ],
    [
        'id' => 875,
        'ancestry' => '/830/868/869/875',
        'religion_name' => 'Celtic neopaganism',
    ],
    [
        'id' => 876,
        'ancestry' => '/830/868/869/876',
        'religion_name' => 'Dievturība',
    ],
    [
        'id' => 877,
        'ancestry' => '/830/868/869/877',
        'religion_name' => 'Estonian neopaganism',
    ],
    [
        'id' => 878,
        'ancestry' => '/830/868/869/878',
        'religion_name' => 'Finnish neopaganism',
    ],
    [
        'id' => 879,
        'ancestry' => '/830/868/869/879',
        'religion_name' => 'Heathenry (a.k.a. Germanic neopaganism)',
    ],
    [
        'id' => 880,
        'ancestry' => '/830/868/869/880',
        'religion_name' => 'Hellenism',
    ],
    [
        'id' => 881,
        'ancestry' => '/830/868/869/881',
        'religion_name' => 'Hungarian neopaganism',
    ],
    [
        'id' => 882,
        'ancestry' => '/830/868/869/882',
        'religion_name' => 'Italo-Roman neopaganism',
    ],
    [
        'id' => 883,
        'ancestry' => '/830/868/869/883',
        'religion_name' => 'Kemetism',
    ],
    [
        'id' => 884,
        'ancestry' => '/830/868/869/883/884',
        'religion_name' => 'Kemetic Orthodoxy',
    ],
    [
        'id' => 885,
        'ancestry' => '/830/868/869/885',
        'religion_name' => 'Romuva',
    ],
    [
        'id' => 886,
        'ancestry' => '/830/868/869/886',
        'religion_name' => 'Semitic neopaganism',
    ],
    [
        'id' => 887,
        'ancestry' => '/830/868/869/887',
        'religion_name' => 'Slavic neopaganism',
    ],
    [
        'id' => 888,
        'ancestry' => '/830/868/869/887/888',
        'religion_name' => 'RUNVira (a.k.a. Sylenkoism)',
    ],
    [
        'id' => 889,
        'ancestry' => '/830/868/869/887/889',
        'religion_name' => 'Peterburgian Vedism',
    ],
    [
        'id' => 890,
        'ancestry' => '/830/868/869/887/890',
        'religion_name' => 'Native Polish Church',
    ],
    [
        'id' => 891,
        'ancestry' => '/830/868/869/887/891',
        'religion_name' => 'Union of Slavic Native Belief Communities',
    ],
    [
        'id' => 892,
        'ancestry' => '/830/868/869/887/892',
        'religion_name' => 'Native Faith Association of Ukraine',
    ],
    [
        'id' => 893,
        'ancestry' => '/830/868/869/887/893',
        'religion_name' => 'Ynglism',
    ],
    [
        'id' => 894,
        'ancestry' => '/830/868/869/894',
        'religion_name' => 'Zalmoxianism',
    ],
    [
        'id' => 895,
        'ancestry' => '/830/868/869/895',
        'religion_name' => 'Zuism',
    ],
    [
        'id' => 896,
        'ancestry' => '/830/868/896',
        'religion_name' => 'Syncretic neopaganism',
    ],
    [
        'id' => 897,
        'ancestry' => '/830/868/896/897',
        'religion_name' => 'Adonism',
    ],
    [
        'id' => 898,
        'ancestry' => '/830/868/896/898',
        'religion_name' => 'Church of All Worlds',
    ],
    [
        'id' => 899,
        'ancestry' => '/830/868/896/899',
        'religion_name' => 'Church of Aphrodite',
    ],
    [
        'id' => 900,
        'ancestry' => '/830/868/896/900',
        'religion_name' => 'Feraferia',
    ],
    [
        'id' => 901,
        'ancestry' => '/830/868/896/901',
        'religion_name' => 'Goddess movement',
    ],
    [
        'id' => 902,
        'ancestry' => '/830/868/896/902',
        'religion_name' => 'Neo-Druidism',
    ],
    [
        'id' => 903,
        'ancestry' => '/830/868/896/902/903',
        'religion_name' => 'Ár nDraíocht Féin',
    ],
    [
        'id' => 904,
        'ancestry' => '/830/868/896/902/904',
        'religion_name' => 'Order of Bards, Ovates, and Druids',
    ],
    [
        'id' => 905,
        'ancestry' => '/830/868/896/902/905',
        'religion_name' => 'Reformed Druids of North America',
    ],
    [
        'id' => 906,
        'ancestry' => '/830/868/896/906',
        'religion_name' => 'Neoshamanism',
    ],
    [
        'id' => 907,
        'ancestry' => '/830/868/896/907',
        'religion_name' => 'Pow-wow',
    ],
    [
        'id' => 908,
        'ancestry' => '/830/868/896/908',
        'religion_name' => 'Radical Faeries',
    ],
    [
        'id' => 909,
        'ancestry' => '/830/868/896/909',
        'religion_name' => 'Summum',
    ],
    [
        'id' => 910,
        'ancestry' => '/830/868/896/910',
        'religion_name' => 'Technopaganism',
    ],
    [
        'id' => 911,
        'ancestry' => '/830/868/896/911',
        'religion_name' => 'Wicca',
    ],
    [
        'id' => 912,
        'ancestry' => '/830/868/896/911/912',
        'religion_name' => 'British Traditional Wicca',
    ],
    [
        'id' => 913,
        'ancestry' => '/830/868/896/911/912/913',
        'religion_name' => 'Gardnerian Wicca',
    ],
    [
        'id' => 914,
        'ancestry' => '/830/868/896/911/912/914',
        'religion_name' => 'Alexandrian Wicca',
    ],
    [
        'id' => 915,
        'ancestry' => '/830/868/896/911/912/915',
        'religion_name' => 'Central Valley Wicca',
    ],
    [
        'id' => 916,
        'ancestry' => '/830/868/896/911/912/916',
        'religion_name' => 'Algard Wicca',
    ],
    [
        'id' => 917,
        'ancestry' => '/830/868/896/911/912/917',
        'religion_name' => 'Chthonioi Alexandrian Wicca',
    ],
    [
        'id' => 918,
        'ancestry' => '/830/868/896/911/912/918',
        'religion_name' => 'Blue Star Wicca',
    ],
    [
        'id' => 919,
        'ancestry' => '/830/868/896/911/919',
        'religion_name' => 'Seax-Wica',
    ],
    [
        'id' => 920,
        'ancestry' => '/830/868/896/911/920',
        'religion_name' => 'Universal Eclectic Wicca',
    ],
    [
        'id' => 921,
        'ancestry' => '/830/868/896/911/921',
        'religion_name' => 'Celtic Wicca',
    ],
    [
        'id' => 922,
        'ancestry' => '/830/868/896/911/922',
        'religion_name' => 'Dianic Wicca',
    ],
    [
        'id' => 923,
        'ancestry' => '/830/868/896/911/923',
        'religion_name' => 'Faery Wicca',
    ],
    [
        'id' => 924,
        'ancestry' => '/830/868/896/911/924',
        'religion_name' => 'Feri Tradition',
    ],
    [
        'id' => 925,
        'ancestry' => '/830/868/896/911/925',
        'religion_name' => 'Georgian Wicca',
    ],
    [
        'id' => 926,
        'ancestry' => '/830/868/896/911/926',
        'religion_name' => 'Odyssean Wicca',
    ],
    [
        'id' => 927,
        'ancestry' => '/830/868/896/911/927',
        'religion_name' => 'Wiccan church',
    ],
    [
        'id' => 928,
        'ancestry' => '/830/868/896/911/927/928',
        'religion_name' => 'Covenant of the Goddess',
    ],
    [
        'id' => 929,
        'ancestry' => '/830/929',
        'religion_name' => 'Entheogenic religions*',
    ],
    [
        'id' => 930,
        'ancestry' => '/830/929/930',
        'religion_name' => 'Church of the Universe',
    ],
    [
        'id' => 931,
        'ancestry' => '/830/929/931',
        'religion_name' => 'Neo-American Church',
    ],
    [
        'id' => 932,
        'ancestry' => '/830/929/932',
        'religion_name' => 'Santo Daime',
    ],
    [
        'id' => 933,
        'ancestry' => '/830/929/933',
        'religion_name' => 'Temple of the True Inner Light',
    ],
    [
        'id' => 934,
        'ancestry' => '/830/929/934',
        'religion_name' => 'Tensegrity',
    ],
    [
        'id' => 935,
        'ancestry' => '/830/929/935',
        'religion_name' => 'THC Ministry',
    ],
    [
        'id' => 936,
        'ancestry' => '/830/929/936',
        'religion_name' => 'União do Vegetal',
    ],
    [
        'id' => 937,
        'ancestry' => '/830/937',
        'religion_name' => 'New Thought*',
    ],
    [
        'id' => 938,
        'ancestry' => '/830/937/938',
        'religion_name' => 'Christian Science',
    ],
    [
        'id' => 939,
        'ancestry' => '/830/937/939',
        'religion_name' => 'Church of Divine Science',
    ],
    [
        'id' => 940,
        'ancestry' => '/830/937/940',
        'religion_name' => 'Church Universal and Triumphant',
    ],
    [
        'id' => 941,
        'ancestry' => '/830/937/941',
        'religion_name' => 'Jewish Science',
    ],
    [
        'id' => 942,
        'ancestry' => '/830/937/942',
        'religion_name' => 'Religious Science',
    ],
    [
        'id' => 943,
        'ancestry' => '/830/937/943',
        'religion_name' => 'Seicho-no-Ie',
    ],
    [
        'id' => 944,
        'ancestry' => '/830/937/944',
        'religion_name' => 'Unity Church',
    ],
    [
        'id' => 945,
        'ancestry' => '/830/945',
        'religion_name' => 'Parody religions*',
    ],
    [
        'id' => 946,
        'ancestry' => '/830/945/946',
        'religion_name' => 'Church of Euthanasia',
    ],
    [
        'id' => 947,
        'ancestry' => '/830/945/947',
        'religion_name' => 'Church of the Flying Spaghetti Monster (a.k.a. "Pastafarianism")',
    ],
    [
        'id' => 948,
        'ancestry' => '/830/945/948',
        'religion_name' => 'Church of the SubGenius',
    ],
    [
        'id' => 949,
        'ancestry' => '/830/945/949',
        'religion_name' => 'Dinkoism',
    ],
    [
        'id' => 950,
        'ancestry' => '/830/945/950',
        'religion_name' => 'Discordianism',
    ],
    [
        'id' => 951,
        'ancestry' => '/830/945/951',
        'religion_name' => 'Dudeism',
    ],
    [
        'id' => 952,
        'ancestry' => '/830/945/952',
        'religion_name' => 'Iglesia Maradoniana',
    ],
    [
        'id' => 953,
        'ancestry' => '/830/945/953',
        'religion_name' => 'Invisible Pink Unicorn',
    ],
    [
        'id' => 954,
        'ancestry' => '/830/945/954',
        'religion_name' => 'Jediism',
    ],
    [
        'id' => 955,
        'ancestry' => '/830/945/955',
        'religion_name' => 'Kibology',
    ],
    [
        'id' => 956,
        'ancestry' => '/830/945/956',
        'religion_name' => 'Kopimism',
    ],
    [
        'id' => 957,
        'ancestry' => '/830/945/957',
        'religion_name' => 'Landover Baptist Church',
    ],
    [
        'id' => 958,
        'ancestry' => '/830/945/958',
        'religion_name' => 'Last Thursdayism',
    ],
    [
        'id' => 959,
        'ancestry' => '/830/945/959',
        'religion_name' => 'Sillinism (Aerican Empire)',
    ],
    [
        'id' => 960,
        'ancestry' => '/830/960',
        'religion_name' => 'Post-theistic and naturalistic religions*',
    ],
    [
        'id' => 961,
        'ancestry' => '/830/960/961',
        'religion_name' => 'Cult of Reason (Historical)',
    ],
    [
        'id' => 962,
        'ancestry' => '/830/960/962',
        'religion_name' => 'Cult of the Supreme Being (Historical)',
    ],
    [
        'id' => 963,
        'ancestry' => '/830/960/963',
        'religion_name' => 'Deism',
    ],
    [
        'id' => 964,
        'ancestry' => '/830/960/964',
        'religion_name' => 'Ethical movement',
    ],
    [
        'id' => 965,
        'ancestry' => '/830/960/965',
        'religion_name' => 'Freethought',
    ],
    [
        'id' => 966,
        'ancestry' => '/830/960/965/966',
        'religion_name' => 'North Texas Church of Freethought',
    ],
    [
        'id' => 967,
        'ancestry' => '/830/960/967',
        'religion_name' => 'God-Building',
    ],
    [
        'id' => 968,
        'ancestry' => '/830/960/968',
        'religion_name' => 'Humanism',
    ],
    [
        'id' => 969,
        'ancestry' => '/830/960/969',
        'religion_name' => 'Ietsism',
    ],
    [
        'id' => 970,
        'ancestry' => '/830/960/970',
        'religion_name' => 'Moorish Orthodox Church of America',
    ],
    [
        'id' => 971,
        'ancestry' => '/830/960/971',
        'religion_name' => 'Pandeism',
    ],
    [
        'id' => 972,
        'ancestry' => '/830/960/972',
        'religion_name' => 'Pantheism',
    ],
    [
        'id' => 973,
        'ancestry' => '/830/960/972/973',
        'religion_name' => 'Naturalistic pantheism',
    ],
    [
        'id' => 974,
        'ancestry' => '/830/960/972/973/974',
        'religion_name' => 'World Pantheist Movement',
    ],
    [
        'id' => 975,
        'ancestry' => '/830/960/975',
        'religion_name' => 'Religion of Humanity',
    ],
    [
        'id' => 976,
        'ancestry' => '/830/960/976',
        'religion_name' => 'Syntheism',
    ],
    [
        'id' => 977,
        'ancestry' => '/830/960/977',
        'religion_name' => 'Unitarian Universalism',
    ],
    [
        'id' => 978,
        'ancestry' => '/830/960/978',
        'religion_name' => 'Universal Life Church',
    ],
    [
        'id' => 979,
        'ancestry' => '/830/979',
        'religion_name' => 'UFO religions*',
    ],
    [
        'id' => 980,
        'ancestry' => '/830/979/980',
        'religion_name' => 'Aetherius Society',
    ],
    [
        'id' => 981,
        'ancestry' => '/830/979/981',
        'religion_name' => 'Heaven\'s Gate',
    ],
    [
        'id' => 982,
        'ancestry' => '/830/979/982',
        'religion_name' => 'Raëlism',
    ],
    [
        'id' => 983,
        'ancestry' => '/830/979/983',
        'religion_name' => 'Scientology',
    ],
    [
        'id' => 984,
        'ancestry' => '/830/979/984',
        'religion_name' => 'Unarius Academy of Science',
    ],
    [
        'id' => 985,
        'ancestry' => '/830/979/985',
        'religion_name' => 'Universe people',
    ],
    [
        'id' => 986,
        'ancestry' => '/830/986',
        'religion_name' => 'Western esotericism*',
    ],
    [
        'id' => 987,
        'ancestry' => '/830/986/987',
        'religion_name' => 'Archeosophical Society',
    ],
    [
        'id' => 988,
        'ancestry' => '/830/986/988',
        'religion_name' => 'Builders of the Adytum',
    ],
    [
        'id' => 989,
        'ancestry' => '/830/986/989',
        'religion_name' => 'Fraternitas Saturni',
    ],
    [
        'id' => 990,
        'ancestry' => '/830/986/990',
        'religion_name' => 'Fraternity of the Inner Light',
    ],
    [
        'id' => 991,
        'ancestry' => '/830/986/991',
        'religion_name' => 'Hermetic Order of the Golden Dawn',
    ],
    [
        'id' => 992,
        'ancestry' => '/830/986/991/992',
        'religion_name' => 'The Open Source Order of the Golden Dawn',
    ],
    [
        'id' => 993,
        'ancestry' => '/830/986/993',
        'religion_name' => 'Hermeticism',
    ],
    [
        'id' => 994,
        'ancestry' => '/830/986/994',
        'religion_name' => 'Illuminates of Thanateros',
    ],
    [
        'id' => 995,
        'ancestry' => '/830/986/995',
        'religion_name' => 'Luciferianism',
    ],
    [
        'id' => 996,
        'ancestry' => '/830/986/996',
        'religion_name' => 'New Acropolis',
    ],
    [
        'id' => 997,
        'ancestry' => '/830/986/997',
        'religion_name' => 'Ordo Aurum Solis',
    ],
    [
        'id' => 998,
        'ancestry' => '/830/986/998',
        'religion_name' => 'Rosicrucian',
    ],
    [
        'id' => 999,
        'ancestry' => '/830/986/998/999',
        'religion_name' => 'Ancient Mystical Order Rosae Crucis',
    ],
    [
        'id' => 1000,
        'ancestry' => '/830/986/998/1000',
        'religion_name' => 'Rosicrucian Fellowship',
    ],
    [
        'id' => 1001,
        'ancestry' => '/830/986/1001',
        'religion_name' => 'Satanism',
    ],
    [
        'id' => 1002,
        'ancestry' => '/830/986/1001/1002',
        'religion_name' => 'LaVeyan Satanism',
    ],
    [
        'id' => 1003,
        'ancestry' => '/830/986/1001/1002/1003',
        'religion_name' => 'Church of Satan',
    ],
    [
        'id' => 1004,
        'ancestry' => '/830/986/1001/1002/1004',
        'religion_name' => 'First Satanic Church',
    ],
    [
        'id' => 1005,
        'ancestry' => '/830/986/1001/1002/1005',
        'religion_name' => 'The Satanic Temple',
    ],
    [
        'id' => 1006,
        'ancestry' => '/830/986/1001/1006',
        'religion_name' => 'Theistic Satanism',
    ],
    [
        'id' => 1007,
        'ancestry' => '/830/986/1001/1006/1007',
        'religion_name' => 'Our Lady of Endor Coven (a.k.a. Ophite Cultus Satanas)',
    ],
    [
        'id' => 1008,
        'ancestry' => '/830/986/1008',
        'religion_name' => 'Servants of the Light',
    ],
    [
        'id' => 1009,
        'ancestry' => '/830/986/1009',
        'religion_name' => 'Temple of Set',
    ],
    [
        'id' => 1010,
        'ancestry' => '/830/986/1010',
        'religion_name' => 'Thelema',
    ],
    [
        'id' => 1011,
        'ancestry' => '/830/986/1010/1011',
        'religion_name' => 'A∴A∴',
    ],
    [
        'id' => 1012,
        'ancestry' => '/830/986/1010/1012',
        'religion_name' => 'Ordo Templi Orientis',
    ],
    [
        'id' => 1013,
        'ancestry' => '/830/986/1010/1013',
        'religion_name' => 'Typhonian Order',
    ],
    [
        'id' => 1014,
        'ancestry' => '/830/986/1014',
        'religion_name' => 'Theosophy',
    ],
    [
        'id' => 1015,
        'ancestry' => '/830/986/1015',
        'religion_name' => 'Thee Temple ov Psychick Youth',
    ],
    [
        'id' => 1016,
        'ancestry' => '/830/1016',
        'religion_name' => 'Other New*',
    ],
    [
        'id' => 1017,
        'ancestry' => '/830/1016/1017',
        'religion_name' => 'Adidam',
    ],
    [
        'id' => 1018,
        'ancestry' => '/830/1016/1018',
        'religion_name' => 'Brahmoism',
    ],
    [
        'id' => 1019,
        'ancestry' => '/830/1016/1018/1019',
        'religion_name' => 'Sadharan Brahmo Samaj',
    ],
    [
        'id' => 1020,
        'ancestry' => '/830/1016/1020',
        'religion_name' => 'Eckankar',
    ],
    [
        'id' => 1021,
        'ancestry' => '/830/1016/1021',
        'religion_name' => 'The Family International',
    ],
    [
        'id' => 1022,
        'ancestry' => '/830/1016/1022',
        'religion_name' => 'Fourth Way',
    ],
    [
        'id' => 1023,
        'ancestry' => '/830/1016/1023',
        'religion_name' => 'Huna',
    ],
    [
        'id' => 1024,
        'ancestry' => '/830/1016/1024',
        'religion_name' => 'New Age',
    ],
    [
        'id' => 1025,
        'ancestry' => '/830/1016/1025',
        'religion_name' => 'Nontheism',
    ],
    [
        'id' => 1026,
        'ancestry' => '/830/1016/1026',
        'religion_name' => 'Omnism',
    ],
    [
        'id' => 1027,
        'ancestry' => '/830/1016/1027',
        'religion_name' => 'Open-source religion',
    ],
    [
        'id' => 1028,
        'ancestry' => '/830/1016/1028',
        'religion_name' => 'Rajneesh movement',
    ],
    [
        'id' => 1029,
        'ancestry' => '/830/1016/1029',
        'religion_name' => 'Santa Muerte',
    ],
    [
        'id' => 1030,
        'ancestry' => '/830/1016/1030',
        'religion_name' => 'Singularitarianism',
    ],
    [
        'id' => 1031,
        'ancestry' => '/830/1016/1031',
        'religion_name' => 'Spiritualism (Spiritism)',
    ],
    [
        'id' => 1032,
        'ancestry' => '/830/1016/1032',
        'religion_name' => 'Subud',
    ],
    [
        'id' => 1033,
        'ancestry' => '/830/1016/1033',
        'religion_name' => 'The Circle of Reason',
    ],
    [
        'id' => 1034,
        'ancestry' => '/1034',
        'religion_name' => 'Historical religions*',
    ],
    [
        'id' => 1035,
        'ancestry' => '/1034/1035',
        'religion_name' => 'Prehistoric religion',
    ],
    [
        'id' => 1036,
        'ancestry' => '/1034/1035/1036',
        'religion_name' => 'Paleolithic religion',
    ],
    [
        'id' => 1037,
        'ancestry' => '/1034/1037',
        'religion_name' => 'Harappan religion',
    ],
    [
        'id' => 1038,
        'ancestry' => '/1034/1038',
        'religion_name' => 'Ancient Egyptian religion',
    ],
    [
        'id' => 1039,
        'ancestry' => '/1034/1038/1039',
        'religion_name' => 'Atenism',
    ],
    [
        'id' => 1040,
        'ancestry' => '/1034/1040',
        'religion_name' => 'Ancient Mesopotamian religion',
    ],
    [
        'id' => 1041,
        'ancestry' => '/1034/1040/1041',
        'religion_name' => 'Sumerian religion',
    ],
    [
        'id' => 1042,
        'ancestry' => '/1034/1042',
        'religion_name' => 'Ancient Semitic religion',
    ],
    [
        'id' => 1043,
        'ancestry' => '/1034/1042/1043',
        'religion_name' => 'Ancient Canaanite religion',
    ],
    [
        'id' => 1044,
        'ancestry' => '/1034/1042/1044',
        'religion_name' => 'Yahwism',
    ],
    [
        'id' => 1045,
        'ancestry' => '/1034/1045',
        'religion_name' => 'Religion in pre-Islamic Arabia',
    ],
    [
        'id' => 1046,
        'ancestry' => '/1034/1046',
        'religion_name' => 'Somali mythology',
    ],
    [
        'id' => 1047,
        'ancestry' => '/1034/1047',
        'religion_name' => 'Hurrian religion',
    ],
    [
        'id' => 1048,
        'ancestry' => '/1034/1048',
        'religion_name' => 'Urartu religion',
    ],
    [
        'id' => 1049,
        'ancestry' => '/1034/1049',
        'religion_name' => 'Etruscan religion',
    ],
    [
        'id' => 1050,
        'ancestry' => '/1034/1050',
        'religion_name' => 'Basque mythology',
    ],
    [
        'id' => 1051,
        'ancestry' => '/1034/1051',
        'religion_name' => 'Georgian mythology',
    ],
    [
        'id' => 1052,
        'ancestry' => '/1034/1052',
        'religion_name' => 'Vainakh religion',
    ],
    [
        'id' => 1053,
        'ancestry' => '/1034/1053',
        'religion_name' => 'Proto-Indo-European mythology',
    ],
    [
        'id' => 1054,
        'ancestry' => '/1034/1054',
        'religion_name' => 'Proto-Indo-Iranian religion',
    ],
    [
        'id' => 1055,
        'ancestry' => '/1034/1055',
        'religion_name' => 'Historical Vedic religion',
    ],
    [
        'id' => 1056,
        'ancestry' => '/1034/1056',
        'religion_name' => 'Mazdaism',
    ],
    [
        'id' => 1057,
        'ancestry' => '/1034/1057',
        'religion_name' => 'Hittite mythology and religion',
    ],
    [
        'id' => 1058,
        'ancestry' => '/1034/1058',
        'religion_name' => 'Armenian mythology',
    ],
    [
        'id' => 1059,
        'ancestry' => '/1034/1059',
        'religion_name' => 'Albanian mythology',
    ],
    [
        'id' => 1060,
        'ancestry' => '/1034/1060',
        'religion_name' => 'Thracian religion',
    ],
    [
        'id' => 1061,
        'ancestry' => '/1034/1061',
        'religion_name' => 'Greek mythology',
    ],
    [
        'id' => 1062,
        'ancestry' => '/1034/1061/1062',
        'religion_name' => 'Greco-Roman mysteries',
    ],
    [
        'id' => 1063,
        'ancestry' => '/1034/1061/1063',
        'religion_name' => 'Orphism',
    ],
    [
        'id' => 1064,
        'ancestry' => '/1034/1061/1064',
        'religion_name' => 'Gnosticism',
    ],
    [
        'id' => 1065,
        'ancestry' => '/1034/1061/1065',
        'religion_name' => 'Hermeticism',
    ],
    [
        'id' => 1066,
        'ancestry' => '/1034/1061/1066',
        'religion_name' => 'Greco-Buddhism',
    ],
    [
        'id' => 1067,
        'ancestry' => '/1034/1067',
        'religion_name' => 'Religion in ancient Rome',
    ],
    [
        'id' => 1068,
        'ancestry' => '/1034/1067/1068',
        'religion_name' => 'Imperial cult',
    ],
    [
        'id' => 1069,
        'ancestry' => '/1034/1067/1069',
        'religion_name' => 'Gallo-Roman religion',
    ],
    [
        'id' => 1070,
        'ancestry' => '/1034/1067/1070',
        'religion_name' => 'Mithraism',
    ],
    [
        'id' => 1071,
        'ancestry' => '/1034/1071',
        'religion_name' => 'Manichaeism',
    ],
    [
        'id' => 1072,
        'ancestry' => '/1034/1071/1072',
        'religion_name' => 'Mazdakism',
    ],
    [
        'id' => 1073,
        'ancestry' => '/1034/1073',
        'religion_name' => 'Scythian religion',
    ],
    [
        'id' => 1074,
        'ancestry' => '/1034/1074',
        'religion_name' => 'Germanic paganism',
    ],
    [
        'id' => 1075,
        'ancestry' => '/1034/1074/1075',
        'religion_name' => 'Anglo-Saxon paganism',
    ],
    [
        'id' => 1076,
        'ancestry' => '/1034/1074/1076',
        'religion_name' => 'Continental Germanic mythology',
    ],
    [
        'id' => 1077,
        'ancestry' => '/1034/1074/1077',
        'religion_name' => 'Frankish mythology',
    ],
    [
        'id' => 1078,
        'ancestry' => '/1034/1074/1078',
        'religion_name' => 'Old Norse religion',
    ],
    [
        'id' => 1079,
        'ancestry' => '/1034/1079',
        'religion_name' => 'Ancient Celtic religion',
    ],
    [
        'id' => 1080,
        'ancestry' => '/1034/1080',
        'religion_name' => 'Baltic mythology',
    ],
    [
        'id' => 1081,
        'ancestry' => '/1034/1081',
        'religion_name' => 'Slavic paganism',
    ],
    [
        'id' => 1082,
        'ancestry' => '/1034/1082',
        'religion_name' => 'Finnish mythology',
    ],
    [
        'id' => 1083,
        'ancestry' => '/1034/1083',
        'religion_name' => 'Hungarian mythology',
    ],
    [
        'id' => 1084,
        'ancestry' => '/1034/1084',
        'religion_name' => 'Ainu religion',
    ],
    [
        'id' => 1085,
        'ancestry' => '/1034/1085',
        'religion_name' => 'Melanesian mythology',
    ],
    [
        'id' => 1086,
        'ancestry' => '/1034/1086',
        'religion_name' => 'Micronesian mythology',
    ],
    [
        'id' => 1087,
        'ancestry' => '/1034/1086/1087',
        'religion_name' => 'Nauruan indigenous religion',
    ],
    [
        'id' => 1088,
        'ancestry' => '/1034/1088',
        'religion_name' => 'Cook Islands mythology',
    ],
    [
        'id' => 1089,
        'ancestry' => '/1034/1089',
        'religion_name' => 'Rapa Nui mythology',
    ],
    [
        'id' => 1090,
        'ancestry' => '/1034/1090',
        'religion_name' => 'Tongan religion',
    ],
    [
        'id' => 1091,
        'ancestry' => '/1034/1091',
        'religion_name' => 'Inca mythology',
    ],
    [
        'id' => 1092,
        'ancestry' => '/1034/1092',
        'religion_name' => 'Olmec religion',
    ],
    [
        'id' => 1093,
        'ancestry' => '/1034/1093',
        'religion_name' => 'Toltec religion',
    ],
    [
        'id' => 1094,
        'ancestry' => '/1034/1094',
        'religion_name' => 'Zapotec religion',
    ],
    [
        'id' => 1095,
        'ancestry' => '/1034/1095',
        'religion_name' => 'Fuegian religions',
    ],
    [
        'id' => 1096,
        'ancestry' => '/1034/1095/1096',
        'religion_name' => 'Selk\'nam mythology',
    ],
    [
        'id' => 1097,
        'ancestry' => '/1034/1097',
        'religion_name' => 'Guanche religions',
    ],
    [
        'id' => 1098,
        'ancestry' => '/1034/1098',
        'religion_name' => 'Swahili religion',
    ],
    [
        'id' => 1099,
        'ancestry' => '/1034/1099',
        'religion_name' => 'Jamaican Maroon religion',
    ],
]);
