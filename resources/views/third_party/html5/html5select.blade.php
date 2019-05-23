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
  <div class="jumbotron text-white rounded bg-dark"
    style="
    background-image: url('https://images.unsplash.com/photo-1554576575-a4e7b6e8409d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2048&q=80');
    /* https://unsplash.com/photos/Gcc87LTQXDg */
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    ">
    <h1 class="display-4">Mouse</h1>
    <p class="lead">Games to train fine motor coordination using the mouse.</p>
  </div>
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
          <a href="{{ url('/third_party/html5/planetdefense') }}" class="btn btn-danger disabled">Play!</a>
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

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/powersurge.jpg') }}" alt="Power Surge image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Power Surge</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/powersurge') }}" class="btn btn-dark disabled">Play!</a>
        </div>
      </div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/reactionB.jpg') }}" alt="Reaction image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Reaction</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/reactionB') }}" class="btn btn-dark">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
      <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/shootthetarget.jpg') }}" alt="Shoot the target image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Shoot the target!!</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/shootthetarget') }}" class="btn btn btn-danger disabled">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/toddlerrainbow.jpg') }}" alt="Toddler Rainbow image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Toddler Rainbow</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/toddlerrainbow') }}" class="btn btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
      <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/ultimatearcadeshooter.jpg') }}" alt="Ultimate Arcade Shooter image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Ultimate Arcade Shooter</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/ultimatearcadeshooter') }}" class="btn btn btn-danger disabled">Play!</a>
        </div>
      </div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/connectingdots.jpg') }}" alt="Connecting Dots image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Connecting Dots</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/connectingdots') }}" class="btn btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
      <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
      <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/fishing.jpg') }}" alt="Fishing image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Fishing</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/fishing') }}" class="btn btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/fish.jpg') }}" alt="Fish image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Fish</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/fish') }}" class="btn btn btn-primary disabled">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/vdasteroids.jpg') }}" alt="Vincent Danna's Asteroids image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Vincent Danna's Asteroids</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/vdasteroids') }}" class="btn btn btn-danger disabled">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
      <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/breakout.jpg') }}" alt="Breakout image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Breakout</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/breakout') }}" class="btn btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
      <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/toddlercolor.jpg') }}" alt="Toddler Color Game image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Toddler Color Game</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/toddlercolor') }}" class="btn btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/whackamole.jpg') }}" alt="Whack a Mole image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Whack a Mole</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/whackamole') }}" class="btn btn btn-danger disabled">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/whackamoleB.jpg') }}" alt="Whack a Mole and Simon image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Whack a Mole and Simon</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/whackamoleB') }}" class="btn btn btn-danger disabled">Play!</a>
        </div>
      </div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/paintbynumber.jpg') }}" alt="Paint by Number image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Paint by Number</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/paintbynumber') }}" class="btn btn btn-primary disabled">Play!</a>
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
  <div class="jumbotron text-white rounded bg-dark"
    style="
    background-image: url('https://images.unsplash.com/photo-1516721951823-4f214c97eb4d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2048&q=80');
    /* https://unsplash.com/photos/kr-jmsASg8M */
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    ">
    <h1 class="display-4">Keyboard Action</h1>
    <p class="lead">Action games using the arrow keys and space button to train coordination and intentional use of the keyboard.</p>
  </div>
  <br />


  <div class="container-fluid" id="content">
    <div class="card-deck">

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/savetheprincess.jpg') }}" alt="Save The Princess image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Save the Princess</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/savetheprincess') }}" class="btn btn-danger disabled">Play!</a>
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
          <a href="{{ url('/third_party/html5/asteroids') }}" class="btn btn-danger disabled">Play!</a>
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

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/asteroidsB.jpg') }}" alt="Asteroids image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Asteroids</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/asteroidsB') }}" class="btn btn-dark disabled">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
      <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/cybersnake.jpg') }}" alt="MVC Cyber Snake image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">MVC Cyber Snake</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/cybersnake') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/snake.jpg') }}" alt="Snake image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Snake</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/snake') }}" class="btn btn-dark disabled">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
      <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/snakeB.jpg') }}" alt="Snake image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Snake</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/snakeB') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/simplesnake.jpg') }}" alt="Simple Snake image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Simple Snake</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/simplesnake') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
      <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
      <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/isometricsnake.jpg') }}" alt="Isometric Snake image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Isometric Snake</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/isometricsnake') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/snakeC.jpg') }}" alt="Snake image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Snake</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/snakeC') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/platformengine.jpg') }}" alt="Platform Engine image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Platform Engine</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/platformengine') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
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
  <div class="jumbotron text-white rounded bg-dark"
    style="
    background-image: url('https://images.unsplash.com/photo-1547022145-dfc3f3e1bc03?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2048&q=80');
    /* https://unsplash.com/photos/4y3efE_x-NU */
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    ">
    <h1 class="display-4">Puzzles and Mind Sport</h1>
    <p class="lead">Games to welcome children to the world of Mind Sports.</p>
  </div>
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

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/bycss.jpg') }}" alt="Bycss image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Bycss</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/bycss') }}" class="btn btn-dark disabled">Play!</a>
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
  <div class="jumbotron text-white rounded bg-dark"
    style="
    background-image: url('https://images.unsplash.com/photo-1496065187959-7f07b8353c55?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2048&q=80');
    /* https://unsplash.com/photos/vEE00Hx5d0Q */
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    ">
    <h1 class="display-4">Experiments and Science</h1>
    <p class="lead">No game, just simulation of equipment that allows children to learn by experimenting.</p>
  </div>
  <br />

  <div class="container-fluid" id="content">
    <div class="card-deck">

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/planetsquiz.jpg') }}" alt="Planets Quiz image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Planets Quiz</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/planetsquiz') }}" class="btn btn-primary disabled">Play!</a>
        </div>
      </div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/lunarlander.jpg') }}" alt="Lunar Lander image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Lunar Lander</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/lunarlander') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>

    </div>
  </div>

  {{--
    <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
    <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
    <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>
    <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div>
  --}}

  <br />
  <div class="jumbotron text-white rounded bg-dark"
    style="
    background-image: url('https://images.unsplash.com/photo-1452802447250-470a88ac82bc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2048&q=80');
    /* https://unsplash.com/photos/f6Xv0xs9JWg */
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    ">
    <h1 class="display-4">Art</h1>
    <p class="lead">Music, painting and animation.</p>
  </div>
  <br />

  <div class="container-fluid" id="content">
    <div class="card-deck">

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/drumkit.jpg') }}" alt="JavaScript Drum Kit image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">JavaScript Drum Kit</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/drumkit') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/pianokeyboard.jpg') }}" alt="Piano Keyboard image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Piano Keyboard</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/pianokeyboard') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/animatedguitar.jpg') }}" alt="Animated Guitar image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Animated Guitar</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/animatedguitar') }}" class="btn btn-primary disabled">Play!</a>
        </div>
      </div>

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
  <div class="jumbotron text-white rounded bg-dark"
    style="
    background-image: url('https://images.unsplash.com/photo-1542751371-adc38448a05e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2048&q=80');
    /* https://unsplash.com/photos/Mf23RF8xArY */
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    ">
    <h1 class="display-4">Esports and Challenge</h1>
    <p class="lead">Challenging games where you often need to think and act quickly to win challenges.</p>
  </div>
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

    </div>
  </div>

  {{--
    <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
    <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
    <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>
    <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div>
  --}}

  <br />
  <div class="jumbotron text-white rounded bg-dark"
    style="
    background-image: url('https://images.unsplash.com/photo-1419640303358-44f0d27f48e7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2048&q=80');
    /* https://unsplash.com/photos/8muUTAmcWU4 */
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    ">
    <h1 class="display-4">Memory Training</h1>
    <p class="lead">Games where you need to memorize information to win. For Memory Championship.</p>
  </div>
  <br />

  <div class="container-fluid" id="content">
    <div class="card-deck">

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/memory.jpg') }}" alt="Memory image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Memory</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/memory') }}" class="btn btn-primary">Play!</a>
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
  <div class="jumbotron text-white rounded bg-dark"
    style="
    background-image: url('https://images.unsplash.com/photo-1483428400520-675ef69a3bc4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2048&q=80');
    /* https://unsplash.com/photos/vpxeE7s-my4 */
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    ">
    <h1 class="display-4">Friends</h1>
    <p class="lead">Games for two people play on the same computer.</p>
  </div>
  <br />

  <div class="container-fluid" id="content">
    <div class="card-deck">

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/pong.jpg') }}" alt="Pong image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Pong</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/pong') }}" class="btn btn-warning">Play!</a>
        </div>
      </div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/tictactoe.jpg') }}" alt="Tic Tac Toe image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Tic Tac Toe</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/tictactoe') }}" class="btn btn-warning">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/checkers.jpg') }}" alt="Checkers image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Checkers</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/checkers') }}" class="btn btn-warning">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/3dhartwigchess.jpg') }}" alt="3D Hartwig Chess image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">3D Hartwig Chess</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/3dhartwigchess') }}" class="btn btn-dark disabled">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
      <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>

    </div>
  </div>

  {{--
    <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
    <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
    <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>
    <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div>
  --}}

  <br />
  <div class="jumbotron text-white rounded bg-dark"
    style="
    background-image: url('https://images.unsplash.com/photo-1498196645145-687fd3bfe912?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2048&q=80');
    /* https://unsplash.com/photos/mUFFI4CkmAI */
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    ">
    <h1 class="display-4">Fun and Rest</h1>
    <p class="lead">No games, only objects to promote fun.</p>
  </div>
  <br />

  <div class="container-fluid" id="content">
    <div class="card-deck">

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/matchcolor.jpg') }}" alt="Match Color image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Match Color</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/matchcolor') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/paperstonescissors.jpg') }}" alt="Paper Stone Scissors image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Paper - Stone - Scissors</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/paperstonescissors') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>

    </div>
  </div>

  {{--
    <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
    <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
    <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>
    <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div>
  --}}

  <br />
  <div class="jumbotron text-white rounded bg-dark"
    style="
    background-image: url('https://images.unsplash.com/photo-1543839596-4b1b4908d113?ixlib=rb-1.2.1&auto=format&fit=crop&w=2048&q=80');
    /* https://unsplash.com/photos/WczsHLwFmoc */
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    ">
    <h1 class="display-4">Mental Calculation and Math</h1>
    <p class="lead">Games involving numbers, mathematical concepts and mental calculation.</p>
  </div>
  <br />

  <div class="container-fluid" id="content">
    <div class="card-deck">

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/mathness.jpg') }}" alt="Mathness image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Mathness</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/mathness') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/arithmetic.jpg') }}" alt="Arithmetic image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Arithmetic</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/arithmetic') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/bgmath.jpg') }}" alt="Battlestar Galactica Math image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">Battlestar Galactica Math</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/bgmath') }}" class="btn btn-primary">Play!</a>
        </div>
      </div>

      <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>

      <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
        <img class="card-img-top" src="{{ url('/img/third_party_html5/mathemat1cs.jpg') }}" alt="MATHEMATICS image." style="width:128px;height:128px;">
        <div class="card-body">
          <h4 class="card-title">MATHEMAT1CS</h4>
        </div>
        <div class="card-footer bg-transparent">
          <a href="{{ url('/third_party/html5/mathemat1cs') }}" class="btn btn-primary">Play!</a>
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
  <div class="jumbotron text-white rounded bg-dark"
    style="
    background-image: url('https://images.unsplash.com/photo-1534109284468-ad30ffd1f41d?ixlib=rb-1.2.1&auto=format&fit=crop&w=2048&q=80');
    /* https://unsplash.com/photos/ma3ivTHdyxU */
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    ">
    <h1 class="display-4">Language</h1>
    <p class="lead">Reading, writing and language games.</p>
  </div>
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
