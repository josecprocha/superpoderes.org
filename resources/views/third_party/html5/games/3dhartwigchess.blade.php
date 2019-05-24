<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/juliangarnier/pen/BsIih.

3D chess game done in HTML/CSS/JS.
Works only in webkit.

Github repo:
https://github.com/juliangarnier/3D-Hartwig-chess-set

Using Photon : http://photon.attasi.com and Chess.js : https://github.com/jhlywa/chess.js
-->

<!--
Copyright (c) 2019 by Julian Garnier (https://codepen.io/juliangarnier/pen/BsIih)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

  {{--
  Scripts found only externaly:
  https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css
  https://s.cdpn.io/1137/hartwig.libs.js
  https://s.cdpn.io/1137/hartwig.app.js
  --}}

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>CSS 3D Hartwig chess set (fully playable)</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable = no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />
  <link rel="apple-touch-icon" href="https://raw.github.com/juliangarnier/3D-Hartwig-chess-set/master/img/apple-touch-icon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <style>
/* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
/*
    BEST VIEWED IN FULL SCREEN :

  ==========================================
  https://codepen.io/juliangarnier/full/BsIih
  ==========================================

*/

@import url(https://fonts.googleapis.com/css?family=Lato:400,900);

* { box-sizing: border-box; tap-highlight-color:rgba(0,0,0,0); }

body {
  position: absolute;
  width: 100%;
  height: 100%;
  font-size: 100%;
  overflow: hidden;
  font-family: avenir, 'Lato', sans-serif;
  font-weight: 400;
}

button {
  font-family: avenir, 'Lato', sans-serif;
  font-weight: 400;
}

body:not(.animated) *:not(#panes) { transition: all 0s linear; }

#app {
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: black;
  color: white;
}

#app a { color: #EAEAEA; }

#container,
#board,
#frame {
  position: absolute;
  left: 50%;
  top: 50%;
  transform-style: preserve-3d;
}

#app[data-frame="off"] #board,
#app[data-frame="off"] #board #container,
#app[data-frame="off"] #frame {
  width: 8em;
  height: 8em;
  margin: -4em 0 0 -4em;
}

#app[data-frame="on"] #container,
#app[data-frame="on"] #board,
#app[data-frame="on"] #frame {
  position: absolute;
  left: 50%;
  top: 50%;
  width: 9.5em;
  height: 9.5em;
  margin: -4.75em 0 0 -4.75em;
  transform-style: preserve-3d;
}

#container {
  z-index: 1;
  perspective: 800px;
  transform: translateZ( 1000px );
}

#app[data-state="game"] #container { transform: translateZ( 1000px ); }

#scene {
  position: absolute;
  left: 50%;
  top: 50%;
  width: 16em;
  height: 16em;
  margin: -8em 0 0 -8em;
  transform-style: preserve-3d;
  transform: rotateX( 90deg ) rotateZ( 90deg );
}

.sphere { transform: rotateZ( -90deg ) rotateX( -90deg ); }

#scene, .sphere { transition: transform 2s ease-in-out; }

#app[data-state="game"] #scene,
#app[data-state="game"] .sphere { transition-delay: .2s; }

#pieces {
  visibility: hidden;
  position: absolute;
  left: 0;
  top: 0;
}

#board {
  z-index: 0;
  transform: translateZ(.3em);
}

#board:after, #frame:after, #frame:before {
  position: absolute;
  content: "";
  width: 100%;
  height: .3em;
  transform-style: preserve-3d;
  box-sizing: border-box;
}

#frame {
  z-index: -1;
  transform-style: preserve-3d;
  transform: translateZ(.02em) rotateZ(90deg);
  box-shadow: 0 0 .25em .1em rgba(0,0,0,.5);
}

#app[data-frame="on"] #board:after    { transform: rotateX(90deg) translateZ(8.75em) translateY(-0.3em);
                                        transform-origin: 0 0; }
#app[data-frame="on"] #frame:after    { transform: rotateX(90deg) rotateY(90deg) translateX(9.5em) translateY(-0.02em);
                                        transform-origin: 100% 0; }
#app[data-frame="on"] #frame:before   { transform: rotateX(90deg) rotateY(0deg) translateX(0em) translateY(-0.02em);
                                        transform-origin: 100% 0; }

#app[data-frame="off"] th             { display: none; }

#app[data-frame="off"] #board:after   { transform: rotateX(90deg) translateZ(8em) translateY(-0.3em);
                                        transform-origin: 0 0; }
#app[data-frame="off"] #frame:after   { transform: rotateX(90deg) rotateY(90deg) translateX(8em) translateY(-0.02em);
                                        transform-origin: 100% 0; }
#app[data-frame="off"] #frame:before  { transform: rotateX(90deg) rotateY(0deg) translateX(0em) translateY(-0.02em);
                                        transform-origin: 100% 0; }

th, td {
  position: relative;
  width: 1em;
  height: 1em;
}

th {
  vertical-align: top;
  font-size: 75%;
  line-height: .5em;
}

tbody th {
  vertical-align: top;
  line-height: .9em;
}

table span {
  display: block;
  height: 100%;
  font-size: .26em;
  color: rgba(255,255,255,.75);
  transform: translateZ(1px);
}

thead span, tbody th:last-child span{
  transform: rotateZ(180deg) translateZ(1px);
  transform-origin: center;
}

thead span, tfoot span { line-height: 3.9em; }
tbody span { line-height: 4.5em; padding-right: 0.3em; }

/* ---------------------------------------------------------------------------------------------------- jail */

.jail {
  position: absolute;
  left: 50%;
  width: 8em;
  height: 2.25em;
}

#app[data-frame="off"] #w-jail { bottom: 1.5em;   margin-left: -4em; }
#app[data-frame="off"] #b-jail { top: 1.5em;      margin-left: -4em; }

#app[data-frame="on"] #w-jail { bottom: 1em;      margin-left: -4em; }
#app[data-frame="on"] #b-jail { top: 1em;         margin-left: -4em; }

#w-jail {
  bottom: 1em;
  transform-style: preserve-3d;
  transform: rotateZ(0deg) translateZ(2px);
}

#b-jail {
  top: 1em;
  transform-style: preserve-3d;
  transform: rotateZ(180deg) translateZ(2px);
}

.jail .piece{
  position: relative;
  float: left;
}

.jail .piece .face, .jail .piece .sphere, {
  box-shadow: inset 10em 10em 1em rgba(0, 0, 0, .3);
}

#b-jail .piece { transform-origin: center; transform: rotateZ(180deg); }
#w-jail .piece { transform-origin: center; transform: rotateZ(0deg);}

@media screen and (min-width: 56em) {

  #app[data-frame="off"] #w-jail { bottom: 6.9em;   margin-left: 1.5em; }
  #app[data-frame="off"] #b-jail { top: 6.9em;      margin-left: -9.5em; }

  #app[data-frame="on"] #w-jail { bottom: 6.9em;    margin-left: 2em; }
  #app[data-frame="on"] #b-jail { top: 6.9em;       margin-left: -10em; }

  #b-jail { transform: rotateZ(90deg) translateZ(2px); }
  #w-jail { transform: rotateZ(-90deg) translateZ(2px); }

  #b-jail .piece { transform: rotateZ(-90deg); }
  #w-jail .piece { transform: rotateZ(90deg); }

}

