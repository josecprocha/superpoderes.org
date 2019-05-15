<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/chagaf/pen/daqlg.

Move the mouse arround the white and click on the yellow circles. Black is LAVA !
-->

<!--
Copyright (c) 2019 by Victor (https://codepen.io/chagaf/pen/daqlg)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Mini game</title>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/mouseminigame.css') !!}">
</head>

<body>
  <div class="center">
    <div class="texto">
      Move the mouse arround the white and click on the yellow circles.
      Black is LAVA !
      <br />
      Maps are random (if the map generates too many moving boxes their movement will be a little bugged)
      <div class="nav">
        <div class="reset" onclick="_reset();">Reset</div>
        <div class="puntos">Points: <span>0</span></div>
      </div>
    </div>
    <div class="contiene_juego"></div>
    <br />
    <br />
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="{!! asset('js/third_party_html5/mouseminigame.js') !!}"></script>

</body>
</html>
