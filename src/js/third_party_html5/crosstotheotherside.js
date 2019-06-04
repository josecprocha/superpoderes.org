$(function() {
  // create DOM canvas
  var canvas = document.createElement('canvas');
  var ctx = canvas.getContext('2d');

  //set canvas dim
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;

  document.body.appendChild(canvas);

  function rand(min, max, interval) {
    if (interval === undefined) interval = 1;
    return Math.round((Math.floor(Math.random() * (max - min + 1)) + min) / interval) * interval;
  }

  function randIndex(thearray) {
    return thearray[rand(1, thearray.length) - 1];
  }

  var player = (function() {
    var x = 100,
      y = canvas.height / 2,
      w = 10,
      h = 10,
      speed = 10,
      dead = false,
      death = 0;

    return {
      getX: function() {
        return x;
      },

      getY: function() {
        return y;
      },

      getW: function() {
        return w;
      },

      getH: function() {
        return h;
      },

      die: function() {
        dead = true;
        ++death;
      },

      getDeath: function() {
        return death;
      },

      resurrect: function() {
        this.moveTo(100, canvas.height / 2);
        dead = false;
        this.draw();
      },

      respawn: function() {
        this.moveTo(100, canvas.height / 2);
        this.draw();
        blocks.nextLevel();
      },

      isDead: function() {
        return dead;
      },

      draw: function() {
        ctx.fillStyle = '#50BEFA';
        ctx.fillRect(x, y, w, h);
      },

      moveTo: function(a, b) {
        if (dead) return;
        x = a;
        y = b;
        if (y + h > canvas.height) {
          y = canvas.height - h;
        }
      }
    };
  })();

  var blocks = (function() {
    var blocks = [],
      level = 0,
      level_factor = 1.2,
      start = {
        n: 10,
        x1: 210,
        x2: 700,
        h_min: 15,
        h_max: 100,
        speed_min: 0.5,
        speed_max: 5,
        direction: ['up', 'down']
      };

    function Block(direction) {
      this.w = 10;
      this.h = rand(start.h_min, start.h_max);
      this.x = rand(start.x1, start.x2, 10);
      this.y = 0;
      this.speed = rand(start.speed_min, start.speed_max);
      this.direction = direction;
      if (direction === 'up') {
        this.y = canvas.height + rand(5, 350);
      } else {
        this.y -= rand(5, 350);
      }
    }

    return {
      curLevel: function() {
        return level;
      },

      nextLevel: function() {
        ++level;
        blocks = [];

        var n = Math.ceil(start.n + level * level_factor);

        //console.log(n);

        this.createXBlocks(n);
      },

      draw: function(b) {
        if (player.isDead()) ctx.fillStyle = '#800000';
        else ctx.fillStyle = '#D98D00';
        ctx.fillRect(b.x, b.y, b.w, b.h);
      },

      drawZone: function() {
        ctx.fillStyle = '#111111';
        ctx.fillRect(start.x1, 0, start.x2 - start.x1 + 10, canvas.height);
      },

      createXBlocks: function(n) {
        for (i = 0; i < n; ++i) {
          blocks.push(new Block(randIndex(start.direction)));
        }
      },

      moveAll: function() {
        //if(pause) return;

        var px = player.getX(),
          py = player.getY(),
          pw = player.getW(),
          ph = player.getH();

        if (player.isDead()) return;
        else if (px > start.x2) {
          //level pass
          ctrl.x = 0;
          ctrl.y = canvas.height / 2;
          ctrl.velX = 0;
          ctrl.velY = 0;
          player.respawn();
          return;
        }

        var len = blocks.length;
        for (i = 0; i < len; ++i) {
          if (blocks[i].direction === 'up') {
            blocks[i].y -= blocks[i].speed;
            if (blocks[i].y + blocks[i].h < 0) {
              blocks[i].y = canvas.height + rand(10, 350);
            }
          } else {
            blocks[i].y += blocks[i].speed;
            if (blocks[i].y > canvas.height) {
              blocks[i].y = 0;
              blocks[i].y -= rand(10, 350);
            }
          }

          //colission detection
          if (
            px > blocks[i].x &&
            px < blocks[i].x + blocks[i].w &&
            (py > blocks[i].y && py < blocks[i].y + blocks[i].h)
          ) {
            player.die();
          } else if (
            px + pw < blocks[i].x + blocks[i].w &&
            px + pw > blocks[i].x &&
            (py + ph < blocks[i].y + blocks[i].h && py + ph > blocks[i].y)
          ) {
            player.die();
          }
        }
      },

      drawAll: function() {
        for (var i in blocks) {
          this.draw(blocks[i]);
        }
      }
    };
  })();

  var ctrl = {
    x: 100, //initial x
    y: canvas.height / 2, // initial y
    velY: 0,
    velX: 0,
    speed: 1400, // max speed
    friction: 0.68, // friction
    keys: []
  };

  function updateCtrl() {
    // restart
    if (ctrl.keys[32]) {
      if (player.isDead()) {
        ctrl.x = 0;
        ctrl.y = canvas.height / 2;
        ctrl.velX = 0;
        ctrl.velY = 0;
        player.resurrect();
      }
    }

    // check the keys and do the movement.
    if (ctrl.keys[38] || ctrl.keys[87]) {
      if (ctrl.velY > -ctrl.speed) {
        ctrl.velY--;
      }
    }

    if (ctrl.keys[40] || ctrl.keys[83]) {
      if (ctrl.velY < ctrl.speed) {
        ctrl.velY++;
      }
    }
    if (ctrl.keys[39] || ctrl.keys[68]) {
      if (ctrl.velX < ctrl.speed) {
        ctrl.velX++;
      }
    }
    if (ctrl.keys[37] || ctrl.keys[65]) {
      if (ctrl.velX > -ctrl.speed) {
        ctrl.velX--;
      }
    }

    // apply some friction to y velocity.
    ctrl.velY *= ctrl.friction;
    ctrl.y += ctrl.velY;

    // apply some friction to x velocity.
    ctrl.velX *= ctrl.friction;
    ctrl.x += ctrl.velX;

    // bounds checking
    if (ctrl.x >= canvas.width) {
      ctrl.x = canvas.width;
    } else if (ctrl.x <= 5) {
      ctrl.x = 5;
    }

    if (ctrl.y > canvas.height) {
      ctrl.y = canvas.height;
    } else if (ctrl.y <= 5) {
      ctrl.y = 5;
    }

    player.moveTo(ctrl.x, ctrl.y);

    setTimeout(updateCtrl, 10);
  }

  updateCtrl();

  // key events
  document.body.addEventListener('keydown', function(e) {
    ctrl.keys[e.keyCode] = true;
  });
  document.body.addEventListener('keyup', function(e) {
    ctrl.keys[e.keyCode] = false;
  });

  blocks.nextLevel();

  function update() {
    blocks.moveAll();
  }

  function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    blocks.drawZone();
    blocks.drawAll();
    player.draw();

    if (player.isDead()) {
      ctx.fillStyle = '#9F000C';
      ctx.font = '14px Verdana';
      ctx.fillText('Game over!', 10, 50);
      ctx.fillText('Press [SPACE]', 10, 70);
    } else {
      ctx.fillStyle = '#D98D00';
      ctx.font = '14px Verdana';
      ctx.fillText('Cross to the other side', 10, 20);
      ctx.fillText('---------------------->', 10, 40);

      ctx.fillText('Use keyboard arrows', 10, 60);
      ctx.fillText('or [A] [W] [S] [D]', 10, 80);

      ctx.fillText('Level : ' + blocks.curLevel(), 10, 150);
      ctx.fillText('Death : ' + player.getDeath(), 10, 170);
    }
  }

  var fps = 0,
    now,
    lastUpdate = new Date() * 1;

  // The higher this value, the less the FPS will be affected by quick changes
  // Setting this to 1 will show you the FPS of the last sampled frame only
  var fpsFilter = 50;

  function drawFrame() {
    var thisFrameFPS = 1000 / ((now = new Date()) - lastUpdate);
    if (now != lastUpdate) {
      fps += (thisFrameFPS - fps) / fpsFilter;
      lastUpdate = now;

      if (isNaN(fps)) fps = 1;

      ctx.fillStyle = '#888';
      ctx.font = '10px Verdana';
      ctx.fillText(fps.toFixed(0) + ' fps', 5, canvas.height - 5);
    }
  }

  var animation_fps = 60;

  setInterval(function() {
    update();
    draw();
    drawFrame();
  }, 1000 / animation_fps);
});
