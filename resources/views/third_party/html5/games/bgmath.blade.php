<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/mvr32/pen/JEMJMp.
-->

<!--
Copyright (c) 2019 by M (https://codepen.io/mvr32/pen/JEMJMp)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width = device-width, initial-scale=1, user-scalable=yes">
  <title>Battlestar Galactica Math Game</title>
  <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/bgmath.css') !!}" />
</head>

<body>

  <div class="container-fluid" id="instructionBox">
    <p id="instructions"> Answer as many questions </br> as fast as you can </p>
  </div>

  <div class="container-fluid" id="bigBox">

    <div id="correct"> Correct</div>
    <div id="wrong">Wrong</div>
    <div id="score">Score: <span id="scoreValue">0</span> </div>
    <div id="equation">  </div>

    <div id="choices">
      <div id="box1" class="boxes"> Answer 1</div>
      <div id="box2" class="boxes"> Answer 2 </div>
      <div id="box3" class="boxes"> Answer 3</div>
      <div id="box4" class="boxes"> Answer 4</div>
    </div>

    <div id="timer"> Time: <span id="timeRemaining">60 </span></div>
    <div id="launch"> Launch </div>

    <div id="gameOver">
      Game Over</br> You killed: <span id="scoreValue"> </span> Cylons
    </div>
    <div id="startGame">
      Greetings fellow Caprican,
      </br></br> The Galactica is under attack.
      </br> Help defeat the Cylons
      </br> before it's too late.
      </br> </br> -Commander Adama
    </div>

  </div>

  <div class="container-fluid" id="quoteBox">
    <p id="quoteLocale"> </p>
  </div>

  <script src="{!! asset('js/third_party_html5/bgmath.js') !!}"></script>

</body>
</html>
