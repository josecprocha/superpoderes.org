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

Route::get('/test', function () {
  return view('test.home'); // Beginning
});

Route::get('/test/html5', function () {
  return view('test.html5.home'); // Game Select
});

Route::get('/test/html5/hanoi', function () {
  return view('test.html5.games.hanoi');
});

Route::get('/test/html5/cubnpup', function () {
  return view('test.html5.games.cubnpup');
});
