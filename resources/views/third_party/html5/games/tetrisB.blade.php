<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/dutchbones/pen/MXXgMz.

Hope you have fun playing! Feature suggestions and improvements are very welcome!

Browser version available here: https://dutchbones.github.io/tetris
-->

<!--
Copyright (c) 2019 by Daniel Meeusen (https://codepen.io/dutchbones/pen/MXXgMz)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="HTML, CSS, XML, XHTML, JavaScript, tetris, game, highscore, api, mlab, mongodb, nintendo">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tetris w/ high score tracking</title>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/tetrisB.css') !!}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>

<body>
  <div class="wrapper">

    <div id="newGame" class="modal">
        <div class="modal-content">
          <h4>Tetris</h4>
          <button onclick="newGame()" id="newGameBtn" class="modal-close waves-effect waves-light btn" style="width:250px">New Game</button>
          </div>
        </div>

    <div id="pause" class="modal">
        <div class="modal-content">
          <h4>Game Paused</h4>
          <button onclick="pauseGame()" id="pauseBtn" class="modal-close waves-effect waves-light btn">Resume Game</button>
          <button onclick="newGame()" id="StartNewBtn" class="modal-close waves-effect waves-light btn">Start New Game</button>
          </div>
        </div>

    <div id="gameOver" class="modal">
        <div class="modal-content">
          <h4>Game Over</h4>
              <div class="yourScore"></div>
              <label for="name">Submit Your Score</label>
              <br><br>
              <form id="highScore">
              <input type="text" id="name" maxlength="7" placeholder="name..." onfocus="this.placeholder = ''" autocomplete="off" required/>
              <button type="submit" id="submit" class="waves-effect waves-light btn">Submit</button>
              </form>
					<br>
              <a onclick="newGame()" class="modal-close waves-effect waves-light btn">Start New Game</a>
          </div>
        </div>

    <div class="detailsLeft">
      <div class="score"></div>
      <div class="level"></div>
      <div class="highScores"></div>
    </div>

    <canvas class="tetris" width="240" height="400"></canvas>

    <div class="detailsRight">
        <canvas class="next" width="160" height="160"></canvas>
        <br>
        <div class="controls">
          <p><i class="fas fa-arrow-left"></i></span> Move Left</p>
          <p><i class="fas fa-arrow-right"></i></span> Move Right</p>
          <p><i class="fas fa-arrow-down"></i></span> Move Down</p>
          <p><i class="fas fa-arrow-up"></i></span> Rotate Right</p>
          <p><span style="font-size : 18px">Q</span> Rotate Left</p>
          <p><span style="font-size : 18px">W</span> Rotate Right</p>
          <p><span style="font-size: 18px">Esc</span> Pause Game</p>
        </div>
      </div>
			<div class="footer"><p>by <a href="https://github.com/dutchbones" target="_blank"><i class="fab fa-github"></i> Daniel Meeusen</a></p></div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

  <script src="{!! asset('js/third_party_html5/tetrisB.js') !!}"></script>

</body>
</html>
