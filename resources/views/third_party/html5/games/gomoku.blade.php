<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/mudrenok/pen/gpMXgg.

Gomoku 5 in a row game.
-->

<!--
Copyright (c) 2019 by Anton Mudrenok (https://codepen.io/mudrenok/pen/gpMXgg)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Gomoku JS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/gomoku.css') !!}" />
</head>

<body>

  <section>
    <div class="controls">
      <div class="newGameCtrl">
        <input type="checkbox" id="check"/>
        <label class="newMain" for="check">
          <div class="newMainText">new</div>
        </label>
        <div class="newContainer">
          <div class="newPlate">
            <div class="boardCellCircle" id="new-O"></div>
          </div>
          <div class="newPlate">
            <div class="boardCellCross" id="new-X"></div>
          </div>
        </div>
      </div>
      <div class="sizeCtrl">
        <div class="newMain">
          <div class="newMainText" id="scale-Up">+</div>
        </div>
      </div>
      <div class="sizeCtrl">
        <div class="newMain">
          <div class="newMainText" id="scale-Down">-</div>
        </div>
      </div>
      <div class="messages">
        <div class="messagesContainer">
          <div class="newMainText" id="message">try to get 5 in a row!</div>
        </div>
      </div>
    </div>
    <div class="board">
      <div class="boardRow">
        <div class="boardCol">
          <div class="boardCell" id="0-0"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="0-1"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="0-2"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="0-3"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="0-4"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="0-5"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="0-6"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="0-7"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="0-8"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="0-9"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="0-10"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="0-11"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="0-12"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="0-13"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="0-14"></div>
        </div>
      </div>
      <div class="boardRow">
        <div class="boardCol">
          <div class="boardCell" id="1-0"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="1-1"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="1-2"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="1-3"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="1-4"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="1-5"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="1-6"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="1-7"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="1-8"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="1-9"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="1-10"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="1-11"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="1-12"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="1-13"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="1-14"></div>
        </div>
      </div>
      <div class="boardRow">
        <div class="boardCol">
          <div class="boardCell" id="2-0"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="2-1"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="2-2"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="2-3"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="2-4"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="2-5"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="2-6"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="2-7"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="2-8"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="2-9"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="2-10"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="2-11"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="2-12"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="2-13"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="2-14"></div>
        </div>
      </div>
      <div class="boardRow">
        <div class="boardCol">
          <div class="boardCell" id="3-0"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="3-1"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="3-2"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="3-3"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="3-4"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="3-5"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="3-6"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="3-7"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="3-8"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="3-9"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="3-10"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="3-11"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="3-12"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="3-13"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="3-14"></div>
        </div>
      </div>
      <div class="boardRow">
        <div class="boardCol">
          <div class="boardCell" id="4-0"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="4-1"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="4-2"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="4-3"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="4-4"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="4-5"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="4-6"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="4-7"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="4-8"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="4-9"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="4-10"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="4-11"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="4-12"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="4-13"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="4-14"></div>
        </div>
      </div>
      <div class="boardRow">
        <div class="boardCol">
          <div class="boardCell" id="5-0"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="5-1"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="5-2"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="5-3"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="5-4"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="5-5"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="5-6"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="5-7"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="5-8"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="5-9"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="5-10"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="5-11"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="5-12"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="5-13"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="5-14"></div>
        </div>
      </div>
      <div class="boardRow">
        <div class="boardCol">
          <div class="boardCell" id="6-0"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="6-1"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="6-2"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="6-3"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="6-4"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="6-5"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="6-6"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="6-7"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="6-8"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="6-9"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="6-10"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="6-11"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="6-12"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="6-13"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="6-14"></div>
        </div>
      </div>
      <div class="boardRow">
        <div class="boardCol">
          <div class="boardCell" id="7-0"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="7-1"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="7-2"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="7-3"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="7-4"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="7-5"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="7-6"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="7-7"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="7-8"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="7-9"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="7-10"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="7-11"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="7-12"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="7-13"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="7-14"></div>
        </div>
      </div>
      <div class="boardRow">
        <div class="boardCol">
          <div class="boardCell" id="8-0"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="8-1"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="8-2"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="8-3"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="8-4"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="8-5"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="8-6"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="8-7"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="8-8"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="8-9"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="8-10"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="8-11"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="8-12"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="8-13"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="8-14"></div>
        </div>
      </div>
      <div class="boardRow">
        <div class="boardCol">
          <div class="boardCell" id="9-0"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="9-1"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="9-2"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="9-3"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="9-4"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="9-5"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="9-6"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="9-7"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="9-8"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="9-9"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="9-10"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="9-11"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="9-12"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="9-13"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="9-14"></div>
        </div>
      </div>
      <div class="boardRow">
        <div class="boardCol">
          <div class="boardCell" id="10-0"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="10-1"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="10-2"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="10-3"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="10-4"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="10-5"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="10-6"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="10-7"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="10-8"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="10-9"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="10-10"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="10-11"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="10-12"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="10-13"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="10-14"></div>
        </div>
      </div>
      <div class="boardRow">
        <div class="boardCol">
          <div class="boardCell" id="11-0"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="11-1"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="11-2"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="11-3"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="11-4"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="11-5"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="11-6"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="11-7"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="11-8"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="11-9"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="11-10"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="11-11"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="11-12"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="11-13"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="11-14"></div>
        </div>
      </div>
      <div class="boardRow">
        <div class="boardCol">
          <div class="boardCell" id="12-0"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="12-1"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="12-2"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="12-3"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="12-4"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="12-5"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="12-6"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="12-7"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="12-8"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="12-9"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="12-10"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="12-11"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="12-12"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="12-13"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="12-14"></div>
        </div>
      </div>
      <div class="boardRow">
        <div class="boardCol">
          <div class="boardCell" id="13-0"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="13-1"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="13-2"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="13-3"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="13-4"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="13-5"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="13-6"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="13-7"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="13-8"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="13-9"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="13-10"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="13-11"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="13-12"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="13-13"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="13-14"></div>
        </div>
      </div>
      <div class="boardRow">
        <div class="boardCol">
          <div class="boardCell" id="14-0"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="14-1"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="14-2"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="14-3"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="14-4"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="14-5"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="14-6"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="14-7"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="14-8"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="14-9"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="14-10"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="14-11"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="14-12"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="14-13"></div>
        </div>
        <div class="boardCol">
          <div class="boardCell" id="14-14"></div>
        </div>
      </div>
    </div>
  </section>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="{!! asset('js/third_party_html5/gomoku.js') !!}"></script>

</body>
</html>
