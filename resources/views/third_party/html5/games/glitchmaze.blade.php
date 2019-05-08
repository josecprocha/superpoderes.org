<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/towc/pen/gwgyZr.

entry for js13kgames 2016 :D
Enjoy!

http://js13kgames.com/entries/glitch-maze
-->

<!--
Copyright (c) 2019 by Matei Copot (https://codepen.io/towc/pen/gwgyZr)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>glitch maze - #js13k</title>
  <style>
    /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
    #c {
      position: absolute;
      top: calc(50% - 256px);
      left: calc(50% - 256px);
      background-color: #222;
      box-shadow: 0 0 5px #333;
    }
    body {
      background-color: #111;
    }
    @media all and (max-width:512px) {
      #c {
        width: 100vw;
        height: 100vw;
        top: calc(50% - 50vw);
        left: 0;
      }
    }
    @media all and (max-height:512px) {
      #c {
        width: 100vh;
        height: 100vh;
        top: 0;
        left: calc(50% - 50vh);
      }
    }
    @media all and (max-width:100vh) and (max-height:512px) {
      #c {
        width: 100vw;
        height: 100vw;
        top: calc(50% - 50vw);
        left: 0;
      }
    }
    @media all and (max-width:512px) and (max-height:100vw) {
      #c {
        width: 100vh;
        height: 100vh;
        top: 0;
        left: calc(50% - 50vh);
      }
    }
  </style>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>

<body>
  <canvas id=c></canvas>
  <script src="{!! asset('js/third_party_html5/glitchmaze.js') !!}"></script>
</body>
</html>
