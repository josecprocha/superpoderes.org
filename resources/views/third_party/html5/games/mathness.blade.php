<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/mselmany/pen/emJPGg.

Included mouse and button play modes, you can switch btw twos.Just an experiment.
-->

<!--
Copyright (c) 2019 by mselmany (https://codepen.io/mselmany/pen/emJPGg)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Math Game</title>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/mathness.css') !!}" />
</head>

<body class="withMouse_ON start_ON">

  <div class="option" id="option">
    <span class="withButton" id="withButton">Play with Mouse</span>
    <span class="withMouse" id="withMouse">Play with Button</span>
  </div>

  <div id="time"></div>

  <div class="field start">
    <div class="inner">
      <div class="header">
        <h1>Mathness</h1>
        <p>quick thinking and responsing</p>
      </div>
      <div class="button start" id="start">Start</div>
    </div>
  </div>

  <div class="field main">
    <div class="inner">
      <div class="notification">
        <span class="level">Level <span id="level">1</span></span>●<span class="counter" id="counter">0</span>
      </div>
      <div class="screen">
        <span class="first" id="first"></span>+<span class="second" id="second"></span>
        <div class="result" id="result"></div>
      </div>
      <div class="buttons withButton">
        <div class="button true" id="true">True</div>
        <div class="button false" id="false">False</div>
      </div>
      <div class="buttons withMouse">
        <p>Left click : <span>True</span></p>
        <p>Right click : <span>False</span></p>
      </div>
    </div>
  </div>

  <div class="field end level1">
    <div class="inner">
      <div class="scoreboard">
        <div class="header">Your Score</div>
        <div class="level">Level <span id="level">1</span></div>
        <div class="counter" id="counter">0</div>
        <div class="text level1">Bad, keep trying!</div>
        <div class="text level2">Good, try more for best.</div>
        <div class="text level3">Genius, don't play more!</div>
        <div class="text level4">Heey, I said you "Don't play more!" dude.</div>
      </div>
      <div class="button replay" id="replay">Replay</div>
    </div>
  </div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="{!! asset('js/third_party_html5/mathness.js') !!}"></script>

</body>
</html>
