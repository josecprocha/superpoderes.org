<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/melissacabral/pen/KNGmbJ.

 Work in progress
In this version I incorporated levels -  Check out the infinite version in my public pens

Sadly, this only works on desktop for now.

TODO:
* convert all sounds to mp3
*css tweaks/ test on many screens

Changelog:
* Next level only unlocks if you earn at least one star
 * improved reporting of  "zero stars"
* Added the ability to drag tiles around in the scramble area to help figure out the puzzle before committing to a move
* Added sound and mute button
* Added better drag & drop interaction
* Added helper function to show/hide screens more easily
* Added ability to unlock levels
* Added ability to switch levels
* Added levels screen with external data
* Improved math for accuracy of color chips
* Added 4-color gradient to the feedback screen, just for zazz
* Added easter-egg animations to start screen
* Added start screen
* Added "difficulty" with locked corner keys
-->

<!--
Copyright (c) 2019 by Melissa Cabral (https://codepen.io/melissacabral/pen/KNGmbJ)


Fork of an original work by Melissa Cabral (https://codepen.io/melissacabral/pen/WopKYE)



Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

{{--
Scripts found only externaly:
https://fonts.googleapis.com/css?family=Fredoka+One|Roboto
https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js
--}}

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>JQuery Chroma Game with levels</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'> --}}
  <link rel="stylesheet" href="{!! asset('css/font-awesome.min.css') !!}" />
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Fredoka+One|Roboto'>
  <style>

/* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
  outline: none;
}

body {
  background: #252525;
  font-family: Roboto, Calibri, sans-serif;
  color: white;
  text-align: center;
}

.title {
  text-shadow: 2px 2px 0 rgba(0, 0, 0, 0.4);
  font-family: "Fredoka One", Calibri, sans-serif;
  text-transform: uppercase;
  font-weight: normal;
  color: white;
  margin: 1em;
}

#start-screen {
  box-sizing: border-box;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  display: none;
  padding: 3em;
  height: 100%;
  font-size: 150%;
  z-index: 99999;
  box-sizing: border-box;
  padding: 1rem;
}
#start-screen p {
  max-width: 500px;
  margin: 1em auto;
}
#start-screen .title {
  color: orchid;
  font-size: 3em;
}
#start-screen .title span {
  color: white;
}
#start-screen .fake-color-chip {
  box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.4);
  border-radius: 10px;
  position: relative;
  top: 70px;
  left: -100px;
  opacity: 0;
  width: 60px;
  height: 60px;
  display: inline-block;
}
#start-screen button {
  border-radius: 10px;
  box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.4);
  background: orchid;
  font-size: inherit;
  font-family: "Fredoka One", Calibri, sans-serif;
  text-transform: uppercase;
  border: none;
  padding: .5em;
  transition: background .3s linear;
  color: white;
  text-shadow: 0 -2px 0 rgba(0, 0, 0, 0.5);
}

#levels-screen {
  box-sizing: border-box;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  display: none;
  padding: 3em;
}
#levels-screen .levels-list {
  margin: 5rem auto 0;
  width: 320px;
}
#levels-screen h1 {
  text-align: center;
}
#levels-screen li {
  border-radius: 10px;
  box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.4);
  width: 60px;
  height: 60px;
  font-family: "Fredoka One", Calibri, sans-serif;
  float: left;
  margin: 10px;
  line-height: 60px;
  text-align: center;
  font-weight: bold;
  font-size: 1.3em;
  text-shadow: 0 2px 0 rgba(0, 0, 0, 0.3);
}
#levels-screen li.locked-level {
  background-color: gray;
}
#levels-screen li.unlocked-level {
  cursor: pointer;
}
#levels-screen li.complete {
  font-size: 1.1em;
  line-height: 1.5;
  padding-top: 4px;
}

#game-screen {
  display: none;
}
#game-screen .hints {
  margin: 5rem auto 0;
  width: 320px;
}
#game-screen .hints p {
  font-size: 1.2em;
}

.lights-on {
  background: #eeeeee;
  color: black;
}
.lights-on .title {
  color: #666;
  text-shadow: none;
}

h2 {
  margin: 2em 0 0;
}

#color-container {
  position: relative;
  margin: 1em auto;
}
#color-container > div {
  position: absolute;
  width: auto;
  top: 0;
  left: 0;
}
#color-container > div#left, #color-container > div#right {
  width: 50px;
  height: auto;
}
#color-container > div#left .color-chip,
#color-container > div#left .target-chip, #color-container > div#right .color-chip,
#color-container > div#right .target-chip {
  display: block;
}

#scramble {
  width: 300px;
  margin: 50px auto;
  text-align: left;
}

.color-chip,
.target-chip,
#color-drop {
  border-radius: 10px;
  color: rgba(255, 255, 255, 0.25);
  box-sizing: border-box;
  width: 50px;
  height: 50px;
  display: inline-block;
  margin: 0;
  font-size: 0;
  line-height: 0;
  text-indent: -9999em;
  overflow: hidden;
  z-index: 9999;
}
.color-chip.locked,
.target-chip.locked,
#color-drop.locked {
  pointer-events: none;
}
.color-chip.locked:before,
.target-chip.locked:before,
#color-drop.locked:before {
  content: "\f023";
  font-family: FontAwesome;
  text-align: right;
  padding: .25em;
  display: block;
  color: rgba(0, 0, 0, 0.2);
  font-size: 1rem;
  line-height: 1.4;
}

.target-chip {
  background: rgba(0, 0, 0, 0.2);
}

#color-drop {
  pointer-events: none;
}

.debug .highlight {
  box-shadow: 0 0 4px rgba(255, 255, 0, 0.5);
}

.debug .color-chip,
.debug .target-chip {
  text-indent: 0;
  font-size: .8rem;
  line-height: 1.4;
}

a {
  color: lightblue;
  text-decoration: none;
}

ul {
  list-style-type: none;
  padding: 0;
}

#controls,
#scoreboard {
  font-size: 1.3em;
  position: fixed;
  right: 0;
  top: 2rem;
  background: rgba(0, 0, 0, 0.2);
  width: 3rem;
}

#controls span {
  width: 100%;
  height: 3rem;
  line-height: 3rem;
  display: block;
  cursor: pointer;
}

#scoreboard {
  right: auto;
  left: 0;
}

#feedback-screen {
  border-radius: 10px;
  display: none;
  position: fixed;
  width: 400px;
  min-height: 50vh;
  top: 20vh;
  left: 50%;
  margin-left: -200px;
  background: black;
  color: black;
  padding: 1rem;
  font-size: 1.5em;
  background-color: white;
  box-shadow: 6px 10px 20px rgba(0, 0, 0, 0.6), 0 0 0 100vw rgba(0, 0, 0, 0.8);
  text-shadow: 0 2px 0 rgba(255, 255, 255, 0.3);
}
#feedback-screen .title {
  color: white;
}
#feedback-screen .button {
  display: block;
  background: rgba(255, 255, 255, 0.3);
  cursor: pointer;
  margin: .4em;
  border-radius: .2em;
  padding: .5em;
}

.close {
  position: absolute;
  top: 16px;
  right: 16px;
  width: 1em;
  height: 1em;
  background: rgba(255, 255, 255, 0.3);
  border-radius: 100px;
  margin: .2em;
  line-height: 1em;
  color: rgba(255, 255, 255, 0.7);
  cursor: pointer;
}

.stars {
  color: gold;
  font-size: 2em;
}

.fa-star-o {
  color: #191919;
}

#stats {
  display: none;
  background: rgba(128, 128, 128, 0.2);
  position: absolute;
  top: 1em;
  left: 1em;
  text-align: left;
  padding: 1em;
  line-height: 1.4;
}

.debug #stats {
  display: block;
}

  </style>

  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script> --}}
  <script src="{!! asset('js/prefixfree.min.js') !!}"></script>

</head>

<body>

  <div id="start-screen">
    <h1 class="title blend-it">Chroma</h1>
    <p><b>How good is your eye for color? </b>
      <br>Sort out the scrambled color tiles so they form perfect color gradients, Like this one: </p>

    <div class="onboarding"></div>
    <p>You'll earn more stars if you can solve the puzzle without making any mistakes, so take your time!</p>

    <button id="start">Let's Play!</button>
  </div>

  <div id="levels-screen">
    <h1 class="title">Levels</h1>

    <p>Out of levels? Try <a href="https://codepen.io/melissacabral/pen/KNRNja" target="_blank">CHROMA Infinite</a>!</p>
  </div>

  <div id="game-screen">
    <h1 class="title">Chroma</h1>

    <div id="color-container"></div>
    <div id="scramble"></div>


    <div id="controls">
      <span class="lights"><i class="fa fa-lightbulb-o"></i></span>
      <span class="sound"><i class="fa fa-volume-up"></i></span>
      <span class="reset"><i class="fa fa-refresh"></i></span>
      <span class="next"><i class="fa fa-th"></i></span></span>
    </div>


    <div class="hints">
      <h2 class="title">About Chroma</h2>
      <p>A puzzle game built by Melissa for JQuery Class at Platt College <br>Inspired by <a href="https://play.google.com/store/apps/details?id=com.lonelyfew.blendoku2&hl=en">Blendoku 2 App</a>, it's a really fun puzzle.</p>
    </div>

  </div>

  <div id="feedback-screen">
    <div class="close">×</div>
    <h1 class="title"></h1>
    <p></p>
    <div class="stars"></div>
    <span class="reset button"><i class="fa fa-refresh"></i> Replay Level</span>
    <span class="next button"><i class="fa fa-arrow-right"></i> Next Level</span></span>
  </div>

  {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script> --}}
  <script src="{!! asset('js/jquery.min.js') !!}"></script>
  {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-color/2.1.2/jquery.color.min.js'></script> --}}
  <script src="{!! asset('js/jquery.color.js') !!}"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js'></script>
  {{-- <script src="{!! asset('js/jquery-ui.js') !!}"></script> --}}

  <script src="{!! asset('js/third_party_html5/chroma.js') !!}"></script>

</body>
</html>
