<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/ziga-miklic/pen/Fagmh.

I have seen demos of pure CSS Tic-tac-toe games, but I was unable to find a version that truly works. If I have missed it, please send me link, so I can see how another dev has created it.
-->

<!--
Copyright (c) 2019 by Žiga Miklič (https://codepen.io/ziga-miklic/pen/Fagmh)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Pure CSS Tic-tac-toe</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700'>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/tictactoe.css') !!}" />
</head>

<body>

  <div class="tic-tac-toe">
    <input class="player-1 left first-column top first-row first-diagonal turn-1" id="block1-1-1" type="radio"/>
    <label class="turn-1" for="block1-1-1"></label>
    <input class="player-1 middle second-column top first-row turn-1" id="block1-1-2" type="radio"/>
    <label class="turn-1" for="block1-1-2"></label>
    <input class="player-1 right third-column top first-row second-diagonal turn-1" id="block1-1-3" type="radio"/>
    <label class="turn-1" for="block1-1-3"></label>
    <input class="player-1 left first-column center second-row turn-1" id="block1-2-1" type="radio"/>
    <label class="turn-1" for="block1-2-1"></label>
    <input class="player-1 middle second-column center second-row first-diagonal second-diagonal turn-1" id="block1-2-2" type="radio"/>
    <label class="turn-1" for="block1-2-2"></label>
    <input class="player-1 right third-column center second-row turn-1" id="block1-2-3" type="radio"/>
    <label class="turn-1" for="block1-2-3"></label>
    <input class="player-1 left first-column bottom third-row second-diagonal turn-1" id="block1-3-1" type="radio"/>
    <label class="turn-1" for="block1-3-1"></label>
    <input class="player-1 middle second-column bottom third-row turn-1" id="block1-3-2" type="radio"/>
    <label class="turn-1" for="block1-3-2"></label>
    <input class="player-1 right third-column bottom third-row first-diagonal turn-1" id="block1-3-3" type="radio"/>
    <label class="turn-1" for="block1-3-3"></label>
    <input class="player-2 left first-column top first-row first-diagonal turn-2" id="block2-1-1" type="radio"/>
    <label class="turn-2" for="block2-1-1"></label>
    <input class="player-2 middle second-column top first-row turn-2" id="block2-1-2" type="radio"/>
    <label class="turn-2" for="block2-1-2"></label>
    <input class="player-2 right third-column top first-row second-diagonal turn-2" id="block2-1-3" type="radio"/>
    <label class="turn-2" for="block2-1-3"></label>
    <input class="player-2 left first-column center second-row turn-2" id="block2-2-1" type="radio"/>
    <label class="turn-2" for="block2-2-1"></label>
    <input class="player-2 middle second-column center second-row first-diagonal second-diagonal turn-2" id="block2-2-2" type="radio"/>
    <label class="turn-2" for="block2-2-2"></label>
    <input class="player-2 right third-column center second-row turn-2" id="block2-2-3" type="radio"/>
    <label class="turn-2" for="block2-2-3"></label>
    <input class="player-2 left first-column bottom third-row second-diagonal turn-2" id="block2-3-1" type="radio"/>
    <label class="turn-2" for="block2-3-1"></label>
    <input class="player-2 middle second-column bottom third-row turn-2" id="block2-3-2" type="radio"/>
    <label class="turn-2" for="block2-3-2"></label>
    <input class="player-2 right third-column bottom third-row first-diagonal turn-2" id="block2-3-3" type="radio"/>
    <label class="turn-2" for="block2-3-3"></label>
    <input class="player-1 left first-column top first-row first-diagonal turn-3" id="block3-1-1" type="radio"/>
    <label class="turn-3" for="block3-1-1"></label>
    <input class="player-1 middle second-column top first-row turn-3" id="block3-1-2" type="radio"/>
    <label class="turn-3" for="block3-1-2"></label>
    <input class="player-1 right third-column top first-row second-diagonal turn-3" id="block3-1-3" type="radio"/>
    <label class="turn-3" for="block3-1-3"></label>
    <input class="player-1 left first-column center second-row turn-3" id="block3-2-1" type="radio"/>
    <label class="turn-3" for="block3-2-1"></label>
    <input class="player-1 middle second-column center second-row first-diagonal second-diagonal turn-3" id="block3-2-2" type="radio"/>
    <label class="turn-3" for="block3-2-2"></label>
    <input class="player-1 right third-column center second-row turn-3" id="block3-2-3" type="radio"/>
    <label class="turn-3" for="block3-2-3"></label>
    <input class="player-1 left first-column bottom third-row second-diagonal turn-3" id="block3-3-1" type="radio"/>
    <label class="turn-3" for="block3-3-1"></label>
    <input class="player-1 middle second-column bottom third-row turn-3" id="block3-3-2" type="radio"/>
    <label class="turn-3" for="block3-3-2"></label>
    <input class="player-1 right third-column bottom third-row first-diagonal turn-3" id="block3-3-3" type="radio"/>
    <label class="turn-3" for="block3-3-3"></label>
    <input class="player-2 left first-column top first-row first-diagonal turn-4" id="block4-1-1" type="radio"/>
    <label class="turn-4" for="block4-1-1"></label>
    <input class="player-2 middle second-column top first-row turn-4" id="block4-1-2" type="radio"/>
    <label class="turn-4" for="block4-1-2"></label>
    <input class="player-2 right third-column top first-row second-diagonal turn-4" id="block4-1-3" type="radio"/>
    <label class="turn-4" for="block4-1-3"></label>
    <input class="player-2 left first-column center second-row turn-4" id="block4-2-1" type="radio"/>
    <label class="turn-4" for="block4-2-1"></label>
    <input class="player-2 middle second-column center second-row first-diagonal second-diagonal turn-4" id="block4-2-2" type="radio"/>
    <label class="turn-4" for="block4-2-2"></label>
    <input class="player-2 right third-column center second-row turn-4" id="block4-2-3" type="radio"/>
    <label class="turn-4" for="block4-2-3"></label>
    <input class="player-2 left first-column bottom third-row second-diagonal turn-4" id="block4-3-1" type="radio"/>
    <label class="turn-4" for="block4-3-1"></label>
    <input class="player-2 middle second-column bottom third-row turn-4" id="block4-3-2" type="radio"/>
    <label class="turn-4" for="block4-3-2"></label>
    <input class="player-2 right third-column bottom third-row first-diagonal turn-4" id="block4-3-3" type="radio"/>
    <label class="turn-4" for="block4-3-3"></label>
    <input class="player-1 left first-column top first-row first-diagonal turn-5" id="block5-1-1" type="radio"/>
    <label class="turn-5" for="block5-1-1"></label>
    <input class="player-1 middle second-column top first-row turn-5" id="block5-1-2" type="radio"/>
    <label class="turn-5" for="block5-1-2"></label>
    <input class="player-1 right third-column top first-row second-diagonal turn-5" id="block5-1-3" type="radio"/>
    <label class="turn-5" for="block5-1-3"></label>
    <input class="player-1 left first-column center second-row turn-5" id="block5-2-1" type="radio"/>
    <label class="turn-5" for="block5-2-1"></label>
    <input class="player-1 middle second-column center second-row first-diagonal second-diagonal turn-5" id="block5-2-2" type="radio"/>
    <label class="turn-5" for="block5-2-2"></label>
    <input class="player-1 right third-column center second-row turn-5" id="block5-2-3" type="radio"/>
    <label class="turn-5" for="block5-2-3"></label>
    <input class="player-1 left first-column bottom third-row second-diagonal turn-5" id="block5-3-1" type="radio"/>
    <label class="turn-5" for="block5-3-1"></label>
    <input class="player-1 middle second-column bottom third-row turn-5" id="block5-3-2" type="radio"/>
    <label class="turn-5" for="block5-3-2"></label>
    <input class="player-1 right third-column bottom third-row first-diagonal turn-5" id="block5-3-3" type="radio"/>
    <label class="turn-5" for="block5-3-3"></label>
    <input class="player-2 left first-column top first-row first-diagonal turn-6" id="block6-1-1" type="radio"/>
    <label class="turn-6" for="block6-1-1"></label>
    <input class="player-2 middle second-column top first-row turn-6" id="block6-1-2" type="radio"/>
    <label class="turn-6" for="block6-1-2"></label>
    <input class="player-2 right third-column top first-row second-diagonal turn-6" id="block6-1-3" type="radio"/>
    <label class="turn-6" for="block6-1-3"></label>
    <input class="player-2 left first-column center second-row turn-6" id="block6-2-1" type="radio"/>
    <label class="turn-6" for="block6-2-1"></label>
    <input class="player-2 middle second-column center second-row first-diagonal second-diagonal turn-6" id="block6-2-2" type="radio"/>
    <label class="turn-6" for="block6-2-2"></label>
    <input class="player-2 right third-column center second-row turn-6" id="block6-2-3" type="radio"/>
    <label class="turn-6" for="block6-2-3"></label>
    <input class="player-2 left first-column bottom third-row second-diagonal turn-6" id="block6-3-1" type="radio"/>
    <label class="turn-6" for="block6-3-1"></label>
    <input class="player-2 middle second-column bottom third-row turn-6" id="block6-3-2" type="radio"/>
    <label class="turn-6" for="block6-3-2"></label>
    <input class="player-2 right third-column bottom third-row first-diagonal turn-6" id="block6-3-3" type="radio"/>
    <label class="turn-6" for="block6-3-3"></label>
    <input class="player-1 left first-column top first-row first-diagonal turn-7" id="block7-1-1" type="radio"/>
    <label class="turn-7" for="block7-1-1"></label>
    <input class="player-1 middle second-column top first-row turn-7" id="block7-1-2" type="radio"/>
    <label class="turn-7" for="block7-1-2"></label>
    <input class="player-1 right third-column top first-row second-diagonal turn-7" id="block7-1-3" type="radio"/>
    <label class="turn-7" for="block7-1-3"></label>
    <input class="player-1 left first-column center second-row turn-7" id="block7-2-1" type="radio"/>
    <label class="turn-7" for="block7-2-1"></label>
    <input class="player-1 middle second-column center second-row first-diagonal second-diagonal turn-7" id="block7-2-2" type="radio"/>
    <label class="turn-7" for="block7-2-2"></label>
    <input class="player-1 right third-column center second-row turn-7" id="block7-2-3" type="radio"/>
    <label class="turn-7" for="block7-2-3"></label>
    <input class="player-1 left first-column bottom third-row second-diagonal turn-7" id="block7-3-1" type="radio"/>
    <label class="turn-7" for="block7-3-1"></label>
    <input class="player-1 middle second-column bottom third-row turn-7" id="block7-3-2" type="radio"/>
    <label class="turn-7" for="block7-3-2"></label>
    <input class="player-1 right third-column bottom third-row first-diagonal turn-7" id="block7-3-3" type="radio"/>
    <label class="turn-7" for="block7-3-3"></label>
    <input class="player-2 left first-column top first-row first-diagonal turn-8" id="block8-1-1" type="radio"/>
    <label class="turn-8" for="block8-1-1"></label>
    <input class="player-2 middle second-column top first-row turn-8" id="block8-1-2" type="radio"/>
    <label class="turn-8" for="block8-1-2"></label>
    <input class="player-2 right third-column top first-row second-diagonal turn-8" id="block8-1-3" type="radio"/>
    <label class="turn-8" for="block8-1-3"></label>
    <input class="player-2 left first-column center second-row turn-8" id="block8-2-1" type="radio"/>
    <label class="turn-8" for="block8-2-1"></label>
    <input class="player-2 middle second-column center second-row first-diagonal second-diagonal turn-8" id="block8-2-2" type="radio"/>
    <label class="turn-8" for="block8-2-2"></label>
    <input class="player-2 right third-column center second-row turn-8" id="block8-2-3" type="radio"/>
    <label class="turn-8" for="block8-2-3"></label>
    <input class="player-2 left first-column bottom third-row second-diagonal turn-8" id="block8-3-1" type="radio"/>
    <label class="turn-8" for="block8-3-1"></label>
    <input class="player-2 middle second-column bottom third-row turn-8" id="block8-3-2" type="radio"/>
    <label class="turn-8" for="block8-3-2"></label>
    <input class="player-2 right third-column bottom third-row first-diagonal turn-8" id="block8-3-3" type="radio"/>
    <label class="turn-8" for="block8-3-3"></label>
    <input class="player-1 left first-column top first-row first-diagonal turn-9" id="block9-1-1" type="radio"/>
    <label class="turn-9" for="block9-1-1"></label>
    <input class="player-1 middle second-column top first-row turn-9" id="block9-1-2" type="radio"/>
    <label class="turn-9" for="block9-1-2"></label>
    <input class="player-1 right third-column top first-row second-diagonal turn-9" id="block9-1-3" type="radio"/>
    <label class="turn-9" for="block9-1-3"></label>
    <input class="player-1 left first-column center second-row turn-9" id="block9-2-1" type="radio"/>
    <label class="turn-9" for="block9-2-1"></label>
    <input class="player-1 middle second-column center second-row first-diagonal second-diagonal turn-9" id="block9-2-2" type="radio"/>
    <label class="turn-9" for="block9-2-2"></label>
    <input class="player-1 right third-column center second-row turn-9" id="block9-2-3" type="radio"/>
    <label class="turn-9" for="block9-2-3"></label>
    <input class="player-1 left first-column bottom third-row second-diagonal turn-9" id="block9-3-1" type="radio"/>
    <label class="turn-9" for="block9-3-1"></label>
    <input class="player-1 middle second-column bottom third-row turn-9" id="block9-3-2" type="radio"/>
    <label class="turn-9" for="block9-3-2"></label>
    <input class="player-1 right third-column bottom third-row first-diagonal turn-9" id="block9-3-3" type="radio"/>
    <label class="turn-9" for="block9-3-3"></label>
    <div class="end">
      <h3></h3>
      <a href="">Restart</a>
    </div>
  </div>
  <h5>Note: use the Full Page view for the best experience.</h5>

</body>
</html>
