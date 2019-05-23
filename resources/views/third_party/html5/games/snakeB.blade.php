<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/CrocoDillon/pen/pgaRwb.

I think Redux is not only for web/native apps. This is an experiment to use it for a simple game too! I probably made some mistakes since this is the first thing I made with Redux Sagas. Still, it works and I had fun :)

Follow me https://twitter.com/CrocoDillon
-->

<!--
Copyright (c) 2019 by CrocoDillon (https://codepen.io/CrocoDillon/pen/pgaRwb)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Snake game made with Redux and Redux Saga</title>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/snakeB.css') !!}" />
</head>

<body>

  <h1>Snake game made with Redux and Redux Saga</h1>
  <canvas id="canvas" width="400" height="400"></canvas>

  <script src='https://npmcdn.com/babel-regenerator-runtime@6.3.13/runtime.js'></script>
  <script src='https://npmcdn.com/redux@3.0.5/dist/redux.min.js'></script>
  <script src='https://npmcdn.com/redux-saga@0.5.0/dist/redux-saga.min.js'></script>

  <script src="{!! asset('js/third_party_html5/snakeB.js') !!}"></script>

</body>
</html>
