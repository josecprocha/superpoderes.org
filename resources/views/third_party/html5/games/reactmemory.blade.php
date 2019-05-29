<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/mikun/pen/jrRJjq.

 A small memory game made by ReactJS - ES6 syntax

Inspired by [Tuan, my colleague](https://www.facebook.com/nguyen.tuan192)
-->

<!--
Copyright (c) 2019 by Pham Mikun (https://codepen.io/mikun/pen/jrRJjq)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>React Memory Game </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/reactmemory.css') !!}" />
</head>

<body>

  <link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link href="https://fonts.googleapis.com/css?family=Fira+Mono:400,700" rel="stylesheet">
  <div class="content">
    <pre>
    -----------------------------------------------------

      ██╗        ██╗    ██╗
    ██╔╝       ██╔╝    ╚██╗
    ██╔╝       ██╔╝      ╚██╗
    ╚██╗      ██╔╝       ██╔╝
    ╚██╗    ██╔╝       ██╔╝
      ╚═╝    ╚═╝        ╚═╝

    Greetings developers, Shall we play a game?

    Re-type the number you see below. Ez right?

    -----------------------------------------------------

    </pre>

    <div id="app"></div>

    <a class="app__author" href="https://twitter.com/phammikun" target="_blank">by @phammikun</a>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.3.1/react.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.3.1/react-dom.min.js'></script>

  <script src="{!! asset('js/third_party_html5/reactmemory.js') !!}"></script>

</body>
</html>
