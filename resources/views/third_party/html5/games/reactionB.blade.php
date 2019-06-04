<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/jcoulterdesign/pen/XdYxMJ.

This has been my baby for a while now. Contains audio. Power the reaction bar before the time runs out by clicking on the lit nodes before they decay. The faster you get the nodes, the more charge will be added to the reaction bar. Collect power ups and get combos with continuous successful hits.
-->

<!--
Copyright (c) 2019 by Jamie Coulter (https://codepen.io/jcoulterdesign/pen/XdYxMJ)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

{{--
Scripts that only work as cdn:
http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js
--}}

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Reaction: Fast paced JS reaction game</title>
  {{-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css'> --}}
  <link rel="stylesheet" href="{!! asset('css/font-awesome.min.css') !!}" />
  {{-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'> --}}
  <link rel="stylesheet" href="{!! asset('css/ionicons.min.css') !!}" />
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/reactionB.css') !!}" />
</head>

<body>

  <div class='mask'></div>
  <div class='loadingtext'>
    loading please wait...
  </div>
  <div class='audiofixer'>
    <div class='audiofixer_inner'>
      Click anywhere to initiate the awesome
    </div>
  </div>
  <div class='main_menu'>
    <div class='shake'>
      <div class='loaded__inner'>
        <img class='a' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/countdown_circle.png'>
        <svg class='main_svg' enable-background='new 0 0 422.979 47.998' height='47.998px' space='preserve' version='1.1' viewbox='0 0 422.979 47.998' width='422.979px' x='0px' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
          <g>
            <path d='M11.482,37.903'></path>
            <path d='M10.753,37.903V7.214h7.708c0,0,9.662-0.551,9.662,8.1&#x000A;		s-6.975,8.009-6.975,8.009l8.549,14.58' fill='none' stroke-miterlimit='10' stroke='#fff'></path>
            <polyline fill='none' points='83.028,8.039 69.211,8.039 69.211,21.903 69.524,21.903 &#x000A;		81.586,21.903 69.211,21.903 69.211,37.153 83.028,37.153 	' stroke-miterlimit='10' stroke='#fff'></polyline>
            <polyline fill='none' points='118.586,37.903 129.35,10.028 140.023,37.903 	' stroke-miterlimit='10' stroke='#fff'></polyline>
            <path d='M194.564,10.028c0,0-2.004-2.5-6.853-2.5&#x000A;		c-4.848,0-11.5,3.187-11.5,15.438s7.563,14.938,11.125,14.938s6.498-2.145,7.228-2.875' fill='none' stroke-miterlimit='10' stroke='#fff'></path>
            <polyline fill='none' points='228.686,7.966 249.024,7.966 238.855,7.966 238.855,37.903 &#x000A;	' stroke-miterlimit='10' stroke='#fff'></polyline>
            <line fill='none' stroke-miterlimit='10' stroke='#fff' x1='287.254' x2='287.254' y1='7.214' y2='37.903'></line>
            <path d='M340.421,7.466c0,0-11.585-0.421-11.585,15.071&#x000A;	s11.585,15.117,11.585,15.117s11.29,1.329,11.29-15.117S340.421,7.466,340.421,7.466z' fill='none' stroke-miterlimit='10' stroke='#EB7048'></path>
            <polyline fill='none' points='393.523,37.903 393.523,10.278 411.211,35.028 &#x000A;	411.211,7.214 ' stroke-miterlimit='10' stroke='#fff'></polyline>
          </g>
        </svg>
        <h1>A game by Jamie Coulter</h1>
        <div class='play'>
          <div class='play_inner'>
            <i class='ion-mouse'></i>
            Click to start
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class='reaction'>
    <div class='mistake'></div>
    <div class='overlay'></div>
    <div class='tutorial'>
      <div class='tutorial_inner'>
        <div class='close_tutorial'>
          <i class='ion-close-round'></i>
        </div>
        <img class='header' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tutorial_header.png'>
        <div class='slider_wrapper'>
          <div class='slider_wrapper__inner'>
            <div class='slide slide_1'>
              <h2>CLICK THE NODES</h2>
              <img class='t1' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/t1.png'>
              <p>Power the reaction bar before the time runs out by clicking on the lit nodes before they decay. The faster you get the nodes, the more charge will be added to the reaction bar.</p>
              <div class='tutorial_inner__button'>
                next
              </div>
            </div>
            <div class='slide slide_2'>
              <h2>COLLECT POWER UPS</h2>
              <img class='t9' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/t9.png'>
              <p>Collect various powerups to help you win. There are three types. Shrink the grid, add extra time +2s and instant full multiplier!</p>
              <div class='tutorial_inner__button'>
                next
              </div>
            </div>
            <div class='slide slide_3'>
              <h2>GET COMBOS</h2>
              <img class='t10' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/t10.png'>
              <p>Increase your multiplier by hitting nodes consistently. The more you get in a row, the higher your multiplier will be. However, if you miss a node your multiplier is reset!</p>
              <div class='tutorial_inner__letsgo'>
                lets go
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class='summary'>
      <div class='summary_inner'>
        <img class='header' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/summary_header.png'>
        <div class='summary_stats'>
          <div class='st_nodes'>
            <img class='lev_icon' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/game_icon_full.png'>
            <span class='title'>Nodes</span>
            <span class='stat'>0</span>
            <span class='time'>x 100</span>
            <span class='total'>0</span>
          </div>
          <div class='st_powerups'>
            <img class='lev_icon' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/game_icon_full.png'>
            <span class='title'>Powerups</span>
            <span class='stat'>0</span>
            <span class='time'>x 100</span>
            <span class='total'>0</span>
          </div>
          <div class='st_timeremaining'>
            <img class='lev_icon' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/game_icon_full.png'>
            <span class='title'>Time remaining</span>
            <span class='stat'>0</span>
            <span class='time'>x 100</span>
            <span class='total'>0</span>
          </div>
          <div class='st_reactionbar'>
            <img class='lev_icon' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/game_icon_full.png'>
            <span class='title'>Reaction points</span>
            <span class='stat'>0</span>
            <span class='time'>x 1</span>
            <span class='total'>0</span>
          </div>
          <div class='st_gamepoints'>
            <span class='title'>Game points</span>
            <span class='stat'>0</span>
          </div>
          <div class='sum_share'>
            <div class='sum_share__twitter'>
              <i class='ion-social-twitter'></i>
              Share on Twitter
            </div>
            <div class='sum_share__codepen'>
              <a href='https://www.codepen.io/jcoulterdesign' target='_blank'>
                <i class='ion-social-codepen'></i>
                Follow me on Codepen
              </a>
            </div>
          </div>
        </div>
        <div class='summary_inner__next'>
          Next level
        </div>
      </div>
    </div>
    <div class='gameover'>
      <div class='gameover_inner'>
        <img class='header' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/game_over_header.png'>
        <div class='go_stats'>
          <div class='go_level'>
            <img class='lev_icon' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/game_icon_full.png'>
            <span>Level</span>
            <span class='stat'>0</span>
          </div>
          <div class='go_hits'>
            <img class='lev_icon' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/game_icon_full.png'>
            <span>Node hits</span>
            <span class='stat'>0</span>
          </div>
          <div class='go_bonus'>
            <img class='lev_icon' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/game_icon_full.png'>
            <span>Powerups</span>
            <span class='stat'>0</span>
          </div>
          <div class='go_points'>
            <span>Total score</span>
            <span class='stat_s'>0</span>
          </div>
          <div class='go_share'>
            <div class='go_share__twitter'>
              <i class='ion-social-twitter'></i>
              Share on Twitter
            </div>
            <div class='go_share__codepen'>
              <a href='https://www.codepen.io/jcoulterdesign' target='_blank'>
                <i class='ion-social-codepen'></i>
                Follow me on Codepen
              </a>
            </div>
          </div>
        </div>
        <div class='gameover_inner__button'>
          try again
        </div>
      </div>
    </div>
    <section class='countdown'>
      <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/countdown_circle.png'>
      <div class='number'>3</div>
    </section>
    <section class='game orig'>
      <div class='game_hud'>
        <div class='game_hud__left'>
          <div class='game_globaltimer'>
            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/node_count.png'>
            <span class="hits">0</span>/<span class="t_hits">0</span> <span class="t_nodes">NODES</span>
          </div>
        </div>
        <div class='game_hud__middle'>
          <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/reaction.png'>
        </div>
        <div class='game_hud__right'>
          <img class='lev_icon' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/game_icon_full.png'>
          <div class='game_level'>Level: <span>1</span></div>
        </div>
      </div>
      <div class='game_inner__mute'>
        <i class="a_sound fa fa-volume-up" aria-hidden="true"></i>
        <i class="fa fa-volume-off" aria-hidden="true"></i>
      </div>
      <div class='game_inner__mute--text'>Sound</div>
      <div class='game_inner__song'>
        <i class="fa fa-play" aria-hidden="true"></i>
        <i class="a_song fa fa-pause" aria-hidden="true"></i>
      </div>
      <div class='game_inner__song--text'>Music</div>
      <div class='game_inner__time'>
        <svg id='layer_1' space='preserve' style='enable-background:new 0 0 138.5 58.5;' version='1.1' viewbox='0 0 138.5 58.5' x='0px' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
          <style>
            .st0{fill:transparent;}
          </style>
          <g>
            <path class='st0' d='M108.8,55.5H29.2C14.8,55.5,3,43.7,3,29.3v0C3,14.8,14.8,3,29.2,3h79.5C123.2,3,135,14.8,135,29.2v0&#x000A;		C135,43.7,123.2,55.5,108.8,55.5z'></path>
          </g>
        </svg>
        <svg id='svg1' space='preserve' style='enable-background:new 0 0 138.5 58.5;' version='1.1' viewbox='0 0 138.5 58.5' x='0px' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
          <style>
            .st0{fill:transparent;}
          </style>
          <g>
            <path class='st0' d='M108.8,55.5H29.2C14.8,55.5,3,43.7,3,29.3v0C3,14.8,14.8,3,29.2,3h79.5C123.2,3,135,14.8,135,29.2v0&#x000A;		C135,43.7,123.2,55.5,108.8,55.5z'></path>
          </g>
        </svg>
        <p>180</p>
        <i class='ion-chevron-up faster'></i>
        <i class='ion-chevron-down slower'></i>
      </div>
      <div class='game_inner__multiplier'>
        <span class="x">x</span><span class="m">1</span>
        <span>Multiplier</span>
      </div>
      <div class='bonus_wrap'>
        <div class='game_inner'>
          <div class='game_inner__center'>
            <div class='warning'></div>
            <div class='level_timer'>
              <i class="fa fa-hourglass-o" aria-hidden="true"></i>
              <span class="s">20</span> <span class="text">SECONDS</span>
            </div>
          </div>
          <div class='nodes'>
            <div class='node_wrapper'>
              <div class='game_inner__node--hitbox'></div>
              <div class='game_inner__node' node-id='node-1'></div>
              <div class='combo_text'>
                <img class='c_1' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo1.png'>
                <img class='c_2' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo2.png'>
                <img class='c_3' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo3.png'>
                <img class='c_4' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo4.png'>
              </div>
            </div>
            <div class='node_wrapper'>
              <div class='game_inner__node--hitbox'></div>
              <div class='game_inner__node' node-id='node-2'></div>
              <div class='combo_text'>
                <img class='c_1' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo1.png'>
                <img class='c_2' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo2.png'>
                <img class='c_3' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo3.png'>
                <img class='c_4' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo4.png'>
              </div>
            </div>
            <div class='node_wrapper'>
              <div class='game_inner__node--hitbox'></div>
              <div class='game_inner__node' node-id='node-3'></div>
              <div class='combo_text'>
                <img class='c_1' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo1.png'>
                <img class='c_2' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo2.png'>
                <img class='c_3' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo3.png'>
                <img class='c_4' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo4.png'>
              </div>
            </div>
            <div class='node_wrapper'>
              <div class='game_inner__node--hitbox'></div>
              <div class='game_inner__node' node-id='node-4'></div>
              <div class='combo_text'>
                <img class='c_1' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo1.png'>
                <img class='c_2' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo2.png'>
                <img class='c_3' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo3.png'>
                <img class='c_4' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo4.png'>
              </div>
            </div>
            <div class='node_wrapper'>
              <div class='game_inner__node--hitbox'></div>
              <div class='game_inner__node' node-id='node-5'></div>
              <div class='combo_text'>
                <img class='c_1' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo1.png'>
                <img class='c_2' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo2.png'>
                <img class='c_3' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo3.png'>
                <img class='c_4' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo4.png'>
              </div>
            </div>
            <div class='node_wrapper'>
              <div class='game_inner__node--hitbox'></div>
              <div class='game_inner__node' node-id='node-6'></div>
              <div class='combo_text'>
                <img class='c_1' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo1.png'>
                <img class='c_2' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo2.png'>
                <img class='c_3' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo3.png'>
                <img class='c_4' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo4.png'>
              </div>
            </div>
            <div class='node_wrapper'>
              <div class='game_inner__node--hitbox'></div>
              <div class='game_inner__node' node-id='node-7'></div>
              <div class='combo_text'>
                <img class='c_1' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo1.png'>
                <img class='c_2' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo2.png'>
                <img class='c_3' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo3.png'>
                <img class='c_4' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo4.png'>
              </div>
            </div>
            <div class='node_wrapper'>
              <div class='game_inner__node--hitbox'></div>
              <div class='game_inner__node' node-id='node-8'></div>
              <div class='combo_text'>
                <img class='c_1' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo1.png'>
                <img class='c_2' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo2.png'>
                <img class='c_3' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo3.png'>
                <img class='c_4' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/combo4.png'>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class='game_bar'>
        <h2>
          Reaction Bar - <span class="rp">0</span> / <span class="rpn">1000</span>
        </h2>
        <div class='game_bar__outer'>
          <div class='game_bar__icon--empty'>
            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/game_icon_empty.png'>
          </div>
          <div class='game_bar__fill'>
            <canvas id="b" width="600px" height="300px"></canvas>
          </div>
          <div class='game_bar__triangle'></div>
          <div class='game_bar__icon--full'>
            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/game_icon_full.png'>
          </div>
        </div>
      </div>
    </section>
    <div class='footer'>
      <div class='footer_left'>
        Created on <a href="https://www.codepen.io" target='_blank'>Codepen</a> by <a href="https://codepen.io/jcoulterdesign/" target='_blank'>Jamie Coulter</a>. Mobile port by <a href="https://codepen.io/Stockin/" target='_blank'>Phil Stocking</a>
      </div>
      <div class='footer_twitter'>
        <a href='#'>
          <i class="fa fa-twitter-square" aria-hidden="true"></i>
          <span>Share on Twitter</span>
          <i class="fa fa-arrow-right" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
  {{-- <script src="{!! asset('js/jquery.min.js') !!}"></script> --}}
  <script src="{!! asset('js/third_party_html5/reactionB.js') !!}"></script>

</body>
</html>
