<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/rzencoder/pen/RKKpWE.

Classic Noughts and Crosses game using JQuery as part of Free Code Camp curriculum
-->

<!--
Copyright (c) 2019 by Adam (https://codepen.io/rzencoder/pen/RKKpWE)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Noughts & Crosses (Tic Tac Toe)</title>
  <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/noughtsncrosses.css') !!}" />
</head>

<body>

  <div class="container">
    <div class="info">
      <div class="player flicker">
        <h2>Player</h2>
        <p>Score</p>
        <p class="player-score">0</p>
        <p class="player-message"></p>
      </div>
    </div>
    <div class="info comp-info">
      <div class="computer flicker">
        <h2>Computer</h2>
        <p>Score</p>
        <p class="computer-score">0</p>
        <div class="loader">
          <div class="dot-a"></div>
          <div class="dot-b"></div>
          <div class="dot-c"></div>
        </div>
      </div>
    </div>
    <div class="board-container">
      <div class="board">
        <div class="row">
          <div data-key="1" class="X l1">X</div>
          <div data-key="2" class="O l1">O</div>
          <div data-key="3" class="X l2">X</div>
        </div>
        <div class="row">
          <div data-key="4" class="O l1">O</div>
          <div data-key="5" class="X l1">X</div>
          <div data-key="6" class="O l2">O</div>
        </div>
        <div class="row">
          <div data-key="7" class="X l3">X</div>
          <div data-key="8" class="O l3">O</div>
          <div data-key="9" class="X">X</div>
        </div>
      </div>
      <div class="intro modal">
        <h1><span class="O  flicker">Noughts</span> & <span class="X flicker">Crosses</span></h1>
        <div class="setting">
          <p>Setting</p>
          <p><span class="setting-options easy">Easy</span> <span class="setting-options medium">Medium</span> <span class="setting-options hard">Hard</span></p>
        </div>
        <div class="choice">
          <p>Play As</p>
          <p><span class="O choice-o">O</span> <span class="X choice-x">X</span></p>
        </div>
      </div>
      <div class="result modal">
        <h2 class="winner"></h2>
        <div class="scores">
          <div>
            <p>Player</p>
            <p class="player-score">0</p>
          </div>
          <div>
            <p>Computer</p>
            <p class="computer-score">0</p>
          </div>
        </div>
        <p class="play-again">Play Again</p>
      </div>
    </div>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
  <script src="{!! asset('js/third_party_html5/noughtsncrosses.js') !!}"></script>

</body>
</html>
