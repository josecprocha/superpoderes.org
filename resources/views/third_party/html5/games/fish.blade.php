<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/n4nirmal09/pen/LOvwmq.

A small fishgame using gsap and vue . A event driven game,very easy to built using vue.
-->

<!--
Copyright (c) 2019 by nirmal (https://codepen.io/n4nirmal09/pen/LOvwmq)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

{{--
Scripts found only externaly:
https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/MorphSVGPlugin.min.js
--}}

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>A Fish game using GSAP and VUE</title>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/fish.css') !!}" />
</head>

<body>

  <div id="fish-game">
    <div class="game-canvas" style="height:calc(100vh - 121px)">
      <div class="water-layer">
        <div class="water-layer-1">
          <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 67.3" preserveAspectRatio="none">
        <path transform="translate(25)"  d="M2456 15.7v58h-3884s.5-56.8 0-58c37.7 40.8 73.3 36.3 107.5.5 34.2 35.8 69.8 40.3 107.5-.5 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 95 40.5 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 13 40.5 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.7 40.9 73.3 36.3 107.5.5 33.9 35.5 69.2 40.3 106.6.4.2-.1.3-.3.4-.4l.4.4c37.4 39.8 72.7 35.1 106.6-.4 34.2 35.8 69.8 40.3 107.5-.5 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 95 40.5 108 0 34.3 36.2 70.1 41 108 0z"/>
        </svg>
        </div>
        <div class="water-layer-2">
          <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 67.3" preserveAspectRatio="none">
        <path  d="M2456 15.7v58h-3884s.5-56.8 0-58c37.7 40.8 73.3 36.3 107.5.5 34.2 35.8 69.8 40.3 107.5-.5 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 95 40.5 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 13 40.5 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.7 40.9 73.3 36.3 107.5.5 33.9 35.5 69.2 40.3 106.6.4.2-.1.3-.3.4-.4l.4.4c37.4 39.8 72.7 35.1 106.6-.4 34.2 35.8 69.8 40.3 107.5-.5 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 95 40.5 108 0 34.3 36.2 70.1 41 108 0z"/>
        </svg>
        </div>
        <div class="water-layer-3">
          <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 67.3" preserveAspectRatio="none">
          <path transform="translate(60) scale(0.5 1)"  d="M2456 15.7v58h-3884s.5-56.8 0-58c37.7 40.8 73.3 36.3 107.5.5 34.2 35.8 69.8 40.3 107.5-.5 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 95 40.5 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 13 40.5 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.7 40.9 73.3 36.3 107.5.5 33.9 35.5 69.2 40.3 106.6.4.2-.1.3-.3.4-.4l.4.4c37.4 39.8 72.7 35.1 106.6-.4 34.2 35.8 69.8 40.3 107.5-.5 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 73.7 36.3 108 0 34.3 36.3 70.1 41.1 108 0 37.9 41.1 95 40.5 108 0 34.3 36.2 70.1 41 108 0z"/>
        </svg>
        </div>
      </div>

      <div class="water-bottom">
        <svg id="water-bottom-layer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 140" preserveAspectRatio="none">
        <path id="w-bttom-2" fill="#D1B177"  d="M1053.2 31.6c-16.8-7-38.6-6.2-63.3-.7-16.6 11.7-38.5 18.7-70.3 16.7-10.7-8-26.5-12.8-45-16-25.3-2.1-67.6 4.2-111.7 11.3-19.9 3.4-41.1 4.9-64 4-13.5-3.7-33.6-5.2-54.7-6.3-29.3 4.8-61.9 7.2-97 7.7C515 37 446.9 43.5 379.9 49.6c-28.3-5.5-54.5-9.9-67-6.3l-80 9.7-77.3-14.7c-17.1-4.7-32.8-5.5-46.7-1l-34.3.3c-36.8-2-89.2-10.8-92 2-13.3 7.9-28.1 13.2-45.7 13.7l-2.7 142 1120-4.3-1-159.4z"/>
        <path id="w-bttom-2" fill='#EDCD89' d="M1045.2 42.2c-33.3.8-68.9 6.1-106.2 14.7l-19.5 7.5c-13.3 2.8-27.9-1.6-43.5-12.5-30-16.1-68.7-10.1-111 5.5-7.1-8-36.2-2.1-60 .5-33.9-7.8-73.8-4.6-116 3l-95 1c-3.5-.9-8.4 1.2-14 5l-48 4.5c-45.7-16.1-89.3-24.2-126-6.5-38.2-9.6-73.8-13.8-101.5-2.7-4.6-3.9-9.8-5.7-16.7-2l-36.7 11.3c-23.8-3.2-54.5-18.9-86-36-25.1-6.7-45.9-8.2-57.3 1.3-14.1 18.4-32.6 32.7-59.3 39.4v96.7l1103 4s-6.7-134.3-6.3-134.7z"/>
      </svg>
      <svg class="stone stone-1" width="37px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.1 20.5">
        <path  fill='#91827B' d="M17.6 15.2l-7.9-.1c-4.8-2.6-6-5-.8-6.9 6-1.3 12-1.1 17.8 1.5 1.6 1 2.3 2.4 2.4 4.3L27 15.5l-9.4-.3z"/>
        <path  fill='#938A85' d="M7.3 11.3c1.7-2.5 4.1-3.9 7.6-3.8l6.9.8 5.6 2.5.8 2.9-7.2 1.6-10.7-.3c-1.7-1.2-2.9-2.5-3-3.7z"/>
        <path  fill='#C8C2B3' style="opacity:0.8" d="M12.2 7.7L8.5 9.8c.9 2.6 3.1 3.4 6 3.3 4.1.4 7.8.3 11.2-.3 1-.7 1.5-1.5 1.2-2.4L21 7.9l-8.8-.2z"/>
      </svg>
      <svg class="stone stone-2" width="37px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.1 20.5">
        <path  fill='#91827B' d="M17.6 15.2l-7.9-.1c-4.8-2.6-6-5-.8-6.9 6-1.3 12-1.1 17.8 1.5 1.6 1 2.3 2.4 2.4 4.3L27 15.5l-9.4-.3z"/>
        <path  fill='#938A85' d="M7.3 11.3c1.7-2.5 4.1-3.9 7.6-3.8l6.9.8 5.6 2.5.8 2.9-7.2 1.6-10.7-.3c-1.7-1.2-2.9-2.5-3-3.7z"/>
        <path  fill='#C8C2B3' style="opacity:0.8" d="M12.2 7.7L8.5 9.8c.9 2.6 3.1 3.4 6 3.3 4.1.4 7.8.3 11.2-.3 1-.7 1.5-1.5 1.2-2.4L21 7.9l-8.8-.2z"/>
      </svg>
      </div>

      <div class="prey-fish-wrapper"></div>
      <predator-fish
      v-bind:score = "score"
      v-bind:maxeatlimit = "maxEatLimit"
      v-bind:direction = "cursorDirection"
      v-on:disablemouseevent = "disableMouseMove"
      v-on:enablemouseevent = "enableMouseMove"
      v-on:incrementmaxeatLimit = "incrementMaxEatLimit"
      ></predator-fish>

      @include('third_party.html5.games.fish_vue')

    </div>
  </div>
  {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.3/vue.min.js'></script> --}}
  <script src="{!! asset('js/vue.min.js') !!}"></script>
  {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js'></script> --}}
  <script src="{!! asset('js/TweenMax.min.js') !!}"></script>
  {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/utils/Draggable.min.js'></script> --}}
  <script src="{!! asset('js/Draggable.min.js') !!}"></script>

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/MorphSVGPlugin.min.js'></script>

  <script src="{!! asset('js/third_party_html5/fish.js') !!}"></script>
</body>
</html>
