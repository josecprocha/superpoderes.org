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

namespace Database\Migrations\Insertions; //localization;

DB::table('languages')->insert([
    [
        'id' => 'af',
        'language_name' => 'Afrikaans',
        'language_en' => 'Afrikaans',
    ],
    [
        'id' => 'af-ZA',
        'language_name' => 'Afrikaans (Suid-Afrika)',
        'language_en' => 'Afrikaans (South Africa)',
    ],
    [
        'id' => 'ar',
        'language_name' => 'عربى',
        'language_en' => 'Arabic',
    ],
    [
        'id' => 'ar-AE',
        'language_name' => 'العربية (الولايات المتحدة)',
        'language_en' => 'Arabic (U.A.E.)',
    ],
    [
        'id' => 'ar-BH',
        'language_name' => 'العربية (البحرين)',
        'language_en' => 'Arabic (Bahrain)',
    ],
    [
        'id' => 'ar-DZ',
        'language_name' => 'العربية (الجزائر)',
        'language_en' => 'Arabic (Algeria)',
    ],
    [
        'id' => 'ar-EG',
        'language_name' => 'العربية (مصر)',
        'language_en' => 'Arabic (Egypt)',
    ],
    [
        'id' => 'ar-IQ',
        'language_name' => 'العربية (العراق)',
        'language_en' => 'Arabic (Iraq)',
    ],
    [
        'id' => 'ar-JO',
        'language_name' => 'العربية (الأردن)',
        'language_en' => 'Arabic (Jordan)',
    ],
    [
        'id' => 'ar-KW',
        'language_name' => 'العربية (الكويت)',
        'language_en' => 'Arabic (Kuwait)',
    ],
    [
        'id' => 'ar-LB',
        'language_name' => 'العربية (لبنان)',
        'language_en' => 'Arabic (Lebanon)',
    ],
    [
        'id' => 'ar-LY',
        'language_name' => 'العربية (ليبيا)',
        'language_en' => 'Arabic (Libya)',
    ],
    [
        'id' => 'ar-MA',
        'language_name' => 'العربية (المغرب)',
        'language_en' => 'Arabic (Morocco)',
    ],
    [
        'id' => 'ar-OM',
        'language_name' => 'العربية (عمان)',
        'language_en' => 'Arabic (Oman)',
    ],
    [
        'id' => 'ar-QA',
        'language_name' => 'العربية (قطر)',
        'language_en' => 'Arabic (Qatar)',
    ],
    [
        'id' => 'ar-SA',
        'language_name' => 'العربية (العربية السعودية)',
        'language_en' => 'Arabic (Saudi Arabia)',
    ],
    [
        'id' => 'ar-SY',
        'language_name' => 'العربية (سوريا)',
        'language_en' => 'Arabic (Syria)',
    ],
    [
        'id' => 'ar-TN',
        'language_name' => 'العربية (تونس)',
        'language_en' => 'Arabic (Tunisia)',
    ],
    [
        'id' => 'ar-YE',
        'language_name' => 'العربية (اليمن)',
        'language_en' => 'Arabic (Yemen)',
    ],
    [
        'id' => 'az',
        'language_name' => 'Azeri (Latın)',
        'language_en' => 'Azeri (Latin)',
    ],
    [
        'id' => 'az-AZ',
        'language_name' => 'Azeri (Latın) (Azərbaycan)',
        'language_en' => 'Azeri (Latin) (Azerbaijan)',
    ],
    [
        'id' => 'az-AZ',
        'language_name' => 'Azeri (Kiril) (Azərbaycan)',
        'language_en' => 'Azeri (Cyrillic) (Azerbaijan)',
    ],
    [
        'id' => 'be',
        'language_name' => 'беларускі',
        'language_en' => 'Belarusian',
    ],
    [
        'id' => 'be-BY',
        'language_name' => 'Беларуская (Беларусь)',
        'language_en' => 'Belarusian (Belarus)',
    ],
    [
        'id' => 'bg',
        'language_name' => 'български',
        'language_en' => 'Bulgarian',
    ],
    [
        'id' => 'bg-BG',
        'language_name' => 'Български (България)',
        'language_en' => 'Bulgarian (Bulgaria)',
    ],
    [
        'id' => 'bs-BA',
        'language_name' => 'Bosanski (Bosna i Hercegovina)',
        'language_en' => 'Bosnian (Bosnia and Herzegovina)',
    ],
    [
        'id' => 'ca',
        'language_name' => 'Català',
        'language_en' => 'Catalan',
    ],
    [
        'id' => 'ca-ES',
        'language_name' => 'Català (Espanya)',
        'language_en' => 'Catalan (Spain)',
    ],
    [
        'id' => 'cs',
        'language_name' => 'čeština',
        'language_en' => 'Czech',
    ],
    [
        'id' => 'cs-CZ',
        'language_name' => 'Czech (Česká republika)',
        'language_en' => 'Czech (Czech Republic)',
    ],
    [
        'id' => 'cy',
        'language_name' => 'Cymraeg',
        'language_en' => 'Welsh',
    ],
    [
        'id' => 'cy-GB',
        'language_name' => 'Cymraeg (Y Deyrnas Unedig)',
        'language_en' => 'Welsh (United Kingdom)',
    ],
    [
        'id' => 'da',
        'language_name' => 'Dansk',
        'language_en' => 'Danish',
    ],
    [
        'id' => 'da-DK',
        'language_name' => 'Dansk (danmark)',
        'language_en' => 'Danish (Denmark)',
    ],
    [
        'id' => 'de',
        'language_name' => 'Deutsche',
        'language_en' => 'German',
    ],
    [
        'id' => 'de-AT',
        'language_name' => 'Deutsch (Österreich)',
        'language_en' => 'German (Austria)',
    ],
    [
        'id' => 'de-CH',
        'language_name' => 'Deutsch (Schweiz)',
        'language_en' => 'German (Switzerland)',
    ],
    [
        'id' => 'de-DE',
        'language_name' => 'Deutsches (Deutschland)',
        'language_en' => 'German (Germany)',
    ],
    [
        'id' => 'de-LI',
        'language_name' => 'Deutsch (Liechtenstein)',
        'language_en' => 'German (Liechtenstein)',
    ],
    [
        'id' => 'de-LU',
        'language_name' => 'Deutsch (Luxemburg)',
        'language_en' => 'German (Luxembourg)',
    ],
    [
        'id' => 'el',
        'language_name' => 'Ελληνικά',
        'language_en' => 'Greek',
    ],
    [
        'id' => 'el-GR',
        'language_name' => 'Ελληνική (Ελλάδα)',
        'language_en' => 'Greek (Greece)',
    ],
    [
        'id' => 'en',
        'language_name' => 'English',
        'language_en' => 'English',
    ],
    [
        'id' => 'en-AU',
        'language_name' => 'English (Australia)',
        'language_en' => 'English (Australia)',
    ],
    [
        'id' => 'en-BZ',
        'language_name' => 'English (Belize)',
        'language_en' => 'English (Belize)',
    ],
    [
        'id' => 'en-CA',
        'language_name' => 'English (Canada)',
        'language_en' => 'English (Canada)',
    ],
    [
        'id' => 'en-CB',
        'language_name' => 'English (Caribbean)',
        'language_en' => 'English (Caribbean)',
    ],
    [
        'id' => 'en-GB',
        'language_name' => 'English (United Kingdom)',
        'language_en' => 'English (United Kingdom)',
    ],
    [
        'id' => 'en-IE',
        'language_name' => 'English (Ireland)',
        'language_en' => 'English (Ireland)',
    ],
    [
        'id' => 'en-JM',
        'language_name' => 'English (Jamaica)',
        'language_en' => 'English (Jamaica)',
    ],
    [
        'id' => 'en-NZ',
        'language_name' => 'English (New Zealand)',
        'language_en' => 'English (New Zealand)',
    ],
    [
        'id' => 'en-PH',
        'language_name' => 'English (Republic of the Philippines)',
        'language_en' => 'English (Republic of the Philippines)',
    ],
    [
        'id' => 'en-TT',
        'language_name' => 'English (Trinidad and Tobago)',
        'language_en' => 'English (Trinidad and Tobago)',
    ],
    [
        'id' => 'en-US',
        'language_name' => 'English (United States)',
        'language_en' => 'English (United States)',
    ],
    [
        'id' => 'en-ZA',
        'language_name' => 'English (South Africa)',
        'language_en' => 'English (South Africa)',
    ],
    [
        'id' => 'en-ZW',
        'language_name' => 'English (Zimbabwe)',
        'language_en' => 'English (Zimbabwe)',
    ],
    [
        'id' => 'eo',
        'language_name' => 'Esperanto',
        'language_en' => 'Esperanto',
    ],
    [
        'id' => 'es',
        'language_name' => 'Español',
        'language_en' => 'Spanish',
    ],
    [
        'id' => 'es-AR',
        'language_name' => 'Español (argentina)',
        'language_en' => 'Spanish (Argentina)',
    ],
    [
        'id' => 'es-BO',
        'language_name' => 'Español (bolivia)',
        'language_en' => 'Spanish (Bolivia)',
    ],
    [
        'id' => 'es-CL',
        'language_name' => 'Español (chile)',
        'language_en' => 'Spanish (Chile)',
    ],
    [
        'id' => 'es-CO',
        'language_name' => 'Español (colombia)',
        'language_en' => 'Spanish (Colombia)',
    ],
    [
        'id' => 'es-CR',
        'language_name' => 'Español (costa rica)',
        'language_en' => 'Spanish (Costa Rica)',
    ],
    [
        'id' => 'es-DO',
        'language_name' => 'Español (republica dominicana)',
        'language_en' => 'Spanish (Dominican Republic)',
    ],
    [
        'id' => 'es-EC',
        'language_name' => 'Español (ecuador)',
        'language_en' => 'Spanish (Ecuador)',
    ],
    [
        'id' => 'es-ES',
        'language_name' => 'Español (castellano)',
        'language_en' => 'Spanish (Castilian)',
    ],
    [
        'id' => 'es-ES',
        'language_name' => 'Español (españa)',
        'language_en' => 'Spanish (Spain)',
    ],
    [
        'id' => 'es-GT',
        'language_name' => 'Español (guatemala)',
        'language_en' => 'Spanish (Guatemala)',
    ],
    [
        'id' => 'es-HN',
        'language_name' => 'Español (honduras)',
        'language_en' => 'Spanish (Honduras)',
    ],
    [
        'id' => 'es-MX',
        'language_name' => 'Español (mexico)',
        'language_en' => 'Spanish (Mexico)',
    ],
    [
        'id' => 'es-NI',
        'language_name' => 'Español (nicaragua)',
        'language_en' => 'Spanish (Nicaragua)',
    ],
    [
        'id' => 'es-PA',
        'language_name' => 'Español (panamá)',
        'language_en' => 'Spanish (Panama)',
    ],
    [
        'id' => 'es-PE',
        'language_name' => 'Español (peru)',
        'language_en' => 'Spanish (Peru)',
    ],
    [
        'id' => 'es-PR',
        'language_name' => 'Español (puerto rico)',
        'language_en' => 'Spanish (Puerto Rico)',
    ],
    [
        'id' => 'es-PY',
        'language_name' => 'Español (paraguay)',
        'language_en' => 'Spanish (Paraguay)',
    ],
    [
        'id' => 'es-SV',
        'language_name' => 'Español (el salvador)',
        'language_en' => 'Spanish (El Salvador)',
    ],
    [
        'id' => 'es-UY',
        'language_name' => 'Español (uruguay)',
        'language_en' => 'Spanish (Uruguay)',
    ],
    [
        'id' => 'es-VE',
        'language_name' => 'Español (venezuela)',
        'language_en' => 'Spanish (Venezuela)',
    ],
    [
        'id' => 'et',
        'language_name' => 'Eesti keel',
        'language_en' => 'Estonian',
    ],
    [
        'id' => 'et-EE',
        'language_name' => 'Eesti keel (Eesti)',
        'language_en' => 'Estonian (Estonia)',
    ],
    [
        'id' => 'eu',
        'language_name' => 'Euskal',
        'language_en' => 'Basque',
    ],
    [
        'id' => 'eu-ES',
        'language_name' => 'Euskara (Espainia)',
        'language_en' => 'Basque (Spain)',
    ],
    [
        'id' => 'fa',
        'language_name' => 'فارسی',
        'language_en' => 'Farsi',
    ],
    [
        'id' => 'fa-IR',
        'language_name' => 'فارسی (ایران)',
        'language_en' => 'Farsi (Iran)',
    ],
    [
        'id' => 'fi',
        'language_name' => 'Suomalainen',
        'language_en' => 'Finnish',
    ],
    [
        'id' => 'fi-FI',
        'language_name' => 'Suomi (Suomi)',
        'language_en' => 'Finnish (Finland)',
    ],
    [
        'id' => 'fr',
        'language_name' => 'français',
        'language_en' => 'French',
    ],
    [
        'id' => 'fr-BE',
        'language_name' => 'Français (Belgique)',
        'language_en' => 'French (Belgium)',
    ],
    [
        'id' => 'fr-CA',
        'language_name' => 'Français (Canada)',
        'language_en' => 'French (Canada)',
    ],
    [
        'id' => 'fr-CH',
        'language_name' => 'Français (Suisse)',
        'language_en' => 'French (Switzerland)',
    ],
    [
        'id' => 'fr-FR',
        'language_name' => 'France francaise)',
        'language_en' => 'French (France)',
    ],
    [
        'id' => 'fr-LU',
        'language_name' => 'Français (Luxembourg)',
        'language_en' => 'French (Luxembourg)',
    ],
    [
        'id' => 'fr-MC',
        'language_name' => 'Français (Principauté de Monaco)',
        'language_en' => 'French (Principality of Monaco)',
    ],
    [
        'id' => 'gl',
        'language_name' => 'Galego',
        'language_en' => 'Galician',
    ],
    [
        'id' => 'gl-ES',
        'language_name' => 'Galego (España)',
        'language_en' => 'Galician (Spain)',
    ],
    [
        'id' => 'gu',
        'language_name' => 'ગુજરાતી',
        'language_en' => 'Gujarati',
    ],
    [
        'id' => 'gu-IN',
        'language_name' => 'ગુજરાતી (ભારત)',
        'language_en' => 'Gujarati (India)',
    ],
    [
        'id' => 'he',
        'language_name' => 'עברית',
        'language_en' => 'Hebrew',
    ],
    [
        'id' => 'he-IL',
        'language_name' => 'עברית (ישראל)',
        'language_en' => 'Hebrew (Israel)',
    ],
    [
        'id' => 'hi',
        'language_name' => 'हिंदी',
        'language_en' => 'Hindi',
    ],
    [
        'id' => 'hi-IN',
        'language_name' => 'हिंदी भारत)',
        'language_en' => 'Hindi (India)',
    ],
    [
        'id' => 'hr',
        'language_name' => 'Hrvatski',
        'language_en' => 'Croatian',
    ],
    [
        'id' => 'hr-BA',
        'language_name' => 'Hrvatski (Bosna i Hercegovina)',
        'language_en' => 'Croatian (Bosnia and Herzegovina)',
    ],
    [
        'id' => 'hr-HR',
        'language_name' => 'Hrvatska (Hrvatska)',
        'language_en' => 'Croatian (Croatia)',
    ],
    [
        'id' => 'hu',
        'language_name' => 'madžarski',
        'language_en' => 'Hungarian',
    ],
    [
        'id' => 'hu-HU',
        'language_name' => 'Mađarski (Mađarska)',
        'language_en' => 'Hungarian (Hungary)',
    ],
    [
        'id' => 'hy',
        'language_name' => 'հայերեն',
        'language_en' => 'Armenian',
    ],
    [
        'id' => 'hy-AM',
        'language_name' => 'Հայ (Հայաստան)',
        'language_en' => 'Armenian (Armenia)',
    ],
    [
        'id' => 'id',
        'language_name' => 'bahasa Indonesia',
        'language_en' => 'Indonesian',
    ],
    [
        'id' => 'id-ID',
        'language_name' => 'Orang indonesia',
        'language_en' => 'Indonesian (Indonesia)',
    ],
    [
        'id' => 'is',
        'language_name' => 'Íslensku',
        'language_en' => 'Icelandic',
    ],
    [
        'id' => 'is-IS',
        'language_name' => 'Íslenska (Ísland)',
        'language_en' => 'Icelandic (Iceland)',
    ],
    [
        'id' => 'it',
        'language_name' => 'italiano',
        'language_en' => 'Italian',
    ],
    [
        'id' => 'it-CH',
        'language_name' => 'Italiano (Svizzera)',
        'language_en' => 'Italian (Switzerland)',
    ],
    [
        'id' => 'it-IT',
        'language_name' => 'Italiano (Italia)',
        'language_en' => 'Italian (Italy)',
    ],
    [
        'id' => 'ja',
        'language_name' => '日本人',
        'language_en' => 'Japanese',
    ],
    [
        'id' => 'ja-JP',
        'language_name' => '日本語（日本）',
        'language_en' => 'Japanese (Japan)',
    ],
    [
        'id' => 'ka',
        'language_name' => 'ქართული',
        'language_en' => 'Georgian',
    ],
    [
        'id' => 'ka-GE',
        'language_name' => 'ქართული (საქართველო)',
        'language_en' => 'Georgian (Georgia)',
    ],
    [
        'id' => 'kk',
        'language_name' => 'Қазақша',
        'language_en' => 'Kazakh',
    ],
    [
        'id' => 'kk-KZ',
        'language_name' => 'Қазақ (Қазақстан)',
        'language_en' => 'Kazakh (Kazakhstan)',
    ],
    [
        'id' => 'kn',
        'language_name' => 'ಕನ್ನಡ',
        'language_en' => 'Kannada',
    ],
    [
        'id' => 'kn-IN',
        'language_name' => 'ಕನ್ನಡ (ಭಾರತ)',
        'language_en' => 'Kannada (India)',
    ],
    [
        'id' => 'ko',
        'language_name' => '한국어',
        'language_en' => 'Korean',
    ],
    [
        'id' => 'ko-KR',
        'language_name' => '한국어 (한국)',
        'language_en' => 'Korean (Korea)',
    ],
    [
        'id' => 'ky',
        'language_name' => 'Кыргызча',
        'language_en' => 'Kyrgyz',
    ],
    [
        'id' => 'ky-KG',
        'language_name' => 'Kyrgyz (Kyrgyzstan)',
        'language_en' => 'Kyrgyz (Kyrgyzstan)',
    ],
    [
        'id' => 'lt',
        'language_name' => 'Lietuvių',
        'language_en' => 'Lithuanian',
    ],
    [
        'id' => 'lt-LT',
        'language_name' => 'Lietuvių (Lietuva)',
        'language_en' => 'Lithuanian (Lithuania)',
    ],
    [
        'id' => 'lv',
        'language_name' => 'Latviešu valoda',
        'language_en' => 'Latvian',
    ],
    [
        'id' => 'lv-LV',
        'language_name' => 'Latviešu valoda (Latvija)',
        'language_en' => 'Latvian (Latvia)',
    ],
    [
        'id' => 'mi',
        'language_name' => 'Maori',
        'language_en' => 'Maori',
    ],
    [
        'id' => 'mi-NZ',
        'language_name' => 'Maori (Aotearoa)',
        'language_en' => 'Maori (New Zealand)',
    ],
    [
        'id' => 'mk',
        'language_name' => 'БЈР Македонија',
        'language_en' => 'FYRO Macedonian',
    ],
    [
        'id' => 'mk-MK',
        'language_name' => 'БЈР Македонија (Поранешна Југословенска Република Македонија)',
        'language_en' => 'FYRO Macedonian (Former Yugoslav Republic of Macedonia)',
    ],
    [
        'id' => 'mn',
        'language_name' => 'Монгол хэл дээр',
        'language_en' => 'Mongolian',
    ],
    [
        'id' => 'mn-MN',
        'language_name' => 'Монгол (Монгол)',
        'language_en' => 'Mongolian (Mongolia)',
    ],
    [
        'id' => 'mr',
        'language_name' => 'मराठी',
        'language_en' => 'Marathi',
    ],
    [
        'id' => 'mr-IN',
        'language_name' => 'मराठी (भारत)',
        'language_en' => 'Marathi (India)',
    ],
    [
        'id' => 'ms',
        'language_name' => 'Melayu',
        'language_en' => 'Malay',
    ],
    [
        'id' => 'ms-BN',
        'language_name' => 'Melayu (Brunei Darussalam)',
        'language_en' => 'Malay (Brunei Darussalam)',
    ],
    [
        'id' => 'ms-MY',
        'language_name' => 'Melayu (Malaysia)',
        'language_en' => 'Malay (Malaysia)',
    ],
    [
        'id' => 'mt',
        'language_name' => 'Malti',
        'language_en' => 'Maltese',
    ],
    [
        'id' => 'mt-MT',
        'language_name' => 'Malti (Malta)',
        'language_en' => 'Maltese (Malta)',
    ],
    [
        'id' => 'nb',
        'language_name' => 'Norsk (Bokm? L)',
        'language_en' => 'Norwegian (Bokm?l)',
    ],
    [
        'id' => 'nb-NO',
        'language_name' => 'Norsk (Bokm? L) (Norge)',
        'language_en' => 'Norwegian (Bokm?l) (Norway)',
    ],
    [
        'id' => 'nl',
        'language_name' => 'Nederlands',
        'language_en' => 'Dutch',
    ],
    [
        'id' => 'nl-BE',
        'language_name' => 'Nederlands (België)',
        'language_en' => 'Dutch (Belgium)',
    ],
    [
        'id' => 'nl-NL',
        'language_name' => 'Nederlands (Nederland)',
        'language_en' => 'Dutch (Netherlands)',
    ],
    [
        'id' => 'nn-NO',
        'language_name' => 'Norsk (Nynorsk) (Norge)',
        'language_en' => 'Norwegian (Nynorsk) (Norway)',
    ],
    [
        'id' => 'pa',
        'language_name' => 'ਪੰਜਾਬੀ',
        'language_en' => 'Punjabi',
    ],
    [
        'id' => 'pa-IN',
        'language_name' => 'ਪੰਜਾਬੀ (ਭਾਰਤ)',
        'language_en' => 'Punjabi (India)',
    ],
    [
        'id' => 'pl',
        'language_name' => 'Polskie',
        'language_en' => 'Polish',
    ],
    [
        'id' => 'pl-PL',
        'language_name' => 'Polski (polski)',
        'language_en' => 'Polish (Poland)',
    ],
    [
        'id' => 'ps',
        'language_name' => 'پښتو',
        'language_en' => 'Pashto',
    ],
    [
        'id' => 'ps-AR',
        'language_name' => 'پښتو (افغانستان)',
        'language_en' => 'Pashto (Afghanistan)',
    ],
    [
        'id' => 'pt',
        'language_name' => 'Português',
        'language_en' => 'Portuguese',
    ],
    [
        'id' => 'pt-BR',
        'language_name' => 'Português (Brasil)',
        'language_en' => 'Portuguese (Brazil)',
    ],
    [
        'id' => 'pt-PT',
        'language_name' => 'Português (Portugal)',
        'language_en' => 'Portuguese (Portugal)',
    ],
    [
        'id' => 'ro',
        'language_name' => 'Română',
        'language_en' => 'Romanian',
    ],
    [
        'id' => 'ro-RO',
        'language_name' => 'Română (România)',
        'language_en' => 'Romanian (Romania)',
    ],
    [
        'id' => 'ru',
        'language_name' => 'русский',
        'language_en' => 'Russian',
    ],
    [
        'id' => 'ru-RU',
        'language_name' => 'Русский (россия)',
        'language_en' => 'Russian (Russia)',
    ],
    [
        'id' => 'sk',
        'language_name' => 'slovenský',
        'language_en' => 'Slovak',
    ],
    [
        'id' => 'sk-SK',
        'language_name' => 'Slovak (Slovakia)',
        'language_en' => 'Slovak (Slovakia)',
    ],
    [
        'id' => 'sl',
        'language_name' => 'slovinčina',
        'language_en' => 'Slovenian',
    ],
    [
        'id' => 'sl-SI',
        'language_name' => 'Slovinčina (Slovinsko)',
        'language_en' => 'Slovenian (Slovenia)',
    ],
    [
        'id' => 'sq',
        'language_name' => 'shqiptar',
        'language_en' => 'Albanian',
    ],
    [
        'id' => 'sq-AL',
        'language_name' => 'Shqiptar (Shqipëri)',
        'language_en' => 'Albanian (Albania)',
    ],
    [
        'id' => 'sr-BA',
        'language_name' => 'Српски (латински) (Босна и Херцеговина)',
        'language_en' => 'Serbian (Latin) (Bosnia and Herzegovina)',
    ],
    [
        'id' => 'sr-BA',
        'language_name' => 'Српски (ћирилица) (Босна и Херцеговина)',
        'language_en' => 'Serbian (Cyrillic) (Bosnia and Herzegovina)',
    ],
    [
        'id' => 'sr-SP',
        'language_name' => 'Српски (латински) (Србија и Црна Гора)',
        'language_en' => 'Serbian (Latin) (Serbia and Montenegro)',
    ],
    [
        'id' => 'sr-SP',
        'language_name' => 'Српски (ћирилица) (Србија и Црна Гора)',
        'language_en' => 'Serbian (Cyrillic) (Serbia and Montenegro)',
    ],
    [
        'id' => 'sv',
        'language_name' => 'svenska',
        'language_en' => 'Swedish',
    ],
    [
        'id' => 'sv-FI',
        'language_name' => 'Svenska (finska)',
        'language_en' => 'Swedish (Finland)',
    ],
    [
        'id' => 'sv-SE',
        'language_name' => 'Svenska (sverige)',
        'language_en' => 'Swedish (Sweden)',
    ],
    [
        'id' => 'sw',
        'language_name' => 'Kiswahili',
        'language_en' => 'Swahili',
    ],
    [
        'id' => 'sw-KE',
        'language_name' => 'Swahili (Kenya)',
        'language_en' => 'Swahili (Kenya)',
    ],
    [
        'id' => 'ta',
        'language_name' => 'தமிழ்',
        'language_en' => 'Tamil',
    ],
    [
        'id' => 'ta-IN',
        'language_name' => 'தமிழ் (இந்தியா)',
        'language_en' => 'Tamil (India)',
    ],
    [
        'id' => 'te',
        'language_name' => 'తెలుగు',
        'language_en' => 'Telugu',
    ],
    [
        'id' => 'te-IN',
        'language_name' => 'తెలుగు (భారతదేశం)',
        'language_en' => 'Telugu (India)',
    ],
    [
        'id' => 'th',
        'language_name' => 'ไทย',
        'language_en' => 'Thai',
    ],
    [
        'id' => 'th-TH',
        'language_name' => 'ไทย (ประเทศไทย)',
        'language_en' => 'Thai (Thailand)',
    ],
    [
        'id' => 'tr',
        'language_name' => 'Türk',
        'language_en' => 'Turkish',
    ],
    [
        'id' => 'tr-TR',
        'language_name' => 'Türkçe (türkiye)',
        'language_en' => 'Turkish (Turkey)',
    ],
    [
        'id' => 'uk',
        'language_name' => 'Українська',
        'language_en' => 'Ukrainian',
    ],
    [
        'id' => 'uk-UA',
        'language_name' => 'Українська (Україна)',
        'language_en' => 'Ukrainian (Ukraine)',
    ],
    [
        'id' => 'ur',
        'language_name' => 'اردو',
        'language_en' => 'Urdu',
    ],
    [
        'id' => 'ur-PK',
        'language_name' => 'اردو (اسلامی جمہوریہ پاکستان)',
        'language_en' => 'Urdu (Islamic Republic of Pakistan)',
    ],
    [
        'id' => 'uz',
        'language_name' => 'O\'zbek (lotin)',
        'language_en' => 'Uzbek (Latin)',
    ],
    [
        'id' => 'uz-UZ',
        'language_name' => 'O\'zbek (lotin) (O\'zbekiston)',
        'language_en' => 'Uzbek (Latin) (Uzbekistan)',
    ],
    [
        'id' => 'uz-UZ',
        'language_name' => 'O\'zbek (kirill) (O\'zbekiston)',
        'language_en' => 'Uzbek (Cyrillic) (Uzbekistan)',
    ],
    [
        'id' => 'vi',
        'language_name' => 'Tiếng Việt',
        'language_en' => 'Vietnamese',
    ],
    [
        'id' => 'vi-VN',
        'language_name' => 'Việt nam',
        'language_en' => 'Vietnamese (Viet Nam)',
    ],
    [
        'id' => 'xh',
        'language_name' => 'isiXhosa',
        'language_en' => 'Xhosa',
    ],
    [
        'id' => 'xh-ZA',
        'language_name' => 'IsiXhosa (uMzantsi Afrika)',
        'language_en' => 'Xhosa (South Africa)',
    ],
    [
        'id' => 'zh',
        'language_name' => '中文',
        'language_en' => 'Chinese',
    ],
    [
        'id' => 'zh-CN',
        'language_name' => '中文（S）',
        'language_en' => 'Chinese (S)',
    ],
    [
        'id' => 'zh-HK',
        'language_name' => '中文（香港）',
        'language_en' => 'Chinese (Hong Kong)',
    ],
    [
        'id' => 'zh-MO',
        'language_name' => '中文（澳門）',
        'language_en' => 'Chinese (Macau)',
    ],
    [
        'id' => 'zh-SG',
        'language_name' => '中文（新加坡）',
        'language_en' => 'Chinese (Singapore)',
    ],
    [
        'id' => 'zh-TW',
        'language_name' => '中文（T）',
        'language_en' => 'Chinese (T)',
    ],
    [
        'id' => 'zu',
        'language_name' => 'Zulu',
        'language_en' => 'Zulu',
    ],
    [
        'id' => 'zu-ZA',
        'language_name' => 'IsiZulu (eNingizimu Afrika)',
        'language_en' => 'Zulu (South Africa)',
    ],
]);
