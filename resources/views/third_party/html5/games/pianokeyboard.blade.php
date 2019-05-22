<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/rzencoder/pen/VmBeLZ.

Playable piano/keyboard using HTML audio API. Includes demos of No Suprises, Life on Mars, Für Elise and The Entertainer.
-->

<!--
Copyright (c) 2019 by Adam (https://codepen.io/rzencoder/pen/VmBeLZ)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Playable Piano Keyboard with Demos</title>
  <link href="https://fonts.googleapis.com/css?family=Condiment" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/pianokeyboard.css') !!}" />
</head>

<body>

  <div class="wrap">
    <!--Controls-->
    <div class="controls-container">
      <div class="speakers"></div>
      <div class="controls">
        <div class="input-container">
          <h2>Keyboard 5000</h2>
          <div class="input-buttons">
            <div class="demo-buttons">
              <div>
                <button class="demo-button demo1"></button>
                <div>1</div>
              </div>
              <div>
                <button class="demo-button demo2"></button>
                <div>2</div>
              </div>
              <div>
                <button class="demo-button demo3"></button>
                <div>3</div>
              </div>
              <div>
                <button class="demo-button demo4"></button>
                <div>4</div>
              </div>
              <div>
                <button class="help"></button>
                <div>Help</div>
              </div>
            </div>
            <div class="demo-label">Demos</div>
          </div>
        </div>
        <div class="inputs">
          <input type="range" class="volume" step="0.1" min="0" max="1"></input>
          <input type="range" class="tempo" min="2" max="8"></input>
        </div>
        <div class="input-labels">
          <div>Volume</div>
          <div>Tempo</div>
        </div>
      </div>
      <div class="speakers"></div>
    </div>

    <!--Keyboard-->
    <div class="keyboard">
      <div data-note="c4" data-key="81" class="key white oct">q</div>
      <div data-note="db4" data-key="50" class="key black black1 oct">2</div>
      <div data-note="d4" data-key="87" class="key white oct">w</div>
      <div data-note="eb4" data-key="51" class="key black black2 oct">3</div>
      <div data-note="e4" data-key="69" class="key white oct">e</div>
      <div data-note="f4" data-key="82" class="key white oct">r</div>
      <div data-note="gb4" data-key="53" class="key black black3 oct">5</div>
      <div data-note="g4" data-key="84" class="key white oct">t</div>
      <div data-note="ab4" data-key="54" class="key black black4 oct">6</div>
      <div data-note="a4" data-key="89" class="key white oct">y</div>
      <div data-note="bb4" data-key="55" class="key black black5 oct">7</div>
      <div data-note="b4" data-key="85" class="key white oct">u</div>
      <div data-note="c5" data-key="88" class="key white">x</div>
      <div data-note="db5" data-key="68" class="key black black6">d</div>
      <div data-note="d5" data-key="67" class="key white">c</div>
      <div data-note="eb5" data-key="70" class="key black black7">f</div>
      <div data-note="e5" data-key="86" class="key white">v</div>
      <div data-note="f5" data-key="66" class="key white">b</div>
      <div data-note="gb5" data-key="72" class="key black black8">h</div>
      <div data-note="g5" data-key="78" class="key white">n</div>
      <div data-note="ab5" data-key="74" class="key black black9">j</div>
      <div data-note="a5" data-key="77" class="key white">m</div>
      <div data-note="bb5" data-key="75" class="key black black10">k</div>
      <div data-note="b5" data-key="188" class="key white">,</div>
      <div data-note="c6" data-key="190" class="key white">.</div>
    </div>

  </div>

  <script src="{!! asset('js/third_party_html5/pianokeyboard.js') !!}"></script>

</body>
</html>
