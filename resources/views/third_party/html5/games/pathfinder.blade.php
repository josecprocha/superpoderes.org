<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/blazicke/pen/MEvZRR.

A simple svg game: given the first dot, you have to connect it to the nearest yellow dot, and so on!

-------------------------------------------------------------------------------

Copyright (c) 2019 by Blaz Kemperle (https://codepen.io/blazicke/pen/MEvZRR)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Path Finder Game</title>
  <link href="https://fonts.googleapis.com/css?family=Bungee|Bungee+Outline|Space+Mono" rel="stylesheet">
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/pathfinder.css') !!}" />
</head>

<body>
  <div id="app">
    <div id="score"></div>
    <svg id="svg"></svg>
    <div id="launch-screen" class="is-visible">
      <div id="launch-screen-content">
        <h1 id="launch-screen__title"></h1>
        <p id="launch-screen__description"></p>
        <button class="btn" id="start-btn">PLAY</button>
      </div>
    </div>
  </div>
  <script src="{!! asset('js/third_party_html5/pathfinder.js') !!}"></script>
</body>
</html>
