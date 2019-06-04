<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/michaelwhyte/pen/jydNeJ.

A game of Whack a Mole. The JavaScript code is modified from the Whack a Mole game found at Wes Bos's JavaScript30 course ( http://javascript30.com ).
-->

<!--
Copyright (c) 2019 by Michael Whyte (https://codepen.io/michaelwhyte/pen/jydNeJ)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Whack a Mole</title>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/whackamole.css') !!}" />
</head>

<body>

  <div class="wrapper">

    <header>
      <h1>Whack-a-Mole</h1>
      <div class="score-box" id="score-box">
        <h2>Score</h2>
        <p class="score-out" id="score-out">0</p>
      </div><!-- end score-box -->
    </header>

    <main>
      <button class="btn-start" id="btn-start">Start Game</button>
      <div class="game-container">
        <div class="row">
          <div class="box">
            <img src="https://res.michaelwhyte.ca/mole.png" alt="mole" class="mole-pic" id="mole-01">
            <img src="https://res.michaelwhyte.ca/dirt.svg" alt="dirt" class="dirt-pic">
            <div class="mask"></div><!-- end mask -->
          </div><!-- end box -->
          <div class="box">
            <img src="https://res.michaelwhyte.ca/mole.png" alt="mole" class="mole-pic"
            id="mole-02">
            <img src="https://res.michaelwhyte.ca/dirt.svg" alt="dirt" class="dirt-pic">
            <div class="mask"></div><!-- end mask -->
          </div><!-- end box -->
          <div class="box">
            <img src="https://res.michaelwhyte.ca/mole.png" alt="mole" class="mole-pic"
            id="mole-03">
            <img src="https://res.michaelwhyte.ca/dirt.svg" alt="dirt" class="dirt-pic">
            <div class="mask"></div><!-- end mask -->
          </div><!-- end box -->
        </div><!-- end row -->
        <div class="row">
          <div class="box">
            <img src="https://res.michaelwhyte.ca/mole.png" alt="mole" class="mole-pic" id="mole-04">
            <img src="https://res.michaelwhyte.ca/dirt.svg" alt="dirt" class="dirt-pic">
            <div class="mask"></div><!-- end mask -->
          </div><!-- end box -->
          <div class="box">
            <img src="https://res.michaelwhyte.ca/mole.png" alt="mole" class="mole-pic" id="mole-05">
            <img src="https://res.michaelwhyte.ca/dirt.svg" alt="dirt" class="dirt-pic">
            <div class="mask"></div><!-- end mask -->
          </div><!-- end box -->
          <div class="box">
            <img src="https://res.michaelwhyte.ca/mole.png" alt="mole" class="mole-pic" id="mole-06">
            <img src="https://res.michaelwhyte.ca/dirt.svg" alt="dirt" class="dirt-pic">
            <div class="mask"></div><!-- end mask -->
          </div><!-- end box -->
        </div><!-- end row -->
      </div><!-- end game-container -->
    </main>

    <footer>
      <p>For Educational Use Only</p>
      <h2>Game Credits</h2>
      <p>JavaScript code modified from code found at <a href="http://javascript30.com">JavaScript30</a></p>
      <p>Mole images modified from images found at: <a href="https://www.raywenderlich.com/2560/cocos2d-tutorial-for-ios-how-to-create-a-mole-whacking-game-part-1">Cocos2D Tutorial for iOS: How To Create A Mole Whacking Game: Part 1/2</a></p>
      <p>Dirt image from <a href="https://openclipart.org/detail/210414/misc-proto-dirt-pile">openclipart</a></p>
    </footer>

  </div><!-- end wrapper -->

  {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script> --}}
  <script src="{!! asset('js/jquery.min.js') !!}"></script>
  <script src="{!! asset('js/third_party_html5/whackamole.js') !!}"></script>

</body>
</html>
