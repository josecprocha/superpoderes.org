<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/Jiminibob/pen/XaVLBQ.

It's mine-sweeper, but infinite... how far can you get?
-->

<!--
Copyright (c) 2019 by Paul (https://codepen.io/Jiminibob/pen/XaVLBQ)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Infinite Mine-Sweeper</title>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/infiniteminesweeper.css') !!}" />
</head>

<body>

  <div class="header">Infinite Mine-Sweeper</div>
  <div class="trim">
    <div class="pointer"></div>
    <div class="label">how far can you get?</div>
    <div class="pointer"></div>
  </div>
  <div id="runway" class="runway"></div>
  <div class="game-over-banner">
    <div class="content">
      <h1 >GAME OVER!</h1>
      <h3>tiles revealed : <span id="score"></span></h3>
      <div class="button" onClick="resetGame()">play again</div>
    </div>
	<div>

  <script src="{!! asset('js/third_party_html5/infiniteminesweeper.js') !!}"></script>

</body>
</html>
