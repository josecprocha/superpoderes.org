<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/cornerkitten/pen/QvQdpV.

Play a game of Dots with a friend.

Each turn, a player must connect two adjacent dots.  When a player creates a square, they are given a point and an extra turn.  The game ends when all squares have been created.  The player with the most points wins!
-->

<!--
Copyright (c) 2019 by Sam Vaughn (https://codepen.io/cornerkitten/pen/QvQdpV)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Dots Game</title>
  <meta name="viewport" content="width=device-width">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/dots.css') !!}" />
</head>

<body>

  <div id="app"></div>
  <script src='https://unpkg.com/vue/dist/vue.js'></script>
  <script src='https://unpkg.com/vue-router/dist/vue-router.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vuex/2.2.1/vuex.min.js'></script>
  <script src="{!! asset('js/third_party_html5/dots.js') !!}"></script>

</body>
</html>
