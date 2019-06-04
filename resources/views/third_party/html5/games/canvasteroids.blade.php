<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/AndyTheGiant/pen/Jtevg.

this is asteroids on a canvas.
-->

<!--
Copyright (c) 2019 by Andy Lindemann (https://codepen.io/AndyTheGiant/pen/Jtevg)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

{{--
Scripts found only externaly:
https://fonts.googleapis.com/css?family=Audiowide
--}}

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>canvasteroids</title>
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script> --}}
  <script src="{!! asset('js/modernizr.js') !!}"></script>
	<link href='//fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> --}}
  <link rel="stylesheet" href="{!! asset('css/normalize.css') !!}" />
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/canvasteroids.css') !!}" />
</head>

<body>
  <header>canvasteroids</header>
	<canvas id = "canvas" width="600" height ="400"></canvas>
	<footer>
		<a href="http://andymensional.com/">andy lindemann</a> 2012
	</footer>
  {{-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> --}}
  <script src="{!! asset('js/jquery.min.js') !!}"></script>
  <script src="{!! asset('js/third_party_html5/canvasteroids.js') !!}"></script>

</body>
</html>
