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
 * Based on Facebook Gender List:
 * https://www.telegraph.co.uk/technology/facebook/10930654/Facebooks-71-gender-options-come-to-UK-users.html
 * https://abcnews.go.com/blogs/headlines/2014/02/heres-a-list-of-58-gender-options-for-facebook-users/
 */

DB::table('genders')->insert([
    [
        'id' => 0,
        'gender_name' => 'Female',
    ],
    [
        'id' => 1,
        'gender_name' => 'Male',
    ],
    [
        'id' => 2,
        'gender_name' => 'Agender',
    ],
    [
        'id' => 3,
        'gender_name' => 'Androgyne',
    ],
    [
        'id' => 4,
        'gender_name' => 'Androgynes',
    ],
    [
        'id' => 5,
        'gender_name' => 'Androgynous',
    ],
    [
        'id' => 6,
        'gender_name' => 'Asexual',
    ],
    [
        'id' => 7,
        'gender_name' => 'Bigender',
    ],
    [
        'id' => 8,
        'gender_name' => 'Cis',
    ],
    [
        'id' => 9,
        'gender_name' => 'Cis Female',
    ],
    [
        'id' => 10,
        'gender_name' => 'Cis Male',
    ],
    [
        'id' => 11,
        'gender_name' => 'Cis Man',
    ],
    [
        'id' => 12,
        'gender_name' => 'Cis Woman',
    ],
    [
        'id' => 13,
        'gender_name' => 'Cisgender',
    ],
    [
        'id' => 14,
        'gender_name' => 'Cisgender Female',
    ],
    [
        'id' => 15,
        'gender_name' => 'Cisgender Male',
    ],
    [
        'id' => 16,
        'gender_name' => 'Cisgender Man',
    ],
    [
        'id' => 17,
        'gender_name' => 'Cisgender Woman',
    ],
    [
        'id' => 18,
        'gender_name' => 'Female to Male',
    ],
    [
        'id' => 19,
        'gender_name' => 'Female to Male transgender man',
    ],
    [
        'id' => 20,
        'gender_name' => 'Female to Male transsexual man',
    ],
    [
        'id' => 21,
        'gender_name' => 'F2M',
    ],
    [
        'id' => 22,
        'gender_name' => 'FTM',
    ],
    [
        'id' => 23,
        'gender_name' => 'Gender Fluid',
    ],
    [
        'id' => 24,
        'gender_name' => 'Gender Neutral',
    ],
    [
        'id' => 25,
        'gender_name' => 'Gender Nonconforming',
    ],
    [
        'id' => 26,
        'gender_name' => 'Gender Questioning',
    ],
    [
        'id' => 27,
        'gender_name' => 'Gender Variant',
    ],
    [
        'id' => 28,
        'gender_name' => 'Genderqueer',
    ],
    [
        'id' => 29,
        'gender_name' => 'Hermaphrodite',
    ],
    [
        'id' => 30,
        'gender_name' => 'Intersex',
    ],
    [
        'id' => 31,
        'gender_name' => 'Intersex Man',
    ],
    [
        'id' => 32,
        'gender_name' => 'Intersex Person',
    ],
    [
        'id' => 33,
        'gender_name' => 'Intersex Woman',
    ],
    [
        'id' => 34,
        'gender_name' => 'Male to Female',
    ],
    [
        'id' => 35,
        'gender_name' => 'Male to Female Trans Woman',
    ],
    [
        'id' => 36,
        'gender_name' => 'Male to Female Transgender Woman',
    ],
    [
        'id' => 37,
        'gender_name' => 'Male to Female Transsexual Woman',
    ],
    [
        'id' => 38,
        'gender_name' => 'M2F',
    ],
    [
        'id' => 39,
        'gender_name' => 'MTF',
    ],
    [
        'id' => 40,
        'gender_name' => 'Man',
    ],
    [
        'id' => 41,
        'gender_name' => 'Neither',
    ],
    [
        'id' => 42,
        'gender_name' => 'Neutrois',
    ],
    [
        'id' => 43,
        'gender_name' => 'Non-binary',
    ],
    [
        'id' => 44,
        'gender_name' => 'Other',
    ],
    [
        'id' => 45,
        'gender_name' => 'Pangender',
    ],
    [
        'id' => 46,
        'gender_name' => 'Polygender',
    ],
    [
        'id' => 47,
        'gender_name' => 'T* Man',
    ],
    [
        'id' => 48,
        'gender_name' => 'T* Woman',
    ],
    [
        'id' => 49,
        'gender_name' => 'Trans',
    ],
    [
        'id' => 50,
        'gender_name' => 'Trans*',
    ],
    [
        'id' => 51,
        'gender_name' => 'Trans Female',
    ],
    [
        'id' => 52,
        'gender_name' => 'Trans* Female',
    ],
    [
        'id' => 53,
        'gender_name' => 'Trans Male',
    ],
    [
        'id' => 54,
        'gender_name' => 'Trans* Male',
    ],
    [
        'id' => 55,
        'gender_name' => 'Trans Man',
    ],
    [
        'id' => 56,
        'gender_name' => 'Trans* Man',
    ],
    [
        'id' => 57,
        'gender_name' => 'Trans Person',
    ],
    [
        'id' => 58,
        'gender_name' => 'Trans* Person',
    ],
    [
        'id' => 59,
        'gender_name' => 'Trans Woman',
    ],
    [
        'id' => 60,
        'gender_name' => 'Trans* Woman',
    ],
    [
        'id' => 61,
        'gender_name' => 'Transfeminine',
    ],
    [
        'id' => 62,
        'gender_name' => 'Transgender',
    ],
    [
        'id' => 63,
        'gender_name' => 'Transgender Female',
    ],
    [
        'id' => 64,
        'gender_name' => 'Transgender Male',
    ],
    [
        'id' => 65,
        'gender_name' => 'Transgender Man',
    ],
    [
        'id' => 66,
        'gender_name' => 'Transgender Person',
    ],
    [
        'id' => 67,
        'gender_name' => 'Transgender Woman',
    ],
    [
        'id' => 68,
        'gender_name' => 'Transmasculine',
    ],
    [
        'id' => 69,
        'gender_name' => 'Transexual',
    ],
    [
        'id' => 70,
        'gender_name' => 'Transexual Female',
    ],
    [
        'id' => 71,
        'gender_name' => 'Transexual Male',
    ],
    [
        'id' => 72,
        'gender_name' => 'Transexual Man',
    ],
    [
        'id' => 73,
        'gender_name' => 'Transexual Person',
    ],
    [
        'id' => 74,
        'gender_name' => 'Transexual Woman',
    ],
    [
        'id' => 75,
        'gender_name' => 'Two* Person',
    ],
    [
        'id' => 76,
        'gender_name' => 'Two-spirit',
    ],
    [
        'id' => 77,
        'gender_name' => 'Two-spirit Person',
    ],
    [
        'id' => 78,
        'gender_name' => 'Woman',
    ],
]);
