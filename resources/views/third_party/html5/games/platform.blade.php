<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/nathantaylor/pen/KaLvXw.

Creativity is born from limitations.  Its fun to try and create something unique within the constraint of only using CSS/HTML.
-->

<!--
Copyright (c) 2019 by Nathan Taylor (https://codepen.io/nathantaylor/pen/KaLvXw)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>CSS/HTML Platform Game</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300|Teko:700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/platform.css') !!}" />
</head>

<body>


<div class="center">
  <input id="level-one" type="checkbox"/>
  <div class="level" l="1">
    <div class="step start" r="0" c="0"></div>
    <div class="step" r="0" c="1"></div>
    <div class="step" r="1" c="1"></div>
    <div class="step" r="2" c="1"></div>
    <div class="step" r="3" c="1"></div>
    <div class="step" r="3" c="2"></div>
    <div class="step" r="3" c="3"></div>
    <div class="step" r="2" c="3"></div>
    <div class="step" r="2" c="4"></div>
    <div class="step" r="3" c="4"></div>
    <div class="step finish" r="4" c="4">
      <label class="goal" for="level-one"></label>
    </div>
  </div>
  <input id="level-two" type="checkbox"/>
  <div class="level">
    <div class="step start" r="4" c="4"></div>
    <div class="step" r="4" c="3"></div>
    <div class="step" r="4" c="2"></div>
    <div class="step" r="3" c="2"></div>
    <div class="step" r="3" c="1"></div>
    <div class="step" r="3" c="0"></div>
    <div class="step" r="4" c="0"></div>
    <div class="step" r="4" c="1"></div>
    <div class="step" r="3" c="1"></div>
    <div class="step" r="3" c="2"></div>
    <div class="step" r="3" c="3"></div>
    <div class="step" r="4" c="3"></div>
    <div class="step" r="4" c="2"></div>
    <div class="step" r="3" c="2"></div>
    <div class="step" r="3" c="1"></div>
    <div class="step" r="4" c="1"></div>
    <div class="step" r="4" c="0"></div>
    <div class="step" r="3" c="0"></div>
    <div class="step" r="2" c="0"></div>
    <div class="step" r="1" c="0"></div>
    <div class="step finish" r="1" c="1">
      <label class="goal" for="level-two"></label>
    </div>
  </div>
  <input id="level-three" type="checkbox"/>
  <div class="level">
    <div class="step start" r="1" c="1"></div>
    <div class="step" r="1" c="2"></div>
    <div class="step" r="1" c="3"></div>
    <div class="path">
      <div class="step" r="1" c="4"></div>
      <div class="step" r="0" c="4"></div>
      <div class="step" r="0" c="3"></div>
      <div class="step" r="1" c="3"></div>
      <div class="step" r="2" c="3"></div>
      <div class="step" r="3" c="3"></div>
      <div class="step" r="4" c="3"></div>
      <div class="step" r="4" c="4"></div>
    </div>
    <div class="step" r="2" c="3"></div>
    <div class="step" r="3" c="3"></div>
    <div class="step" r="3" c="2"></div>
    <div class="step" r="3" c="1"></div>
    <div class="step" r="3" c="0"></div>
    <div class="step" r="2" c="0"></div>
    <div class="step" r="1" c="0"></div>
    <div class="step finish" r="0" c="0">
      <label class="goal" for="level-three"></label>
    </div>
  </div>
  <input id="level-four" type="checkbox"/>
  <div class="level">
    <div class="step start" r="0" c="0"></div>
    <div class="path">
      <div class="step" r="0" c="1"></div>
      <div class="step" r="0" c="2"></div>
      <div class="path">
        <div class="step" r="1" c="2"></div>
        <div class="step" r="2" c="2"></div>
        <div class="step" r="3" c="2"></div>
        <div class="path">
          <div class="step" r="3" c="3"></div>
          <div class="step" r="2" c="3"></div>
          <div class="step" r="1" c="3"></div>
          <div class="step" r="1" c="4"></div>
          <div class="step" r="2" c="4"></div>
        </div>
        <div class="step" r="3" c="1"></div>
        <div class="step" r="3" c="0"></div>
        <div class="step" r="2" c="0"></div>
        <div class="step" r="2" c="1"></div>
        <div class="step" r="2" c="2"></div>
        <div class="step" r="1" c="2"></div>
        <div class="step" r="1" c="3"></div>
        <div class="step" r="0" c="3"></div>
        <div class="step" r="0" c="4"></div>
        <div class="step" r="1" c="4"></div>
        <div class="step" r="2" c="4"></div>
        <div class="step" r="3" c="4"></div>
      </div>
      <div class="step" r="0" c="3"></div>
      <div class="step" r="0" c="4"></div>
      <div class="step" r="1" c="4"></div>
      <div class="path">
        <div class="step" r="1" c="3"></div>
        <div class="step" r="2" c="3"></div>
        <div class="step" r="2" c="2"></div>
        <div class="step" r="2" c="1"></div>
        <div class="step" r="2" c="0"></div>
        <div class="step" r="1" c="0">       </div>
      </div>
      <div class="step" r="2" c="4"></div>
      <div class="step" r="2" c="3"></div>
      <div class="step" r="2" c="2"></div>
      <div class="step" r="2" c="1"></div>
      <div class="step" r="2" c="0"></div>
      <div class="step" r="3" c="0"></div>
      <div class="step" r="4" c="0"></div>
      <div class="step" r="4" c="1"></div>
      <div class="step" r="4" c="2"></div>
      <div class="step" r="3" c="2"></div>
    </div>
    <div class="step" r="1" c="0"></div>
    <div class="path">
      <div class="step" r="1" c="1"></div>
      <div class="step" r="1" c="2"></div>
      <div class="step" r="1" c="3"></div>
      <div class="step" r="2" c="3"></div>
      <div class="step" r="2" c="2"></div>
      <div class="step" r="1" c="2"></div>
      <div class="step" r="1" c="3"></div>
      <div class="step" r="2" c="3"></div>
      <div class="step" r="2" c="2"></div>
      <div class="step" r="1" c="2"></div>
      <div class="step" r="1" c="3"></div>
      <div class="step" r="2" c="3"></div>
      <div class="step" r="2" c="2"></div>
      <div class="step" r="1" c="2"></div>
      <div class="step" r="1" c="3"></div>
      <div class="step" r="2" c="3"></div>
      <div class="step" r="2" c="2"></div>
      <div class="step" r="1" c="2"></div>
      <div class="step" r="1" c="3"></div>
      <div class="step" r="2" c="3"></div>
      <div class="step" r="2" c="2"></div>
      <div class="step" r="1" c="2"></div>
      <div class="step" r="1" c="3"></div>
      <div class="step" r="2" c="3"></div>
      <div class="step" r="2" c="2"></div>
      <div class="step" r="1" c="2"></div>
    </div>
    <div class="step" r="2" c="0"></div>
    <div class="step" r="3" c="0"></div>
    <div class="step" r="4" c="0"></div>
    <div class="step" r="4" c="1"></div>
    <div class="step" r="4" c="2"></div>
    <div class="step" r="3" c="2"></div>
    <div class="step" r="2" c="2"></div>
    <div class="path">
      <div class="step" r="2" c="1"></div>
      <div class="step" r="2" c="0"></div>
      <div class="step" r="3" c="0"></div>
      <div class="step" r="4" c="0"></div>
      <div class="step" r="4" c="1"></div>
      <div class="step" r="4" c="2"></div>
    </div>
    <div class="step" r="1" c="2"></div>
    <div class="step" r="0" c="2"></div>
    <div class="step" r="0" c="3"></div>
    <div class="step" r="1" c="3"></div>
    <div class="step" r="1" c="4"></div>
    <div class="step" r="0" c="4"></div>
    <div class="step" r="0" c="3"></div>
    <div class="step" r="1" c="3"></div>
    <div class="step" r="2" c="3"></div>
    <div class="step" r="2" c="2"></div>
    <div class="step" r="3" c="2"></div>
    <div class="step finish" r="4" c="4">
      <label class="goal" for="level-four"></label>
    </div>
  </div>
  <input id="level-five" type="checkbox"/>
  <div class="level">
    <div class="step start" r="4" c="4"></div>
    <div class="step" r="3" c="4"></div>
    <div class="step" r="2" c="4">
      <label class="button" for="bridge-one"></label>
    </div>
    <div class="bridge">
      <input id="bridge-one" type="checkbox"/>
      <div class="step" r="1" c="4"></div>
      <div class="step" r="0" c="4"></div>
      <div class="step" r="0" c="3"></div>
      <div class="path">
        <div class="step" r="1" c="3"></div>
        <div class="step" r="1" c="4"></div>
        <div class="step" r="2" c="4"></div>
        <div class="step" r="3" c="4"></div>
        <div class="step" r="3" c="3"></div>
        <div class="step" r="4" c="3"></div>
        <div class="step" r="4" c="2"></div>
        <div class="step" r="4" c="1"></div>
        <div class="path">
          <div class="step" r="3" c="1"></div>
          <div class="step" r="3" c="0"></div>
          <div class="step" r="2" c="0"></div>
          <div class="step" r="1" c="0"></div>
          <div class="step" r="0" c="0"></div>
          <div class="step" r="0" c="1"></div>
          <div class="path">
            <div class="step" r="0" c="2"></div>
            <div class="bridge">
              <input id="bridge-two" type="checkbox"/>
              <div class="step" r="0" c="3"></div>
              <div class="step" r="0" c="4"></div>
              <div class="step" r="1" c="4"></div>
              <div class="step" r="2" c="4"></div>
              <div class="step" r="2" c="3"></div>
            </div>
          </div>
          <div class="step" r="1" c="1"></div>
          <div class="step" r="1" c="0">
            <label class="button" for="bridge-three"></label>
          </div>
        </div>
        <div class="step" r="4" c="0"></div>
        <div class="step" r="3" c="0"></div>
        <div class="step" r="3" c="1"></div>
        <div class="step" r="4" c="1"></div>
        <div class="step" r="4" c="2"></div>
        <div class="step" r="4" c="3">
          <label class="button" for="bridge-four"></label>
        </div>
      </div>
      <div class="step" r="0" c="2"></div>
      <div class="step" r="0" c="1"></div>
      <div class="step" r="1" c="1"></div>
      <div class="step" r="1" c="0"></div>
      <div class="bridge">
        <input id="bridge-four" type="checkbox"/>
        <div class="step" r="2" c="0"></div>
        <div class="step" r="3" c="0"></div>
        <div class="path">
          <div class="step" r="4" c="0"></div>
          <div class="step" r="4" c="1"></div>
          <div class="step" r="4" c="2"></div>
        </div>
        <div class="step" r="3" c="1"></div>
        <div class="step" r="4" c="1"></div>
        <div class="step" r="4" c="0"></div>
        <div class="bridge">
          <input id="bridge-three" type="checkbox"/>
          <div class="step" r="3" c="0"></div>
          <div class="step" r="2" c="0"></div>
          <div class="step" r="1" c="0"></div>
          <div class="step" r="0" c="0">
            <label class="button" for="bridge-two">   </label>
          </div>
        </div>
      </div>
    </div>
    <div class="step finish" r="2" c="2">
      <label class="goal" for="level-five"></label>
    </div>
  </div>
  <input id="finsh" type="checkbox"/>
  <div class="level">
    <div class="message">
      <h1>YOU WIN!</h1>
      <p>Thanks for playing!  I'm pretty impressed you had the patience to make it all the way!</p><a class="share" href="https://twitter.com/intent/tweet?text=I%20made%20it%20to%20the%20end%20of%20this%20pure%20CSS%20game%2C%20I%20bet%20you%20can%27t! &amp;url=http%3A%2F%2Fcodepen.io%2Fnathantaylor%2Fpen%2FKaLvXw&amp;via=nathantokyo" target="_blank">Brag on Twitter!</a>
    </div>
  </div>
</div><a class="sig" href="http://nathan.tokyo" target="_blank">NATHAN.TOKYO</a>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
  <script src="{!! asset('js/third_party_html5/platform.js') !!}"></script>
</body>
</html>
