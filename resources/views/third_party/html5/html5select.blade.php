<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Choose Your Game</title>
  {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
  <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />
</head>
<body>

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

  {{--
    extra small? <576px ?
    <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
    <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
    <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>
    <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div>
    Idea from: https://www.codeply.com/go/nIB6oSbv6q
  --}}

  {{-- About reading a json file
    php var_dump($array['mouse']);
    https://www.codewall.co.uk/how-to-read-json-file-using-php-examples/
  --}}

	<div class="container-fluid" id="content">
    <div class="card-deck">
      @foreach($array['mouse'] as $mouse)

        <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
          @if ($mouse['enabled'])
            <img class="card-img-top" src="{{ url('/img/third_party_html5') }}/{{$mouse['id']}}.jpg" alt="{{$mouse['name']}} image." style="width:128px;height:128px;">
          @else
            <img class="card-img-top" src="https://images.unsplash.com/photo-1508345228704-935cc84bf5e2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&h=300&w=300&q=80" alt="Padlock image." style="width:128px;height:128px;">
          @endif
          <div class="card-body">
            <h4 class="card-title">{{$mouse['name']}}</h4>
            {{--<p class="card-text">{{ $mouse['info'] }}</p>--}}
          </div>
          <div class="card-footer bg-transparent">
            <a href="{{ url('/third_party/html5') }}/{{$mouse['id']}}" class="btn {{$mouse['btn']}} @if ($mouse['enabled'] == false) disabled @endif">Play!</a>
          </div>
        </div>

        @if ($loop->iteration % 2 == 0) <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div> @endif
        @if ($loop->iteration % 3 == 0) <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div> @endif
        @if ($loop->iteration % 4 == 0) <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div> @endif
        @if ($loop->iteration % 5 == 0) <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div> @endif

      @endforeach

    </div>
  </div>

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
      @foreach($array['keyboard'] as $keyboard)

        <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
          @if ($keyboard['enabled'])
            <img class="card-img-top" src="{{ url('/img/third_party_html5') }}/{{$keyboard['id']}}.jpg" alt="{{$keyboard['name']}} image." style="width:128px;height:128px;">
          @else
            <img class="card-img-top" src="https://images.unsplash.com/photo-1508345228704-935cc84bf5e2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&h=300&w=300&q=80" alt="Padlock image." style="width:128px;height:128px;">
          @endif
          <div class="card-body">
            <h4 class="card-title">{{$keyboard['name']}}</h4>
            {{--<p class="card-text">{{ $keyboard['info'] }}</p>--}}
          </div>
          <div class="card-footer bg-transparent">
            <a href="{{ url('/third_party/html5') }}/{{$keyboard['id']}}" class="btn {{$keyboard['btn']}} @if ($keyboard['enabled'] == false) disabled @endif">Play!</a>
          </div>
        </div>

        @if ($loop->iteration % 2 == 0) <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div> @endif
        @if ($loop->iteration % 3 == 0) <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div> @endif
        @if ($loop->iteration % 4 == 0) <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div> @endif
        @if ($loop->iteration % 5 == 0) <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div> @endif

      @endforeach

    </div>
  </div>

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
      @foreach($array['puzzle'] as $puzzle)

        <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
          @if ($puzzle['enabled'])
            <img class="card-img-top" src="{{ url('/img/third_party_html5') }}/{{$puzzle['id']}}.jpg" alt="{{$puzzle['name']}} image." style="width:128px;height:128px;">
          @else
            <img class="card-img-top" src="https://images.unsplash.com/photo-1508345228704-935cc84bf5e2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&h=300&w=300&q=80" alt="Padlock image." style="width:128px;height:128px;">
          @endif
          <div class="card-body">
            <h4 class="card-title">{{$puzzle['name']}}</h4>
            {{--<p class="card-text">{{ $puzzle['info'] }}</p>--}}
          </div>
          <div class="card-footer bg-transparent">
            <a href="{{ url('/third_party/html5') }}/{{$puzzle['id']}}" class="btn {{$puzzle['btn']}} @if ($puzzle['enabled'] == false) disabled @endif">Play!</a>
          </div>
        </div>

        @if ($loop->iteration % 2 == 0) <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div> @endif
        @if ($loop->iteration % 3 == 0) <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div> @endif
        @if ($loop->iteration % 4 == 0) <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div> @endif
        @if ($loop->iteration % 5 == 0) <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div> @endif

      @endforeach

    </div>
  </div>

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
      @foreach($array['experiment'] as $experiment)

        <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
          @if ($experiment['enabled'])
            <img class="card-img-top" src="{{ url('/img/third_party_html5') }}/{{$experiment['id']}}.jpg" alt="{{$experiment['name']}} image." style="width:128px;height:128px;">
          @else
            <img class="card-img-top" src="https://images.unsplash.com/photo-1508345228704-935cc84bf5e2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&h=300&w=300&q=80" alt="Padlock image." style="width:128px;height:128px;">
          @endif
          <div class="card-body">
            <h4 class="card-title">{{$experiment['name']}}</h4>
            {{--<p class="card-text">{{ $experiment['info'] }}</p>--}}
          </div>
          <div class="card-footer bg-transparent">
            <a href="{{ url('/third_party/html5') }}/{{$experiment['id']}}" class="btn {{$experiment['btn']}} @if ($experiment['enabled'] == false) disabled @endif">Play!</a>
          </div>
        </div>

        @if ($loop->iteration % 2 == 0) <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div> @endif
        @if ($loop->iteration % 3 == 0) <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div> @endif
        @if ($loop->iteration % 4 == 0) <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div> @endif
        @if ($loop->iteration % 5 == 0) <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div> @endif

      @endforeach

    </div>
  </div>

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
      @foreach($array['art'] as $art)

        <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
          @if ($art['enabled'])
            <img class="card-img-top" src="{{ url('/img/third_party_html5') }}/{{$art['id']}}.jpg" alt="{{$art['name']}} image." style="width:128px;height:128px;">
          @else
            <img class="card-img-top" src="https://images.unsplash.com/photo-1508345228704-935cc84bf5e2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&h=300&w=300&q=80" alt="Padlock image." style="width:128px;height:128px;">
          @endif
          <div class="card-body">
            <h4 class="card-title">{{$art['name']}}</h4>
            {{--<p class="card-text">{{ $art['info'] }}</p>--}}
          </div>
          <div class="card-footer bg-transparent">
            <a href="{{ url('/third_party/html5') }}/{{$art['id']}}" class="btn {{$art['btn']}} @if ($art['enabled'] == false) disabled @endif">Play!</a>
          </div>
        </div>

        @if ($loop->iteration % 2 == 0) <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div> @endif
        @if ($loop->iteration % 3 == 0) <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div> @endif
        @if ($loop->iteration % 4 == 0) <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div> @endif
        @if ($loop->iteration % 5 == 0) <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div> @endif

      @endforeach

    </div>
  </div>

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
      @foreach($array['esports'] as $esports)

        <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
          @if ($esports['enabled'])
            <img class="card-img-top" src="{{ url('/img/third_party_html5') }}/{{$esports['id']}}.jpg" alt="{{$esports['name']}} image." style="width:128px;height:128px;">
          @else
            <img class="card-img-top" src="https://images.unsplash.com/photo-1508345228704-935cc84bf5e2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&h=300&w=300&q=80" alt="Padlock image." style="width:128px;height:128px;">
          @endif
          <div class="card-body">
            <h4 class="card-title">{{$esports['name']}}</h4>
            {{--<p class="card-text">{{ $esports['info'] }}</p>--}}
          </div>
          <div class="card-footer bg-transparent">
            <a href="{{ url('/third_party/html5') }}/{{$esports['id']}}" class="btn {{$esports['btn']}} @if ($esports['enabled'] == false) disabled @endif">Play!</a>
          </div>
        </div>

        @if ($loop->iteration % 2 == 0) <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div> @endif
        @if ($loop->iteration % 3 == 0) <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div> @endif
        @if ($loop->iteration % 4 == 0) <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div> @endif
        @if ($loop->iteration % 5 == 0) <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div> @endif

      @endforeach

    </div>
  </div>

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
      @foreach($array['memory'] as $memory)

        <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
          @if ($memory['enabled'])
            <img class="card-img-top" src="{{ url('/img/third_party_html5') }}/{{$memory['id']}}.jpg" alt="{{$memory['name']}} image." style="width:128px;height:128px;">
          @else
            <img class="card-img-top" src="https://images.unsplash.com/photo-1508345228704-935cc84bf5e2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&h=300&w=300&q=80" alt="Padlock image." style="width:128px;height:128px;">
          @endif
          <div class="card-body">
            <h4 class="card-title">{{$memory['name']}}</h4>
            {{--<p class="card-text">{{ $memory['info'] }}</p>--}}
          </div>
          <div class="card-footer bg-transparent">
            <a href="{{ url('/third_party/html5') }}/{{$memory['id']}}" class="btn {{$memory['btn']}} @if ($memory['enabled'] == false) disabled @endif">Play!</a>
          </div>
        </div>

        @if ($loop->iteration % 2 == 0) <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div> @endif
        @if ($loop->iteration % 3 == 0) <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div> @endif
        @if ($loop->iteration % 4 == 0) <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div> @endif
        @if ($loop->iteration % 5 == 0) <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div> @endif

      @endforeach

    </div>
  </div>

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
      @foreach($array['friends'] as $friends)

        <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
          @if ($friends['enabled'])
            <img class="card-img-top" src="{{ url('/img/third_party_html5') }}/{{$friends['id']}}.jpg" alt="{{$friends['name']}} image." style="width:128px;height:128px;">
          @else
            <img class="card-img-top" src="https://images.unsplash.com/photo-1508345228704-935cc84bf5e2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&h=300&w=300&q=80" alt="Padlock image." style="width:128px;height:128px;">
          @endif
          <div class="card-body">
            <h4 class="card-title">{{$friends['name']}}</h4>
            {{--<p class="card-text">{{ $friends['info'] }}</p>--}}
          </div>
          <div class="card-footer bg-transparent">
            <a href="{{ url('/third_party/html5') }}/{{$friends['id']}}" class="btn {{$friends['btn']}} @if ($friends['enabled'] == false) disabled @endif">Play!</a>
          </div>
        </div>

        @if ($loop->iteration % 2 == 0) <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div> @endif
        @if ($loop->iteration % 3 == 0) <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div> @endif
        @if ($loop->iteration % 4 == 0) <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div> @endif
        @if ($loop->iteration % 5 == 0) <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div> @endif

      @endforeach

    </div>
  </div>

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
      @foreach($array['fun'] as $fun)

        <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
          @if ($fun['enabled'])
            <img class="card-img-top" src="{{ url('/img/third_party_html5') }}/{{$fun['id']}}.jpg" alt="{{$fun['name']}} image." style="width:128px;height:128px;">
          @else
            <img class="card-img-top" src="https://images.unsplash.com/photo-1508345228704-935cc84bf5e2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&h=300&w=300&q=80" alt="Padlock image." style="width:128px;height:128px;">
          @endif
          <div class="card-body">
            <h4 class="card-title">{{$fun['name']}}</h4>
            {{--<p class="card-text">{{ $fun['info'] }}</p>--}}
          </div>
          <div class="card-footer bg-transparent">
            <a href="{{ url('/third_party/html5') }}/{{$fun['id']}}" class="btn {{$fun['btn']}} @if ($fun['enabled'] == false) disabled @endif">Play!</a>
          </div>
        </div>

        @if ($loop->iteration % 2 == 0) <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div> @endif
        @if ($loop->iteration % 3 == 0) <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div> @endif
        @if ($loop->iteration % 4 == 0) <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div> @endif
        @if ($loop->iteration % 5 == 0) <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div> @endif

      @endforeach

    </div>
  </div>

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
      @foreach($array['math'] as $math)

        <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
          @if ($math['enabled'])
            <img class="card-img-top" src="{{ url('/img/third_party_html5') }}/{{$math['id']}}.jpg" alt="{{$math['name']}} image." style="width:128px;height:128px;">
          @else
            <img class="card-img-top" src="https://images.unsplash.com/photo-1508345228704-935cc84bf5e2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&h=300&w=300&q=80" alt="Padlock image." style="width:128px;height:128px;">
          @endif
          <div class="card-body">
            <h4 class="card-title">{{$math['name']}}</h4>
            {{--<p class="card-text">{{ $math['info'] }}</p>--}}
          </div>
          <div class="card-footer bg-transparent">
            <a href="{{ url('/third_party/html5') }}/{{$math['id']}}" class="btn {{$math['btn']}} @if ($math['enabled'] == false) disabled @endif">Play!</a>
          </div>
        </div>

        @if ($loop->iteration % 2 == 0) <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div> @endif
        @if ($loop->iteration % 3 == 0) <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div> @endif
        @if ($loop->iteration % 4 == 0) <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div> @endif
        @if ($loop->iteration % 5 == 0) <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div> @endif

      @endforeach

    </div>
  </div>

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
      @foreach($array['language'] as $language)

        <div class="card align-items-center text-center mb-4" style="max-width: 15rem;">
          @if ($language['enabled'])
            <img class="card-img-top" src="{{ url('/img/third_party_html5') }}/{{$language['id']}}.jpg" alt="{{$language['name']}} image." style="width:128px;height:128px;">
          @else
            <img class="card-img-top" src="https://images.unsplash.com/photo-1508345228704-935cc84bf5e2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&h=300&w=300&q=80" alt="Padlock image." style="width:128px;height:128px;">
          @endif
          <div class="card-body">
            <h4 class="card-title">{{$language['name']}}</h4>
            {{--<p class="card-text">{{ $language['info'] }}</p>--}}
          </div>
          <div class="card-footer bg-transparent">
            <a href="{{ url('/third_party/html5') }}/{{$language['id']}}" class="btn {{$language['btn']}} @if ($language['enabled'] == false) disabled @endif">Play!</a>
          </div>
        </div>

        @if ($loop->iteration % 2 == 0) <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div> @endif
        @if ($loop->iteration % 3 == 0) <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div> @endif
        @if ($loop->iteration % 4 == 0) <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div> @endif
        @if ($loop->iteration % 5 == 0) <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div> @endif

      @endforeach

    </div>
  </div>

  <script src="{!! asset('js/app.js') !!}"></script>

</body>
</html>