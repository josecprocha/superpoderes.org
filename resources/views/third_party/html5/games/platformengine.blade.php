<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/dissimulate/pen/CqIxk.

A simple platform game engine, the map is customisable and scriptable. Refer to the comments in the "map" variable for instructions.

I plan to expand the engine in the future, the ability to use images for tiles and the player is one thing that I have in mind. Any suggestions are welcome.
-->

<!--
Copyright (c) 2019 by dissimulate (https://codepen.io/dissimulate/pen/CqIxk)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Platform game engine</title>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/platformengine.css') !!}" />
</head>

<body>

  <canvas id="canvas"></canvas>
  <p>
    Use the left, right and up arrow keys to move.</p>
  <p class="info">
    The map data is fully customisable and scriptable (all contained within the "map" variable). See the comments in the code for instructions.
  </p>
  <br>
  <a target="_blank" href="https://github.com/dissimulate/Clarity">View on GitHub</a>

  <script src="{!! asset('js/third_party_html5/platformengine.js') !!}"></script>

</body>
</html>
