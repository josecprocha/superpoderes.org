<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/EduardoLopes/pen/okCnA.
Move using the arrows and cross the street avoiding the gray rectangles
The game have 8 maps, when you pass the last one, goes back to the first, and so on.
Made in a afternoon.

I didn't have time prevent diagonal moviment, so don't use it. haha
Update: Change the maps to prevent a cheat; If die more than 4 times goes back to the previous map.
Update 2: Smaller size of the canvas; Show the number of 'hearts' in the middle of the rect; more particles;
-->

<!--
Copyright (c) 2019 by Eduardo Lopes (https://codepen.io/EduardoLopes/pen/okCnA)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

{{--
Scripts found only externaly:
https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js
https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css
--}}

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Daily Pen #023: Cross The Street game</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/crossthestreet.css') !!}" />
</head>

<body>
  <!--
  move using the arrows and cross the street avoiding the gray rectangles. If die more than 4 times goes back to the previous map.
  The game have 8 maps, when you pass the last one, goes back to the first, and so on.
  Made in a afternoon.
  -->
  {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/sketch.js/1.0.0/sketch.min.js'></script> --}}
  <script src="{{url('node_modules/sketch-js/js/sketch.min.js')}}"></script>
  <script src="{!! asset('js/third_party_html5/crossthestreet.js') !!}"></script>
</body>
</html>
