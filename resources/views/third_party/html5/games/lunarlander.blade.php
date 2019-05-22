<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/clindsey/pen/ZOgKXp.

exploring the mechanics of a lunar lander game

background from http://codepen.io/winkerVSbecks/details/uyrgC

the spaceship from http://codepen.io/micjamking/pen/VjPage

controls from http://codepen.io/jscottsmith/pen/KrJvAq
-->

<!--
Copyright (c) 2019 by not important (https://codepen.io/clindsey/pen/ZOgKXp)


Fork of an original work by not important (https://codepen.io/clindsey/pen/qbLgXr)



Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>lunar-lander-0.1.0</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/lunarlander.css') !!}" />
</head>

<body>

  <script>
    function hideClickArea () {
      document.getElementById('js-click-area').style.display = 'none';
    }
  </script>

  <div id="js-canvas-container"></div>
  <div id="js-click-area" class="click-area" onclick="hideClickArea()">
    <span class="message">Click to Begin<br /><small>Keyboard to Move</small><span>
  </div>
  <div class="keys">
    <span id="up" class="key up">▲</span> <br />
    <span id="left" class="key left">◀</span>
    <span id="down" class="key down">▼</span>
    <span id="right" class="key right">▶</span>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/chroma-js/1.1.1/chroma.min.js"></script>
  <script src="https://cdn.rawgit.com/schteppe/poly-decomp.js/v0.1.0/build/decomp.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/3.0.9/pixi.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/matter-js/0.10.0/matter.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/seedrandom/2.4.2/lib/alea.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gl-matrix/2.3.2/gl-matrix-min.js"></script>
  <script src="https://codepen.io/clindsey/pen/OXKvxr.js"></script> <!-- matter-engine-3.0.0 -->
  <script src="https://codepen.io/clindsey/pen/pgBZBj.js"></script> <!-- pixi render -->
  <script>
    (function(){
      var script=document.createElement('script');
      script.onload=function(){
        var stats=new Stats();
        document.body.appendChild(stats.dom);
        requestAnimationFrame(function loop(){
          stats.update();
          requestAnimationFrame(loop)
        });
      };
      script.src='//rawgit.com/mrdoob/stats.js/master/build/stats.min.js';
      document.head.appendChild(script);
    })()
  </script>
  <script src="{!! asset('js/third_party_html5/lunarlander.js') !!}"></script>

</body>
</html>
