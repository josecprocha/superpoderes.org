<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/calincojo/pen/wBQqYm.

A neat game of checkers
-->

<!--
Copyright (c) 2019 by Calin (https://codepen.io/calincojo/pen/wBQqYm)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>A game of checkers</title>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/checkers.css') !!}" />
</head>

<body id="ht">

  <!-- astea 2 sunt puse ca indexarea claselor sa inceapa de la 1 -->
  <div class="checker white_checker" style="display:none"> </div>
  <div class="checker black_checker" style="display:none"> </div>

  <div class="square" style="display: none" id ="ht"> </div>
  <div class="black_background" id="black_background"> </div>

	<div class="score" id="score">
		<br>
	</div>
  <div class="table" id="table">

    <div class="checker white_checker"> </div>
    <div class="checker white_checker"> </div>
    <div class="checker white_checker"> </div>
    <div class="checker white_checker"> </div>
    <div class="checker white_checker"> </div>
    <div class="checker white_checker"> </div>
    <div class="checker white_checker"> </div>
    <div class="checker white_checker"> </div>
    <div class="checker white_checker"> </div>
    <div class="checker white_checker"> </div>
    <div class="checker white_checker"> </div>
    <div class="checker white_checker"> </div>

    <div class="checker black_checker"> </div>
    <div class="checker black_checker"> </div>
    <div class="checker black_checker"> </div>
    <div class="checker black_checker"> </div>
    <div class="checker black_checker"> </div>
    <div class="checker black_checker"> </div>
    <div class="checker black_checker"> </div>
    <div class="checker black_checker"> </div>
    <div class="checker black_checker"> </div>
    <div class="checker black_checker"> </div>
    <div class="checker black_checker"> </div>
    <div class="checker black_checker"> </div>


    <div class="square black_square"> </div>
    <div class="square white_square"> </div>
    <div class="square black_square"> </div>
    <div class="square white_square"> </div>
    <div class="square black_square"> </div>
    <div class="square white_square"> </div>
    <div class="square black_square"> </div>
    <div class="square white_square"> </div>
    <div class="clear_float"> </div>

    <div class="square white_square"> </div>
    <div class="square black_square"> </div>
    <div class="square white_square"> </div>
    <div class="square black_square"> </div>
    <div class="square white_square"> </div>
    <div class="square black_square"> </div>
    <div class="square white_square"> </div>
    <div class="square black_square"> </div>
    <div class="clear_float"> </div>

    <div class="square black_square"> </div>
    <div class="square white_square"> </div>
    <div class="square black_square"> </div>
    <div class="square white_square"> </div>
    <div class="square black_square"> </div>
    <div class="square white_square"> </div>
    <div class="square black_square"> </div>
    <div class="square white_square"> </div>
    <div class="clear_float"> </div>

    <div class="square white_square"> </div>
    <div class="square black_square"> </div>
    <div class="square white_square"> </div>
    <div class="square black_square"> </div>
    <div class="square white_square"> </div>
    <div class="square black_square"> </div>
    <div class="square white_square"> </div>
    <div class="square black_square"> </div>
    <div class="clear_float"> </div>

    <div class="square black_square"> </div>
    <div class="square white_square"> </div>
    <div class="square black_square"> </div>
    <div class="square white_square"> </div>
    <div class="square black_square"> </div>
    <div class="square white_square"> </div>
    <div class="square black_square"> </div>
    <div class="square white_square"> </div>
    <div class="clear_float"> </div>

    <div class="square white_square"> </div>
    <div class="square black_square"> </div>
    <div class="square white_square"> </div>
    <div class="square black_square"> </div>
    <div class="square white_square"> </div>
    <div class="square black_square"> </div>
    <div class="square white_square"> </div>
    <div class="square black_square"> </div>
    <div class="clear_float"> </div>

    <div class="square black_square"> </div>
    <div class="square white_square"> </div>
    <div class="square black_square"> </div>
    <div class="square white_square"> </div>
    <div class="square black_square"> </div>
    <div class="square white_square"> </div>
    <div class="square black_square"> </div>
    <div class="square white_square"> </div>
    <div class="clear_float"> </div>

    <div class="square white_square"> </div>
    <div class="square black_square"> </div>
    <div class="square white_square"> </div>
    <div class="square black_square"> </div>
    <div class="square white_square"> </div>
    <div class="square black_square"> </div>
    <div class="square white_square"> </div>
    <div class="square black_square"> </div>
    <div class="clear_float"> </div>

  </div>

  <audio id="moveSound">
    <source src ="sounds/move.mp3">
  </audio>
  <audio id="winSound">
    <source src="sounds/win.mp3">
  </audio>

  <script src="{!! asset('js/third_party_html5/checkers.js') !!}"></script>

</body>
</html>
