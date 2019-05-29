<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/andoo45/pen/NNByZo.
-->

<!--
Copyright (c) 2019 by Andrew Palfenier (https://codepen.io/andoo45/pen/NNByZo)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Tic Tac Toe</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Seymour+One' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/tictactoeC.css') !!}" />
</head>

<body>

  <div class="container">
    <div id="endGame" class="modal">
      <h1><span id="winnerDisplay"></span> Wins!</h1>
      <button class="resetEnd">Reset Game</button>
    </div>
    <div id="endGameDraw" class="modal">
      <h1>Draw Game</h1>
      <button class="resetEnd">Reset Game</button>
    </div>
    <h1 id="label">Tic Tac Toe</h1>
    <div class="gameBoard">
      <div class="ui">
        <button id="reset">Reset</button>
        <button id="players">Players: <span id="playerNumber">1</span></button>
        <button id="color"> <span id="playerColor" class="red">X</span></button>
      </div>
      <div class="row">
        <div id="topL" class="square">
          <h1>&nbsp;</h1></div>
        <div id="topM" class="square">
          <h1>&nbsp;</h1></div>
        <div id="topR" class="square">
          <h1>&nbsp;</h1></div>
      </div>
      <div class="row">
        <div id="midL" class="square">
          <h1>&nbsp;</h1></div>
        <div id="midM" class="square">
          <h1>&nbsp;</h1></div>
        <div id="midR" class="square">
          <h1>&nbsp;</h1></div>
      </div>
      <div class="row">
        <div id="botL" class="square">
          <h1>&nbsp;</h1></div>
        <div id="botM" class="square">
          <h1>&nbsp;</h1></div>
        <div id="botR" class="square">
          <h1>&nbsp;</h1></div>
      </div>
      <div class="score">
        <h3>
          <div id='winsLabel'>
            Wins:
          </div>
          <div id='xScoreLabel'>X -
            <span id='xScore'>0</span>
          </div>
          <div id='oScoreLabel'>O -
            <span id='oScore'>0</span>
          </div>

        </h3>
      </div>
    </div>

  </div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
  <script src="{!! asset('js/third_party_html5/tictactoeC.js') !!}"></script>

</body>
</html>
