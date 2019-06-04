<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/rzencoder/pen/dNNNVz.

Combined the final projects of Free Code Camp and 30 days of Javascript into one idea in plain javascript
-->

<!--
Copyright (c) 2019 by Adam (https://codepen.io/rzencoder/pen/dNNNVz)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

{{--
Scripts found only externaly:
https://fonts.googleapis.com/css?family=Luckiest+Guy
--}}

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Whack-a-Mole and Simon Game</title>
  <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> --}}
  <link rel="stylesheet" href="{!! asset('css/normalize.css') !!}" />
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/whackamoleB.css') !!}" />
</head>

<body>

  <div class="container">

    <!--Intro Modal-->
    <div class="modal intro">
      <h2>Choose Your Game</h2>
      <div>
        <p class="choice-whack">Whack-a-Mole</p>
        <p class="choice-mime">Mime-a-Mole</p>
      </div>
    </div>

    <!--Difficulty Modal for Whack. Hidden at Start-->
    <div class="modal mode">
      <h2>Choose Your Difficulty</h2>
      <div class="mode-options">
        <p class="easy">Easy</p>
        <p class="medium">Medium</p>
        <p class="hard">Hard</p>
      </div>
    </div>

    <!--Setting Modal for Mime. Hidden at Start-->
    <div class="modal mime-settings">
      <h2>Choose Your Settings</h2>
      <div class="mime-options">
        <p class="normal-mode">Normal Mode</p>
        <p>Sequence repeats after mistakes</p>
        <p class="strict-mode">Strict Mode</p>
        <p>One mistake and it's game over!</p>
      </div>
    </div>

    <!--Info for Whack Game. Hidden at Start-->
    <div class="info-container">
      <div class="whack-info">
        <h1>Whack-a-mole!</h1>
        <div class="scores-container">
          <div>
            <p>Current<br>Score</p>
            <div class="score current-score">0</div>
          </div>
          <p>
            <span class="menu-options whack-start">Start</span><br>
            <span class="menu-options whack-menu">Menu</span>
          </p>
          <div>
            <p>High<br>Score</p>
            <div class="score high-score">0</div>
          </div>
        </div>
        <div class="message-whack">You Scored</div>
      </div>
      <!--Info for Mime Game. Hidden at Start-->
      <div class="mime-info">
        <h1>Mime-a-mole!</h1>
        <div class="scores-container">
          <div>
            <p>Current<br>Streak</p>
            <div class="score current-streak">0</div>
          </div>
          <p>
            <span class="menu-options mime-start">Start</span>
            <span class="menu-options mime-reset">Reset</span>
            <br>
            <span class="menu-options mime-menu">Menu</span>
          </p>
          <div>
            <p>High<br>Streak</p>
            <div class="score high-streak">0</div>
          </div>
        </div>
      </div>
      <div class="message">Game Over</div>
    </div>

    <!--Game board-->
    <div class="game-container">
      <div class="game">
        <div data-key="0" class="hole hole1">
          <div class="mole"></div>
        </div>
        <div data-key="1" class="hole hole2">
          <div class="mole"></div>
        </div>
        <div data-key="2" class="hole hole3">
          <div class="mole"></div>
        </div>
        <div data-key="3" class="hole hole4 ">
          <div class="mole"></div>
        </div>
      </div>
    </div>

  </div><!--Container-->

  <audio class="sound1" src="https://s3.amazonaws.com/freecodecamp/simonSound1.mp3" preload></audio>
  <audio class="sound2" src="https://s3.amazonaws.com/freecodecamp/simonSound2.mp3" preload></audio>
  <audio class="sound3" src="https://s3.amazonaws.com/freecodecamp/simonSound3.mp3" preload></audio>
  <audio class="sound4" src="https://s3.amazonaws.com/freecodecamp/simonSound4.mp3" preload></audio>
  <audio class="error-sound" src="https://www.dropbox.com/s/n3jezc5cnht4qig/366103__original-sound__error-wooden.wav?raw=1" preload></audio>

  <script src="{!! asset('js/third_party_html5/whackamoleB.js') !!}"></script>

</body>
</html>
