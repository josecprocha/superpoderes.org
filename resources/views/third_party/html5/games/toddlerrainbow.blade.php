<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/rafaelcastrocouto/pen/WLveGw.

I made this game for my 2 years old kid and she loved.
-->

<!--
Copyright (c) 2019 by rafaelcastrocouto (https://codepen.io/rafaelcastrocouto/pen/WLveGw)


Fork of an original work by rafaelcastrocouto (https://codepen.io/rafaelcastrocouto/pen/rQgzKb)



Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Toddler Rainbow Game</title>
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> --}}
  <link rel="stylesheet" href="{!! asset('css/normalize.css') !!}" />
  <style>

/* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
@import url('https://fonts.googleapis.com/css?family=Black+And+White+Picture');
body { overflow: hidden; user-select: none; }
#game {
  display: grid;
  place-content: center;
  height: 100vh;
  background: #33e;
}
#game div {
  white-space: nowrap;
}
#game b {
  display: inline-block;
  width: 4vmin;
  height: 4vmin;
  cursor: pointer;
  margin: 4vmin 2.5vmin;
  transition: all 0.2s;
  transform: scaleY(1.6);
  position: relative;
}
#game b:after {
  opacity: 0.5;
  content: "";
  display: block;
  width: 4vmin;
  height: 4vmin;
  background: white;
  cursor: pointer;
  border-radius: 0 50% 100% 50%;
  transform: rotate(45deg);
  margin-top: 20px;
  position: relative;
  top: -4vmin;
}
#game b.invisible {
  animation: fall 2.8s 1
    cubic-bezier(0.31, 0.44, 0.44, 1.65);
}
#game b:hover {
  opacity: 1;
}
#game b.fall {
  width: 6vmin;
  height: 6vmin;
  position: absolute;
  animation: falling 2.8s infinite
    cubic-bezier(0.31, 0.44, 0.44, 1.65);
}
#game .end {
  color: white;
  font-family: 'Black And White Picture';
  width: 100vw;
  position: absolute;
  vertical-align: top;
  text-align: center;
  font-size: 16vmin;
  top: calc(50% - 20vmin);
  animation: twist 1s infinite
    cubic-bezier(0.31, 0.44, 0.44, 1.65);
  text-shadow: 1vmin  1vmin 0 #e33,
               1vmin -1vmin 0 #93e,
              -1vmin -1vmin 0 #ed3,
              -2vmin  1vmin 0 #3b9,
               2vmin  1vmin 0 #e39;
}
#game .rainbow {
  position: absolute;
  top: 30%;
  left: -20vw;
  width: 140vw;
  height: 80vw;
  display: block;
  border-radius: 50%;
  box-shadow:
    0 -2vmin 0 1vmin #e33,
    0 -2vmin 0 4vmin #e93,
    0 -2vmin 0 7vmin #ed3,
    0 -2vmin 0 10vmin #3d9,
    0 -2vmin 0 13vmin #39e,
    0 -2vmin 0 16vmin #93e,
    0 -2vmin 0 19vmin #e39;
}
#game .rainbow:after {
  content: "";
  display: block;
  width: 140vw;
  height: 50vh;
  background: #33e;
  position: relative;
  left: 20vw;
  top: 60vmin;
}
@keyframes kick {
  0%, 100% { top: 0; transform: scaleY(1); }
  10% { top: 0; transform: scaleY(0.85); }
  50% { top: -2vmin; transform: scaleY(1); }
}
@keyframes fall {
  0% {top: 0vh; visibility: visible;}
  100% {top: 110vh; visibility: hidden;}
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

  </style>
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script> --}}
  <script src="{!! asset('js/prefixfree.min.js') !!}"></script>
</head>

<body>

  <div id='game'>
    <p class="rainbow"></p>
    <p class="end">Well Done!</p>
  </div>

  <script src="{!! asset('js/third_party_html5/toddlerrainbow.js') !!}"></script>

</body>
</html>
