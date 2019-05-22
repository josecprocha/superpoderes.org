<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/ImagineProgramming/pen/bdRvZX.

I suggest full view!

A very simple MVC snake game, where a main controller keeps track of several other controllers, models and views. Aside from teaching on an IVE school, I also study software engineering on the university of applied sciences Windesheim. This was an assignment.

I didn't bother with the music and sounds a lot, they came from royalty free sound websites. I lost the links unfortunately, which is rather stupid of me.

Rules and stuff:
- Arrow keys controll snake
- P pauses the game
- Red kills, green stops you, snake tail kills
- Food expires, when expired, you lose 3 points.
- Food gives you 2, 4 or 6 points when grabbed and lengthens you.

Enjoy! Post the highscore if you like.
-->

<!--
Copyright (c) 2019 by Bas Groothedde (https://codepen.io/ImagineProgramming/pen/bdRvZX)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>[MVC] CyberSnake</title>
  <link href='https://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/cybersnake.css') !!}" />
</head>

<body>

  <div id="container">
    <canvas id="render-target" width="400" height="400"></canvas>
    <span class="font-trick">Cyber-Snake</span>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/stats.js/r11/Stats.js'></script>
  <script src="{!! asset('js/third_party_html5/cybersnake.js') !!}"></script>

</body>
</html>
