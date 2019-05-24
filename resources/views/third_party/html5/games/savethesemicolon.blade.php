<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/Xanmia/pen/bwjaZX.

My JS13KGAMES entry(http://js13kgames.com/entries/save-the-semicolon), enjoy!   Progress is not saved on this version.

Play the full version here: https://savethesemicolon.herokuapp.com/
***Codepen version does not have an online scoreboard***
-->

<!--
Copyright (c) 2019 by Xanmia (https://codepen.io/Xanmia/pen/bwjaZX)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Save the Semicolon</title>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/savethesemicolon.css') !!}" />
</head>

<body>

  <script>
    var $ = {};
  </script>

  <div id="cont">
    <input id="username" placeholder="Enter a user name" type="text" name="username"
      onfocus="$.canEdit=true;"
      onblur="$.gameProgress.saveUser(this.value);$.canEdit=false;"
      onkeydown="if (event.keyCode == 13){this.blur();}">
    <div id="game">
      <div id="blockContainer"></div>
      <div id="bob">
        <div class="head">
          <div id="eyeLeft" class="eye"></div>
          <div id="eyeRight" class="eye"></div>
          <div id="browLeft" class="brow"></div>
          <div id="browRight" class="brow"></div>
        </div>
        <div id="bobody">
          <div class="body"><svg version="1.1" width="95" height="115" viewBox="-20 -70 85 130" xmlns="http://www.w3.org/2000/svg"><path fill="#808080" stroke="#000000" stroke-width="1" d="M33,1.167v7.499C34.667,45.5,1.667,43.5,1.667,43.5l0.323-7.508C27,38.333,24,14.166,24,14.166H1.667L2,1.167H33z"/></svg></div>
        </div>
      </div>
      <div id="ghost">
        <div class="head">
          <div id="eyeLeft" class="eye"></div>
          <div id="eyeRight" class="eye"></div>
          <div id="browLeft" class="brow"></div>
          <div id="browRight" class="brow"></div>
        </div>
        <div class="body"><svg version="1.1" width="95" height="115" viewBox="-20 -70 85 130" xmlns="http://www.w3.org/2000/svg"><path fill="#808080" stroke="#000000" stroke-width="1" d="M33,1.167v7.499C34.667,45.5,1.667,43.5,1.667,43.5l0.323-7.508C27,38.333,24,14.166,24,14.166H1.667L2,1.167H33z"/></svg></div>
      </div><canvas id="main"></canvas>
      <div id="my-gui-container" class="right bigText"></div>
    </div>
    <div id="overlay"></div>
    <div id="effect"></div>
  </div>
  
  <script src="{!! asset('js/third_party_html5/savethesemicolon.js') !!}"></script>

</body>
</html>
