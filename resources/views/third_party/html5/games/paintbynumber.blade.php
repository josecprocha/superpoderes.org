<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/AnyaCraig/pen/rOeVVE.

A simple JS/jQuery game that allows the user to reveal a picture "hidden" in a grid of divs.
-->

<!--
Copyright (c) 2019 by Anya Craig (https://codepen.io/AnyaCraig/pen/rOeVVE)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Paint by Number</title>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/paintbynumber.css') !!}" />
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Gloria+Hallelujah' rel='stylesheet' type='text/css'>
</head>

<body>

  <!-- Like Paint by Number? Check out my portfolio site at www.anyacraig.com! -->

  <h1>Paint by Number</h1>
  <h2>Pass your mouse over the grid to reveal a painting!</h2>
  <div class="wrapper cf">

    <div class="wrapper-left">
      <div class="pug">
        <img src="https://s-media-cache-ak0.pinimg.com/originals/98/0a/df/980adf6c765534ad6af4cb44e0ab9ebe.jpg" alt="a baby pug">
      </div>
    </div><!-- /.wrapper-left -->

    <div class="wrapper-middle">
      <div class="frame cf"> <!-- this is the brown frame around the "painting" -->
        <div class="first-row">

          <div class="grid blue">
            <div class="grid-content">
              <div>
                <span>1</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid blue">
            <div class="grid-content">
              <div>
                <span>1</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid blue">
            <div class="grid-content">
              <div>
                <span>1</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid blue">
            <div class="grid-content">
              <div>
                <span>1</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid blue">
            <div class="grid-content">
              <div>
                <span>1</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid blue">
            <div class="grid-content">
              <div>
                <span>1</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid blue">
            <div class="grid-content">
              <div>
                <span>1</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid blue">
            <div class="grid-content">
              <div>
                <span>1</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

        </div><!-- /.first-row -->

        <div class="second-row">

          <div class="grid blue">
            <div class="grid-content">
              <div>
                <span>1</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid blue">
            <div class="grid-content">
              <div>
                <span>1</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid blue">
            <div class="grid-content">
              <div>
                <span>1</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid blue">
            <div class="grid-content">
              <div>
                <span>1</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid blue">
            <div class="grid-content">
              <div>
                <span>1</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid yellow">
            <div class="grid-content">
              <div>
                <span>2</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid blue">
            <div class="grid-content">
              <div>
                <span>1</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid blue">
            <div class="grid-content">
              <div>
                <span>1</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

        </div><!-- /.second-row -->

        <div class="third-row">

          <div class="grid blue">
            <div class="grid-content">
              <div>
                <span>1</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid blue">
            <div class="grid-content">
              <div>
                <span>1</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid blue">
            <div class="grid-content">
              <div>
                <span>1</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid blue">
            <div class="grid-content">
              <div>
                <span>1</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid blue">
            <div class="grid-content">
              <div>
                <span>1</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid blue">
            <div class="grid-content">
              <div>
                <span>1</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid blue">
            <div class="grid-content">
              <div>
                <span>1</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid blue">
            <div class="grid-content">
              <div>
                <span>1</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

        </div><!-- /.third-row -->

        <div class="fouth-row">
          <div class="grid green">
            <div class="grid-content">
              <div>
                <span>3</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid green">
            <div class="grid-content">
              <div>
                <span>3</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid green">
            <div class="grid-content">
              <div>
                <span>3</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid green">
            <div class="grid-content">
              <div>
                <span>3</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid green">
            <div class="grid-content">
              <div>
                <span>3</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid green">
            <div class="grid-content">
              <div>
                <span>3</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid green">
            <div class="grid-content">
              <div>
                <span>3</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid green">
            <div class="grid-content">
              <div>
                <span>3</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

        </div><!-- /.fourth-row -->

        <div class="fifth-row">
          <div class="grid green">
            <div class="grid-content">
              <div>
                <span>3</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid green">
            <div class="grid-content">
              <div>
                <span>3</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid green">
            <div class="grid-content">
              <div>
                <span>3</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid green">
            <div class="grid-content">
              <div>
                <span>3</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid green">
            <div class="grid-content">
              <div>
                <span>3</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid green">
            <div class="grid-content">
              <div>
                <span>3</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid green">
            <div class="grid-content">
              <div>
                <span>3</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

          <div class="grid green">
            <div class="grid-content">
              <div>
                <span>3</span>
              </div>
            </div><!-- /.grid-content -->
          </div><!-- /.grid -->

        </div><!-- /.fifth-row -->
      </div><!-- /.frame -->
    </div><!-- /.wrapper-middle -->

    <div class="wrapper-right">
      <div class="duck">
        <img src="http://cdn.wallpapersafari.com/60/23/cag3KS.jpg" alt="a baby duck">
      </div>
    </div><!-- /.wrapper-right -->

  </div><!-- /.wrapper -->

  <p>&copy2015 <a href="http://www.anyacraig.com">Anya Craig (anyacraig.com)</a></p>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="{!! asset('js/third_party_html5/paintbynumber.js') !!}"></script>

</body>
</html>
