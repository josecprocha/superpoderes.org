<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/URobert/pen/adJYpZ.
-->

<!--
Copyright (c) 2019 by Robert Uivarosi (https://codepen.io/URobert/pen/adJYpZ)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

{{--
Scripts only works externaly:
https://fonts.googleapis.com/css?family=Pacifico
https://fonts.googleapis.com/css?family=Acme
http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js
--}}


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Tic Tac Toe Game </title>
  {{-- <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'> --}}
  <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}" />
  {{-- <link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css'> --}}
  <link rel="stylesheet" href="{!! asset('css/animate.min.css') !!}" />
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/tictactoeB.css') !!}" />
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link async href="https://fonts.googleapis.com/css?family=Acme" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>

</head>

<body>

  <div class= "topbuffer"></div>
  <h2 align="center"> Tic Tac Toe Game </h2>
  <h2 align="center"> Good luck & Have Fun ! </h2>

  <div class="wrapper">
    <button class="btn btn-primary" id="restart">Restart Board </button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm" id="symbol">Pick a Symbol</button>
    <button type="button" class="btn btn-primary" id="startGame">Start Game</button>
  </div> <!-- end of wrapper -->

  <div class= "toptinybuffer"></div>
  <div class="playerTurn"><span id="displayTurn"> You may begin !</span></div>
  <div id="whoWon"><p id="winnerDisplay"> ??? ??? ??? </p></div>
  <div class= "toptinybuffer"></div>

  <div class="container">
    <div class="Board" onclick="clickHandler(event)">
      <div class= "row">
        <div class = "col-xs-4 col-md-4 square" id="square1"></div>
        <div class = "col-xs-4 col-md-4 square" id="square2"></div>
        <div class = "col-xs-4 col-md-4 square" id="square3"></div>
      </div> <!-- end of row -->
      <div class= "row">
        <div class = "col-xs-4 col-md-4 square" id="square4"></div>
        <div class = "col-xs-4 col-md-4 square" id="square5"></div>
        <div class = "col-xs-4 col-md-4 square" id="square6"></div>
      </div> <!-- end of row -->
      <div class= "row">
        <div class = "col-xs-4 col-md-4 square" id="square7"></div>
        <div class = "col-xs-4 col-md-4 square" id="square8"></div>
        <div class = "col-xs-4 col-md-4 square" id="square9"></div>
      </div> <!-- end of row -->
    </div> <!-- end of board -->
  </div> <!-- end of container -->

  <!-- Experimenting with modals -->
  <!-- Small modal -->
  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="myModal">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Welcome to this JS Tic Tac Toe Game</h4>
        </div> <!-- end of modal header -->
        <div class="modal-body">Pick the symbol you would like to use:</div>
        <div class="modal-footer">
        <div class="row">
          <div class="col-xs-3"></div>
          <div class="col-xs-3"><button class="btn" id="Pick1">X</button></div>
          <div class="col-xs-3"><button class="btn" id="Pick2">O</button></div>
          <div class="col-xs-3"></div>
        </div><!-- end of row -->
        </div>
      </div>
    </div>
  </div>
  <!-- End of modal -->

  <!-- Leaderboard below-->
  <div class= "toptinybuffer"></div>
  <div class="leaderboard">
      <span>Player wins : </span><span id="pwins">0</span><br>
      <span>Computer wins : </span><span id="cwins">0</span><br>
      <span>Draws: </span><span id="draws">0</span>
  </div>
  <!-- End of leaderboard -->

  {{-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> --}}
  <script src="{!! asset('js/jquery.min.js') !!}"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
  {{-- <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script> --}}
  <script src="{!! asset('js/bootstrap.min.js') !!}"></script>

  <script src="{!! asset('js/third_party_html5/tictactoeB.js') !!}"></script>
</body>
</html>
