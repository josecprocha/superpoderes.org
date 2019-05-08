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

// More info: https://scotch.io/tutorials/using-laravel-mix-with-webpack-for-all-your-assets

mix.js('resources/js/app.js', 'public/js')
  .copy('resources/js/third_party_html5_hanoi.js', 'public/js/third_party_html5/hanoi.js')
  .copy('resources/js/third_party_html5_cubnpup.js', 'public/js/third_party_html5/cubnpup.js')
  .copy('resources/js/third_party_html5_reaction.js', 'public/js/third_party_html5/reaction.js')
  .copy('resources/js/third_party_html5_crosshatch.js', 'public/js/third_party_html5/crosshatch.js')
  .copy('resources/js/third_party_html5_pathfinder.js', 'public/js/third_party_html5/pathfinder.js')
  .copy('resources/js/third_party_html5_platform.js', 'public/js/third_party_html5/platform.js')
  .copy('resources/js/third_party_html5_savetheprincess.js', 'public/js/third_party_html5/savetheprincess.js')
  .copy('resources/js/third_party_html5_interactivesnake.js', 'public/js/third_party_html5/interactivesnake.js')
  .copy('resources/js/third_party_html5_tetris.js', 'public/js/third_party_html5/tetris.js')
  .copy('resources/js/third_party_html5_planetdefense.js', 'public/js/third_party_html5/planetdefense.js')
  .copy('resources/js/third_party_html5_asteroids.js', 'public/js/third_party_html5/asteroids.js')
  .copy('resources/js/third_party_html5_glitchmaze.js', 'public/js/third_party_html5/glitchmaze.js')
  .copy('resources/js/third_party_html5_maze.js', 'public/js/third_party_html5/maze.js')
  .copy('resources/js/third_party_html5_crossthestreet.js', 'public/js/third_party_html5/crossthestreet.js')
  .copy('resources/js/third_party_html5_crosstotheotherside.js', 'public/js/third_party_html5/crosstotheotherside.js')
  .sass('resources/sass/app.scss', 'public/css')
  .sass('resources/sass/third_party_html5_hanoi.scss', 'public/css/third_party_html5/hanoi.css')
  .copy('resources/sass/third_party_html5_cubnpup.css', 'public/css/third_party_html5/cubnpup.css')
  .copy('resources/sass/third_party_html5_reaction.css', 'public/css/third_party_html5/reaction.css')
  .copy('resources/sass/third_party_html5_crosshatch.css', 'public/css/third_party_html5/crosshatch.css')
  .copy('resources/sass/third_party_html5_pathfinder.css', 'public/css/third_party_html5/pathfinder.css')
  .sass('resources/sass/third_party_html5_platform.scss', 'public/css/third_party_html5/platform.css')
  .copy('resources/sass/third_party_html5_savetheprincess.css', 'public/css/third_party_html5/savetheprincess.css')
  .copy('resources/sass/third_party_html5_interactivesnake.css', 'public/css/third_party_html5/interactivesnake.css')
  .copy('resources/sass/third_party_html5_planetdefense.css', 'public/css/third_party_html5/planetdefense.css')
  .copy('resources/sass/third_party_html5_asteroids.css', 'public/css/third_party_html5/asteroids.css')
  .copy('resources/sass/third_party_html5_crossthestreet.css', 'public/css/third_party_html5/crossthestreet.css')
  .copy('resources/sass/third_party_html5_crosstotheotherside.css', 'public/css/third_party_html5/crosstotheotherside.css');
