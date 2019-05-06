<!-- https://codepen.io/eliortabeka/pen/yOrrxG -->

{{-- PUG to HTML: https://pughtml.com/ --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hanoi</title></title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Coda'>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/sweetalert2/3.0.3/sweetalert2.min.css'>
  <link rel="stylesheet" href="{!! asset('test/html5/hanoi.css') !!}" />
</head>
<body>
  <div id="canves">
    <div class="restart">
      <i class="fa fa-repeat"></i>
    </div>
    <div class="curtain"></div>
    <ul id="score-panel">
      <li><i class="fa fa-star"></i></li>
      <li><i class="fa fa-star"></i></li>
      <li><i class="fa fa-star"></i></li>
      <li>
        <h1>
          <span id="moves-num"></span>
          <span>Moves</span>
        </h1>
      </li>
    </ul>
    <ul class="tower" id="tower-1"></ul>
    <ul class="tower" id="tower-2"></ul>
    <ul class="tower" id="tower-3"></ul>
  </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
  <script src='https://cdn.jsdelivr.net/sweetalert2/3.0.3/sweetalert2.min.js'></script>
  <script src="{!! asset('test/html5/hanoi.js') !!}"></script>
</body>
</html>
