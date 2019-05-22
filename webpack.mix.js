const mix = require('laravel-mix');

/*
|--------------------------------------------------------------------------
| Mix Asset Management
|--------------------------------------------------------------------------
|
| Mix provides a clean, fluent API for defining some Webpack build steps
| for your Laravel application. By default, we are compiling the Sass
| file for the application as well as bundling up all the JS files.
|
*/

/*
|--------------------------------------------------------------------------
| Mix Folder Structure
|--------------------------------------------------------------------------
|
| "resources": Source files to be compiled.
| "src": folders we want copied "as is" to the public directory.
| More info: https://scotch.io/tutorials/using-laravel-mix-with-webpack-for-all-your-assets
|
*/

mix.js('resources/js/app.js', 'public/js')
  .sass('resources/sass/app.scss', 'public/css')
  .copyDirectory('src', 'public')

  // Mouse
  .sass('resources/sass/third_party_html5/platform.scss', 'public/css/third_party_html5/platform.css')
  .sass('resources/sass/third_party_html5/reactionB.scss', 'public/css/third_party_html5/reactionB.css')
  .sass('resources/sass/third_party_html5/shootthetarget.scss', 'public/css/third_party_html5/shootthetarget.css')
  .sass('resources/sass/third_party_html5/fish.scss', 'public/css/third_party_html5/fish.css')
  .sass('resources/sass/third_party_html5/vdasteroids.sass', 'public/css/third_party_html5/vdasteroids.css')
  .sass('resources/sass/third_party_html5/breakout.scss', 'public/css/third_party_html5/breakout.css')
  .sass('resources/sass/third_party_html5/whackamoleB.scss', 'public/css/third_party_html5/whackamoleB.css')

  // Keyboard Action
  .sass('resources/sass/third_party_html5/cybersnake.scss', 'public/css/third_party_html5/cybersnake.css')

  // Puzzles and Mind Sport
  .sass('resources/sass/third_party_html5/hanoi.scss', 'public/css/third_party_html5/hanoi.css')
  .sass('resources/sass/third_party_html5/gomoku.scss', 'public/css/third_party_html5/gomoku.css')
  .less('resources/less/third_party_html5/mahjongg.less', 'public/css/third_party_html5/mahjongg.css')

  // Experiments and Science
  .sass('resources/sass/third_party_html5/planetsquiz.scss', 'public/css/third_party_html5/planetsquiz.css')
  .sass('resources/sass/third_party_html5/lunarlander.scss', 'public/css/third_party_html5/lunarlander.css')

  // Art
  .sass('resources/sass/third_party_html5/pianokeyboard.scss', 'public/css/third_party_html5/pianokeyboard.css')
  .sass('resources/sass/third_party_html5/animatedguitar.scss', 'public/css/third_party_html5/animatedguitar.css')

  // Esports and Challenge

  // Memory Championship Training
  .sass('resources/sass/third_party_html5/memory.scss', 'public/css/third_party_html5/memory.css')

  // Friends
      /* Need to discover a way to @import "compass/css3"
        .compass('resources/sass/third_party_html5/tictactoe.scss', 'public/css/third_party_html5/tictactoe.css')
      */

  // Fun and Rest

  // Mental Calculation and Math
  .sass('resources/sass/third_party_html5/arithmetic.sass', 'public/css/third_party_html5/arithmetic.css')

  // Language
  .sass('resources/sass/third_party_html5/wordsearch2.scss', 'public/css/third_party_html5/wordsearch2.css')
  ;
