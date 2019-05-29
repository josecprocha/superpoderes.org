<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/popfugl/pen/KdYXpV.

 A complete 15 game.
The game adjusts automatically to fit within the width and height of the screen.
Optimized for iphone usage. (No click-delay).
Annoying sound (but it's there).
-->

<!--
Copyright (c) 2019 by Laust (https://codepen.io/popfugl/pen/KdYXpV)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>15 Game</title>
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/15.css') !!}" />
</head>

<body>

  <audio id="audio00">
    <source src="http://palbo.dk/filer/audio/15game/slide02.mp3" type="audio/mp3">"
  </audio>
  <audio id="audio01">
    <source src="http://palbo.dk/filer/audio/15game/slide03.mp3" type="audio/mp3">"
  </audio>
  <div class="game-wrapper">
    <div class="outer-wrapper">
      <div class="wrapper">
      </div>
    </div>
    <div class="message">
      <select id="xvgame">
        <option value="0">Not working yet! Use numBlocksX instead</option>
        <option value="3">3x3</option>
        <option value="4" selected>4x4</option>
        <option value="5">5x5</option>
        <option value="6">6x6</option>
        <option value="7">7x7</option>
        <option value="8">8x8</option>
        <option value="9">9x9</option>
        <option value="10">10x10</option>
      </select>
      <button id="restart">Restart</button>
      <div class="text">Moves: 0</div>
    </div>
  </div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="{!! asset('js/third_party_html5/15.js') !!}"></script>

</body>
</html>
