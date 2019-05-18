<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Choose Your Game</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

  <!--
    extra small? <576px ?
    wrap every 2 on sm: <div class="w-100 d-none d-sm-block d-md-none"></div>
    wrap every 3 on md: <div class="w-100 d-none d-md-block d-lg-none"></div>
    wrap every 4 on lg: <div class="w-100 d-none d-lg-block d-xl-none"></div>
    wrap every 5 on xl: <div class="w-100 d-none d-xl-block"></div>
    Idea from: https://www.codeply.com/go/nIB6oSbv6q
  -->

  {{--
    <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
    <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
    <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>
    <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div>
  --}}

  <br />
  <h1>Mouse</h1>
  <br />

	<div class="container-fluid" id="content">
    <div class="card-deck">

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/reaction.jpg') }}" alt="Reaction image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">React</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/reaction') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/crosshatch.jpg') }}" alt="Canvas Crosshatch image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Canvas Crosshatch</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/crosshatch') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/pathfinder.jpg') }}" alt="Path Finder image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Path Finder</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/pathfinder') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/platform.jpg') }}" alt="Platform image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Platform</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/platform') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
      <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/planetdefense.jpg') }}" alt="Planet Defense image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Planet Defense</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/planetdefense') }}" class="btn btn-danger">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/mouseminigame.jpg') }}" alt="Mouse Mini Game image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Mouse Mini Game</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/mouseminigame') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
      <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>

    </div>
  </div>

  {{--
    <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
    <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
    <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>
    <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div>
  --}}

  <br />
  <h1>Keyboard Action</h1>
  <br />

  <div class="container-fluid" id="content">
    <div class="card-deck">

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/savetheprincess.jpg') }}" alt="Save The Princess image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Save the Princess</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/savetheprincess') }}" class="btn btn-primary disabled">Play!</a>
        </div>
      </div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/interactivesnake.jpg') }}" alt="Interactive Snake image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Interactive Snake</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/interactivesnake') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/asteroids.jpg') }}" alt="Asteroids image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Asteroids</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/asteroids') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/glitchmaze.jpg') }}" alt="Asteroids image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Glitch Maze</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/glitchmaze') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
      <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/maze.jpg') }}" alt="Maze image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Maze</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/maze') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/crossthestreet.jpg') }}" alt="Cross the Street image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Cross the Street</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/crossthestreet') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
      <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/crosstotheotherside.jpg') }}" alt="Cross to the Other Side image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Cross to the Other Side</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/crosstotheotherside') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

    </div>
  </div>

  {{--
    <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
    <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
    <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>
    <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div>
  --}}

  <br />
  <h1>Puzzles</h1>
  <br />

  <div class="container-fluid" id="content">
    <div class="card-deck">

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/hanoi.jpg') }}" alt="Hanoi image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Tower of Hanoi</h4>
          {{--<p class="card-text">The Tower of Hanoi  is a mathematical game or puzzle. It consists of three rods and a number of disks of different sizes, which can slide onto any rod. The puzzle starts with the disks in a neat stack in ascending order of size on one rod, the smallest at the top, thus making a conical shape.</p>--}}
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/hanoi') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/cubnpup.jpg') }}" alt="Cub n Pup image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Cub n Pup</h4>
          {{--<p class="card-text">Drag cub to star, Drag grid to rotate. This is a proof-of-concept for a game. Basic art, no sound, no options, no polish. But the core game-play is there. It's more of a mobile game, focused on dragging — inspired by Threes.</p>--}}
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/cubnpup') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/tetris.jpg') }}" alt="Tetris image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Tetris</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/tetris') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/swinepeeper.jpg') }}" alt="Swinepeeper image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Swinepeeper</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/swinepeeper') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
      <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/chess.jpg') }}" alt="Chess image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Chess</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/chess') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/tictacdoom.jpg') }}" alt="Tic Tac Doom image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Tic Tac Doom</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/tictacdoom') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
      <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/gomoku.jpg') }}" alt="Gomoku image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Gomoku</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/gomoku') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/mcdraughts.jpg') }}" alt="McDraughts image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">McDraughts</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/mcdraughts') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
      <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/blockpuzzle.jpg') }}" alt="Block Puzzle image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Block Puzzle</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/blockpuzzle') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/mahjongg.jpg') }}" alt="Mahjongg image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Mahjongg</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/mahjongg') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
      <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div>

    </div>
  </div>

  {{--
    <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
    <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
    <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>
    <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div>
  --}}

  <br />
  <h1>Experiments</h1>
  <br />

  <div class="container-fluid" id="content">
    <div class="card-deck">

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/planetsquiz.jpg') }}" alt="Planets Quiz image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Planets Quiz</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/planetsquiz') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

    </div>
  </div>

  {{--
    <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
    <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
    <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>
    <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div>
  --}}

  <br />
  <h1>Fun</h1>
  <br />

  <div class="container-fluid" id="content">
    <div class="card-deck">

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/clicksoccer.jpg') }}" alt="Click Soccer image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Click Soccer</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/clicksoccer') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/pong.jpg') }}" alt="Pong image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Pong</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/pong') }}" class="btn btn-warning">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/tictactoe.jpg') }}" alt="Tic Tac Toe image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Tic Tac Toe</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/tictactoe') }}" class="btn btn-warning">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/checkers.jpg') }}" alt="Checkers image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Checkers</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/checkers') }}" class="btn btn-warning">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
      <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/memory.jpg') }}" alt="Memory image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Memory</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/memory') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/matchcolor.jpg') }}" alt="Match Color image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Match Color</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/matchcolor') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
      <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/paperstonescissors.jpg') }}" alt="Paper Stone Scissors image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Paper - Stone - Scissors</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/paperstonescissors') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

    </div>
  </div>

  {{--
    <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
    <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
    <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>
    <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div>
  --}}

  <br />
  <h1>Math</h1>
  <br />

  <div class="container-fluid" id="content">
    <div class="card-deck">

    </div>
  </div>

  {{--
    <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
    <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
    <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>
    <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div>
  --}}

  <br />
  <h1>Language</h1>
  <br />

  <div class="container-fluid" id="content">
    <div class="card-deck">

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/crosswordgenerator.jpg') }}" alt="Crossword Generator image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Crossword Generator</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/crosswordgenerator') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/wordsearch2.jpg') }}" alt="Word Search 2 image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Word Search 2</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/wordsearch2') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>

    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
