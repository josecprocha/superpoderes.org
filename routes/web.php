<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| "Third Party" pages
|--------------------------------------------------------------------------
|
| Pages designed to find out what works on the devices children have
| available.
|
*/

Route::get('third_party', function () {
  return view('third_party.select'); // Beginning
});

Route::get('third_party/html5', function () {
  return view('third_party.html5.html5select'); // Game Select
});

Route::get('third_party/html5/hanoi', function () {
  return view('third_party.html5.games.hanoi');
});

Route::get('third_party/html5/cubnpup', function () {
  return view('third_party.html5.games.cubnpup');
});

Route::get('third_party/html5/reaction', function () {
  return view('third_party.html5.games.reaction');
});

Route::get('third_party/html5/crosshatch', function () {
  return view('third_party.html5.games.crosshatch');
});

Route::get('third_party/html5/pathfinder', function () {
  return view('third_party.html5.games.pathfinder');
});

Route::get('third_party/html5/platform', function () {
  return view('third_party.html5.games.platform');
});

Route::get('third_party/html5/savetheprincess', function () {
  return view('third_party.html5.games.savetheprincess');
});

Route::get('third_party/html5/interactivesnake', function () {
  return view('third_party.html5.games.interactivesnake');
});

Route::get('third_party/html5/tetris', function () {
  return view('third_party.html5.games.tetris');
});

Route::get('third_party/html5/planetdefense', function () {
  return view('third_party.html5.games.planetdefense');
});

Route::get('third_party/html5/asteroids', function () {
  return view('third_party.html5.games.asteroids');
});

Route::get('third_party/html5/glitchmaze', function () {
  return view('third_party.html5.games.glitchmaze');
});

Route::get('third_party/html5/maze', function () {
  return view('third_party.html5.games.maze');
});

Route::get('third_party/html5/crossthestreet', function () {
  return view('third_party.html5.games.crossthestreet');
});
