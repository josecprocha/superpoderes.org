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

  // node_modules
  .copy('node_modules/@fortawesome/fontawesome-free/css/all.css', 'public/css/all.css')
  .copy('node_modules/@fortawesome/fontawesome-free/js/all.js', 'public/js/all.css')
  .copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/webfonts')
  .copy('node_modules/angular/angular.min.js', 'public/js/angular.min.js')
  .copy('node_modules/angular-timer/dist/angular-timer.min.js', 'public/js/angular-timer.min.js')
  .copy('node_modules/animate.css/animate.min.css', 'public/css/animate.min.css')
  .copy('node_modules/babel-regenerator-runtime/runtime.js', 'public/js/runtime.js')
  .copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css')
  .copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js')
  .sass('node_modules/bootstrap/scss/bootstrap.scss', 'public/css/bootstrap.css')
  .copy('node_modules/chroma-js/chroma.min.js', 'public/js/chroma.min.js')
  .copy('node_modules/dat.gui/build/dat.gui.min.js', 'public/js/dat.gui.min.js')
  .copy('node_modules/font-awesome/css/font-awesome.min.css', 'public/css/font-awesome.min.css')
  .copyDirectory('node_modules/font-awesome/fonts', 'public/fonts')
  .copy('node_modules/gl-matrix/gl-matrix-min.js', 'public/js/gl-matrix-min.js')
  .copy('node_modules/gsap/src/minified/utils/Draggable.min.js', 'public/js/Draggable.min.js')
  .copy('node_modules/gsap/src/minified/TimelineMax.min.js', 'public/js/TimelineMax.min.js')
  .copy('node_modules/gsap/src/minified/TweenMax.min.js', 'public/js/TweenMax.min.js')
  .copy('node_modules/hammerjs/hammer.min.js', 'public/js/hammer.min.js')
  .copy('node_modules/howler/dist/howler.min.js', 'public/js/howler.min.js')
  .copy('node_modules/ionicons/dist/css/ionicons.min.css', 'public/css/ionicons.min.css')
  .copyDirectory('node_modules/ionicons/dist/fonts', 'public/fonts')
  .copy('node_modules/jplayer/dist/jplayer/jquery.jplayer.min.js', 'public/js/jquery.jplayer.min.js')
  .copy('node_modules/jQuery/dist/jquery.min.js', 'public/js/jquery.min.js')
  .copy('node_modules/jQuery/dist/jquery.slim.min.js', 'public/js/jquery.slim.min.js')
  .copy('node_modules/jquery-color/jquery.color.js', 'public/js/jquery.color.js')
  .copy('node_modules/jquery-mobile/js/jquery.mobile.js', 'public/js/jquery.mobile.js')
  //.js('node_modules/jquery-ui/build/release.js', 'public/js/jquery-ui.js')
  .copy('node_modules/matter-js/build/matter.js', 'public/js/matter.js')
  .copy('node_modules/modernizr/src/Modernizr.js', 'public/js/modernizr.js')
  .copy('node_modules/normalize.css/normalize.css', 'public/css/normalize.css')
  .copy('node_modules/p5/lib/p5.min.js', 'public/js/p5.min.js')
  .copy('node_modules/pixi.js/dist/pixi.js', 'public/js/pixi.js')
  .copy('node_modules/poly-decomp/build/decomp.min.js', 'public/js/decomp.min.js')
  .copy('node_modules/popper.js/dist/popper.min.js', 'public/js/popper.min.js')
  .copy('node_modules/prefixfree/prefixfree.min.js', 'public/js/prefixfree.min.js')
  .copy('node_modules/redux/dist/redux.min.js', 'public/js/redux.min.js')
  .copy('node_modules/redux-saga/dist/redux-saga.umd.min.js', 'public/js/redux-saga.umd.min.js')
  .copy('node_modules/reset-css/reset.css', 'public/css/reset.css')
  .copy('node_modules/seedrandom/lib/alea.js', 'public/js/alea.js')
  .copy('node_modules/sketch-js/js/sketch.min.js', 'public/js/sketch.min.js')
  .copy('node_modules/soundjs/lib/soundjs.min.js', 'public/js/soundjs.min.js')
  .copy('node_modules/stats-js/build/stats.js', 'public/js/stats.js')
  .copy('node_modules/stats-js/build/stats.min.js', 'public/js/stats.min.js')
  .copy('node_modules/sweetalert2/dist/sweetalert2.min.css', 'public/css/sweetalert2.min.css')
  .copy('node_modules/sweetalert2/dist/sweetalert2.min.js', 'public/js/sweetalert2.min.js')
  .copy('node_modules/vue/dist/vue.min.js', 'public/js/vue.min.js')

  // Mouse
  .sass('resources/sass/third_party_html5/platform.scss', 'public/css/third_party_html5/platform.css')
  .sass('resources/sass/third_party_html5/reactionB.scss', 'public/css/third_party_html5/reactionB.css')
  .sass('resources/sass/third_party_html5/shootthetarget.scss', 'public/css/third_party_html5/shootthetarget.css')
  .sass('resources/sass/third_party_html5/fish.scss', 'public/css/third_party_html5/fish.css')
  .sass('resources/sass/third_party_html5/vdasteroids.sass', 'public/css/third_party_html5/vdasteroids.css')
  .sass('resources/sass/third_party_html5/breakout.scss', 'public/css/third_party_html5/breakout.css')
  .sass('resources/sass/third_party_html5/whackamoleB.scss', 'public/css/third_party_html5/whackamoleB.css')
  .sass('resources/sass/third_party_html5/shootinghoops.scss', 'public/css/third_party_html5/shootinghoops.css')
  // Keyboard Action
  .sass('resources/sass/third_party_html5/cybersnake.scss', 'public/css/third_party_html5/cybersnake.css')
  // Puzzles and Mind Sport
  .sass('resources/sass/third_party_html5/hanoi.scss', 'public/css/third_party_html5/hanoi.css')
  .sass('resources/sass/third_party_html5/gomoku.scss', 'public/css/third_party_html5/gomoku.css')
  .less('resources/less/third_party_html5/mahjongg.less', 'public/css/third_party_html5/mahjongg.css')
  .sass('resources/sass/third_party_html5/chroma.scss', 'public/css/third_party_html5/chroma.css')
  .sass('resources/sass/third_party_html5/15.scss', 'public/css/third_party_html5/15.css')
  .sass('resources/sass/third_party_html5/themine.scss', 'public/css/third_party_html5/themine.css')
  .sass('resources/sass/third_party_html5/align4.scss', 'public/css/third_party_html5/align4.css')
  .sass('resources/sass/third_party_html5/tetrisB.scss', 'public/css/third_party_html5/tetrisB.css')
  // Experiments and Science
  .sass('resources/sass/third_party_html5/planetsquiz.scss', 'public/css/third_party_html5/planetsquiz.css')
  .sass('resources/sass/third_party_html5/lunarlander.scss', 'public/css/third_party_html5/lunarlander.css')
  .sass('resources/sass/third_party_html5/multiplicationtoy.scss', 'public/css/third_party_html5/multiplicationtoy.css')
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
  .sass('resources/sass/third_party_html5/2048.scss', 'public/css/third_party_html5/2048.css')
  // Language
  .sass('resources/sass/third_party_html5/wordsearch2.scss', 'public/css/third_party_html5/wordsearch2.css')
;
