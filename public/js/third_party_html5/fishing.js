(function setup(window) {
  var document = window.document;
  Object.prototype.on = function(a, b) {
    this.addEventListener(a, b);
    return this;
  };
  window.can = document.querySelector('canvas');
  window.ctx = window.can.getContext('2d');
  window.can.width = window.innerWidth;
  window.can.height = window.innerHeight;
  window.randInt = function(a, b) {
    if (a === void 0) return Math.round(Math.random());
    else if (b === void 0) return Math.floor(Math.random() * a);
    else return Math.floor(Math.random() * (b - a + 1) + a);
  };
  window.randFloat = function(a, b) {
    if (a === void 0) return Math.random();
    else if (b === void 0) return Math.random() * a;
    else return Math.random() * (b - a) + a;
  };
  window.rand = function(a, b) {
    return Array.isArray(a) ? a[Math.floor(Math.random() * a.length)] : window.randInt(a, b);
  };
})(window);

(function() {
  var mouse = {};
  var draw_fish = function(fish) {
    ctx.lineWidth = fish.s / 10;
    ctx.moveTo(fish.x, fish.y - fish.s);
    ctx.quadraticCurveTo(
      fish.x + fish.s * fish.pos,
      fish.y - fish.s,
      fish.x + fish.s * 2 * fish.pos,
      fish.y
    );
    ctx.quadraticCurveTo(fish.x + fish.s * fish.pos, fish.y + fish.s, fish.x, fish.y + fish.s);
    ctx.quadraticCurveTo(
      fish.x - (fish.s / 2) * fish.pos,
      fish.y + fish.s,
      fish.x - fish.s * 1.5 * fish.pos,
      fish.y + fish.s / 3
    );
    ctx.quadraticCurveTo(
      fish.x - fish.s * 2 * fish.pos,
      fish.y + fish.s / 2.5,
      fish.x - fish.s * 2.5 * fish.pos,
      fish.y + fish.s / 1.5
    );
    ctx.quadraticCurveTo(
      fish.x - fish.s * 2 * fish.pos,
      fish.y,
      fish.x - fish.s * 2.5 * fish.pos,
      fish.y - fish.s / 1.5
    );
    ctx.quadraticCurveTo(
      fish.x - fish.s * 2 * fish.pos,
      fish.y - fish.s / 2.5,
      fish.x - fish.s * 1.5 * fish.pos,
      fish.y - fish.s / 3
    );
    ctx.quadraticCurveTo(
      fish.x - (fish.s / 2) * fish.pos,
      fish.y - fish.s,
      fish.x,
      fish.y - fish.s
    );
    ctx.closePath();
    ctx.fill();
    ctx.stroke();
    ctx.beginPath();
    ctx.fillStyle = 'white';
    ctx.arc(fish.x + fish.s * fish.pos, fish.y, fish.s / 2.5, 0, 2 * Math.PI);
    ctx.fill();
    ctx.beginPath();
    ctx.fillStyle = 'black';
    ctx.arc(fish.x + (fish.s + fish.s / 6) * fish.pos, fish.y, fish.s / 4, 0, 2 * Math.PI);
    ctx.fill();
  };
  var Fish = function() {
    var s = rand(10, 30);
    return {
      x: rand(s * 3, can.width - s * 3),
      y: rand(s, can.height - s),
      s: s,
      c: [rand(100, 200), rand(100, 200), rand(50)],
      px: rand([-1, 1]) * randFloat(1, 3),
      py: rand([-1, 1]) * randFloat(),
      pos: rand([-1, 1]),
      speed: 5,
      caught: false,
      caughtBy: null
    };
  };
  var fish = [];
  for (let i = 0; i < 20; i++) fish.push(new Fish());
  var Line = function(x) {
    return {
      x: x,
      y: 0,
      speed: 3,
      released: false
    };
  };
  var lines = [];
  var fishCaught = 0;
  var secs = 0;
  (function update() {
    ctx.beginPath();
    ctx.clearRect(0, 0, can.width, can.height);
    ctx.fillStyle = 'black';
    ctx.font = '20px eagle lake';
    ctx.textAlign = 'left';
    ctx.textBaseline = 'top';
    let dig = function(n) {
      return n < 10 ? '0' + n : n;
    };
    ctx.fillText('Fish Caught: ' + fishCaught, 0, 0);
    ctx.fillText([dig(Math.floor(secs / 60)), dig(secs % 60)].join(':'), 0, 20);
    for (let i in fish) {
      let p = fish[i];
      ctx.beginPath();
      ctx.shadowBlur = 0;
      ctx.strokeStyle = 'black';
      ctx.fillStyle = 'rgb(' + p.c + ')';
      draw_fish(p);
      if (p.caught) {
        p.y = lines[p.caughtBy].y;
        if (p.y + p.s < -p.s) {
          fish[i] = new Fish();
          fish[i].y = can.height + fish[i].s;
          lines[p.caughtBy].released = true;
          fishCaught++;
        }
      } else {
        p.x += p.px;
        p.y += p.py;
        p.pos = Math.sign(p.px);
        if (p.x + p.s * 2.5 < 0) p.x = can.width + p.s * 2.5;
        else if (p.x - p.s * 2.5 > can.width) p.x = -p.s * 2.5;
        if (p.y + p.s < 0) p.y = can.height + p.s;
        else if (p.y - p.s > can.height) p.y = -p.s;
      }
    }
    let n = 0;
    for (let i in lines) {
      let p = lines[i];
      ctx.beginPath();
      ctx.lineWidth = 2;
      ctx.strokeStyle = 'black';
      ctx.moveTo(p.x, 0);
      ctx.lineTo(p.x, p.y);
      ctx.stroke();
      ctx.beginPath();
      ctx.strokeStyle = 'rgb(50, 50, 50)';
      ctx.moveTo(p.x - 10, p.y);
      ctx.quadraticCurveTo(p.x - 10, p.y + 10, p.x - 5, p.y + 10);
      ctx.quadraticCurveTo(p.x, p.y + 10, p.x, p.y);
      ctx.quadraticCurveTo(p.x, p.y + 10, p.x + 5, p.y + 10);
      ctx.quadraticCurveTo(p.x + 10, p.y + 10, p.x + 10, p.y);
      ctx.stroke();
      p.y += p.speed;
      var caught = false;
      for (let x in fish) {
        if (
          p.y > fish[x].y - fish[x].s &&
          p.y < fish[x].y + fish[x].s &&
          p.x < fish[x].x + fish[x].s * 2 &&
          p.x > fish[x].x - fish[x].s * 2 &&
          Math.sign(p.speed) == 1 &&
          !fish[x].caught
        ) {
          fish[x].caught = caught = true;
          fish[x].caughtBy = i;
          break;
        }
      }
      if (caught) p.speed = -Math.abs(p.speed);
      else if (p.y > can.height) {
        p.speed = -2 * Math.abs(p.speed);
        p.released = true;
      }
      if (p.y < 0 && p.released) n++;
    }
    if (lines.length > 0 && n == lines.length) lines = [];
    requestAnimationFrame(update);
  })();
  (function count() {
    secs++;
    setTimeout(function() {
      requestAnimationFrame(count);
    }, 1000);
  })();
  can
    .on('click', function(e) {
      lines.push(new Line(e.offsetX));
    })
    .on('mousemove', function(e) {
      mouse.x = e.offsetX;
      mouse.y = e.offsetY;
    });
  window
    .on('resize', function() {
      can.width = this.innerWidth;
      can.height = this.innerHeight;
    })
    .on('keydown', function(e) {
      switch (e.which || e.keyCode) {
        case 37:
        case 65:
          fish.mx = -1;
          break;
        case 39:
        case 68:
          fish.mx = 1;
          break;
        case 38:
        case 87:
          fish.my = -1;
          break;
        case 40:
        case 83:
          fish.my = 1;
      }
    })
    .on('keyup', function(e) {
      switch (e.which || e.keyCode) {
        case 37:
        case 65:
        case 39:
        case 68:
          fish.mx = 0;
          break;
        case 38:
        case 83:
        case 40:
        case 87:
          fish.my = 0;
      }
    });
})();
