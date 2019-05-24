<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/afalchi82/pen/KzYxwQ.

An experiment made for testing HTML Canvas drawing.

TODO:
- User Score
- Add timer
- New levels

-------------------------------------------------------------------------------

Copyright (c) 2019 by Alessandro Falchi (https://codepen.io/afalchi82/pen/KzYxwQ)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Canvas Crosshatch</title>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/crosshatch.css') !!}" />
</head>

<body>

  <p id="log">Log</p>
  <div id="opponent">
    <div id="points">Show me what you can do.</div>
    <div id="avatar"></div>
  </div>
  <div id="info">
    <img id="guida" src="https://i.itsosticky.com/125r2ix.png" alt="">
    <p>Thread must always move diagonally on the front side and vertically on the back, and to adiacent points only. </p>
  </div>
  <div class="controls">
    <div class="colors">
      <a class="white active"></a>
      <a class="black"></a>
      <a class="red"></a>
      <a class="yellow"></a>
      <a class="blue"></a>
    </div>
    <button id="endPath">Cut thread</button>
    <button id="reset">Delete all</button>

    <!-- TODO: repeat drawing -->
    <!--
    <button id="replay" style="display: none;">Repeat drawing</button>
    -->
  </div>
  <div id="cursor"></div>
  <img src="https://i.itsosticky.com/vux1e5.png" id="disegno">
  <canvas id="filo" width="800" height="800"></canvas>
  <canvas id="myCanvas" width="800" height="800"></canvas>
  <div id="bg"></div>

  {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script> --}}
  <script src="{{url('node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{!! asset('js/third_party_html5/crosshatch.js') !!}"></script>

</body>
</html>
