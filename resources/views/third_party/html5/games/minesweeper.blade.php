<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/maxwell_alexius/pen/VzPYYa.
-->

<!--
Copyright (c) 2019 by Maxwell Alexius (https://codepen.io/maxwell_alexius/pen/VzPYYa)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Mine Sweeper</title>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/minesweeper.css') !!}" />
</head>

<body>

  <div id="statistic">
    <div>
      🚩  Flags<br/>
      <p id="flags-count">0</p>
    </div>
    <div>
      ✅  Swept Units
      <p id="swept-unit-count">0</p>
    </div>
    <div>
      🕑  Time
      <p id="time-counter">00:00:00</p>
    </div>
  </div>
  <div id="mine-sweeper-grid"></div>
  <div class="btn-group">
    <button id="change-mode">Trigger Mode</button>
    <button id="new-game">New Game</button>
  </div>

  <div id="new-game-modal" class="modal">
    <div class="wrapper">
      <h1>New Game</h1>
      <label>
        Rows <small>1 ~ 30 Rows</small><br/>
        <input name="rows" type="number" min="1" max="30" value="20">
      </label>
      <label>
        Columns <small>1 ~ 30 Columns</small><br/>
        <input name="cols" type="number" min="1" max="30" value="20">
      </label>
      <label>
        Mines <small>1 ~ <span id="maximum-mines">100</span> Mines</small><br/>
        <input name="mines" type="number" min="1" max="5000" value="50">
      </label>
      <button id="start-game">Start Game</button>
    </div>
  </div>

  <div id="success-modal" class="modal">
    <div class="wrapper">
      <h1>Congratulations!</h1>
      <p>You've made it in <span id="result-time"></span> !</p>
      <button id="resume-btn">Resume</button>
    </div>
  </div>

  <script src="{!! asset('js/third_party_html5/minesweeper.js') !!}"></script>

</body>
</html>
