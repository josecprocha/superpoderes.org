<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/Loupax/pen/ykrbz.

Inspired from Mahjongg Ember made by snakeye at http://snakeye.github.io/mahjongg-ember/

Attempt to port this using angular.js instead of ember
-->

<!--
Copyright (c) 2019 by Loupasakis Kostas (https://codepen.io/Loupax/pen/ykrbz)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Mahjongg in Angular.JS</title>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/mahjongg.css') !!}" />
</head>

<body>

  <div ng-app="mahjongg" id="game">
    <div ng-init="initialize()" ng-controller="BoardController">

      @include('third_party.html5.games.mahjongg_angular')

      <h1 ng-if="tiles.length === 0">You won!</h1>
      <button ng-click="initialize()">New Game</button>
    </div>
  </div>

  {{-- <script src='http://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js'></script> --}}
  <script src="{!! asset('js/angular.min.js') !!}"></script>
  <script src="{!! asset('js/third_party_html5/mahjongg.js') !!}"></script>

</body>
</html>
