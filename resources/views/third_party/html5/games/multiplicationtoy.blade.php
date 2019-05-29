<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/lonekorean/pen/evROLw.

Someone please tell me you remember these things. No JavaScript, math is done via CSS counters and a single Sass loop.
-->

<!--
Copyright (c) 2019 by Will Boyd (https://codepen.io/lonekorean/pen/evROLw)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Multiplication Toy</title>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/multiplicationtoy.css') !!}" />
</head>

<body>

  <div class='board'>
    <header>
      <h1>Educational Keyboard</h1>
      <h2>Multiplication X</h2>
    </header>
    <div class='keys'>
      <div class='row'>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
      </div>
      <div class='row'>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
      </div>
      <div class='row'>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
      </div>
      <div class='row'>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
      </div>
      <div class='row'>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
      </div>
      <div class='row'>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
      </div>
      <div class='row'>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
      </div>
      <div class='row'>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
      </div>
      <div class='row'>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
        <div class='key' tabindex='0'>
          <dl>
            <dt></dt>
            <dd></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
