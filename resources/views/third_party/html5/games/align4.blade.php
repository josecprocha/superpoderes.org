<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/lonekorean/pen/Gbwvc (https://codepen.io/lonekorean/project/editor/ZGpqVX).

The classic game, played against an AI opponent. Applies the [minimax algorithm](http://en.wikipedia.org/wiki/Minimax) to pick its moves. Coded as a multi-threaded app using a web worker.

Web workers require code to be executed from separate JavaScript files. The code here is the UI thread. If you want to see the web worker code, check out [Align 4 Game (Web Worker)](http://codepen.io/lonekorean/pen/KnaJf).

Higher difficulty levels are computationally expensive, so the computer's turn may take a while, especially on mobile devices.

Blog post: [Align 4 Retrospective: Writing a Multi-Threaded Game in JavaScript](http://codersblock.com/blog/align-4-retrospective-writing-a-multi-threaded-game-in-javascript/)
-->

<!--
Copyright (c) 2019 by Will Boyd (https://codepen.io/lonekorean/pen/Gbwvc and https://codepen.io/lonekorean/project/editor/ZGpqVX)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en">
<head>

  <!--  Meta  -->
  <meta charset="UTF-8" />
  <title>Align 4 Game</title>

  <!--  Styles  -->
  <link href="https://fonts.googleapis.com/css?family=Doppio+One" rel="stylesheet">
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/align4.css') !!}" />
</head>
<body>
  <div class="wrapper">
    <div class="content">
      <div class="sidebar">
        <h1>Align 4</h1>
        <div class="panel dif">
          <h2>Difficulty</h2>
          <div class="dif-options">
            <div>
              <input id="dif1" type="radio" name="dif-options" value="1">
              <label for="dif1">1</label>
            </div>
            <div>
              <input id="dif2" type="radio" name="dif-options" value="2">
              <label for="dif2">2</label>
            </div>
            <div>
              <input id="dif3" type="radio" name="dif-options" value="3" checked>
              <label for="dif3">3</label>
            </div>
            <div>
              <input id="dif4" type="radio" name="dif-options" value="4">
              <label for="dif4">4</label>
            </div>
            <div>
              <input id="dif5" type="radio" name="dif-options" value="5">
              <label for="dif5">5</label>
            </div>
          </div>
          <div class="start">
            <button>Start Game</button>
          </div>
        </div>
        <div class="panel info">
          <h2></h2>
          <div class="blurb"></div>
          <div class="outlook"></div>
        </div>
      </div>
      <div class="board">
        <div class="lit-columns">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
        <div class="lit-cells"></div>
        <div class="chips"></div>
        <div class="click-columns">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="{!! asset('js/third_party_html5/align4.js') !!}"></script>
</body>
</html>
