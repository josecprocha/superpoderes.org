<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/Clowerweb/pen/FDcxe.

Third checkpoint in the Blackjack game development cycle, now with more polish! Woohoo! Have fun :D
-->

<!--
Copyright (c) 2019 by Chris Clower (https://codepen.io/Clowerweb/pen/FDcxe)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

{{--
Scripts that only it's external version works:
https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css
https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js
--}}

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Blackjack v.3</title>
  <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css'>

  <style>

/* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
div[id*="pcard"] .popover { left: -95px !important; }
div[id*="dcard"] .popover { left: -105px !important; }

#wrapper {
	margin: 0 auto;
	width: 1000px;
}

h3 {
	margin: 5px 0;
	text-align: center;
}

#game {
	background: transparent url('https://www.clowerweb.com/cors/blackjack/table.png') 0 0 no-repeat;
	border-radius: 5px;
	color: #333;
	font: 14px/17px Helvetica, Arial, Verdana, sans-serif;
	height: 550px;
	margin: 0 auto;
	position: relative;
	width: 1000px;
}

div#dscore {
	position: absolute;
	bottom: 30px;
}

div#pscore {
	position: absolute;
	bottom: 15px;
}

div#phand, div#dhand {
	font-weight: 700;
	/*left: 50%;*/
	position: absolute;
	top: -122px;
	white-space: nowrap;
	width: 1000px;
}

div#phand { }

div#dhand { }

div[class*="card"] {
	background: #FFF;
	border: 6px solid #FFF;
	border-radius: 5px;
	box-shadow: 0 0 1px #000;
	display: inline-block;
	height: 106px;
	margin: 0 5px;
	position: absolute;
	right: 0;
	width: 79px;
}

.down {
	background: #B20000 url('https://www.clowerweb.com/cors/blackjack/card.png') center center no-repeat !important;
}

span.pos-0 {
	left: 0;
	position: absolute;
	top: 0;
}

span.pos-1 {
	bottom: 0;
	filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
	position: absolute;
	right: 0;
	transform: rotate(180deg);
  -moz-transform: rotate(180deg);
  -webkit-transform: rotate(180deg);
}

span.rank {
	font-size: 18px;
}

span.suit {
	font-size: 22px;
}

.black {
	color: #000;
}

.red {
	color: #F00;
}

#result {
	position: absolute;
	bottom: 0;
}

#actions {
	margin: 15px 0 0 0;
    text-align: center;
}

input#wager { margin-left: 5px; position: relative; top: 4px }

#money, #money:before {
	border-radius: 5px;
	bottom: 0;
	height: 55px;
	padding: 7px;
	position: absolute;
	right: 0;
	width: 250px;
}

#money {
	border: 2px solid #FFC926;
}

#money:before {
	background: #333;
	content: '';
	opacity: 0.8;
}

	#cash, #bank {
		color: #FFF;
		font: 700 18px/20px Helvetica, Arial, Verdana, sans-serif;
		margin: 12px 0;
		position: relative;
		text-shadow: 1px 1px #000;
		z-index: 1;
	}

#alert {
	margin: 0 auto;
	opacity: 0.95;
	position: relative;
	text-align: center;
	top: 34.5%;
	width: 500px;
	z-index: 0;
}
  </style>
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script> --}}
  <script src="{!! asset('js/prefixfree.min.js') !!}"></script>
</head>

<body>

  <div id="wrapper">
    <div id="game">
      <div id="alert" class="alert alert-error hide"><span></span></div>
      <div id="dealer">
        <div id="dhand"></div>
      </div>
      <div id="player">
        <div id="phand"></div>
      </div>
      <div id="money">
        <span id="cash">Cash: $<span></span></span>
        <div id="bank">Winnings: $<span></span></div>
      </div>
    </div>
    <div id="actions">
      <button id="deal" class="btn">Deal!</button>
      <button id="hit" class="btn" disabled>Hit</button>
      <button id="stand" class="btn" disabled>Stand</button>
      <button id="double" class="btn" disabled>Double Down</button>
      <button id="split" class="btn" disabled>Split</button>
      <button id="insurance" class="btn" disabled>Insurance</button>
      <strong>Wager:</strong> $<input id="wager" class="input-small" type="text" />
    </div>
  </div>
  <div id="myModal" class="modal hide fade">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h3>Out of cash!</h3>
    </div>
    <div class="modal-body">
      <p>You ran out of cash, but you spot an ATM nearby. Would you like to withdraw another $1,000 and try your luck again?</p>
    </div>
    <div class="modal-footer">
      <a href="#" id="cancel" class="btn">Nah</a>
      <a href="#" id="newGame" class="btn btn-primary">Yes!</a>
    </div>
  </div>

  {{-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> --}}
  <script src="{!! asset('js/jquery.min.js') !!}"></script>
  <script src='https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js'></script>
  {{-- <script src="{!! asset('js/bootstrap.min.js') !!}"></script> --}}
  <script src="{!! asset('js/third_party_html5/blackjack.js') !!}"></script>

</body>
</html>