/* ---------------------------------------------------------------------------------------------------- piece */

.piece {
  position: absolute;
  width: 1em;
  height: 1em;
  transform-style: preserve-3d;
  transform-origin: 4em;
  transform: translateZ( 2px );
}

.piece,
.poly,
.poly .face,
.poly-group:first-child,
.bishop .poly-group:nth-child(2) {
  transition: transform .2s linear;
}

.piece:active {
  cursor: grabbing;
  cursor: -moz-grabbing;
  cursor: grabbing;
}

.piece.grabbed {
  transition: all 0s linear;
  z-index: 9999;
}

.poly-group {
  position: absolute;
  left: 50%;
  top: 50%;
  font-size: 10%;
  transform-style: preserve-3d;
}

.poly-group:first-child {
  background: rgba(0,0,0,.4);
  box-shadow: 0 0 1em .2em rgba(0,0,0,.6);
}

.bishop .poly-group:nth-child(2) {
  background: rgba(0,0,0,.4);
  box-shadow: 0 0 1em .2em rgba(0,0,0,.6);
}

.piece:active .poly, .piece.grabbed .poly{
  transform: translateZ( 10em );
}

.piece.grabbed .poly-group:first-child {
  background: rgba(0,0,0,.6);
  box-shadow: 0 0 1em .8em rgba(0,0,0,.6);
}

.piece.grabbed.bishop .poly-group:nth-child(2) {
  background: rgba(0,0,0,.6);
  box-shadow: 0 0 1em .8em rgba(0,0,0,.6);
}

.poly {
  position: absolute;
  transform-style: preserve-3d;
}

.poly .face {
  position: absolute;
  transform-origin: 0 0;
}

.valid:before,
.valid:after,
.current:before,
.current:after,
.castle:before,
.castle:after,
.valid.highlight:before,
.valid.highlight:after,
.current.highlight:before,
.current.highlight:after {
  content: '';
  z-index: 1;
  position: absolute;
  top: 50%;
  left: 50%;
  border-radius: 50%;
  transform-style: preserve-3d;
  -moz-box-sizing: border-box; box-sizing: border-box; box-sizing: border-box;
  transform: translateZ( 1px );
}

.valid:before, .current:before {
  width: .3em;
  height: .3em;
  margin-left: -.15em;
  margin-top: -.15em;
  background: rgba(255,255,255,.5);
}

.highlight:before {
  z-index: 2;
  box-shadow: 0 0 1em 1em rgba(255,255,255,.4);
}

.valid.highlight:before,
.current.highlight:before,
.current:before { background: rgba(255,255,255,1); }

.valid.highlight:after,
.current.highlight:after {
  width: .6em;
  height: .6em;
  margin-left: -.3em;
  margin-top: -.3em;
  border: .1em solid rgba(255,255,255,.8);
}

.valid.captured:after {
  width: .8em;
  height: .8em;
  margin-left: -.4em;
  margin-top: -.4em;
  border: .1em solid rgba(255,255,255,.6);
}

.valid:before { background: rgba(255,255,255,.35); }
.valid:after { border: none; }

.valid.highlight:before { background: rgba(255,255,255,1); }
.valid.highlight:after { border: .1em solid rgba(255,255,255,.35); }

.valid.captured:before { background: rgba(255,67,47,.5); }
.valid.captured:after { border: .1em solid rgba(255,67,47,.5); }

.valid.captured.highlight:before { background: rgba(255,67,47,1); }
.valid.captured.highlight:after { border: .1em solid rgba(255,67,47,1); }

