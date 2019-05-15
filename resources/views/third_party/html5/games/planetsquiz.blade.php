<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/jcoulterdesign/pen/eJGoOx.

Fun little interactive planets quiz
-->

<!--
Copyright (c) 2019 by Jamie Coulter (https://codepen.io/jcoulterdesign/pen/eJGoOx)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Planets Quiz</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/planetsquiz.css') !!}">
</head>

<body>
  <div class='overlay'></div>
  <div class='timer'>0 seconds</div>
  <div class='intro modal'>
    <div class='intro modal_inner'>
      <div class='intro modal_inner__close c_modal st'>
        x
      </div>
      <div class='intro modal_inner__title'>
        <h2>Planet quiz</h2>
      </div>
      <div class='intro modal_inner__text'>
        <p>Drag the planets in the correct order as fast as you can!</p>
      </div>
      <div class='intro modal_inner__image'>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/sdfsdfsdf.gif'>
      </div>
      <div class='intro modal_inner__cta c_modal'>
        <button class='st'>Lets go!</button>
      </div>
    </div>
  </div>
  <div class='winner modal'>
    <div class='winner modal_inner'>
      <div class='winner modal_inner__title'>
        <h2>
          Well done, you won in
          <span class='t'>10.00</span>
        </h2>
      </div>
      <div class='winner modal_inner__text'>
        <p>You are a proper clever cloggs! Why not share this with a friend and see if they are as smart as you!</p>
      </div>
      <div class='winner modal_inner__cta'>
        <button class='cp'>
          <a href='https://www.codepen.io/jcoulterdesign' target='_blank'>Follow me on Codepen</a>
        </button>
        <button class='tw'>
          Tweet
        </button>
        <button class='fb'>
          Share on facebook
        </button>
      </div>
      <div class='winner modal_inner__restart'>
      </div>
    </div>
  </div>
  <div class='planets'>
    <div class='planets_stars'></div>
    <div class='planets_container'>
      <div class='planets_container__title'>
        <h1>Planets quiz</h1>
      </div>
      <div class='planets_container__title'>
        <h3>Drag the planets into the correct order</h3>
      </div>
      <div class='planets_container__planets'>
        <div class='planet_wrap'>
          <div class='planet' data-planet='venus'>
            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/pq_venus.png'>
          </div>
          <span>Venus</span>
        </div>
        <div class='planet_wrap'>
          <div class='planet' data-planet='earth'>
            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/pq_earth.png'>
          </div>
          <span>Earth</span>
        </div>
        <div class='planet_wrap'>
          <div class='planet' data-planet='saturn'>
            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/pq_saturn.png'>
          </div>
          <span>Saturn</span>
        </div>
        <div class='planet_wrap'>
          <div class='planet' data-planet='neptune'>
            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/pq_neptune.png'>
          </div>
          <span>Neptune</span>
        </div>
        <div class='planet_wrap'>
          <div class='planet' data-planet='mercury'>
            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/pq_mercury.png'>
          </div>
          <span>Mercury</span>
        </div>
        <div class='planet_wrap'>
          <div class='planet' data-planet='mars'>
            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/pq_mars.png'>
          </div>
          <span>Mars</span>
        </div>
        <div class='planet_wrap'>
          <div class='planet' data-planet='jupiter'>
            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/pq_jupiter.png'>
          </div>
          <span>Jupiter</span>
        </div>
        <div class='planet_wrap'>
          <div class='planet' data-planet='uranus'>
            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/pq_uranus.png'>
          </div>
          <span>Uranus</span>
        </div>
      </div>
      <div class='planets_container__quiz'>
        <div class='planet_holder sun null' data-planet='sun'>
          <span>?</span>
          <div class='planet_answer'>
            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/pq_sun.png'>
          </div>
        </div>
        <div class='planet_holder mercury' data-planet='mercury'>
          <span>?</span>
          <div class='planet_answer'>
            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/pq_mercury.png'>
          </div>
        </div>
        <div class='planet_holder venus' data-planet='venus'>
          <span>?</span>
          <div class='planet_answer'>
            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/pq_venus.png'>
          </div>
        </div>
        <div class='planet_holder earth' data-planet='earth'>
          <span>?</span>
          <div class='planet_answer'>
            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/pq_earth.png'>
          </div>
        </div>
        <div class='planet_holder mars' data-planet='mars'>
          <span>?</span>
          <div class='planet_answer'>
            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/pq_mars.png'>
          </div>
        </div>
        <div class='planet_holder jupiter' data-planet='jupiter'>
          <span>?</span>
          <div class='planet_answer'>
            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/pq_jupiter.png'>
          </div>
        </div>
        <div class='planet_holder saturn' data-planet='saturn'>
          <span>?</span>
          <div class='planet_answer'>
            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/pq_saturn.png'>
          </div>
        </div>
        <div class='planet_holder uranus' data-planet='uranus'>
          <span>?</span>
          <div class='planet_answer'>
            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/pq_uranus.png'>
          </div>
        </div>
        <div class='planet_holder neptune' data-planet='neptune'>
          <span>?</span>
          <div class='planet_answer'>
            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/pq_neptune.png'>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
  <script src="{!! asset('js/third_party_html5/planetsquiz.js') !!}"></script>
</body>
</html>
