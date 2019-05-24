<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/charlie-volpe/pen/AKsud.

This is a 25 level block puzzle game.

Rules:
1. This is a game of matching colors. When three match up they will go away and you will get points. Only three will clear if more than three of the same color touch.
2. Click on a row and the entire row will move to the top of the column.
3. When the blocks are cleared the blocks on the right will move left in their own row.
4. The fewer the clicks made the more points you will gain.
-->

<!--
Copyright (c) 2019 by Charlie Volpe (https://codepen.io/charlie-volpe/pen/AKsud)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

{{--
Scripts found only externaly:
https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css
--}}

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Block Puzzle Game</title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/blockpuzzle.css') !!}" />
</head>

<body>

  <div class="info">
    <div class="points hide">Points: 0</div>
    <div class="level hide">Level: 0</div>
    <div class="clicks hide">Clicks: 0</div>
  </div>

  <div class="container">
    <div class="col">
      <div class="start">Start</div>
    </div>
  </div>

  <div id="restart" class="restart hide">Restart Level</div>

  <div class="rules">
    <h2>Rules</h2>
    <ol>
      <li>This is a game of matching colors. When three match up they will go away and you will get points. Only three will clear if more than three of the same color touch.</li>
      <li>Click on a row and the entire row will move to the top of the column.</li>
      <li>When the blocks are cleared the blocks on the right will move left in their own row.</li>
      <li>The fewer the clicks made the more points you will gain.</li>
    </ol>
    <p>There are a total of 25 levels to play! Have fun!</p>
  </div>

  <!--
    Color Pallette "Flat" by darqfaux via colourlovers.com
    ... found at this link:
    http://www.colourlovers.com/palette/101556/Flat

    with the addition of beccapurple #663399
  -->

  {{-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> --}}
  <script src="{{url('node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{!! asset('js/third_party_html5/blockpuzzle.js') !!}"></script>

</body>
</html>
