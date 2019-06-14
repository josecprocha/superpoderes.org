<!--
3D Hartwig chess set
====================

3D chess game done in HTML/CSS/JS.
Works only in webkit.

See it in action : http://codepen.io/juliangarnier/full/BsIih

**Libraries**

* Photon : http://photon.attasi.com
* Chess.js : https://github.com/jhlywa/chess.js
-->

<!--

Copyright (c) 2012 Julian Garnier

Permission is hereby granted, free of charge, to any person
obtaining a copy of this software and associated documentation
files (the "Software"), to deal in the Software without
restriction, including without limitation the rights to use,
copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the
Software is furnished to do so, subject to the following
conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
OTHER DEALINGS IN THE SOFTWARE.

-->

<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable = no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <title>3D Hartwig chess set in HTML/CSS/JS</title>
    <link rel="apple-touch-icon"
      href="{!! asset('img/third_party_html5/3D-Hartwig-chess-set/apple-touch-icon.png') !!}" />
    <link rel="stylesheet" type="text/css" media="screen"
      href="{!! asset('css/third_party_html5/3dhartwigchess.css') !!}" />

    <script src="{!! asset('js/cdnizerload.esp.js') !!}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script>if(!(prefixfree)) cdnizerLoad("js/prefixfree.min.js");</script>

  </head>

  <body>
    <div id="app" class="loading" data-theme="classic" data-frame="on" data-menu="main">
    <div id="" class="" data-theme="" data-frame="" data-menu="">
      <div id="logo">
        <div class="symbol"><div></div><div></div><div></div><div></div><div></div><div></div></div>
        <div class="symbol"><div></div><div></div><div></div><div></div><div></div><div></div></div>
        <div class="symbol"><div></div><div></div><div></div><div></div><div></div><div></div></div>
        <div class="symbol"><div></div><div></div><div></div><div></div><div></div><div></div></div>
        <div class="symbol"><div></div><div></div><div></div><div></div><div></div><div></div></div>
      </div>
      <div id="overlay"></div>
      <div id="menu" class="main">
        <img id ="logoimg" src="{!! asset('img/third_party_html5/3D-Hartwig-chess-set/logo.png') !!}"
          alt="hartwig chess set" />
        <section id="panes">
          <section id="themes" class="pane">
            <div id="themes-box">
              <div class="set-theme" data-theme="classic"><div class="cube"></div></div>
              <div class="set-theme" data-theme="marble"><div class="cube"></div></div>
              <div class="set-theme" data-theme="flat"><div class="cube"></div></div>
              <div class="set-theme" data-theme="wireframe"><div class="cube"></div></div>
            </div>
            <input type="checkbox" id="frame-switch" onchange="toggleFrame(this)"/>
            <label for="frame-switch" class="btn white switch">Border</label>
            <button type="button" class="btn menu-nav" data-menu="main">Back</button>
          </section>
          <section id="main" class="pane">
            <h1>3D Hartwig chess set</h1>
            <p>done in HTML/CSS/JS by <a href="http://twitter.com/juliangarnier" target="_blank">@JulianGarnier</a></p>
            <button type="button" class="btn white menu-nav" data-menu="themes">Themes</button>
            <button type="button" id="continue" class="btn">Play</button>
            <button type="button" class="btn white menu-nav" data-menu="about">About</button>
          </section>
          <section id="about" class="pane">
            <h1>About</h1>
            <p>Design and code by <a href="http://twitter.com/juliangarnier" target="_blank">@JulianGarnier</a></p>
            <p>Works only in webkit.</p>
            <p>Licensed under the MIT license.</p>
            <p>Fork me on <a href="https://github.com/juliangarnier/3D-Artwig-chess-set" target="_blanc">Github<a></p>
            <h2>Libraries</h2>
            <p>Lighting effect : <a href="http://photon.attasi.com" target="_blank">Photon</a><br>
              Moves and validation : <a href="https://github.com/jhlywa/chess.js" target="_blank">Chess.js</a></p>
            <button type="button" class="btn menu-nav" data-menu="main">Back</button>
          </section>
        </section>
      </div>
      <div id="top-bar">
        <button type="button" class="btn icon" data-state="inactive" id="undo"></button>
        <p id="log"></p>
        <button type="button" class="btn icon" id="open-menu"></button>
      </div>
      <div id="container">
        <div id="scene">
          <div id="table">
            <div id="b-jail" class="jail"></div>
            <div id="frame"></div>
            <table id="board">
              <thead>
                <tr>
                  <th></th>
                  <th><span>a</span></th>
                  <th><span>b</span></th>
                  <th><span>c</span></th>
                  <th><span>d</span></th>
                  <th><span>e</span></th>
                  <th><span>f</span></th>
                  <th><span>g</span></th>
                  <th><span>h</span></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th><span>8</span></th>
                  <td id="a8" class="square"></td>
                  <td id="b8" class="square"></td>
                  <td id="c8" class="square"></td>
                  <td id="d8" class="square"></td>
                  <td id="e8" class="square"></td>
                  <td id="f8" class="square"></td>
                  <td id="g8" class="square"></td>
                  <td id="h8" class="square"></td>
                  <th><span>8</span></th>
                </tr>
                <tr>
                  <th><span>7</span></th>
                  <td id="a7" class="square"></td>
                  <td id="b7" class="square"></td>
                  <td id="c7" class="square"></td>
                  <td id="d7" class="square"></td>
                  <td id="e7" class="square"></td>
                  <td id="f7" class="square"></td>
                  <td id="g7" class="square"></td>
                  <td id="h7" class="square"></td>
                  <th><span>7</span></th>
                </tr>
                <tr>
                  <th><span>6</span></th>
                  <td id="a6" class="square"></td>
                  <td id="b6" class="square"></td>
                  <td id="c6" class="square"></td>
                  <td id="d6" class="square"></td>
                  <td id="e6" class="square"></td>
                  <td id="f6" class="square"></td>
                  <td id="g6" class="square"></td>
                  <td id="h6" class="square"></td>
                  <th><span>6</span></th>
                </tr>
                <tr>
                  <th><span>5</span></th>
                  <td id="a5" class="square"></td>
                  <td id="b5" class="square"></td>
                  <td id="c5" class="square"></td>
                  <td id="d5" class="square"></td>
                  <td id="e5" class="square"></td>
                  <td id="f5" class="square"></td>
                  <td id="g5" class="square"></td>
                  <td id="h5" class="square"></td>
                  <th><span>5</span></th>
                </tr>
                <tr>
                  <th><span>4</span></th>
                  <td id="a4" class="square"></td>
                  <td id="b4" class="square"></td>
                  <td id="c4" class="square"></td>
                  <td id="d4" class="square"></td>
                  <td id="e4" class="square"></td>
                  <td id="f4" class="square"></td>
                  <td id="g4" class="square"></td>
                  <td id="h4" class="square"></td>
                  <th><span>4</span></th>
                </tr>
                <tr>
                  <th><span>3</span></th>
                  <td id="a3" class="square"></td>
                  <td id="b3" class="square"></td>
                  <td id="c3" class="square"></td>
                  <td id="d3" class="square"></td>
                  <td id="e3" class="square"></td>
                  <td id="f3" class="square"></td>
                  <td id="g3" class="square"></td>
                  <td id="h3" class="square"></td>
                  <th><span>3</span></th>
                </tr>
                <tr>
                  <th><span>2</span></th>
                  <td id="a2" class="square"></td>
                  <td id="b2" class="square"></td>
                  <td id="c2" class="square"></td>
                  <td id="d2" class="square"></td>
                  <td id="e2" class="square"></td>
                  <td id="f2" class="square"></td>
                  <td id="g2" class="square"></td>
                  <td id="h2" class="square"></td>
                  <th><span>2</span></th>
                </tr>
                <tr>
                  <th><span>1</span></th>
                  <td id="a1" class="square"></td>
                  <td id="b1" class="square"></td>
                  <td id="c1" class="square"></td>
                  <td id="d1" class="square"></td>
                  <td id="e1" class="square"></td>
                  <td id="f1" class="square"></td>
                  <td id="g1" class="square"></td>
                  <td id="h1" class="square"></td>
                  <th><span>1</span></th>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th></th>
                  <th><span>a</span></th>
                  <th><span>b</span></th>
                  <th><span>c</span></th>
                  <th><span>d</span></th>
                  <th><span>e</span></th>
                  <th><span>f</span></th>
                  <th><span>g</span></th>
                  <th><span>h</span></th>
                  <th></th>
                </tr>
              </tfoot>
            </table>
          </div>
          <div id="w-jail" class="jail"></div>
        </div>
        <div id="pieces">
          <div id="p" class="piece pawn">
            <div class="poly-group">
              <div class="poly small-cube">
                <div class="ft face"></div>
                <div class="bk face"></div>
                <div class="rt face"></div>
                <div class="lt face"></div>
                <div class="tp face"></div>
              </div>
            </div>
          </div>
          <div id="r" class="piece rook">
            <div class="poly-group">
              <div class="poly big-cube">
                <div class="ft face"></div>
                <div class="bk face"></div>
                <div class="rt face"></div>
                <div class="lt face"></div>
                <div class="tp face"></div>
              </div>
            </div>
          </div>
          <div id="n" class="piece knight">
            <div class="poly-group bottom">
              <div class="poly a">
                <div class="bk face"></div>
                <div class="rt face"></div>
                <div class="lt face"></div>
              </div>
              <div class="poly b">
                <div class="ft face"></div>
                <div class="tp face"></div>
              </div>
              <div class="poly c">
                <div class="bk face"></div>
                <div class="rt face"></div>
                <div class="lt face"></div>
              </div>
            </div>
            <div class="poly-group top">
              <div class="poly a">
                <div class="bk face"></div>
                <div class="rt face"></div>
                <div class="lt face"></div>
                <div class="tp face"></div>
              </div>
              <div class="poly b">
                <div class="ft face"></div>
                <div class="tp face"></div>
              </div>
              <div class="poly c">
                <div class="bk face"></div>
                <div class="rt face"></div>
                <div class="lt face"></div>
              </div>
            </div>
          </div>
          <div id="b" class="piece bishop">
            <div class="poly-group rectangle a">
              <div class="poly">
                <div class="rt face"></div>
                <div class="lt face"></div>
                <div class="tp face"></div>
              </div>
            </div>
            <div class="poly-group rectangle b">
              <div class="poly">
                <div class="rt face"></div>
                <div class="lt face"></div>
                <div class="tp face"></div>
              </div>
            </div>
            <div class="poly-group rectangle b prim">
              <div class="poly">
                <div class="rt face"></div>
                <div class="lt face"></div>
                <div class="tp face"></div>
              </div>
            </div>
            <div class="poly-group corners a">
              <div class="poly big-cube">
                <div class="ft face"></div>
                <div class="bk face"></div>
                <div class="rt face"></div>
                <div class="lt face"></div>
              </div>
            </div>
            <div class="poly-group corners b">
              <div class="poly big-cube">
                <div class="ft face"></div>
                <div class="bk face"></div>
                <div class="rt face"></div>
                <div class="lt face"></div>
              </div>
            </div>
          </div>
          <div id="q" class="piece queen">
            <div class="poly-group bottom">
              <div class="poly big-cube">
                <div class="ft face"></div>
                <div class="bk face"></div>
                <div class="rt face"></div>
                <div class="lt face"></div>
                <div class="tp face"></div>
              </div>
            </div>
            <div class="poly-group top">
              <div class="poly">
                <div class="sphere"></div>
              </div>
            </div>
          </div>
          <div id="k" class="piece king">
            <div class="poly-group bottom">
              <div class="poly big-cube">
                <div class="ft face"></div>
                <div class="bk face"></div>
                <div class="rt face"></div>
                <div class="lt face"></div>
                <div class="tp face"></div>
              </div>
            </div>
            <div class="poly-group top">
              <div class="poly small-cube">
                <div class="ft face"></div>
                <div class="bk face"></div>
                <div class="rt face"></div>
                <div class="lt face"></div>
                <div class="tp face"></div>
              </div>
            </div>
          </div>
          </div>
        </div>
        <div id="promotion"></div>
      </div>
    </div>

    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script>if(!(jquery)) cdnizerLoad("js/jquery.min.js");</script>
    <script src='//photon.attasi.com/js/photon.min.js'></script>
    <script>if(!(photon)) cdnizerLoad("js/tp/photon.min.js");</script>

    <script src="{!! asset('js/third_party_html5/3dhartwigchess.libs.js') !!}"></script>
    <script src="{!! asset('js/third_party_html5/3dhartwigchess.app.js') !!}"></script>

  </body>
</html>
