<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/EduardoLopes/pen/bvEFu.

- Click in the colors that match
- lose -200 if don't match
- win (matching blocks * 10) if match
- The game it's infinite, have no end.

I'm very happy with this game, i learned a lot of news things. I want to make more simples games like this to learn more.

I spend some more time making this game than the [another one](http://codepen.io/EduardoLopes/pen/IJnAr), i needed to figure out how to make a pathfinder, and before i spent a lot of time trying to do by 'brutal force'. I think was 3 days making this game.

Enjoy. :D

Update: Clean up the code a little bit and add some comments.
Update 2: Fix a bug
-->

<!--
Copyright (c) 2019 by Eduardo Lopes (https://codepen.io/EduardoLopes/pen/bvEFu)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Daily Pen #021: Match Color Game</title>
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script> --}}
  <script src="{!! asset('js/modernizr.js') !!}"></script>
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> --}}
  <link rel="stylesheet" href="{!! asset('css/normalize.css') !!}" />
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/matchcolor.css') !!}" />
</head>

<body>

  <!--
  - Click in the colors that match
  - Lose -200 if don't match
  - Win (matching blocks * 10) if match
  - The game it's infinite, have no end.
  -->

  <div id="container">
    <div class="hud">
      Score: <span id="score" class="score">0</span>
    </div>
  </div>
  <p>Follow me on twitter <a href="https://twitter.com/edoardolopes" target="_blank">@EdoardoLopes</a></p>

  {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/sketch.js/1.0.0/sketch.min.js'></script> --}}
  <script src="{!! asset('js/sketch.min.js') !!}"></script>
  <script src="{!! asset('js/third_party_html5/matchcolor.js') !!}"></script>
</body>
</html>
