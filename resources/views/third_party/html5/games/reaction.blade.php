<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/christiancoan/pen/yOZzeJ.

A fully responsive JQuery reaction game with 3 different intensities. You must click the squares as fast as you can. If you're too slow...it's game over!

-------------------------------------------------------------------------------

Copyright (c) 2019 by Christian Coan (https://codepen.io/christiancoan/pen/yOZzeJ)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Reaction - A Responsive JQuery Game</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/reaction.css') !!}" />
</head>

<body>

  <div id="selector">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 128 128" id="Layer_1" version="1.1" viewBox="0 0 128 128" xml:space="preserve">
      <g>
        <g>
          <path d="M64,0C28.656,0,0,28.656,0,64s28.656,64,64,64s64-28.656,64-64S99.344,0,64,0z M64,120    C33.125,120,8,94.875,8,64S33.125,8,64,8s56,25.125,56,56S94.875,120,64,120z"/>
        </g>
      </g>
      <g>
        <g>
          <path d="M64,48c-4.414,0-8,3.586-8,8v40c0,4.414,3.586,8,8,8s8-3.586,8-8V56C72,51.586,68.414,48,64,48z M64,40c4.414,0,8-3.586,8-8s-3.586-8-8-8s-8,3.586-8,8S59.586,40,64,40z"/></g>
      </g>
    </svg>
    <div class="instructions">Choose Difficulty Level</div>
    <div class="level">
      <span class="levelicon" style="background-color: #555555;" onclick="prepare('easy')" onmouseover="highlight(1)" onmouseout="unhighlight()"></span>
      <span class="levelicon" style="background-color: #555555;" onclick="prepare('medium')" onmouseover="highlight(2)" onmouseout="unhighlight()"></span>
      <span class="levelicon" style="background-color: #555555;" onclick="prepare('hard')" onmouseover="highlight(3)" onmouseout="unhighlight()"></span>
    </div>
    <div class="countdown"></div>
  </div>

  <div id="howtoplay">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 128 128" id="Layer_1" version="1.1" viewBox="0 0 128 128" xml:space="preserve">
      <g>
        <g>
          <path d="M64,0C28.656,0,0,28.656,0,64s28.656,64,64,64s64-28.656,64-64S99.344,0,64,0z M64,120    C33.125,120,8,94.875,8,64S33.125,8,64,8s56,25.125,56,56S94.875,120,64,120z"/>
        </g>
      </g>
      <g>
        <g>
          <path d="M75.313,64l16.969-16.969c3.125-3.125,3.125-8.195,0-11.313c-3.117-3.125-8.188-3.125-11.313,0L64,52.688L47.031,35.719c-3.125-3.125-8.195-3.125-11.313,0c-3.125,3.117-3.125,8.188,0,11.313L52.688,64L35.719,80.969c-3.125,3.125-3.125,8.195,0,11.313c3.117,3.125,8.188,3.125,11.313,0L64,75.313l16.969,16.969c3.125,3.125,8.195,3.125,11.313,0c3.125-3.117,3.125-8.188,0-11.313L75.313,64z"/>
        </g>
      </g>
    </svg>
    <div class="instructions">How To Play</div>
    <div class="instructionlist">
      <ol>
        <li>Select a difficulty level by clicking one of the three dots. The dot on the left is the easiest level, the dot in the center is the medium level and the dot on the right is the hardest level.</li>
        <li>The timer will countdown from 3 seconds and give you time to compose yourself.</li>
        <li>You will be presented with a grid of green squares: 3x3 for easy, 4x4 for medium or 5x5 for hard.</li>
        <li>A square will be highlighted in green. You will need to click the green highlighted square as fast as you can, if you're too slow...it's game over! The more squares you click correctly, the faster the game will get.</li>
        <li>The game will start at a slow pace for the easiest level and a medium pace for the hardest level.</li>
        <li>Each time you click a square you will gain one point and another square will be highlighted.</li>
        <li>Continue clicking the highlighted squares until the game either gets too fast or you fail to click the correct square.</li>
      </ol>
    </div>
  </div>

  <table id="easy">
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
  <table id="medium">
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
  <table id="hard">
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>

  <div id="gameover">
    <span class="gameoverheader">GAME OVER!</span>
    <span class="gameovertext">Average Reaction Time</span>
    <span class="average gameovervalue"></span>
    <span class="gameovertext">Score</span>
    <span class="score gameovervalue"></span>
    <span class="gameovertext">Highest Score</span>
    <span class="highscore gameovervalue"></span>
    <a href="javascript:void(0)" class="gameovertext" onclick="restart()">Restart</a>
  </div>
  {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script> --}}
  <script src="{!! asset('js/jquery.min.js') !!}"></script>
  <script src="{!! asset('js/third_party_html5/reaction.js') !!}"></script>
</body>
</html>
