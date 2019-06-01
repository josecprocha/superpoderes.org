const $ = (selector, startNode = document) => [...startNode.querySelectorAll(selector)];
const game = {
  el: document.querySelector('#game'),
  p: document.querySelector('#game p'),
  start: function() {
    game.build();
    game.oscillator = game.audio.createOscillator();
    game.oscillator.connect(game.audio.destination);
    game.oscillator.frequency.value = 0;
    game.oscillator.start();
  },
  build: function() {
    for (var i = 0; i < 5; i++) {
      var div = document.createElement('div');
      game.el.appendChild(div);
      for (var j = 0; j < 5; j++) {
        var b = document.createElement('b');
        b.addEventListener('click', game.click);
        div.appendChild(b);
      }
    }
    game.paint();
  },
  colors: ['e33', 'e93', 'ed3', '3b9', '39e', '93e', 'e39'],
  random: function(array) {
    return parseInt(Math.random() * array.length);
  },
  r: 0,
  paint: function() {
    var balls = $('b', game.el);
    var r;
    do {
      r = game.random(game.colors);
    } while (r == game.r);
    const ro = 2 + parseInt(Math.random() * 2);
    const color = '#' + game.colors[r];
    balls.forEach(function(el, i) {
      el.dataset.pick = 0;
      el.style.background = color;
    });
    const pick = game.random(balls);
    const r2 = (r + ro) % game.colors.length;
    balls[pick].style.background = '#' + game.colors[r2];
    balls[pick].dataset.pick = 1;
    const r3 = (r + ro + 1) % game.colors.length;
    document.body.style.background = '#' + game.colors[r3];
    game.r = r;
  },
  click: function(event) {
    if (Number(event.target.dataset.pick)) {
      game.sound();
      var divs = $('div', game.el);
      if (divs.length !== 1) {
        divs[0].remove();
        game.paint();
      } else {
        divs[0].remove();
        game.end();
      }
    }
  },
  audio: new AudioContext(),
  sound: function() {
    var f = 440 + Math.random() * 440;
    game.oscillator.frequency.value = f;
    setTimeout(function() {
      game.oscillator.frequency.value = 0;
    }, 60);
  },
  music: function() {
    for (var i = 0; i < 12; i++) {
      setTimeout(function() {
        game.sound();
      }, i * 160);
    }
  },
  fall: function() {
    var b = document.createElement('b');
    b.className = 'fall';
    var x = Math.random() * innerWidth * 0.9;
    b.style.left = x + 'px';
    var r = game.random(game.colors);
    var color = game.colors[r];
    b.style.background = '#' + color;
    game.el.appendChild(b);
  },
  end: function() {
    game.p.style.display = 'block';
    for (var i = 0; i < 100; i++) {
      setTimeout(game.fall, i * 12);
    }
    game.music();
    setTimeout(function() {
      $('b', game.el).forEach(function(el) {
        el.remove();
      });
      game.p.style.display = 'none';
      game.build();
    }, 2500);
  }
};

game.start();
