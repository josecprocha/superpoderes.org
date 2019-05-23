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
/*
 * Helper class.
 * Helps you generate all the routes required for user authentication.
 *
 *   Authentication Routes...
 * $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
 * $this->post('login', 'Auth\LoginController@login');
 * $this->post('logout', 'Auth\LoginController@logout')->name('logout');
 *
 *   Registration Routes...
 * $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
 * $this->post('register', 'Auth\RegisterController@register');
 *
 *   Password Reset Routes...
 * $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
 * $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
 * $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
 * $this->post('password/reset', 'Auth\ResetPasswordController@reset');
 */

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| "Third Party" pages
|--------------------------------------------------------------------------
|
| Page with the third-party content selection menu.
|
*/

Route::get('third_party', function () {
  return view('third_party.select'); // Beginning
});

// Selected codepen.io games.

Route::get('third_party/html5', function () {
  return view('third_party.html5.html5select'); // Game Select
});

// Mouse

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

Route::get('third_party/html5/planetdefense', function () {
  return view('third_party.html5.games.planetdefense');
});

Route::get('third_party/html5/mouseminigame', function () {
  return view('third_party.html5.games.mouseminigame');
});

Route::get('third_party/html5/powersurge', function () {
  return view('third_party.html5.games.powersurge');
});

Route::get('third_party/html5/reactionB', function () {
  return view('third_party.html5.games.reactionB');
});

Route::get('third_party/html5/shootthetarget', function () {
  return view('third_party.html5.games.shootthetarget');
});

Route::get('third_party/html5/toddlerrainbow', function () {
  return view('third_party.html5.games.toddlerrainbow');
});

Route::get('third_party/html5/ultimatearcadeshooter', function () {
  return view('third_party.html5.games.ultimatearcadeshooter');
});

Route::get('third_party/html5/connectingdots', function () {
  return view('third_party.html5.games.connectingdots');
});

Route::get('third_party/html5/fishing', function () {
  return view('third_party.html5.games.fishing');
});

Route::get('third_party/html5/fish', function () {
  return view('third_party.html5.games.fish');
});

Route::get('third_party/html5/vdasteroids', function () {
  return view('third_party.html5.games.vdasteroids');
});

Route::get('third_party/html5/breakout', function () {
  return view('third_party.html5.games.breakout');
});

Route::get('third_party/html5/toddlercolor', function () {
  return view('third_party.html5.games.toddlercolor');
});

Route::get('third_party/html5/whackamole', function () {
  return view('third_party.html5.games.whackamole');
});

Route::get('third_party/html5/whackamoleB', function () {
  return view('third_party.html5.games.whackamoleB');
});

Route::get('third_party/html5/paintbynumber', function () {
  return view('third_party.html5.games.paintbynumber');
});

// Keyboard Action

Route::get('third_party/html5/savetheprincess', function () {
  return view('third_party.html5.games.savetheprincess');
});

Route::get('third_party/html5/interactivesnake', function () {
  return view('third_party.html5.games.interactivesnake');
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

Route::get('third_party/html5/crosstotheotherside', function () {
  return view('third_party.html5.games.crosstotheotherside');
});

Route::get('third_party/html5/asteroidsB', function () {
  return view('third_party.html5.games.asteroidsB');
});

Route::get('third_party/html5/cybersnake', function () {
  return view('third_party.html5.games.cybersnake');
});

Route::get('third_party/html5/snake', function () {
  return view('third_party.html5.games.snake');
});

Route::get('third_party/html5/snakeB', function () {
  return view('third_party.html5.games.snakeB');
});

Route::get('third_party/html5/simplesnake', function () {
  return view('third_party.html5.games.simplesnake');
});

Route::get('third_party/html5/isometricsnake', function () {
  return view('third_party.html5.games.isometricsnake');
});

Route::get('third_party/html5/snakeC', function () {
  return view('third_party.html5.games.snakeC');
});

// Puzzles and Mind Sport

Route::get('third_party/html5/hanoi', function () {
  return view('third_party.html5.games.hanoi');
});

Route::get('third_party/html5/cubnpup', function () {
  return view('third_party.html5.games.cubnpup');
});

Route::get('third_party/html5/tetris', function () {
  return view('third_party.html5.games.tetris');
});

Route::get('third_party/html5/swinepeeper', function () {
  return view('third_party.html5.games.swinepeeper');
});

Route::get('third_party/html5/chess', function () {
  return view('third_party.html5.games.chess');
});

Route::get('third_party/html5/tictacdoom', function () {
  return view('third_party.html5.games.tictacdoom');
});

Route::get('third_party/html5/gomoku', function () {
  return view('third_party.html5.games.gomoku');
});

Route::get('third_party/html5/mcdraughts', function () {
  return view('third_party.html5.games.mcdraughts');
});

Route::get('third_party/html5/blockpuzzle', function () {
  return view('third_party.html5.games.blockpuzzle');
});

Route::get('third_party/html5/mahjongg', function () {
  return view('third_party.html5.games.mahjongg');
});

Route::get('third_party/html5/bycss', function () {
  return view('third_party.html5.games.bycss');
});

// Experiments and Science

Route::get('third_party/html5/planetsquiz', function () {
  return view('third_party.html5.games.planetsquiz');
});

Route::get('third_party/html5/lunarlander', function () {
  return view('third_party.html5.games.lunarlander');
});

// Art

Route::get('third_party/html5/drumkit', function () {
  return view('third_party.html5.games.drumkit');
});

Route::get('third_party/html5/pianokeyboard', function () {
  return view('third_party.html5.games.pianokeyboard');
});

Route::get('third_party/html5/animatedguitar', function () {
  return view('third_party.html5.games.animatedguitar');
});

// Esports and Challenge

Route::get('third_party/html5/clicksoccer', function () {
  return view('third_party.html5.games.clicksoccer');
});

// Memory Championship Training

Route::get('third_party/html5/memory', function () {
  return view('third_party.html5.games.memory');
});

// Friends

Route::get('third_party/html5/pong', function () {
  return view('third_party.html5.games.pong');
});

Route::get('third_party/html5/tictactoe', function () {
  return view('third_party.html5.games.tictactoe');
});

Route::get('third_party/html5/checkers', function () {
  return view('third_party.html5.games.checkers');
});

Route::get('third_party/html5/3dhartwigchess', function () {
  return view('third_party.html5.games.3dhartwigchess');
});

// Fun and Rest

Route::get('third_party/html5/matchcolor', function () {
  return view('third_party.html5.games.matchcolor');
});

Route::get('third_party/html5/paperstonescissors', function () {
  return view('third_party.html5.games.paperstonescissors');
});

// Mental Calculation and Math

Route::get('third_party/html5/mathness', function () {
  return view('third_party.html5.games.mathness');
});

Route::get('third_party/html5/arithmetic', function () {
  return view('third_party.html5.games.arithmetic');
});

Route::get('third_party/html5/bgmath', function () {
  return view('third_party.html5.games.bgmath');
});

Route::get('third_party/html5/mathemat1cs', function () {
  return view('third_party.html5.games.mathemat1cs');
});

// Language

Route::get('third_party/html5/crosswordgenerator', function () {
  return view('third_party.html5.games.crosswordgenerator');
});

Route::get('third_party/html5/wordsearch2', function () {
  return view('third_party.html5.games.wordsearch2');
});
