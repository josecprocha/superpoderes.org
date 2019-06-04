<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/sinanisler/pen/odfqs.

My first attempt to make a game with obelisk.js
Hope you like it :D

If the keys doesn't work, click on the game to gave it focus.

The movement is relative to the snake, so you use only de left and right keys.

Enjoy!

Forked from [Sebastian Faedo](http://codepen.io/sfaedo/)'s Pen [Snake Game with obelisk.js](http://codepen.io/sfaedo/pen/AwGjg/).
-->

<!--
Copyright (c) 2019 by Sinan İŞLER (https://codepen.io/sinanisler/pen/odfqs)


Fork of an original work by Sebastian Faedo (https://codepen.io/sfaedo/pen/AwGjg)



Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Snake Game with obelisk.js</title>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/isometricsnake.css') !!}" />

</head>

<body>
  <canvas id="canvas-demo" width="800" height="600"></canvas>
  <div id="points">0</div>
  <div id="info">Press "space" key to start</div>

  {{-- <script src='https://nosir.github.io/obelisk.js/dist/obelisk.min.1.0.2.js'></script> --}}
  <script src="{!! asset('js/obelisk.min.js') !!}"></script>
  <script src="{!! asset('js/third_party_html5/isometricsnake.js') !!}"></script>

</body>
</html>
