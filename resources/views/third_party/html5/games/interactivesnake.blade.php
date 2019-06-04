<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/heiko_de/pen/qyKRoY.
-->

<!--
Copyright (c) 2019 by Heiko (https://codepen.io/heiko_de/pen/qyKRoY)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

{{--
Scripts found only externaly:
https://fonts.googleapis.com/css?family=Montserrat:400,600,700
--}}

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>interactive snake</title>
  {{--  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'> --}}
  <link rel="stylesheet" href="{!! asset('css/all.css') !!}" />
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700'>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/interactivesnake.css') !!}" />
</head>

<body>
  <div id="title">Snake</div>
  <canvas id="snakeCanvas"></canvas>
  <div id="tutorial">
    <div class="keybtnGroup">
      <div>
        <div class="keybtn" id="keybtnup">W</div>
      </div>
      <div>
        <div class="keybtn" id="keybtnup">A</div>
        <div class="keybtn" id="keybtnup">S</div>
        <div class="keybtn" id="keybtnup">D</div>
      </div>
    </div>
    <div>or</div>
    <div class="keybtnGroup">
      <div>
        <div class="keybtn" id="keybtnup"><i class="fas fa-arrow-up"></i></div>
      </div>
      <div>
        <div class="keybtn" id="keybtnup"><i class="fas fa-arrow-left"></i></div>
        <div class="keybtn" id="keybtnup"><i class="fas fa-arrow-down"></i></div>
        <div class="keybtn" id="keybtnup"><i class="fas fa-arrow-right"></i></div>
      </div>
    </div>
  </div>
  {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script> --}}
  <script src="{!! asset('js/jquery.min.js') !!}"></script>
  {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/howler/2.0.14/howler.min.js'></script> --}}
  <script src="{!! asset('js/howler.min.js') !!}"></script>
  {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/dat-gui/0.7.2/dat.gui.min.js'></script> --}}
  <script src="{!! asset('js/dat.gui.min.js') !!}"></script>
  {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js'></script> --}}
  <script src="{!! asset('js/hammer.min.js') !!}"></script>
  <script src="{!! asset('js/third_party_html5/interactivesnake.js') !!}"></script>
</body>
</html>