.valid[class*="O-O"]:before { background: #CC0; }
.valid[class*="O-O"]:after { border: .1em solid #CC0; }

/* ---------------------------------------------------------------------------------------------------- pawn / king head */

.pawn .poly-group {
  width: 4em;
  height: 4em;
  margin: -2em 0 0 -2em;
}

.poly.small-cube {
  width: 4em;
  height: 4em;
}

.small-cube .tp {
  width: 4em;
  height: 4em;
  transform: translateZ( 4em );
}

.small-cube .ft  {
  width: 4em;
  height: 4em;
  transform: rotateX(90deg) translateZ(-4em);
}

.small-cube .bk   {
  width: 4em;
  height: 4em;
  transform: rotateX(90deg);
}

.small-cube .rt {
  width: 4em;
  height: 4em;
  transform: rotateY(90deg) translateX(-4em);
}

.small-cube .lt {
  width: 4em;
  height: 4em;
  transform: rotateY(90deg) translateX(-4em) translateZ(4em);
}

/* ---------------------------------------------------------------------------------------------------- rook / queen and king bodies */

.rook .poly-group {
  width: 6em;
  height: 6em;
  margin: -3em 0 0 -3em;
}

.poly.big-cube {
  width: 6em;
  height: 6em;
}

.big-cube .tp {
  width: 6em;
  height: 6em;
  transform: translateZ( 6em );
}

.big-cube .ft  {
  width: 6em;
  height: 6em;
  transform: rotateX(90deg) translateZ(-6em);
}

.big-cube .bk   {
  width: 6em;
  height: 6em;
  transform: rotateX(90deg);
}

.big-cube .rt {
  width: 6em;
  height: 6em;
  transform: rotateY(90deg) translateX(-6em);
}

.big-cube .lt {
  width: 6em;
  height: 6em;
  transform: rotateY(90deg) translateX(-6em) translateZ(6em);
}

/* ---------------------------------------------------------------------------------------------------- knight */

.knight .poly-group {
  width: 6em;
  height: 6em;
  margin: -3em 0 0 -3em;
}

.knight .poly-group.top { transform: translateZ( 3em ) rotateZ( 180deg ); }

.knight .poly.a { margin: 0; }
.knight .poly.b { margin: 3em 0 0 0; }
.knight .poly.c { margin: 3em 0 0 3em; }

.knight .tp {
  width: 3em;
  height: 3em;
  transform: translateZ( 3em );
}
.knight .bm {
  width: 8em;
  height: 8em;
  transform: translateZ( 0em );
}
.knight .ft  {
  width: 3em;
  height: 3em;
  transform: rotateX(90deg) translateZ(-3em);
}
.knight .bk   {
  width: 3em;
  height: 3em;
  transform: rotateX(90deg);
}
.knight .rt {
  width: 3em;
  height: 3em;
  transform: rotateY(90deg) translateX(-3em);
}
.knight .lt {
  width: 3em;
  height: 3em;
  transform: rotateY(90deg) translateX(-3em) translateZ(3em);
}

.knight .poly.a .rt { height: 6em; }
.knight .poly.b .ft { width: 6em; }
.knight .poly.b .tp { width: 6em; }

.knight .bottom .poly.b .tp { box-shadow: inset -3.6em .7em 2em rgba(0, 0, 0, .7); }

/* ---------------------------------------------------------------------------------------------------- bishop */

.bishop .rectangle {
  width: 2em;
  height: 6.6em;
  margin: -3.3em 0 0 -1em;
}

.bishop .rectangle.a { transform: rotateZ( 45deg ); }
.bishop .rectangle.b { transform: rotateZ( -45deg ); }

.bishop .rectangle.a .tp {
  position: relative;
  width: 2em;
  height: 6.6em;
  transform: translateZ(6em);
}

.bishop .rectangle.a .rt {
  width: 6em;
  height: 6.6em;
  transform: rotateY(90deg) translateX(-6em) translateZ(0em);
}

.bishop .rectangle.a .lt {
  width: 6em;
  height: 6.6em;
  transform: rotateY(90deg) translateX(-6em) translateZ(2em);
}

.bishop .rectangle.a .tp:before, .bishop .rectangle.b .tp:before {
  content: "";
  position: absolute;
  top: -1em;
  width: 0;
  height: 0;
  border-left: 1.1em solid transparent;
  border-right: 1.1em solid transparent;
  border-bottom: 1.1em solid #fff;
}

.bishop .rectangle.b.prim .tp:before { border: none; }

.bishop .rectangle.a .tp:after, .bishop .rectangle.b.prim .tp:after {
  content: "";
  position: absolute;
  bottom: -1em;
  width: 0;
  height: 0;
  border-left: 1.1em solid transparent;
  border-right: 1.1em solid transparent;
  border-top: 1.1em solid #fff;
}

.bishop .rectangle.b .tp {
  position: relative;
  width: 2em;
  height: 2.3em;
  transform: translateZ(6em);
}

.bishop .rectangle.b .rt {
  width: 6em;
  height: 2.3em;
  transform: rotateY(90deg) translateX(-6em);
}

.bishop .rectangle.b .lt {
  width: 6em;
  height: 2.3em;
  transform: rotateY(90deg) translateX(-6em) translateZ(2em);
}

.bishop .rectangle.b.prim .tp { transform: translateZ(6em) translateY(4.3em); }
.bishop .rectangle.b.prim .rt { transform: rotateY(90deg) translateX(-6em) translateY(4.3em); }
.bishop .rectangle.b.prim .lt { transform: rotateY(90deg) translateX(-6em) translateZ(2em) translateY(4.3em); }

.bishop .corners.a { transform: rotateZ( 0deg ); }
.bishop .corners.b { transform: rotateZ( 180deg ); }

.bishop .big-cube { margin: -3em 0 0 -3em; }
.bishop .big-cube .ft { width: 1.5em; }
.bishop .big-cube .lt { height: 1.5em; }
.bishop .big-cube .bk { width: 1.5em; }
.bishop .big-cube .rt { height: 1.5em; }

.bishop .tp { box-shadow: 0 0 0 #fff; }

/* ---------------------------------------------------------------------------------------------------- queen */

.queen .poly-group:first-child {
  width: 6em;
  height: 6em;
  margin: -3em 0 0 -3em;
}

.queen .top { transform: translateZ(8.5em); }

.queen .bottom .tp:before {
  content: '';
  position: absolute;
  left: 50%;
  top: 50%;
  width: 1em;
  height: 1em;
  margin: -.5em 0 0 -.5em;
  background: rgba(0,0,0,.6);
  border-radius: 50%;
  transform: rotateX( -35.3deg ) rotateY(0deg);
  box-shadow: 0 0 1em 2em rgba(0,0,0,.6);
}

.poly div.sphere {
  position: absolute;
  left: 50%;
  width: 5em;
  height: 5em;
  margin: -2.5em 0 0 -2.5em;
  border-radius: 50%;
  transform-origin: 2.5em 2.5em;
}

/* ---------------------------------------------------------------------------------------------------- king */

.king .poly-group:first-child {
  width: 6em;
  height: 6em;
  margin: -3em 0 0 -3em;
}

.king .top { transform: rotateZ(-45deg) translateZ(6em); }

.king .top .small-cube { margin: -2em 0 0 -2em; }

/* ---------------------------------------------------------------------------------------------------- pieces initial positions */

#p { transform: translateX( -1em ) translateY( 7em ); }
#r { transform: translateX( -1em ) translateY( 6em ); }
#n { transform: translateX( -1em ) translateY( 5em ); }
#b { transform: translateX( -1em ) translateY( 4em ); }
#q { transform: translateX( -1em ) translateY( 3em ); }
#k { transform: translateX( -1em ) translateY( 2em ); }

/* ------------------------------------------------------- UI elements */

h1 {
  margin-bottom: .5em;
  font-size: 1.75em;
  font-weight: 900;
  text-transform: uppercase;
}

h2 {
  margin-top: .75em;
  margin-bottom: .5em;
  font-size: 1em;
  font-weight: 900;
  text-transform: uppercase;
}

#menu, #top-bar {
  z-index: 100;
  font-size: 16px;
  text-align: center;
}

#menu {
  opacity: 0;
  position: absolute;
  left: 50%;
  width: 24em;
  height: 9em;
  margin: 0 0 0 -12em;
  transition-delay: 0;
  transition: all 1.5s ease-in-out;
  transform: translateY(-24em) translateZ(99999px);
}

#app[data-state="menu"] #menu {
  opacity: 1;
  transition-delay: 1.5s;
  transform: translateY(0em) translateZ(99999px);
}

#logoimg {
  margin: 3em 0 1em 0;
}

#logo {
  z-index: 100;
  position: absolute;
  left: 50%;
  top: 50%;
  width: 20em;
  height: 4em;
  margin-left: -10em;
  margin-top: -4em;
  font-size: 16px;
  transform: translateZ(9999px);
  perspective: 800;
  transition: top 1.5s ease-in-out;
}

#app[data-state="game"] #logo {
  transform: translateZ(9999px) translateY(-40em);
}

.symbol {
  position: relative;
  float: left;
  width: 4em;
  height: 4em;
  transition : transform 2s linear;
  transform-style : preserve-3d;
  transform-origin : 2em 2em;
  transition: all 1.5s ease-in-out;
  animation : fall 2s 1 ease-in-out;
}

.loading .symbol {
  top: 0;
  animation : rotateX 2s 1 ease-in-out;
}

.symbol:nth-child(1) { z-index: 1; animation-delay: 400ms; }
.symbol:nth-child(2) { z-index: 2; animation-delay: 500ms; }
.symbol:nth-child(3) { z-index: 3; animation-delay: 600ms; }
.symbol:nth-child(4) { z-index: 2; animation-delay: 700ms; }
.symbol:nth-child(5) { z-index: 1; animation-delay: 800ms; }

@keyframes rotateX {
  0%   { transform: rotateX(0deg); }
  100% { transform: rotateX(360deg); }
}

@keyframes fall {
  0%   { transform: rotateX(0deg) translateY(0em); opacity: 1; }
  100% { transform: rotateX(120deg) translateY(60em); opacity: 0; }
}

.symbol > div {
  position: absolute;
  width: 4em;
  height: 4em;
  transform-style: preserve-3d;
  background-color : white;
}

