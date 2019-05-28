<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/cristiancanea/pen/GhLpI.

A common sudoku game.
-->

<!--
Copyright (c) 2019 by CRISTIAN CANEA (https://codepen.io/cristiancanea/pen/GhLpI)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>SUDOKU</title>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/sudoku.css') !!}" />
</head>

<body>

  <a href="#" id="sidebar-toggle">
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>
  </a>

  <h1 id="sudoku_title">SUDOKU</h1>

  <div id="sudoku_menu">
    <ul>
      <li><a class="restart" href="#">New Game</a></li>
      <li></li>
    </ul>
  </div>

  <div id="sudoku_container"></div>
  {{-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> --}}
  <script src="{!! asset('js/jquery.min.js') !!}"></script>

  <script src="{!! asset('js/third_party_html5/sudoku.js') !!}"></script>

</body>
</html>
