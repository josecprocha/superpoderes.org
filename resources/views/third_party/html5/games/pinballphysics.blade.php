<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/lonekorean/pen/KXLrVX.

Use left/right arrow keys or tap (and hold) buttons to control paddles. Powered by [matter.js](http://brm.io/matter-js/).

Blog post: [JavaScript Physics with Matter.js](http://codersblock.com/blog/javascript-physics-with-matter-js/)
-->

<!--
Copyright (c) 2019 by Will Boyd (https://codepen.io/lonekorean/pen/KXLrVX)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Pinball Physics</title>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/pinballphysics.css') !!}" />
</head>

<body>

  <div class="container">
    <div class="score current-score">
      score<br><span></span>
    </div>
    <div class="score high-score">
      high score<br><span></span>
    </div>
    <button class="trigger left-trigger">tap!</button>
    <button class="trigger right-trigger">tap!</button>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src='https://cdn.rawgit.com/schteppe/poly-decomp.js/1ef946f1/build/decomp.min.js'></script>
  <script src='https://cdn.rawgit.com/liabru/matter-js/0895d81f/build/matter.min.js'></script>
  <script src='https://cdn.rawgit.com/liabru/matter-attractors/c470ed42/build/matter-attractors.min.js'></script>
  <script src="{!! asset('js/third_party_html5/pinballphysics.js') !!}"></script>

</body>
</html>
