<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/amdsouza92/pen/xdooWa.

JavaScript Drum Kit - based off of the javascript30 course by WesBos.
-->

<!--
Copyright (c) 2019 by Arun Michael Dsouza (https://codepen.io/amdsouza92/pen/xdooWa)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>JavaScript Drum Kit</title>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/drumkit.css') !!}" />
</head>

<body>
  <main>
    <section class="main-wrapper">
      <div class="key-map-wrapper">
        <h2>Key Mapping</h2>
        <ul class="key-map-list">
          <li>
            <kbd class="key-code">E</kbd>
            <span class="key-sound">Crash</span>
          </li>
          <li>
            <kbd class="key-code">R</kbd>
            <span class="key-sound">Ride</span>
          </li>
          <li>
            <kbd class="key-code">F</kbd>
            <span class="key-sound">Floor tom</span>
          </li>
          <li>
            <kbd class="key-code">G</kbd>
            <span class="key-sound">Mid tom</span>
          </li>
          <li>
            <kbd class="key-code">H</kbd>
            <span class="key-sound">High tom</span>
          </li>
          <li>
            <kbd class="key-code">V</kbd>
            <kbd class="key-code">B</kbd>
            <span class="key-sound">Kick</span>
          </li>
          <li>
            <kbd class="key-code">J</kbd>
            <span class="key-sound">Snare</span>
          </li>
          <li>
            <kbd class="key-code">I</kbd>
            <span class="key-sound">Hi-Hat Open</span>
          </li>
          <li>
            <kbd class="key-code">K</kbd>
            <span class="key-sound">Hi-Hat Closed</span>
          </li>
        </ul>
      </div>
      <h1 class="main-title">JavaScript Drum Kit</h1>
      <div class="drum-kit-wrapper">
        <img id="crash-ride" class="crash-cymbal" src="https://raw.githubusercontent.com/ArunMichaelDsouza/javascript-30-course/master/src/01-javascript-drum-kit/img/crash.png" alt="Crash cymbal">
        <img id="hihat-top" class="hihat-top-cymbal" src="https://raw.githubusercontent.com/ArunMichaelDsouza/javascript-30-course/master/src/01-javascript-drum-kit/img/hihat-top.png" alt="Hi Hat cymbal">
        <div data-key="74" class="key snare">
          <kbd>J</kbd>
        </div>
        <div data-key="66" class="key kick">
          <kbd>B</kbd>
        </div>
        <div data-key="86" class="key kick2">
          <kbd>V</kbd>
        </div>
        <div data-key="72" class="key tom-high">
          <kbd>H</kbd>
        </div>
        <div data-key="71" class="key tom-mid">
          <kbd>G</kbd>
        </div>
        <div data-key="70" class="key tom-low">
          <kbd>F</kbd>
        </div>
        <div data-key="69" class="key crash">
          <kbd>E</kbd>
        </div>
        <div data-key="82" class="key ride">
          <kbd>R</kbd>
        </div>
        <div data-key="73" class="key hihat-open">
          <kbd>I</kbd>
        </div>
        <div data-key="75" class="key hihat-close">
          <kbd>K</kbd>
        </div>
        <img class="drum-kit" src="https://raw.githubusercontent.com/ArunMichaelDsouza/javascript-30-course/master/src/01-javascript-drum-kit/img/drum-kit.png" alt="Drum Kit" />
      </div>
    </section>
  </main>

  <audio data-key="74" src="https://raw.githubusercontent.com/ArunMichaelDsouza/javascript-30-course/master/src/01-javascript-drum-kit/sounds/snare.wav"></audio>
  <audio data-key="66" src="https://raw.githubusercontent.com/ArunMichaelDsouza/javascript-30-course/master/src/01-javascript-drum-kit/sounds/kick.wav"></audio>
  <audio data-key="86" src="https://raw.githubusercontent.com/ArunMichaelDsouza/javascript-30-course/master/src/01-javascript-drum-kit/sounds/kick.wav"></audio>
  <audio data-key="72" src="https://raw.githubusercontent.com/ArunMichaelDsouza/javascript-30-course/master/src/01-javascript-drum-kit/sounds/tom-high.wav"></audio>
  <audio data-key="71" src="https://raw.githubusercontent.com/ArunMichaelDsouza/javascript-30-course/master/src/01-javascript-drum-kit/sounds/tom-mid.wav"></audio>
  <audio data-key="70" src="https://raw.githubusercontent.com/ArunMichaelDsouza/javascript-30-course/master/src/01-javascript-drum-kit/sounds/tom-low.wav"></audio>
  <audio data-key="69" src="https://raw.githubusercontent.com/ArunMichaelDsouza/javascript-30-course/master/src/01-javascript-drum-kit/sounds/crash.wav"></audio>
  <audio data-key="82" src="https://raw.githubusercontent.com/ArunMichaelDsouza/javascript-30-course/master/src/01-javascript-drum-kit/sounds/ride.wav"></audio>
  <audio data-key="73" src="https://raw.githubusercontent.com/ArunMichaelDsouza/javascript-30-course/master/src/01-javascript-drum-kit/sounds/hihat-open.wav"></audio>
  <audio data-key="75" src="https://raw.githubusercontent.com/ArunMichaelDsouza/javascript-30-course/master/src/01-javascript-drum-kit/sounds/hihat-close.wav"></audio>

  <script src="{!! asset('js/third_party_html5/drumkit.js') !!}"></script>

</body>
</html>