.symbol div:nth-child(1) { transform : translateZ(2em); }
.symbol div:nth-child(2) { transform : rotateY(90deg) translateZ(2em); background-color : #A0A0A0; }
.symbol div:nth-child(3) { transform : rotateY(180deg) translateZ(2em); background-color : #D0D0D0; }
.symbol div:nth-child(4) { transform : rotateY(-90deg) translateZ(2em); background-color : #A0A0A0; }
.symbol div:nth-child(5) { transform : rotateX(-90deg) translateZ(2em) rotate(180deg); background-color: #E0E0E0; }
.symbol div:nth-child(6) { transform : rotateX(90deg) translateZ(2em); background-color : #C0C0C0; }

.symbol > div:first-child {
  background-color: #101010;
  border: .25em solid white;
}

.symbol > div:first-child:before,
.symbol > div:first-child:after {
  content: "";
  position: absolute;
}

.symbol:nth-child(1) > div:first-child:before {
  top: .55em;
  left: .55em;
  width: 2.45em;
  height: 2.45em;
  transform: rotateZ(45deg);
  background-color: white;
}

.symbol:nth-child(2) > div:first-child:before {
  top: .05em;
  left: .05em;
  width: 2.5em;
  height: 2.5em;
  background-color: #101010;
  border-radius: 50%;
  border: .45em solid white;
}

.symbol:nth-child(3) > div:first-child {
  background-color: white;
  overflow: hidden;
}

.symbol:nth-child(3) > div:first-child:before,
.symbol:nth-child(3) > div:first-child:after {
  left: 1em;
  width: 1em;
  height: 6em;
  background-color: #101010;
}

.symbol:nth-child(3) > div:first-child:before {
  top: -1em;
  transform: rotateZ(45deg);
}

.symbol:nth-child(3) > div:first-child:after {
  top: -1.5em;
  -webkit-transform: rotateZ(-45deg);
}

.symbol:nth-child(4) > div:first-child:before {
  right: 0;
  bottom: 0;
  width: 1.75em;
  height: 1.75em;
  background-color: white;
}

#panes {
  width: 72em;
  transition: transform .75s ease-in-out;
}

.pane {
  opacity: 0;
  width: 24em;
  height: 8em;
  position: absolute;
  background-color: transparent;
  transition: opacity .45s ease-in-out!important;
}

.pane:nth-child(1) { transform: translateX(-80em); }
.pane:nth-child(2) { transform: translateX(0em); }
.pane:nth-child(3) { transform: translateX(80em); }

#app[data-menu="themes"] #panes { transform: translateX(80em); }
#app[data-menu="main"] #panes   { transform: translateX(0em); }
#app[data-menu="about"] #panes { transform: translateX(-80em); }

#app[data-menu="main"] #main,
#app[data-menu="themes"] #themes,
#app[data-menu="about"] #about {
  opacity: 1;
}

#top-bar {
  opacity: 0;
  position: relative;
  width: 100%;
  max-width: 46em;
  height: 2em;
  margin: 0 auto;
  transform: translateY(-3em);
  transition: all 1.5s ease-in-out;
  transition-delay: 0s;
}

#app[data-state="game"] #top-bar {
  opacity: 1;
  transform: translateY(1em);
  transition-delay: 1s;
}

.btn {
  display: inline-block;
  height: 2em;
  border: none;
  color: white;
  font-size: 1em;
  line-height: 1.75em;
  text-align: center;
  vertical-align: middle;
  text-decoration: none;
  text-transform: uppercase;
  background-color: #303030;
  transform: translateZ(1em);
  transition: background-color .1s ease-out!important;
}

.btn.white {
  color: black;
  background-color: white;
}

.btn:hover,
.btn:active { background-color: #5A5A5A; cursor: pointer; }

.btn.white:hover,
.btn.white:active { background-color: #CACACA; }

#menu .btn {
  width: 6em;
  margin: 1em 0em;
}

#top-bar .btn {
  width: 4em;
  height: 3em;
  padding: 0;
  background-color: rgba(255,255,255,.01);
}

#undo { float: left; }
#open-menu { float: right; }
#undo:before  { background-position: 0 0; }
#open-menu:before  { background-position: -20px 0; }

#undo[data-state="inactive"] { display: none; }

#log {
  position: absolute;
  left: 50%;
  width: 24em;
  height: 3em;
  margin-left: -12em;
  color: #808080;
  text-align: center;
  line-height: 3em;
}

.btn.icon { background-color: rgba(255, 255, 255, 0); }

.btn.icon:before {
  content: "";
  width: 20px;
  height: 16px;
  display: inline-block;
  background-image: url("https://raw.github.com/juliangarnier/3D-Hartwig-chess-set/master/img/icons.png");
  background-repeat: no-repeat;
  background-size: 40px 16px;
}

#themes .btn { width: 8em; }

#menu .switch {
  line-height: 2em;
  margin-right: 1em;
  transition: none!important;
}

#menu .switch:hover {
  background-color: #CACACA;
}

input[type=checkbox] {
  display:none;
}

input[type=checkbox] + label:after {
  content: "off";
  float: right;
  display: block;
  width: 3em;
  height: 2em;
  background-color: #999;
  line-height: 2em;
  text-align: center;
  color: #FFF;
  transition: none!important;
}

input[type=checkbox]:checked + label:after {
  content: "on";
  background-color: #333;
  color: #FFF;
}

input[type=checkbox]:hover + label:after {
  color: #FFF;
  background-color: #666;
}

#themes-box {
  width: 19em;
  height: 3.5em;
  margin: 0 2.6em;
}

.set-theme {
  float: left;
  width: 3.375em;
  height: 3.375em;
  position: relative;
  margin: 0 .65em;
}

.set-theme:hover { cursor: pointer; background: rgba(255,255,255,.3); }
.set-theme:hover .cube,
.set-theme:active .cube { transform: rotateX(146deg) rotateY(45deg) translateY(0.1em) translateX(3em); }
#app[data-theme="classic"] .set-theme[data-theme="classic"],
#app[data-theme="marble"] .set-theme[data-theme="marble"],
#app[data-theme="flat"] .set-theme[data-theme="flat"],
#app[data-theme="wireframe"] .set-theme[data-theme="wireframe"] {
  background: rgba(255,255,255,1);
}

.cube,
.cube:before,
.cube:after {
  content: "";
  width: 2em;
  height: 2em;
  background-color: #A0A0A0;
  background-size: 235%;
  transition: transform .1s ease-in-out!important;
  box-sizing: border-box;
}

.cube {
  position: relative;
  margin-left: -2.15em;
  box-shadow: inset 0 0 0 3em rgba(0,0,0,.2);
  transform: rotateX(156deg) rotateY(45deg) translateY(-.15em) translateX(3em);
  transform-style: preserve-3d;
}

.cube:before {
  position: absolute;
  left: 0;
  top: 2em;
  transform: rotateX(90deg);
  transform-origin: 0 0;
}

.cube:after {
  position: absolute;
  left: 0;
  bottom: 0;
  box-shadow: inset 0 0 0 3em rgba(0,0,0,.5);
  transform: rotateY(90deg);
  transform-origin: 100% 0;
}

#overlay {
  z-index: 2;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: black;
  opacity: 0;
  transition: opacity 1.5s ease-in-out!important;
  transform: translateZ(9999px);
}

.loading #overlay {
  opacity: 1;
  background-image: url(https://raw.github.com/juliangarnier/3D-Hartwig-chess-set/master/img/ajax-loader.gif);
  background-position: 50% 60%;
  background-repeat: no-repeat;
}

#app[data-menu="about"] #overlay {
  z-index: 99;
  opacity: .75;
}

#app[data-state="game"] #overlay {
  width: 0%;
  height: 0%;
}

#about p { line-height: 1.5em; }

/* ---------------------------------------------------------------------------------------------------- borders textures */

