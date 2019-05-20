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
  .sass('resources/sass/app.scss', 'public/css')
  // Mouse
  .copy('resources/js/third_party_html5_reaction.js', 'public/js/third_party_html5/reaction.js')
  .copy('resources/sass/third_party_html5_reaction.css', 'public/css/third_party_html5/reaction.css')
  .copy('resources/js/third_party_html5_crosshatch.js', 'public/js/third_party_html5/crosshatch.js')
  .copy('resources/sass/third_party_html5_crosshatch.css', 'public/css/third_party_html5/crosshatch.css')
  .copy('resources/js/third_party_html5_pathfinder.js', 'public/js/third_party_html5/pathfinder.js')
  .copy('resources/sass/third_party_html5_pathfinder.css', 'public/css/third_party_html5/pathfinder.css')
  .copy('resources/js/third_party_html5_platform.js', 'public/js/third_party_html5/platform.js')
  .sass('resources/sass/third_party_html5_platform.scss', 'public/css/third_party_html5/platform.css')
  .copy('resources/js/third_party_html5_planetdefense.js', 'public/js/third_party_html5/planetdefense.js')
  .copy('resources/sass/third_party_html5_planetdefense.css', 'public/css/third_party_html5/planetdefense.css')
  .copy('resources/js/third_party_html5_mouseminigame.js', 'public/js/third_party_html5/mouseminigame.js')
  .copy('resources/sass/third_party_html5_mouseminigame.css', 'public/css/third_party_html5/mouseminigame.css')
  .copy('resources/js/third_party_html5_powersurge.js', 'public/js/third_party_html5/powersurge.js')
  .copy('resources/sass/third_party_html5_powersurge.css', 'public/css/third_party_html5/powersurge.css')
  .copy('resources/js/third_party_html5_reactionB.js', 'public/js/third_party_html5/reactionB.js')
  .sass('resources/sass/third_party_html5_reactionB.scss', 'public/css/third_party_html5/reactionB.css')
  .sass('resources/sass/third_party_html5_shootthetarget.scss', 'public/css/third_party_html5/shootthetarget.css')
  .copy('resources/js/third_party_html5_toddlerrainbow.js', 'public/js/third_party_html5/toddlerrainbow.js')
  .copy('resources/js/third_party_html5_ultimatearcadeshooter.js', 'public/js/third_party_html5/ultimatearcadeshooter.js')
  .copy('resources/sass/third_party_html5_ultimatearcadeshooter.css', 'public/css/third_party_html5/ultimatearcadeshooter.css')
  // Keyboard Action
  .copy('resources/js/third_party_html5_savetheprincess.js', 'public/js/third_party_html5/savetheprincess.js')
  .copy('resources/sass/third_party_html5_savetheprincess.css', 'public/css/third_party_html5/savetheprincess.css')
  .copy('resources/js/third_party_html5_interactivesnake.js', 'public/js/third_party_html5/interactivesnake.js')
  .copy('resources/sass/third_party_html5_interactivesnake.css', 'public/css/third_party_html5/interactivesnake.css')
  .copy('resources/js/third_party_html5_asteroids.js', 'public/js/third_party_html5/asteroids.js')
  .copy('resources/sass/third_party_html5_asteroids.css', 'public/css/third_party_html5/asteroids.css')
  .copy('resources/js/third_party_html5_glitchmaze.js', 'public/js/third_party_html5/glitchmaze.js')
  .copy('resources/js/third_party_html5_maze.js', 'public/js/third_party_html5/maze.js')
  .copy('resources/js/third_party_html5_crossthestreet.js', 'public/js/third_party_html5/crossthestreet.js')
  .copy('resources/sass/third_party_html5_crossthestreet.css', 'public/css/third_party_html5/crossthestreet.css')
  .copy('resources/js/third_party_html5_crosstotheotherside.js', 'public/js/third_party_html5/crosstotheotherside.js')
  .copy('resources/sass/third_party_html5_crosstotheotherside.css', 'public/css/third_party_html5/crosstotheotherside.css')
  .copy('resources/js/third_party_html5_asteroidsB.js', 'public/js/third_party_html5/asteroidsB.js')
  .copy('resources/sass/third_party_html5_asteroidsB.css', 'public/css/third_party_html5/asteroidsB.css')
  // Puzzles and Mind Sport
  .copy('resources/js/third_party_html5_hanoi.js', 'public/js/third_party_html5/hanoi.js')
  .sass('resources/sass/third_party_html5_hanoi.scss', 'public/css/third_party_html5/hanoi.css')
  .copy('resources/js/third_party_html5_cubnpup.js', 'public/js/third_party_html5/cubnpup.js')
  .copy('resources/sass/third_party_html5_cubnpup.css', 'public/css/third_party_html5/cubnpup.css')
  .copy('resources/js/third_party_html5_tetris.js', 'public/js/third_party_html5/tetris.js')
  .copy('resources/js/third_party_html5_swinepeeper.js', 'public/js/third_party_html5/swinepeeper.js')
  .copy('resources/sass/third_party_html5_swinepeeper.css', 'public/css/third_party_html5/swinepeeper.css')
  .copy('resources/js/third_party_html5_chess.js', 'public/js/third_party_html5/chess.js')
  .copy('resources/sass/third_party_html5_chess.css', 'public/css/third_party_html5/chess.css')
  .copy('resources/js/third_party_html5_tictacdoom.js', 'public/js/third_party_html5/tictacdoom.js')
  .copy('resources/sass/third_party_html5_tictacdoom.css', 'public/css/third_party_html5/tictacdoom.css')
  .copy('resources/js/third_party_html5_gomoku.js', 'public/js/third_party_html5/gomoku.js')
  .sass('resources/sass/third_party_html5_gomoku.scss', 'public/css/third_party_html5/gomoku.css')
  .copy('resources/js/third_party_html5_mcdraughts.js', 'public/js/third_party_html5/mcdraughts.js')
  .copy('resources/sass/third_party_html5_mcdraughts.css', 'public/css/third_party_html5/mcdraughts.css')
  .copy('resources/js/third_party_html5_blockpuzzle.js', 'public/js/third_party_html5/blockpuzzle.js')
  .copy('resources/sass/third_party_html5_blockpuzzle.css', 'public/css/third_party_html5/blockpuzzle.css')
  .copy('resources/js/third_party_html5_mahjongg.js', 'public/js/third_party_html5/mahjongg.js')
  .less('resources/sass/third_party_html5_mahjongg.less', 'public/css/third_party_html5/mahjongg.css')
  .copy('resources/sass/third_party_html5_bycss.css', 'public/css/third_party_html5/bycss.css')
  // Experiments and Science
  .copy('resources/js/third_party_html5_planetsquiz.js', 'public/js/third_party_html5/planetsquiz.js')
  .sass('resources/sass/third_party_html5_planetsquiz.scss', 'public/css/third_party_html5/planetsquiz.css')
  // Esports and Challenge
  .copy('resources/js/third_party_html5_clicksoccer.js', 'public/js/third_party_html5/clicksoccer.js')
  .copy('resources/sass/third_party_html5_clicksoccer.css', 'public/css/third_party_html5/clicksoccer.css')
  // Memory Championship Training
  .copy('resources/js/third_party_html5_memory.js', 'public/js/third_party_html5/memory.js')
  .sass('resources/sass/third_party_html5_memory.scss', 'public/css/third_party_html5/memory.css')
  // Friends
  .copy('resources/js/third_party_html5_pong.js', 'public/js/third_party_html5/pong.js')
  .copy('resources/sass/third_party_html5_pong.css', 'public/css/third_party_html5/pong.css')
      // Need to discover a way to @import "compass/css3"
      // .compass('resources/sass/third_party_html5_tictactoe.scss', 'public/css/third_party_html5/tictactoe.css')
  .copy('resources/sass/third_party_html5_tictactoe.css', 'public/css/third_party_html5/tictactoe.css')
  .copy('resources/js/third_party_html5_checkers.js', 'public/js/third_party_html5/checkers.js')
  .copy('resources/sass/third_party_html5_checkers.css', 'public/css/third_party_html5/checkers.css')
  // Fun and Rest
  .copy('resources/js/third_party_html5_matchcolor.js', 'public/js/third_party_html5/matchcolor.js')
  .copy('resources/sass/third_party_html5_matchcolor.css', 'public/css/third_party_html5/matchcolor.css')
  .copy('resources/js/third_party_html5_paperstonescissors.js', 'public/js/third_party_html5/paperstonescissors.js')
  .copy('resources/sass/third_party_html5_paperstonescissors.css', 'public/css/third_party_html5/paperstonescissors.css')
  // Mental Calculation and Math
  // Language
  .copy('resources/js/third_party_html5_crosswordgenerator.js', 'public/js/third_party_html5/crosswordgenerator.js')
  .copy('resources/sass/third_party_html5_crosswordgenerator.css', 'public/css/third_party_html5/crosswordgenerator.css')
  .copy('resources/js/third_party_html5_wordsearch2.js', 'public/js/third_party_html5/wordsearch2.js')
  .sass('resources/sass/third_party_html5_wordsearch2.scss', 'public/css/third_party_html5/wordsearch2.css')
  ;
