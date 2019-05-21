<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/rafaelcastrocouto/pen/rQgzKb.

I made this game for my 2 years old kid and she loved.
-->

<!--
Copyright (c) 2019 by rafaelcastrocouto (https://codepen.io/rafaelcastrocouto/pen/rQgzKb)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Toddler Color Game</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <style>
/* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
@import url('https://fonts.googleapis.com/css?family=Black+And+White+Picture');
#game {
  display: grid;
  place-content: center;
  height: 100vh;
  overflow: hidden;
}
#game div {
  white-space: nowrap
}
#game b {
  display: inline-block;
  width: 10vmin;
  height: 10vmin;
  border-radius: 50%;
  cursor: pointer;
  margin: 1vmin 1.5vmin;
  transition: all 0.2s;
  box-shadow: 0 0 0 0.6vmin white;
  position: relative;
}
#game b:hover {
  box-shadow: 0 0 0 1.2vmin white;
}
#game b[data-pick="1"]:hover {
  animation: kick 1s infinite
    cubic-bezier(0.31, 0.44, 0.44, 1.65);
}
#game b.fall {
  width: 6vmin;
  height: 6vmin;
  position: absolute;
  animation: falling 2.8s
    cubic-bezier(0.31, 0.44, 0.44, 1.65);
}
#game p {
  color: white;
  display: none;
  font-family: 'Black And White Picture';
  width: 100vw;
  text-align: center;
  font-size: 16vmin;
  animation: twist 1s infinite
    cubic-bezier(0.31, 0.44, 0.44, 1.65);
  text-shadow: 1vmin  1vmin 0 #e33,
               1vmin -1vmin 0 #93e,
              -1vmin -1vmin 0 #ed3,
              -2vmin  1vmin 0 #3b9,
               2vmin  1vmin 0 #e39;
}
@keyframes falling {
  0% {top: -10vh;}
  100% {top: 110vh;}
}
@keyframes twist {
  0%,100% {transform: rotate(0);}
  25%,75% {transform: rotate(-10deg);}
  50% {transform: rotate(10deg);}
}
@keyframes kick {
  0%, 100% { top: 0; transform: scaleY(1); }
  10% { top: 0; transform: scaleY(0.85); }
  50% { top: -1vmin; transform: scaleY(1); }
}
    </style>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>

<body>
  <div id='game'>
    <p>Well Done!</p>
  </div>
  <script src="{!! asset('js/third_party_html5/toddlercolor.js') !!}"></script>
</body>
</html>
