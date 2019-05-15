<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/rafael-pinto/pen/zjryPm.
-->

<!--
Copyright (c) 2019 by Rafael Pinto (https://codepen.io/rafael-pinto/pen/zjryPm)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Click Soccer - A Turn-Based Point'n'Click Soccer Game - LD41 Jam Version</title>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/clicksoccer.css') !!}" />
</head>

<body>

  <div id="scoreboard1">YOU <span id="score1">0</span></div>
  <div id="field">
    <div id="highlight" data-radius="1"></div>
    <div id="topgoal"></div>
    <div id="fieldborder">
      <div id="toplargearea"><div id="toppenaltymark"></div><div id="topsmallarea"></div></div>
      <hr> <div id="middlecircle"><div id="startcircle"></div></div>
      <div id="bottomlargearea"><div id="bottompenaltymark"></div><div id="bottomsmallarea"></div></div>
    </div>
    <div id="bottomgoal"></div>
    <img draggable="false" ondragstart="return false;" id="player-1" class="player you" src="https://piskel-imgstore-b.appspot.com/img/60a5bbe3-45ed-11e8-b2a1-2fa8e755cf6d.gif" data-x="13" data-y="13" data-orig-x="13" data-orig-y="12" data-tactic-x="13" data-tactic-y="5">
    <img draggable="false" ondragstart="return false;" id="player-2" class="player you selected" src="https://piskel-imgstore-b.appspot.com/img/60a5bbe3-45ed-11e8-b2a1-2fa8e755cf6d.gif" data-x="3" data-y="13" data-orig-x="3" data-orig-y="12" data-tactic-x="3" data-tactic-y="5">

    <img draggable="false" ondragstart="return false;" id="player-3" class="player you" src="https://piskel-imgstore-b.appspot.com/img/60a5bbe3-45ed-11e8-b2a1-2fa8e755cf6d.gif" data-x="10" data-y="17" data-orig-x="10" data-orig-y="17" data-tactic-x="10" data-tactic-y="17">
    <img draggable="false" ondragstart="return false;" id="player-4" class="player you selected" src="https://piskel-imgstore-b.appspot.com/img/60a5bbe3-45ed-11e8-b2a1-2fa8e755cf6d.gif" data-x="6" data-y="17" data-orig-x="6" data-orig-y="17" data-tactic-x="6" data-tactic-y="17">

    <img draggable="false" ondragstart="return false;" id="player-5" class="player you selected goalkeeper" src="https://piskel-imgstore-b.appspot.com/img/60a5bbe3-45ed-11e8-b2a1-2fa8e755cf6d.gif" data-x="8" data-y="21" data-orig-x="8" data-orig-y="21" data-tactic-x="8" data-tactic-y="21">

    <img draggable="false" ondragstart="return false;" id="cpu-1" class="player cpu" src="https://piskel-imgstore-b.appspot.com/img/60a5bbe3-45ed-11e8-b2a1-2fa8e755cf6d.gif" data-x="3" data-y="8" data-orig-x="3" data-orig-y="9" data-tactic-x="3" data-tactic-y="18">
    <img draggable="false" ondragstart="return false;" id="cpu-2" class="player cpu" src="https://piskel-imgstore-b.appspot.com/img/60a5bbe3-45ed-11e8-b2a1-2fa8e755cf6d.gif" data-x="13" data-y="9" data-orig-x="13" data-orig-y="9" data-tactic-x="13" data-tactic-y="18">

    <img draggable="false" ondragstart="return false;" id="cpu-3" class="player cpu" src="https://piskel-imgstore-b.appspot.com/img/60a5bbe3-45ed-11e8-b2a1-2fa8e755cf6d.gif" data-x="6" data-y="5" data-orig-x="6" data-orig-y="5" data-tactic-x="6" data-tactic-y="5">
    <img draggable="false" ondragstart="return false;" id="cpu-4" class="player cpu" src="https://piskel-imgstore-b.appspot.com/img/60a5bbe3-45ed-11e8-b2a1-2fa8e755cf6d.gif" data-x="10" data-y="5" data-orig-x="10" data-orig-y="5" data-tactic-x="10" data-tactic-y="5">

    <img draggable="false" ondragstart="return false;" id="cpu-5" class="player cpu goalkeeper" src="https://piskel-imgstore-b.appspot.com/img/60a5bbe3-45ed-11e8-b2a1-2fa8e755cf6d.gif" data-x="8" data-y="1" data-orig-x="8" data-orig-y="1" data-tactic-x="8" data-tactic-y="1">

    <img draggable="false" ondragstart="return false;" id="ball" src="https://piskel-imgstore-b.appspot.com/img/abc8811e-45f1-11e8-b5fe-2fa8e755cf6d.gif" data-x="8" data-y="11" data-angle="0">
  </div>
  <div id="scoreboard2"><span id="score2">0</span> CPU</div>

  <script src="{!! asset('js/third_party_html5/clicksoccer.js') !!}"></script>

</body>
</html>
