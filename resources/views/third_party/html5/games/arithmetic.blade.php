<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/zsoltime/pen/XjPoKd.
-->

<!--
Copyright (c) 2019 by Zsolt Meszaros (https://codepen.io/zsoltime/pen/XjPoKd)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Math Game</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Bangers|Oswald:300'>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/arithmetic.css') !!}" />
</head>

<body>
  <h3> <span class="question"></span><span>= </span><span class="blinking">?</span></h3>
  <ul class="answers">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
  <p>Total points: <span class="points"></span></p>
  <script src="{!! asset('js/third_party_html5/arithmetic.js') !!}"></script>
</body>
</html>
