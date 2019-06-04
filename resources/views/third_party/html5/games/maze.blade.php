<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/towc/pen/JWgeMR.

55:50. This is really helping in estimations :P
-->

<!--
Copyright (c) 2019 by Matei Copot (https://codepen.io/towc/pen/JWgeMR)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>speed code #2 - BJIeH - maze player</title>
  <style>
    /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
    body {
      background-color: #555;
    }

    canvas {
      position: absolute;
      top: calc( 50% - 256px );
      left: calc( 50% - 256px );
      box-shadow: 0 0 2px #000;
    }

    #win {
      position: absolute;
      top: calc( 50% - 256px );
      left: calc( 50% - 256px );
      background-color: rgba(0,0,0,.8);
      text-align: center;
      width: 512px;
      padding-top: 150px;
      height: 362px;
      color: #eee;
      opacity: 0;
      display: none;
      transition: opacity .5s;
    }

    #win.showing {
      display: inline-block;
      opacity: 1;
    }

    #win, input, button {
      font: 20px Helvetica;
    }

    input {
      width: 40px;
    }

    button {
      padding: 8px;
    }
  </style>
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script> --}}
  <script src="{!! asset('js/prefixfree.min.js') !!}"></script>
</head>

<body>
  <canvas id=c></canvas>
  <div id=win class=showing>
    <p>congrats! Now try a new one</p>
    <p><input id=widthInput type=number value=33> width</p>
    <p><input id=heightInput type=number value=33> height</p>
    <p><button id=beginButton>start!</button></p>
  </div>
  <script src="{!! asset('js/third_party_html5/maze.js') !!}"></script>
</body>
</html>
