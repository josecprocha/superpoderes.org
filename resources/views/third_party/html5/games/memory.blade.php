<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/natewiley/pen/HBrbL.

A JavaScript memory game on Codepen !
Click the cards and find matches to win.. you know how to play.
Hope you like it :)
-->

<!--
Copyright (c) 2019 by Nate Wiley (https://codepen.io/natewiley/pen/HBrbL)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Memory Game</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Anton'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/memory.css') !!}" />
</head>

<body>

  <div class="wrap">

    <div class="game"></div>
    <div class="modal-overlay">
      <div class="modal">
        <h2 class="winner">You Rock!</h2>
        <button class="restart">Play Again?</button>
        <p class="message">Developed on <a href="https://codepen.io">CodePen</a> by <a href="https://codepen.io/natewiley">Nate Wiley</a></p>
        <p class="share-text">Share it?</p>
        <ul class="social">
          <li><a target="_blank" class="twitter" href="https://twitter.com/share?url=https://codepen.io/natewiley/pen/HBrbL"><span class="fa fa-twitter"></span></a></li>
          <li><a target="_blank" class="facebook" href="https://www.facebook.com/sharer.php?u=https://codepen.io/natewiley/pen/HBrbL"><span class="fa fa-facebook"></span></a></li>
          <li><a target="_blank" class="google" href="https://plus.google.com/share?url=https://codepen.io/natewiley/pen/HBrbL"><span class="fa fa-google"></span></a></li>
        </ul>
      </div>
    </div>

    <footer>
      <p class="disclaimer">All logos are property of their respective owners, No Copyright infringement intended.</p>
    </footer>

  </div><!-- End Wrap -->

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="{!! asset('js/third_party_html5/memory.js') !!}"></script>

</body>
</html>
