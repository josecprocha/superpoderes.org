<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/allanpooley/pen/qrrmoR.

Inspired by Telltale Games + Sam & Max (https://en.wikipedia.org/wiki/Sam_%26_Max)
-->

<!--
Copyright (c) 2019 by Allan Pooley (https://codepen.io/allanpooley/pen/qrrmoR)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>An Exciting HTML Game</title>
  <link href="https://fonts.googleapis.com/css?family=Trade+Winds|Gloria+Hallelujah|Share+Tech" rel="stylesheet">
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/tictacdoom.css') !!}" />
</head>

<body>

  <div id="container">

    <div class="game-narrative" id="game-narrative-one">
      <p class="game-narrative-text">In a world where two forces battle for domination of a war-torn landscape, only one will draw the line and reign supreme.</p>
      <button class="game-btn" id="narrative-one-btn">...</button>
    </div>

    <div class="game-narrative" id="game-narrative-two">
      <p class="game-narrative-text">The year is 2048.</p>
      <p class="game-narrative-text">In a post apocalyptic galaxy run by giant corporations, you are a cybernetically enhanced space marine with no memory of their past.</p>
      <button class="game-btn" id="narrative-two-btn">...</button>
    </div>

    <div class="game-narrative" id="game-narrative-three">
      <p class="game-narrative-text">Are you the chosen one foretold by prophecy?</p>
      <p class="game-narrative-text">Do you have the strength to survive...</p>
      <div id="narrative-three-btns">
        <button class="game-btn" id="narrative-three-btn">YES</button>
        <div></div>
        <a class="game-btn" id="puppies-btn" href="https://au.pinterest.com/explore/puppy-pictures/" target="_blank">NO</a>
      </div>
    </div>

    <div id = "header">
      <p class="dramatic-text">
        <span id = "tic-text">Tic </span>
        <span id = "tac-text">Tac </span>
        <span id = "doom-text">DOOM</span>
      </p>
    </div>


    <div id="game-configuration">
      <h2 id = "identity-label">Choose your mark</h2>
      <div id="identity-selection" class="row">
        <div class="cell identity-cell" value="X">X</div>
        <div class="cell identity-cell" value="O">O</div>
      </div>
    </div>

    <div id="game-grid">
      <div class="row">
        <div class="cell game-cell" id="c00"></div>
        <div class="cell game-cell" id="c01"></div>
        <div class="cell game-cell" id="c02"></div>
      </div>
      <div class="row">
        <div class="cell game-cell" id="c10"></div>
        <div class="cell game-cell" id="c11"></div>
        <div class="cell game-cell" id="c12"></div>
      </div>
      <div class="row">
        <div class="cell game-cell" id="c20"></div>
        <div class="cell game-cell" id="c21"></div>
        <div class="cell game-cell" id="c22"></div>
      </div>
      <div class="computer-threat">
        <p><span id ="computer-threat-text"></span></p>
      </div>
    </div>

    <div id="game-over">
      <h2 id="game-end-heading"></h2>
      <h3 id="game-end-subheading"></h2>
      <button class="game-btn" id="game-reset-btn">&#8634; Play again</button>
    </div>

  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <script src="{!! asset('js/third_party_html5/tictacdoom.js') !!}"></script>

</body>
</html>
