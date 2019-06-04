<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/Mobius1/pen/PpJPKE.

Solitaire game using the HTML5 Drag and Drop API. IE11+

Fully featured game including hinting, auto-stacking, undoing, animation and even the beloved Windows Solitaire win animation.

Scoring system is unfinished.

DISCLAIMER: I take no responsibility for your lack of productiveness due to playing this ;)

## CHANGELOG:

### v0.0.4
* Fix controls not visible above win animation
* Check canvas is completely filled with cards at the end of the win animation

### v0.0.3
* Add undo / redo states.

### v0.0.2
* Add win animation
-->

<!--
Copyright (c) 2019 by Karl Saunders (https://codepen.io/Mobius1/pen/PpJPKE)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>HTML5 Drag and Drop Solitaire</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,500'>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/solitaire.css') !!}" />

</head>

<body>

  <div id="controls">
    <button type="button" data-action="undo">Undo</button>
    <button type="button" data-action="hint">Hint</button>
    <button type="button" data-action="cheat">Force Win</button>
    <button type="button" data-action="start">Restart</button>
    <div id="score">Score: 0</div>
  </div>
  <div id="container"></div>

  <script src="{!! asset('js/third_party_html5/solitaire.js') !!}"></script>

</body>
</html>
