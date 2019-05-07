<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/eliortabeka/pen/yOrrxG.

#####Towers of Hanoi

-------------------------------------------------------------------------------

Copyright (c) 2019 by Elior Tabeka (https://codepen.io/eliortabeka/pen/yOrrxG)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hanoi</title></title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Coda'>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/sweetalert2/3.0.3/sweetalert2.min.css'>
  <link rel="stylesheet" href="{!! asset('test/html5/hanoi.css') !!}" />
</head>
<body>
  <div id="canves">
    <div class="restart">
      <i class="fa fa-repeat"></i>
    </div>
    <div class="curtain"></div>
    <ul id="score-panel">
      <li><i class="fa fa-star"></i></li>
      <li><i class="fa fa-star"></i></li>
      <li><i class="fa fa-star"></i></li>
      <li>
        <h1>
          <span id="moves-num"></span>
          <span>Moves</span>
        </h1>
      </li>
    </ul>
    <ul class="tower" id="tower-1"></ul>
    <ul class="tower" id="tower-2"></ul>
    <ul class="tower" id="tower-3"></ul>
  </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
  <script src='https://cdn.jsdelivr.net/sweetalert2/3.0.3/sweetalert2.min.js'></script>
  <script src="{!! asset('test/html5/hanoi.js') !!}"></script>
</body>
</html>
