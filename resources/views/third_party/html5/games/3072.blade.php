<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/aarguelles/pen/LZPXVN.
-->

<!--
Copyright (c) 2019 by angela arguelles (https://codepen.io/aarguelles/pen/LZPXVN)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>3072 game</title>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/3072.css') !!}" />
</head>

<body>

  <div class="container">
    <div class="heading">
      <h1 class="title">3072</h1>
      <div class="score-container">0</div>
    </div>
    <p class="game-intro">3072 is exactly like 2048 but it starts with 3. GOOD LUCK!!! btw Angela Arguelles and Kyle Martinez are <strong>CODING GODS!...jk xD</strong></p>

    <div class="game-container">
      <div class="game-message">
        <p></p>
        <div class="lower">
          <a class="retry-button">Try again</a>
        </div>
      </div>

      <div class="grid-container">
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
      </div>
      <div class="tile-container"></div>
    </div>
  </div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/hammer.js/1.0.6/hammer.min.js'></script>
  <script src="{!! asset('js/third_party_html5/3072.js') !!}"></script>

</body>
</html>
