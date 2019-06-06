<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/interaminense/pen/Kgdkor.

This mini game is designed to enhance the mind of those who practice the mathematical operations. It is simple to play and try to beat your own record
-->

<!--
Copyright (c) 2019 by Adriano Interaminense (https://codepen.io/interaminense/pen/Kgdkor)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>MATHEMAT1CS</title>
  {{-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'> --}}
  <link rel="stylesheet" href="{!! asset('css/animate.min.css') !!}" />
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/mathemat1cs.css') !!}" />
</head>

<body>

  @include('third_party.html5.games.mathemat1cs_angular')

  {{-- <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js'></script> --}}
  <script src="{!! asset('js/angular.min.js') !!}"></script>
  {{-- <script src='https://siddii.github.io/angular-timer/dist/assets/js/angular-timer-all.min.js'></script> --}}
  <script src="{!! asset('js/angular-timer.min.js') !!}"></script>
  <script src="{!! asset('js/third_party_html5/mathemat1cs.js') !!}"></script>

</body>
</html>