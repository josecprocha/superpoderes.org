<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/dipscom/pen/amxYvB.

"Show me your magic, Johnson".

Works with mouse and touch input. Click/Touch and drag before flicking the ball towards the basket.
-->

<!--
Copyright (c) 2019 by Pedro Tavares (https://codepen.io/dipscom/pen/amxYvB)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Shooting Hoops</title>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/shootinghoops.css') !!}" />
</head>

<body>
  <div class="stage">
    <svg id="bHoop" viewBox="0 0 120 90" preserveAspectRatio="xMidYMin" xmlns="http://www.w3.org/2000/svg">
      <rect class="shadow" x="30" y="40" width="115" height="85" />
      <rect x="2.5" y="2.5" width="115" height="85" />
      <rect x="33" y="30" width="54" height="40" />
    </svg>
    <svg id="basket" viewBox="0 0 120 90" preserveAspectRatio="xMidYMin">
      <g id="net">
        <line x1="33" y1="76" x2="74.1" y2="117.1"/>
        <line x1="87" y1="76" x2="45.6" y2="117.4"/>
        <line x1="78.3" y1="73.8" x2="43.2" y2="109"/>
        <line x1="68.1" y1="73.8" x2="41.9" y2="100"/>
        <line x1="58.2" y1="73.8" x2="39.5" y2="92.5"/>
        <line x1="47.4" y1="73.8" x2="36.5" y2="84.7"/>
        <line x1="40.7" y1="73.5" x2="76.3" y2="109.1"/>
        <line x1="51.6" y1="73.8" x2="77.7" y2="99.9"/>
        <line x1="61.9" y1="73.8" x2="80.4" y2="92.3"/>
        <line x1="72.2" y1="73.8" x2="82.7" y2="84.3"/>
        <line x1="39.5" y1="92.5" x2="64.1" y2="117.2"/>
        <line x1="42.7" y1="106.3" x2="54.5" y2="118.1"/>
        <line x1="80.4" y1="92.3" x2="54.5" y2="118.1"/>
        <line x1="77.3" y1="105.8" x2="65.7" y2="117.4"/>
      </g>
      <rect id="ring" x="28" y="70" width="64" height="6" rx="3"/>
    </svg>
    <svg id="ball" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" class="noSelect">
      <defs>
        <clipPath id="clip-path">
          <circle cx="25" cy="25" r="24"/>
        </clipPath>
      </defs>
      <title>Basketball</title>
      <circle cx="25" cy="25" r="24"/>
      <g class="ballPath">
          <path class="ballStripe" d="M2.4,8.1a25,25,0,0,1,9.5-2.3c4.9-.2,9.5,1.2,13.8,2.5s5.5,1.9,9.3,2.1,4.5-.2,5.8-1a6.6,6.6,0,0,0,2.7-3.1"/>
          <path class="ballStripe" d="M26.4,0c2.8,2.5,9.5,9,11.1,19.1C40.2,35.7,26.8,47.5,25.2,49"/>
          <path class="ballStripe" d="M-5,26.5a71.1,71.1,0,0,1,23.5-9.1,77,77,0,0,1,33,.7"/>
          <path class="ballStripe" d="M4,42.3a35.5,35.5,0,0,0,6.9-2.8c9.3-5,10.1-11.2,19.8-15.8,4.3-2,6.7-2.1,8.1-1.9,5.5.6,8.5,5.1,8.9,5.7,3.4,5.2.7,10.6.3,11.3"/>
      </g>
    </svg>
  </div>
  <ul class="copy">
    <li id="shots">Shots: 0</li>
    <li id="hits">Score: 0</li>
    <li id="accuracy">Accuracy: 0%</li>
  </ul>
  <p class="copy instructions">Flick to shoot - Click/Touch and drag to move the ball</p>

  {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js'></script> --}}
  <script src="{!! asset('js/TweenMax.min.js') !!}"></script>
  <script src="{!! asset('js/third_party_html5/shootinghoops.js') !!}"></script>
</body>
</html>