<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/vinnywoo/pen/KRvNJP.

 Resource heavy.

Using Del/Ins for the objectives.
Responsive
Going to remake in canvas soon.
No support for Internet Explorer.
No support for Clip Path  in Edge.
-->

<!--
Copyright (c) 2019 by Vincent Danna (https://codepen.io/vinnywoo/pen/KRvNJP)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Asteroids, but my way...</title>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/vdasteroids.css') !!}" />
</head>

<body>

  <div class='menu'>
    <div class='b'>Start</div>
    <div class='ob'>Fight your way through a field of asteroids. Don't let them pass, or hit you! If your health reaches 0, your score resets. If you don't want to play, you can just watch the bot do it all.. and fail.</div>
  </div>
  <div class='q'>
    <div class='qo'></div>
  </div>
  <div class='o'></div>
  <div class='p'>
    <div class='craft'></div>
  </div>
  <div class='rock'></div>
  <div class='rock'></div>
  <div class='rock'></div>
  <div class='rock'></div>
  <div class='rock'></div>
  <div class='rock'></div>
  <div class='rock'></div>
  <div class='l'></div>
  <div class='hp'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='star'></div>
  <div class='s'>0</div>
  <div class='hb'>
    <div class='h'></div>
  </div>

  <audio class='shot' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/455279/laser.wav' type='audio/wav'></audio>
  <audio class='blop' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/455279/blop.wav' type='audio/wav'></audio>
  <audio class='bgm' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/455279/sstar.mp3' type='audio/mp3'></audio>
  <audio class='wow' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/455279/wow.mp3' type='audio/mp3'></audio>
  <audio class='good' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/455279/good.mp3' type='audio/mp3'></audio>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src="{!! asset('js/third_party_html5/vdasteroids.js') !!}"></script>

</body>
</html>
