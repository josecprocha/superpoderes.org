var enableAI = false;
var enableControls = true;
var bgm = new Audio('http://www.freesfx.co.uk/rx2/mp3s/5/17269_1461786504.mp3');
bgm.loop = true;
bgm.play();
var cheer = new Audio('http://www.freesfx.co.uk/rx2/mp3s/2/14208_1459953020.mp3');
var whistle = new Audio('http://www.freesfx.co.uk/rx2/mp3s/4/16224_1460569335.mp3');
document.addEventListener('DOMContentLoaded', function(e) {
  createSquares();
  updatePlayers();
  updateBall();
  startGame(0);
  var players = document.getElementsByClassName('player');
  for (var i = 0; i < players.length; i++) {
    var player = players[i];
    player.addEventListener('click', function(e) {
      var p = e.target;
      var sq = document.getElementById('square-' + p.dataset.y + '-' + p.dataset.x);
      if (sq) {
        var event = new MouseEvent('click');
        sq.dispatchEvent(event);
      }
    });
    player.addEventListener('mousemove', function(e) {
      var p = e.target;
      var sq = document.getElementById('square-' + p.dataset.y + '-' + p.dataset.x);
      if (sq) {
        var event = new MouseEvent('mousemove');
        sq.dispatchEvent(event);
      }
    });
  }
  document.addEventListener('keydown', function(e) {
    if (!enableControls) return;
    var sel = document.getElementsByClassName('selected')[0];
    var moved = false;
    switch (e.code) {
      case 'ArrowUp':
      case 'KeyW':
        movePlayer(sel, 0, -1);
        moved = true;
        break;
      case 'ArrowLeft':
      case 'KeyA':
        movePlayer(sel, -1, 0);
        moved = true;
        break;
      case 'ArrowDown':
      case 'KeyS':
        movePlayer(sel, 0, 1);
        moved = true;
        break;
      case 'ArrowRight':
      case 'KeyD':
        movePlayer(sel, 1, 0);
        moved = true;
        break;
    }
    if (moved) {
      playerAIs();
    }
  });
});
function message(txt) {
  var div = document.createElement('div');
  div.innerHTML = txt;
  div.classList.add('msg');
  document.body.appendChild(div);
  setTimeout(function() {
    div.remove();
  }, 2000);
}
function createSquares() {
  for (var i = 0; i < 23; i++) {
    for (var j = 0; j < 17; j++) {
      var div = document.createElement('div');
      div.setAttribute('id', 'square-' + i + '-' + j);
      //div.setAttribute('title', i+','+j);
      div.dataset.x = j;
      div.dataset.y = i;
      div.classList.add('square');
      document.getElementById('fieldborder').appendChild(div);
    }
  }
  for (var i = 0; i < 5; i++) {
    var div = document.createElement('div');
    div.setAttribute('id', 'square-topgoal' + i);
    //div.setAttribute('title', 'topgoal-'+i);
    div.dataset.x = i + 6;
    div.dataset.y = -1;
    div.classList.add('goal');
    document.getElementById('topgoal').appendChild(div);
  }
  for (var i = 0; i < 5; i++) {
    var div = document.createElement('div');
    div.setAttribute('id', 'square-bottomgoal' + i);
    div.setAttribute('title', 'bottomgoal-' + i);
    div.dataset.x = i + 6;
    div.dataset.y = 23;
    div.classList.add('goal');
    document.getElementById('bottomgoal').appendChild(div);
  }
  var fieldborder = document.getElementById('fieldborder');
  fieldborder.addEventListener('mouseleave', function(e) {
    var highlight = document.getElementById('highlight');
    highlight.style.display = 'none';
    highlight.dataset.radius = 1;
  });
  var squares = document.getElementsByClassName('square');
  for (var i = 0; i < squares.length; i++) {
    var square = squares[i];
    square.addEventListener('mousemove', function(e) {
      var sq = e.target;
      var sel = document.getElementsByClassName('selected')[0];
      var ball = document.getElementById('ball');
      var highlight = document.getElementById('highlight');
      highlight.style.display = 'none';
      highlight.dataset.radius = 0;
      if (ball.dataset.x == sel.dataset.x && ball.dataset.y == sel.dataset.y) {
        //can kick
        var dist =
          Math.abs(ball.dataset.x - sq.dataset.x) + Math.abs(ball.dataset.y - sq.dataset.y);
        highlight.dataset.radius = 1 + Math.floor(dist / 8);
        highlight.style.display = 'block';
        highlight.style.left =
          'calc(100% / 19 + (100% / 19) * ' +
          sq.dataset.x +
          ' - (100% / 19) * ' +
          highlight.dataset.radius +
          ')';
        highlight.style.top =
          'calc(100% / 25 + (100% / 25) * ' +
          sq.dataset.y +
          ' - (100% / 25) * ' +
          highlight.dataset.radius +
          ')';
        highlight.style.width = 'calc((100% / 19) * ' + (highlight.dataset.radius * 2 + 1) + ')';
        highlight.style.height = 'calc((100% / 25) * ' + (highlight.dataset.radius * 2 + 1) + ')';
      }
    });
    square.addEventListener('click', function(e) {
      if (!enableControls) return;
      var sq = e.target;
      var sel = document.getElementsByClassName('selected')[0];
      var ball = document.getElementById('ball');
      if (ball.dataset.x == sel.dataset.x && ball.dataset.y == sel.dataset.y) {
        //kick
        var canKick = true;
        var other = nearestCPU();
        if (other.dataset.x == sel.dataset.x && other.dataset.y == sel.dataset.y) {
          if (Math.random() < 0.5 || other.classList.contains('goalkeeper')) {
            canKick = false; //Miss
          } else {
            canKick = true;
          }
        }
        if (canKick) {
          var dist =
            Math.abs(ball.dataset.x - sq.dataset.x) + Math.abs(ball.dataset.y - sq.dataset.y);
          var nx = Math.round(Math.random() * 2 - 1) * Math.floor(dist / 8);
          var ny = Math.round(Math.random() * 2 - 1) * Math.floor(dist / 8);
          moveBallTo(parseInt(sq.dataset.x) + nx, parseInt(sq.dataset.y) + ny, sel);
        } else {
          moveBallTo(
            parseInt(ball.dataset.x) + Math.round(Math.random() * 2 - 1),
            parseInt(ball.dataset.y) + Math.round(Math.random() * 2 - 1),
            sel
          );
        }
        playerAIs();
      }
    });
  }

  var squares = document.getElementsByClassName('goal');
  for (var i = 0; i < squares.length; i++) {
    var square = squares[i];
    square.addEventListener('mousemove', function(e) {
      var sq = e.target;
      var sel = document.getElementsByClassName('selected')[0];
      var ball = document.getElementById('ball');
      var highlight = document.getElementById('highlight');
      highlight.style.display = 'none';
      highlight.dataset.radius = 0;
      if (ball.dataset.x == sel.dataset.x && ball.dataset.y == sel.dataset.y) {
        //can kick
        var dist =
          Math.abs(ball.dataset.x - sq.dataset.x) + Math.abs(ball.dataset.y - sq.dataset.y);
        highlight.dataset.radius = 1 + Math.floor(dist / 8);
        highlight.style.display = 'block';
        highlight.style.left =
          'calc(100% / 19 + (100% / 19) * ' +
          sq.dataset.x +
          ' - (100% / 19) * ' +
          highlight.dataset.radius +
          ')';
        highlight.style.top =
          'calc(100% / 25 + (100% / 25) * ' +
          sq.dataset.y +
          ' - (100% / 25) * ' +
          highlight.dataset.radius +
          ')';
        highlight.style.width = 'calc((100% / 19) * ' + (highlight.dataset.radius * 2 + 1) + ')';
        highlight.style.height = 'calc((100% / 25) * ' + (highlight.dataset.radius * 2 + 1) + ')';
      }
    });
    square.addEventListener('click', function(e) {
      if (!enableControls) return;
      var sq = e.target;
      var sel = document.getElementsByClassName('selected')[0];
      var ball = document.getElementById('ball');
      if (ball.dataset.x == sel.dataset.x && ball.dataset.y == sel.dataset.y) {
        //kick
        playerAIs();
        var canKick = true;
        var other = nearestCPU();
        if (other.dataset.x == sel.dataset.x && other.dataset.y == sel.dataset.y) {
          if (Math.random() < 0.5 || other.classList.contains('goalkeeper')) {
            canKick = false; //Miss
          } else {
            canKick = true;
          }
        }
        if (canKick) {
          var dist =
            Math.abs(ball.dataset.x - sq.dataset.x) + Math.abs(ball.dataset.y - sq.dataset.y);
          moveBallTo(
            parseInt(sq.dataset.x) + Math.round(Math.random() * 2 - 1) * Math.floor(dist / 8),
            parseInt(sq.dataset.y) + Math.round(Math.random() * 2 - 1) * Math.floor(dist / 8),
            sel
          );
        } else {
          moveBallTo(
            parseInt(ball.dataset.x) + Math.round(Math.random() * 2 - 1),
            parseInt(ball.dataset.y) + Math.round(Math.random() * 2 - 1),
            sel
          );
        }
      }
    });
  }
}
function updateBall() {
  var ball = document.getElementById('ball');
  ball.dataset.x = Math.min(17, Math.max(-1, ball.dataset.x));
  ball.dataset.y = Math.min(23, Math.max(-1, ball.dataset.y));
  ball.style.left = 'calc(' + ball.dataset.x + ' * 100% / 19 + 100% / 19 / 0.9)';
  ball.style.top = 'calc(' + ball.dataset.y + ' * 100% / 25 + 100% / 25 / 0.9)';
  ball.style.zIndex = 10 + ball.dataset.y;
  ball.dataset.angle = Math.round(ball.dataset.angle) % 360;
  ball.style.transform =
    'translate3d(0, 10px, 10px) rotatex(-90deg) rotatez(' + ball.dataset.angle + 'deg)';
  var players = document.getElementsByClassName('you');
  var dist = Infinity;
  var nearest = 0;
  for (var i = 0; i < players.length; i++) {
    var player = players[i];
    player.classList.remove('selected');
    var currDist =
      Math.abs(player.dataset.x - ball.dataset.x) + Math.abs(player.dataset.y - ball.dataset.y);
    if (currDist < dist) {
      dist = currDist;
      nearest = i;
    }
  }
  players[nearest].classList.add('selected');
}
function nearestYou(except) {
  var ball = document.getElementById('ball');
  var players = document.getElementsByClassName('you');
  var dist = Infinity;
  var nearest = 0;
  for (var i = 0; i < players.length; i++) {
    var player = players[i];
    if (player == except) continue;
    var currDist =
      Math.abs(player.dataset.x - ball.dataset.x) + Math.abs(player.dataset.y - ball.dataset.y);
    if (currDist < dist) {
      dist = currDist;
      nearest = i;
    }
  }
  return players[nearest];
}
function nearestCPU(except) {
  var ball = document.getElementById('ball');
  var players = document.getElementsByClassName('cpu');
  var dist = Infinity;
  var nearest = 0;
  for (var i = 0; i < players.length; i++) {
    var player = players[i];
    if (player == except) continue;
    var currDist =
      Math.abs(player.dataset.x - ball.dataset.x) + Math.abs(player.dataset.y - ball.dataset.y);
    if (currDist < dist) {
      dist = currDist;
      nearest = i;
    }
  }
  return players[nearest];
}
function nearestPlayer(except) {
  var ball = document.getElementById('ball');
  var players = document.getElementsByClassName('player');
  var dist = Infinity;
  var nearest = 0;
  for (var i = 0; i < players.length; i++) {
    var player = players[i];
    if (player == except) continue;
    var currDist =
      Math.abs(player.dataset.x - ball.dataset.x) + Math.abs(player.dataset.y - ball.dataset.y);
    if (currDist < dist) {
      dist = currDist;
      nearest = i;
    }
  }
  return players[nearest];
}
function getPlayerAt(x, y) {
  var players = shuffle(document.getElementsByClassName('player'));
  for (let i = 0; i < players.length; i++) {
    let player = players[i];
    if (player.dataset.x == x && player.dataset.y == y) {
      return player;
    }
  }
}
function shuffle(arr) {
  var len = arr.length;
  for (let i = 0; i < len - 1; i++) {
    let r = i + Math.floor(Math.random() * (len - i));
    let temp = arr[i];
    arr[i] = arr[r];
    arr[r] = temp;
  }
  return arr;
}
function movePlayer(player, dx, dy) {
  var ball = document.getElementById('ball');
  ball.dataset.moved = 0;
  var movingBall = false;
  var dest = getPlayerAt(parseInt(player.dataset.x) + dx, parseInt(player.dataset.y) + dy);
  if (dest && dest != player) {
    //Someone is blocking
    if (
      (ball.dataset.x == dest.dataset.x &&
        ball.dataset.y == dest.dataset.y &&
        (player.classList.contains('cpu') && dest.classList.contains('you'))) ||
      (player.classList.contains('you') && dest.classList.contains('cpu'))
    ) {
      //Blocker is an opponent and has the ball
      if (!dest.classList.contains('goalkeeper') && (dx != 0 || dy != 0) && Math.random() < 0.5) {
        //If not a goal keeper, 50% change to steal the ball
        moveBallTo(parseInt(ball.dataset.x) + dx, parseInt(ball.dataset.y) + dy);
        message('Stolen!');
      }
    }
    dx = dy = 0;
    return;
  }
  if (ball.dataset.x == player.dataset.x && ball.dataset.y == player.dataset.y) {
    var other;
    if (player.classList.contains('you')) {
      other = nearestCPU();
    } else {
      other = nearestYou();
    }
    if (
      (other.classList.contains('goalkeeper') || Math.random() < 0.5) &&
      other.dataset.x == player.dataset.x &&
      other.dataset.y == player.dataset.y
    ) {
      movingBall = false;
    } else {
      movingBall = true;
    }
  }
  player.dataset.x = parseInt(player.dataset.x) + dx;
  player.dataset.y = parseInt(player.dataset.y) + dy;
  updatePlayer(player);
  if (movingBall) {
    moveBallTo(player.dataset.x, player.dataset.y, player);
  }
}
function movePlayerTo(player, x, y) {
  player.dataset.x = parseInt(x);
  player.dataset.y = parseInt(y);
  updatePlayer(player);
}
function moveBallTo(x, y, from, collision = true) {
  enableAI = true;
  var ball = document.getElementById('ball');
  if (ball.dataset.moved == 1) return;
  ball.dataset.moved = 1;
  var dx = parseInt(x) - parseInt(ball.dataset.x);
  var dy = parseInt(y) - parseInt(ball.dataset.y);
  //console.log(x,y);
  var len = Math.sqrt(dx * dx + dy * dy);
  if (len == 0 || !from || !collision) {
    ball.dataset.x = parseInt(x);
    ball.dataset.y = parseInt(y);
  } else {
    dx /= len;
    dy /= len;
    //console.log(dx, dy);
    for (var i = 0; i < 100; i++) {
      ball.dataset.x = parseFloat(ball.dataset.x) + dx;
      ball.dataset.y = parseFloat(ball.dataset.y) + dy;
      //console.log(ball.dataset);
      var player = nearestPlayer();
      //console.log(player.dataset);
      if (Math.abs(ball.dataset.x - x) < 1 && Math.abs(ball.dataset.y - y) < 1) {
        ball.dataset.x = parseInt(x);
        ball.dataset.y = parseInt(y);
        updateBall();
        break;
      }
      if (
        ball.dataset.x < -1 ||
        ball.dataset.x > 17 ||
        ball.dataset.y < -1 ||
        ball.dataset.y > 23
      ) {
        updateBall();
        break;
      }
      if (
        Math.abs(player.dataset.x - ball.dataset.x) < 1 &&
        Math.abs(player.dataset.y - ball.dataset.y) < 1 &&
        player != from
      ) {
        //console.log(ball.dataset);
        ball.dataset.x = player.dataset.x;
        ball.dataset.y = player.dataset.y;
        updateBall();
        break;
      }
    }
  }
  ball.dataset.x = parseInt(ball.dataset.x);
  ball.dataset.y = parseInt(ball.dataset.y);
  ball.dataset.angle += 10;
  updateBall();
  if (ball.dataset.y < 0 && ball.dataset.x >= 6 && ball.dataset.x <= 10) {
    //Top goal
    var scoretext = document.getElementById('score1');
    scoretext.innerHTML = parseInt(scoretext.innerHTML) + 1;
    enableControls = false;
    whistle.play();
    cheer.play();
    message('GOAL!!!!');
    setTimeout(function() {
      startGame(1);
    }, 2000);
  } else if (ball.dataset.y > 22 && ball.dataset.x >= 6 && ball.dataset.x <= 10) {
    //Bottom goal
    var scoretext = document.getElementById('score2');
    scoretext.innerHTML = parseInt(scoretext.innerHTML) + 1;
    enableControls = false;
    whistle.play();
    cheer.play();
    message('GOAL!!!!');
    setTimeout(function() {
      startGame(0);
    }, 2000);
  } else if (
    ball.dataset.y < 0 ||
    ball.dataset.y > 22 ||
    ball.dataset.x < 0 ||
    ball.dataset.x > 16
  ) {
    //Outside
    var player, enemy;
    enableControls = false;
    whistle.play();
    if (from) {
      if (
        (ball.dataset.x < 0 || ball.dataset.x > 16) &&
        !(ball.dataset.y < 0 || ball.dataset.y > 22)
      ) {
        message('Throw-In');
      } else if (
        (ball.dataset.y < 0 && from.classList.contains('you')) ||
        (ball.dataset.y > 22 && from.classList.contains('cpu'))
      ) {
        message('Goal Kick');
      } else if (
        (ball.dataset.y < 0 && from.classList.contains('cpu')) ||
        (ball.dataset.y > 22 && from.classList.contains('you'))
      ) {
        message('Corner Kick');
        ball.dataset.moved = 0;
        if (ball.dataset.x < 8) moveBallTo(0, ball.dataset.y);
        else moveBallTo(17, ball.dataset.y);
        ball.dataset.moved = 0;
      }
    }
    if (from && from.classList.contains('you')) {
      //Change player
      player = nearestCPU();
      enemy = nearestYou();
    } else {
      player = nearestYou();
      enemy = nearestCPU();
    }
    setTimeout(function() {
      enableControls = true;
      movePlayerTo(player, ball.dataset.x, ball.dataset.y);
      movePlayerTo(enemy, enemy.dataset.tacticX, enemy.dataset.tacticY);
    }, 2000);
  }
}
function updatePlayers() {
  var players = document.getElementsByClassName('player');
  for (var i = 0; i < players.length; i++) {
    var player = players[i];
    updatePlayer(player);
  }
}
function updatePlayer(player) {
  player.dataset.x = Math.min(17, Math.max(-1, player.dataset.x));
  player.dataset.y = Math.min(23, Math.max(-1, player.dataset.y));
  player.style.left = 'calc(' + player.dataset.x + ' * 100% / 19 + 100% / 19)';
  player.style.top = 'calc(' + player.dataset.y + ' * 100% / 25 - 4px)';
  player.style.zIndex = 10 + player.dataset.y;
  /*if (player.classList.contains('you') && nearestYou() == player) {
      player.classList.add('selected');
    }
    else {
      player.classList.remove('selected');
    }*/
}
function startGame(pnum) {
  message('KICK-OFF');
  enableAI = false;
  enableControls = true;
  whistle.play();
  var players = document.getElementsByClassName('player');
  for (var i = 0; i < players.length; i++) {
    var player = players[i];
    movePlayerTo(player, player.dataset.origX, player.dataset.origY);
  }
  if (pnum == 0) {
    var player = document.getElementsByClassName('you')[0];
    movePlayerTo(player, 8, 13);
  } else {
    var player = document.getElementsByClassName('cpu')[0];
    movePlayerTo(player, 8, 9);
  }
  document.getElementById('ball').dataset.moved = false;
  moveBallTo(8, 11);
  document.getElementById('ball').dataset.moved = false;
}
function playerAIs() {
  if (!enableAI) return;
  var players = document.querySelectorAll('.player:not(.selected)');
  for (var i = 0; i < players.length; i++) {
    playerAI(players[i]);
  }
}
function playerAI(player) {
  if (!enableAI) return;
  var ball = document.getElementById('ball');
  var dx = ball.dataset.x - player.dataset.x;
  var dy = ball.dataset.y - player.dataset.y;
  var dist = Math.abs(dx) + Math.abs(dy);
  var tdx = player.dataset.tacticX - player.dataset.x;
  var tdy = player.dataset.tacticY - player.dataset.y;
  var tacticdist = Math.abs(tdx) + Math.abs(tdy);
  if (dist == 0) {
    //Has the ball
    if (player.classList.contains('cpu')) {
      //is CPU
      var goaldist = Math.abs(player.dataset.x - 8) + Math.abs(player.dataset.y - 23);
      if (goaldist < 10) {
        moveBallTo(
          8 + (Math.random() * 2 - 1) * Math.floor(goaldist / 8),
          23 + (Math.random() * 2 - 1) * Math.floor(goaldist / 8),
          player
        );
      } else if (tacticdist < 8) {
        if (Math.abs(22 - player.dataset.y) > Math.abs(11 - player.dataset.x)) {
          movePlayer(player, 0, Math.sign(22 - player.dataset.y));
        } else {
          movePlayer(player, Math.sign(11 - player.dataset.x), 0);
        }
      } else {
        //Out of tactical area, pass
        var next = nearestCPU(player);
        var nextdist =
          Math.abs(player.dataset.x - next.dataset.x) + Math.abs(player.dataset.y - next.dataset.y);
        //console.log(nextdist, next.dataset);
        //console.log(next, nextdist);
        moveBallTo(
          parseInt(next.dataset.x) + Math.floor(((Math.random() * 2 - 1) * nextdist) / 8),
          parseInt(next.dataset.y) + Math.floor(((Math.random() * 2 - 1) * nextdist) / 8),
          player
        );
      }
    }
  } else {
    //No ball
    var other = nearestPlayer();
    if (player.classList.contains('goalkeeper')) {
      //console.log(player.id, player.dataset);
      if (player.classList.contains('you')) {
        if (
          ball.dataset.y < 19 ||
          ball.dataset.x != other.dataset.x ||
          ball.dataset.y != other.dataset.y
        ) {
          movePlayer(
            player,
            Math.sign(Math.min(10, Math.max(6, ball.dataset.x)) - player.dataset.x),
            Math.sign(Math.min(22, Math.max(19, ball.dataset.y)) - player.dataset.y)
          );
        } else {
          movePlayer(
            player,
            Math.sign(Math.min(10, Math.max(6, ball.dataset.x)) - player.dataset.x),
            Math.sign(22 - player.dataset.y)
          );
        }
      } else {
        if (
          ball.dataset.y > 3 ||
          ball.dataset.x != other.dataset.x ||
          ball.dataset.y != other.dataset.y
        ) {
          movePlayer(
            player,
            Math.sign(Math.min(10, Math.max(6, ball.dataset.x)) - player.dataset.x),
            Math.sign(Math.min(3, Math.max(0, ball.dataset.y)) - player.dataset.y)
          );
        } else {
          movePlayer(
            player,
            Math.sign(Math.min(10, Math.max(6, ball.dataset.x)) - player.dataset.x),
            Math.sign(0 - player.dataset.y)
          );
        }
      }
    } else if (nearestCPU() == player || nearestYou() == player) {
      if (
        Math.abs(ball.dataset.x - player.dataset.x) > Math.abs(ball.dataset.y - player.dataset.y)
      ) {
        movePlayer(
          player,
          Math.sign(Math.min(17, Math.max(-1, ball.dataset.x)) - player.dataset.x),
          0
        );
      } else {
        movePlayer(
          player,
          0,
          Math.sign(Math.min(23, Math.max(-1, ball.dataset.y)) - player.dataset.y)
        );
      }
    } else {
      movePlayer(player, Math.sign(tdx), Math.sign(tdy));
    }
  }
}
