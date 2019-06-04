<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/aarongarciah/pen/ypBoVm.

 Shoot as many bullseyes as you can.

Some links to dive deep into CSS counters:

https://una.im/css-games/#💁

https://youtu.be/WmVH85G59Lk

http://codersblock.com/blog/fun-times-with-css-counters/
-->

<!--
Copyright (c) 2019 by Aarón García Hervás (https://codepen.io/aarongarciah/pen/ypBoVm)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

{{--
Scripts found only externaly:
https://fonts.googleapis.com/css?family=Press+Start+2P
--}}

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>🎯 🔫   Shoot the target!! HTML/CSS only game - Codepen Meetup 2017 - Alicante Frontend</title>
  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> --}}
  <link rel="stylesheet" href="{!! asset('css/normalize.css') !!}" />
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/shootthetarget.css') !!}" />
</head>

<body>

  <div id="game" class="game">
    <a class="start" href="#game">insert coin<span>💰</span></a>
    <div class="content">

      <input id="bullseye-1" type="checkbox">
      <label for="bullseye-1"><span></span></label>

      <input id="bullseye-2" type="checkbox">
      <label for="bullseye-2"><span></span></label>

      <input id="bullseye-3" type="checkbox">
      <label for="bullseye-3"><span></span></label>

      <input id="bullseye-4" type="checkbox">
      <label for="bullseye-4"><span></span></label>

      <input id="bullseye-5" type="checkbox">
      <label for="bullseye-5"><span></span></label>

      <input id="bullseye-6" type="checkbox">
      <label for="bullseye-6"><span></span></label>

      <input id="bullseye-7" type="checkbox">
      <label for="bullseye-7"><span></span></label>

      <input id="bullseye-8" type="checkbox">
      <label for="bullseye-8"><span></span></label>

      <div class="score"> points</div>
    </div>
  </div>

</body>
</html>