thead th:first-child  { background-position: left top; background-size: 332% auto; }
thead th              { background-position: center top; background-size: 250% auto; }
thead th:last-child   { background-position: right top; background-size: 332% auto; }
tbody th:first-child  { background-position: left center; background-size: auto 250%; }
tbody th:last-child   { background-position: right center; background-size: auto 250%; }
tfoot th:first-child  { background-position: left bottom; background-size: 332% auto; }
tfoot th              { background-position: center bottom; background-size: 250% auto; }
tfoot th:last-child   { background-position: right bottom; background-size: 332% auto; }

.square, .sphere, #board:after, #frame:after, #frame:before { background-size: 100% 100%; }

/* ---------------------------------------------------------------------------------------------------- classic */

#app[data-theme="classic"]                                            { background-color: #E5E3DF; color: #303132; }
#app[data-theme="classic"] a                                          { color: #404040; }
#app[data-theme="classic"] #overlay                                   { background-color: #E5E3DF; }
#app[data-theme="classic"] #scene                                     { background: radial-gradient(center, ellipse cover, #FFF 25%, #E5E3DF 72%); }
#app[data-theme="classic"][data-frame="off"] #frame,
#app[data-theme="classic"][data-frame="off"] #board:after,
#app[data-theme="classic"][data-frame="off"] #frame:after,
#app[data-theme="classic"][data-frame="off"] #frame:before            { background-color: #A28157; }
#app[data-theme="classic"][data-frame="on"]  #frame,
#app[data-theme="classic"][data-frame="on"]  #board:after,
#app[data-theme="classic"][data-frame="on"]  #frame:after,
#app[data-theme="classic"][data-frame="on"]  #frame:before            { background-color: #303132; }
#app[data-theme="classic"] .square                                    { background-color: #212121; }
#app[data-theme="classic"] tbody tr:nth-child(odd)
                           .square:nth-child(even),
