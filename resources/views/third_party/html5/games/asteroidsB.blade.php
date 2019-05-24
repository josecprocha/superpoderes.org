<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/jeffibacache/pen/bzBsp.

A mini "Asteroids" game coded from scratch, using some math and black magic.

This is a codepen adapted version of the game, check/fork from this repo: https://github.com/everblind/js-playground at github!

If you want to learn some cool math concepts, check and support this awesome "Coding Math" course: http://www.youtube.com/user/codingmath by Keith Peters

Your feedback will be my pay :)

Cheers!
-->

<!--
Copyright (c) 2019 by Jeff (https://codepen.io/jeffibacache/pen/bzBsp)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Playable Canvas Asteroids</title>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/asteroidsB.css') !!}" />
</head>

<body>

  <!--
  @2014 Jeff Ibacache | http://dev.everblind.me/
  License: https://github.com/everblind/js-playground/blob/master/license.md
  Source: https://github.com/everblind/js-playground/tree/master/canvas-asteroids
  -->

  <div id="info">
    <h1>Canvas Asteroids:</h1>
    <p>Use [A][S][W][D] or [&larr;][&uarr;][&darr;][&rarr;] to MOVE</p>
    <p>Use [SPACE] or [K] to SHOOT</p>
  </div>

  <canvas id="canvas"></canvas>
  <script src="{!! asset('js/third_party_html5/asteroidsB.js') !!}"></script>

</body>
</html>
