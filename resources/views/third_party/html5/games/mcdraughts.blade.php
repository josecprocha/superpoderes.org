<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/stevley/pen/BLmaPd.
-->

<!--
Copyright (c) 2019 by Stevley (https://codepen.io/stevley/pen/BLmaPd)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>McDraughts</title>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/mcdraughts.css') !!}" />
</head>

<body>

  <div id="playModeDiv">
    <button id="button2player" onclick="setPlayMode(2)">2 player game</button>
    <button id="button1player" onclick="setPlayMode(1)">game against AI</button>
  </div>
  <div id="infoDiv"></div>
  <div id="boardDiv"></div>
  <div id="optionsDiv">
    <input type="checkbox" onclick="toggleHighlight()" checked> highlight move options<br>
    <div id="colourModeDiv">
      AI colour:<br>
      <input type="radio" name="aiColourOptions" onclick="setColourMode('random')" checked> random<br>
      <input type="radio" name="aiColourOptions" onclick="setColourMode('B')"> black (goes first)<br>
      <input type="radio" name="aiColourOptions" onclick="setColourMode('W')"> white (goes second)<br>
    </div>
  </div>
  <div id="note">draughts/checkers with an AI running in the browser using Monte Carlo Tree Search to choose moves</div>

  <script src="{!! asset('js/third_party_html5/mcdraughts.js') !!}"></script>

</body>
</html>