#app[data-theme="classic"] tbody tr:nth-child(even)
                          .square:nth-child(odd)                      { background-color: #CF9269; }
#app[data-theme="classic"] .black .poly > div,
#app[data-theme="classic"] .black .poly .sphere                       { background-color: #303030; }
#app[data-theme="classic"] .white .poly > div,
#app[data-theme="classic"] .white .poly .sphere                       { background-color: #C19666; }
#app[data-theme="classic"] .white.bishop .rectangle.a .tp:before,
#app[data-theme="classic"] .white.bishop .rectangle.b .tp:before      { border-bottom: 1.1em solid #F2BD7D; }
#app[data-theme="classic"] .white.bishop .rectangle.a .tp:after,
#app[data-theme="classic"] .white.bishop .rectangle.b.prim .tp:after  { border-top: 1.1em solid #F2BD7D; }
#app[data-theme="classic"] .black.bishop .rectangle.a .tp:before,
#app[data-theme="classic"] .black.bishop .rectangle.b .tp:before      { border-bottom: 1.1em solid #434343; }
#app[data-theme="classic"] .black.bishop .rectangle.a .tp:after,
#app[data-theme="classic"] .black.bishop .rectangle.b.prim .tp:after  { border-top: 1.1em solid #434343; }

/* ---------------------------------------------------------------------------------------------------- classic textures */

#app[data-theme="classic"] th                       { background-image: url(https://raw.github.com/juliangarnier/3D-Hartwig-chess-set/master/img/classic-frame.png); }
#app[data-theme="classic"][data-frame="off"] #board:after,
#app[data-theme="classic"][data-frame="off"] #frame:after,
#app[data-theme="classic"][data-frame="off"] #frame:before
                                                    { background-image: url(https://raw.github.com/juliangarnier/3D-Hartwig-chess-set/master/img/classic-frame-border-off.png); }
#app[data-theme="classic"][data-frame="on"] #board:after,
#app[data-theme="classic"][data-frame="on"] #frame:after,
#app[data-theme="classic"][data-frame="on"] #frame:before
                                                    { background-image: url(https://raw.github.com/juliangarnier/3D-Hartwig-chess-set/master/img/classic-frame-border.png); }
#app[data-theme="classic"] .square                  { background-image: url(https://raw.github.com/juliangarnier/3D-Hartwig-chess-set/master/img/classic-square-black.png) }
#app[data-theme="classic"] .white .poly > div,
.set-theme[data-theme="classic"] .cube,
.set-theme[data-theme="classic"] .cube:before,
.set-theme[data-theme="classic"] .cube:after        { background-image: url(https://raw.github.com/juliangarnier/3D-Hartwig-chess-set/master/img/classic-piece-white.png); }
#app[data-theme="classic"] .black .poly > div       { background-image: url(https://raw.github.com/juliangarnier/3D-Hartwig-chess-set/master/img/classic-piece-black.png); }
#app[data-theme="classic"] .white .poly .sphere     { background-image: url(https://raw.github.com/juliangarnier/3D-Hartwig-chess-set/master/img/classic-sphere-white.png); }
#app[data-theme="classic"] .black .poly .sphere     { background-image: url(https://raw.github.com/juliangarnier/3D-Hartwig-chess-set/master/img/classic-sphere-black.png); }

#app[data-theme="classic"] tbody tr:nth-child(odd)
                           .square:nth-child(even),
#app[data-theme="classic"] tbody tr:nth-child(even)
                           .square:nth-child(odd)   { background-image: url(https://raw.github.com/juliangarnier/3D-Hartwig-chess-set/master/img/classic-square-white.png); }

/* ---------------------------------------------------------------------------------------------------- marble */

#app[data-theme="marble"] th                                          { background-color: #303030; }
#app[data-theme="marble"][data-frame="off"] #frame,
#app[data-theme="marble"][data-frame="off"] #board:after,
#app[data-theme="marble"][data-frame="off"] #frame:after,
#app[data-theme="marble"][data-frame="off"] #frame:before             { background-color: #B0B0B0; }
#app[data-theme="marble"][data-frame="on"]  #frame,
#app[data-theme="marble"][data-frame="on"]  #board:after,
#app[data-theme="marble"][data-frame="on"]  #frame:after,
#app[data-theme="marble"][data-frame="on"]  #frame:before             { background-color: #202020; }
#app[data-theme="marble"] .square                                     { background-color: #404040; }
#app[data-theme="marble"] tbody tr:nth-child(odd)
                           .square:nth-child(even),
#app[data-theme="marble"] tbody tr:nth-child(even)
                          .square:nth-child(odd)                      { background-color: #FFF; }
#app[data-theme="marble"] .black .poly > div,
#app[data-theme="marble"] .black .poly .sphere                        { background-color: #404040; }
#app[data-theme="marble"] .white .poly > div,
#app[data-theme="marble"] .white .poly .sphere                        { background-color: #FFF; }
#app[data-theme="marble"] .white.bishop .rectangle.a .tp:before,
#app[data-theme="marble"] .white.bishop .rectangle.b .tp:before       { border-bottom: 1.1em solid #EAE5E0; }
#app[data-theme="marble"] .white.bishop .rectangle.a .tp:after,
#app[data-theme="marble"] .white.bishop .rectangle.b.prim .tp:after   { border-top: 1.1em solid #EAE5E0; }
#app[data-theme="marble"] .black.bishop .rectangle.a .tp:before,
#app[data-theme="marble"] .black.bishop .rectangle.b .tp:before       { border-bottom: 1.1em solid #565453; }
#app[data-theme="marble"] .black.bishop .rectangle.a .tp:after,
#app[data-theme="marble"] .black.bishop .rectangle.b.prim .tp:after   { border-top: 1.1em solid #565453; }

/* ---------------------------------------------------------------------------------------------------- marble textures */

#app[data-theme="marble"] #scene                    { background: url(https://raw.github.com/juliangarnier/3D-Hartwig-chess-set/master/img/back.jpg) no-repeat center center black; background-size: cover;}
#app[data-theme="marble"] th                        { background-image: url(https://raw.github.com/juliangarnier/3D-Hartwig-chess-set/master/img/marble-frame.png); }
#app[data-theme="marble"][data-frame="off"] #board:after,
#app[data-theme="marble"][data-frame="off"] #frame:after,
#app[data-theme="marble"][data-frame="off"] #frame:before
                                                    { background-image: url(https://raw.github.com/juliangarnier/3D-Hartwig-chess-set/master/img/marble-frame-border-off.png); }
#app[data-theme="marble"][data-frame="on"] #board:after,
#app[data-theme="marble"][data-frame="on"] #frame:after,
#app[data-theme="marble"][data-frame="on"] #frame:before
                                                    { background-image: url(https://raw.github.com/juliangarnier/3D-Hartwig-chess-set/master/img/marble-frame-border.png); }
#app[data-theme="marble"] .square                   { background-image: url(https://raw.github.com/juliangarnier/3D-Hartwig-chess-set/master/img/marble-square-black.png) }
#app[data-theme="marble"] .white .poly > div,
.set-theme[data-theme="marble"] .cube,
.set-theme[data-theme="marble"] .cube:before,
.set-theme[data-theme="marble"] .cube:after         { background-image: url(https://raw.github.com/juliangarnier/3D-Hartwig-chess-set/master/img/marble-piece-white.png); }
#app[data-theme="marble"] .black .poly > div        { background-image: url(https://raw.github.com/juliangarnier/3D-Hartwig-chess-set/master/img/marble-piece-black.png); }
#app[data-theme="marble"] .white .poly .sphere      { background-image: url(https://raw.github.com/juliangarnier/3D-Hartwig-chess-set/master/img/marble-sphere-white.png); }
#app[data-theme="marble"] .black .poly .sphere      { background-image: url(https://raw.github.com/juliangarnier/3D-Hartwig-chess-set/master/img/marble-sphere-black.png); }
#app[data-theme="marble"] tbody tr:nth-child(odd)
                        .square:nth-child(even),
#app[data-theme="marble"] tbody tr:nth-child(even)
                        .square:nth-child(odd)      { background-image: url(https://raw.github.com/juliangarnier/3D-Hartwig-chess-set/master/img/marble-square-white.png); }

/* ---------------------------------------------------------------------------------------------------- flat */

#app[data-theme="flat"]                             { background-color: #E5E3DF; color: #303132; }
#app[data-theme="flat"] a                           { color: #404040; }
#app[data-theme="flat"] #overlay                    { background-color: #E5E3DF; }
#app[data-theme="flat"] #scene                      { background: radial-gradient(center, ellipse cover, #FFF 25%, #E5E3DF 72%); }
#app[data-theme="flat"] #frame,
#app[data-theme="flat"] #board:after,
#app[data-theme="flat"] #frame:after,
#app[data-theme="flat"] #frame:before               { background-color: #B7B7B4; }
#app[data-theme="flat"] .square                     { background-color: #C6C5C3; }
#app[data-theme="flat"] tbody tr:nth-child(odd) .square:nth-child(even),
#app[data-theme="flat"] tbody tr:nth-child(even) .square:nth-child(odd) { background-color: #E0DFDD; }
#app[data-theme="flat"] table span                  { color: #525150; }
#app[data-theme="flat"] th                          { background-color: #E0DFDD; }
#app[data-theme="flat"] .white .poly > div,
.set-theme[data-theme="flat"] .cube,
.set-theme[data-theme="flat"] .cube:before,
.set-theme[data-theme="flat"] .cube:after           { background-color: #00A2FF; }
#app[data-theme="flat"] .black .poly > div          { background-color: #FF432F; }
#app[data-theme="flat"] .white .poly .sphere        { background: -webkit-radial-gradient(center, ellipse cover, rgba(0,162,255,1) 30%,rgba(0,89,141,1) 100%) 0em -1em; }
#app[data-theme="flat"] .black .poly .sphere        { background: -webkit-radial-gradient(center, ellipse cover, rgba(255,67,47,1) 30%,rgba(141,36,25,1) 100%) 0em -1em; }
#app[data-theme="flat"] .white.bishop .rectangle.a .tp:before,
#app[data-theme="flat"] .white.bishop .rectangle.b .tp:before         { border-bottom: 1.1em solid #00A2FF; }
#app[data-theme="flat"] .white.bishop .rectangle.a .tp:after,
#app[data-theme="flat"] .white.bishop .rectangle.b.prim .tp:after     { border-top: 1.1em solid #00A2FF; }
#app[data-theme="flat"] .black.bishop .rectangle.a .tp:before,
#app[data-theme="flat"] .black.bishop .rectangle.b .tp:before         { border-bottom: 1.1em solid #FF432F; }
#app[data-theme="flat"] .black.bishop .rectangle.a .tp:after,
#app[data-theme="flat"] .black.bishop .rectangle.b.prim .tp:after     { border-top: 1.1em solid #FF432F; }

/* ---------------------------------------------------------------------------------------------------- wireframe */

#app[data-theme="wireframe"] #scene                 { background: radial-gradient(center, ellipse cover, #1D414D 0%,#000000 70%); }
#app[data-theme="wireframe"] th                     { background-color: rgba(17,41,48,.6) }
#app[data-theme="wireframe"] #frame                 { background-color: #001B20; }
#app[data-theme="wireframe"] #board:after,
#app[data-theme="wireframe"] #frame:after,
#app[data-theme="wireframe"] #frame:before          { background-color: #011E24; border: 1px solid #007385; opacity: .4 }
#app[data-theme="wireframe"] .square                { background-color: rgba(17,41,48,.0); }
#app[data-theme="wireframe"] tbody tr:nth-child(odd) .square:nth-child(even),
#app[data-theme="wireframe"] tbody tr:nth-child(even) .square:nth-child(odd) { background-color: rgba(17,41,48,.6); }
#app[data-theme="wireframe"] .white .poly > div     { background-color: #022A36; border: 1px solid #35C2D3;
                                                     box-shadow: inset 0 0 4em -1em #35C2D3; opacity: .5; }
.set-theme[data-theme="wireframe"] .cube,
.set-theme[data-theme="wireframe"] .cube:before,
.set-theme[data-theme="wireframe"] .cube:after      { background-color: #022A36; border: 0px solid #35C2D3;
                                                      box-shadow: inset 0 0 .5em .2em #35C2D3; opacity: .8; }
#app[data-theme="wireframe"] .black .poly > div     { background-color: #022A36; border: 1px solid #FFDD1D;
                                                      box-shadow: inset 0 0 4em -1em #FFDD1D; opacity: .5; }
#app[data-theme="wireframe"] .white .poly .lt,
#app[data-theme="wireframe"] .white .poly .rt       { border-right: 3px solid #35C2D3; }
#app[data-theme="wireframe"] .white .poly .bk,
#app[data-theme="wireframe"] .white .poly .ft       { border-top: 3px solid #35C2D3; }
#app[data-theme="wireframe"] .black .poly .lt,
#app[data-theme="wireframe"] .black .poly .rt       { border-right: 3px solid #FFDD1D; }
#app[data-theme="wireframe"] .black .poly .bk,
#app[data-theme="wireframe"] .black .poly .ft       { border-top: 3px solid #FFDD1D; }
#app[data-theme="wireframe"] .black .poly .sphere   { background-color: #1D414B; }
#app[data-theme="wireframe"] .white .poly .sphere   { background-color: #1D414B; }

#app[data-theme="wireframe"] .white.bishop .rectangle.a .tp:before,
#app[data-theme="wireframe"] .white.bishop .rectangle.b .tp:before       { border-bottom: 1.1em solid rgba(53,194,211,.4); top: -1em; left: -.18em;}
#app[data-theme="wireframe"] .white.bishop .rectangle.a .tp:after,
#app[data-theme="wireframe"] .white.bishop .rectangle.b.prim .tp:after   { border-top: 1.1em solid rgba(53,194,211,.4); bottom: -1em; right: -.18em;}
#app[data-theme="wireframe"] .black.bishop .rectangle.a .tp:before,
#app[data-theme="wireframe"] .black.bishop .rectangle.b .tp:before       { border-bottom: 1.1em solid rgba(255,221,29,.4); top: -1em; left: -.18em;}
#app[data-theme="wireframe"] .black.bishop .rectangle.a .tp:after,
#app[data-theme="wireframe"] .black.bishop .rectangle.b.prim .tp:after   { border-top: 1.1em solid rgba(255,221,29,.4); bottom: -1em; right: -.18em;}

/* ------------------------------------------------------- Responsive board */

@media screen and (min-width: 48em), screen and (min-height: 48em) {
  #app[data-frame="off"] { font-size: 80px; }
  #app[data-frame="on"] { font-size: 70px; }
}
@media screen and (max-width: 48em), screen and (max-height: 48em) {
  #app[data-frame="off"] { font-size: 70px; }
  #app[data-frame="on"] { font-size: 60px; }
  #top-bar { margin-top: -.75em; }
}
@media screen and (max-width: 42em), screen and (max-height: 42em) {
  #app[data-frame="off"] { font-size: 60px; }
  #app[data-frame="on"] { font-size: 50px; }
  #container { top: 55%; }
}
@media screen and (max-width: 34em), screen and (max-height: 34em) {
  #app[data-frame="off"] { font-size: 50px; }
  #app[data-frame="on"] { font-size: 40px; }
}
@media screen and (max-width: 26em), screen and (max-height: 26em) {
  #app[data-frame="off"] { font-size: 40px; }
  #app[data-frame="on"] { font-size: 30px; }
}
@media screen and (max-width: 20em), screen and (max-height: 20em) {
  #app[data-frame="off"] { font-size: 35px; }
}
@media screen and (max-height: 36em) {
  #logoimg { margin: 1em 0 1em 0; }
}
@media screen and (max-height: 32em) {
  #app[data-state="menu"] #overlay {
    z-index: 99;
    opacity: .85;
  }
  #about h1 { font-size: 1em; }
  #about h2 { font-size: .85em; }
  #about p { font-size: .75em; }
}
@media screen and (max-width: 24em), screen and (max-height : 24em) {
  h1 { font-size: 1.5em; }
  h2 { font-size: 1em; }
  #logoimg { margin: 2em 0 1em 0; }
  #logo { font-size: 12px }
  .loading #overlay { background-position: 50% 80%; }
}
  </style>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>

  <div id="app" class="loading" data-theme="classic" data-frame="off" data-menu="main">
      <div id="logo">
        <div class="symbol"><div></div><div></div><div></div><div></div><div></div><div></div></div>
        <div class="symbol"><div></div><div></div><div></div><div></div><div></div><div></div></div>
        <div class="symbol"><div></div><div></div><div></div><div></div><div></div><div></div></div>
        <div class="symbol"><div></div><div></div><div></div><div></div><div></div><div></div></div>
        <div class="symbol"><div></div><div></div><div></div><div></div><div></div><div></div></div>
      </div>
      <div id="overlay"></div>
      <div id="menu" class="main">
        <img id ="logoimg" src="https://raw.github.com/juliangarnier/3D-Hartwig-chess-set/master/img/logo.png" alt="hartwig chess set" />
        <section id="panes">
          <section id="themes" class="pane">
            <div id="themes-box">
              <div class="set-theme" data-theme="classic"><div class="cube"></div></div>
              <div class="set-theme" data-theme="marble"><div class="cube"></div></div>
              <div class="set-theme" data-theme="flat"><div class="cube"></div></div>
              <div class="set-theme" data-theme="wireframe"><div class="cube"></div></div>
            </div>
            <input type="checkbox" id="frame-switch" onchange="toggleFrame(this)"/>
            <label for="frame-switch" class="btn white switch">Border</label>
            <button type="button" class="btn menu-nav" data-menu="main">Back</button>
          </section>
          <section id="main" class="pane">
            <h1>3D Hartwig chess set</h1>
            <p>done in HTML/CSS/JS by <a href="https://twitter.com/juliangarnier" target="_blank">@JulianGarnier</a></p>
            <button type="button" class="btn white menu-nav" data-menu="themes">Themes
            <button type="button" id="continue" class="btn">Play
            <button type="button" class="btn white menu-nav" data-menu="about">About
          </section>
          <section id="about" class="pane">
            <h1>About</h1>
            <p>Design and code by <a href="https://twitter.com/juliangarnier" target="_blank">@JulianGarnier</a></p>
            <p>Works only in webkit.</p>
            <p>Licensed under the MIT license.</p>
            <p>Fork me on <a href="https://github.com/juliangarnier/3D-Hartwig-chess-set" target="_blanc">Github<a></p>
            <h2>Libraries</h2>
            <p>Lighting effect : <a href="http://photon.attasi.com" target="_blank">Photon</a><br>
              Moves and validation : <a href="https://github.com/jhlywa/chess.js" target="_blank">Chess.js</a></p>
            <button type="button" class="btn menu-nav" data-menu="main">Back</button>
          </section>
        </div>
      <div id="top-bar">
        <button type="button" class="btn icon" data-state="inactive" id="undo"></button>
        <p id="log"></p>
        <button type="button" class="btn icon" id="open-menu"></button>
      </div>
      <div id="container">
        <div id="scene">
          <div id="table">
          <div id="b-jail" class="jail"></div>
          <div id="frame"></div>
        <table id="board">
          <thead>
            <tr>
              <th></th>
              <th><span>a</span></th>
              <th><span>b</span></th>
              <th><span>c</span></th>
              <th><span>d</span></th>
              <th><span>e</span></th>
              <th><span>f</span></th>
              <th><span>g</span></th>
              <th><span>h</span></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th><span>8</span></th>
              <td id="a8" class="square"></td>
              <td id="b8" class="square"></td>
              <td id="c8" class="square"></td>
              <td id="d8" class="square"></td>
              <td id="e8" class="square"></td>
              <td id="f8" class="square"></td>
              <td id="g8" class="square"></td>
              <td id="h8" class="square"></td>
              <th><span>8</span></th>
            </tr>
            <tr>
              <th><span>7</span></th>
              <td id="a7" class="square"></td>
              <td id="b7" class="square"></td>
              <td id="c7" class="square"></td>
              <td id="d7" class="square"></td>
              <td id="e7" class="square"></td>
              <td id="f7" class="square"></td>
              <td id="g7" class="square"></td>
              <td id="h7" class="square"></td>
              <th><span>7</span></th>
            </tr>
            <tr>
              <th><span>6</span></th>
              <td id="a6" class="square"></td>
              <td id="b6" class="square"></td>
              <td id="c6" class="square"></td>
              <td id="d6" class="square"></td>
              <td id="e6" class="square"></td>
              <td id="f6" class="square"></td>
              <td id="g6" class="square"></td>
              <td id="h6" class="square"></td>
              <th><span>6</span></th>
            </tr>
            <tr>
              <th><span>5</span></th>
              <td id="a5" class="square"></td>
              <td id="b5" class="square"></td>
              <td id="c5" class="square"></td>
              <td id="d5" class="square"></td>
              <td id="e5" class="square"></td>
              <td id="f5" class="square"></td>
              <td id="g5" class="square"></td>
              <td id="h5" class="square"></td>
              <th><span>5</span></th>
            </tr>
            <tr>
              <th><span>4</span></th>
              <td id="a4" class="square"></td>
              <td id="b4" class="square"></td>
              <td id="c4" class="square"></td>
              <td id="d4" class="square"></td>
              <td id="e4" class="square"></td>
              <td id="f4" class="square"></td>
              <td id="g4" class="square"></td>
              <td id="h4" class="square"></td>
              <th><span>4</span></th>
            </tr>
            <tr>
              <th><span>3</span></th>
              <td id="a3" class="square"></td>
              <td id="b3" class="square"></td>
              <td id="c3" class="square"></td>
              <td id="d3" class="square"></td>
              <td id="e3" class="square"></td>
              <td id="f3" class="square"></td>
              <td id="g3" class="square"></td>
              <td id="h3" class="square"></td>
              <th><span>3</span></th>
            </tr>
            <tr>
              <th><span>2</span></th>
              <td id="a2" class="square"></td>
              <td id="b2" class="square"></td>
              <td id="c2" class="square"></td>
              <td id="d2" class="square"></td>
              <td id="e2" class="square"></td>
              <td id="f2" class="square"></td>
              <td id="g2" class="square"></td>
              <td id="h2" class="square"></td>
              <th><span>2</span></th>
            </tr>
            <tr>
              <th><span>1</span></th>
              <td id="a1" class="square"></td>
              <td id="b1" class="square"></td>
              <td id="c1" class="square"></td>
              <td id="d1" class="square"></td>
              <td id="e1" class="square"></td>
              <td id="f1" class="square"></td>
              <td id="g1" class="square"></td>
              <td id="h1" class="square"></td>
              <th><span>1</span></th>
            </div>
          </tbody>
          <tfoot>
            <tr>
              <th></th>
              <th><span>a</span></th>
              <th><span>b</span></th>
              <th><span>c</span></th>
              <th><span>d</span></th>
              <th><span>e</span></th>
              <th><span>f</span></th>
              <th><span>g</span></th>
              <th><span>h</span></th>
              <th></th>
            </tr>
          </tfoot>
        </table>
          <div id="w-jail" class="jail"></div>
        </div>
        <div id="pieces">
          <div id="p" class="piece pawn">
            <div class="poly-group">
              <div class="poly small-cube">
                <div class="ft face"></div>
                <div class="bk face"></div>
                <div class="rt face"></div>
                <div class="lt face"></div>
                <div class="tp face"></div>
              </div>
            </div>
          </div>
          <div id="r" class="piece rook">
            <div class="poly-group">
              <div class="poly big-cube">
                <div class="ft face"></div>
                <div class="bk face"></div>
                <div class="rt face"></div>
                <div class="lt face"></div>
                <div class="tp face"></div>
              </div>
            </div>
          </div>
          <div id="n" class="piece knight">
            <div class="poly-group bottom">
              <div class="poly a">
                <div class="bk face"></div>
                <div class="rt face"></div>
                <div class="lt face"></div>
              </div>
              <div class="poly b">
                <div class="ft face"></div>
                <div class="tp face"></div>
              </div>
              <div class="poly c">
                <div class="bk face"></div>
                <div class="rt face"></div>
                <div class="lt face"></div>
              </div>
            </div>
            <div class="poly-group top">
              <div class="poly a">
                <div class="bk face"></div>
                <div class="rt face"></div>
                <div class="lt face"></div>
                <div class="tp face"></div>
              </div>
              <div class="poly b">
                <div class="ft face"></div>
                <div class="tp face"></div>
              </div>
              <div class="poly c">
                <div class="bk face"></div>
                <div class="rt face"></div>
                <div class="lt face"></div>
              </div>
            </div>
          </div>
          <div id="b" class="piece bishop">
            <div class="poly-group rectangle a">
              <div class="poly">
                <div class="rt face"></div>
                <div class="lt face"></div>
                <div class="tp face"></div>
              </div>
            </div>
            <div class="poly-group rectangle b">
              <div class="poly">
                <div class="rt face"></div>
                <div class="lt face"></div>
                <div class="tp face"></div>
              </div>
            </div>
            <div class="poly-group rectangle b prim">
              <div class="poly">
                <div class="rt face"></div>
                <div class="lt face"></div>
                <div class="tp face"></div>
              </div>
            </div>
            <div class="poly-group corners a">
              <div class="poly big-cube">
                <div class="ft face"></div>
                <div class="bk face"></div>
                <div class="rt face"></div>
                <div class="lt face"></div>
              </div>
            </div>
            <div class="poly-group corners b">
              <div class="poly big-cube">
                <div class="ft face"></div>
                <div class="bk face"></div>
                <div class="rt face"></div>
                <div class="lt face"></div>
              </div>
            </div>
          </div>
          <div id="q" class="piece queen">
            <div class="poly-group bottom">
              <div class="poly big-cube">
                <div class="ft face"></div>
                <div class="bk face"></div>
                <div class="rt face"></div>
                <div class="lt face"></div>
                <div class="tp face"></div>
              </div>
            </div>
            <div class="poly-group top">
              <div class="poly">
                <div class="sphere"></div>
              </div>
            </div>
          </div>
          <div id="k" class="piece king">
            <div class="poly-group bottom">
              <div class="poly big-cube">
                <div class="ft face"></div>
                <div class="bk face"></div>
                <div class="rt face"></div>
                <div class="lt face"></div>
                <div class="tp face"></div>
              </div>
            </div>
            <div class="poly-group top">
              <div class="poly small-cube">
                <div class="ft face"></div>
                <div class="bk face"></div>
                <div class="rt face"></div>
                <div class="lt face"></div>
                <div class="tp face"></div>
              </div>
            </div>
          </div>
          </div>
        </div>
        <div id="promotion"></div>
      </div>
    </div>

  <script src='https://s.cdpn.io/1137/hartwig.libs.js'></script>
  <script src='https://s.cdpn.io/1137/hartwig.app.js'></script>
  <script  src="js/index.js"></script>

</body>
</html>
