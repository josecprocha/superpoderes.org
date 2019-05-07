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
  .sass('resources/sass/app.scss', 'public/css')
  .sass('resources/sass/third_party_html5_hanoi.scss', 'public/css/third_party_html5/hanoi.css')
  .copy('resources/sass/third_party_html5_cubnpup.css', 'public/css/third_party_html5/cubnpup.css')
  .copy('resources/sass/third_party_html5_reaction.css', 'public/css/third_party_html5/reaction.css')
  .copy('resources/sass/third_party_html5_crosshatch.css', 'public/css/third_party_html5/crosshatch.css')
  .copy('resources/sass/third_party_html5_pathfinder.css', 'public/css/third_party_html5/pathfinder.css');
