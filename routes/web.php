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
| "test" pages
|--------------------------------------------------------------------------
|
| Pages designed to find out what works on the devices children have
| available.
|
*/

Route::get('/third_party', function () {
  return view('third_party.select'); // Beginning
});

Route::get('/third_party/html5', function () {
  return view('third_party.html5.html5select'); // Game Select
});

Route::get('/third_party/html5/hanoi', function () {
  return view('third_party.html5.games.hanoi');
});

Route::get('/third_party/html5/cubnpup', function () {
  return view('third_party.html5.games.cubnpup');
});
