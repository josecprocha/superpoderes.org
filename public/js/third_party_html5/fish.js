var pFish = {
  template:
    '<div id="p-fish">' +
    '<span class="score-notifier" >{{ score }}</span>' +
    '<svg class="fish"  xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" viewBox="0 0 253 143">' +
    '<g class="mouth-bubble"></g>' +
    '<path class="p-fish-mouth-open" fill="none" stroke="#000" style="display:none" d="M20 64.3c74.8-80.6 126.9-41.6 178.7 0 8.5-12.1 17.9-22.9 36-21.3-9.7 16.5-18.8 32.6-14.7 40l13.3 21.3c-14.3-.6-26.7-4.8-34.7-17.3-55.6 47.3-115 45.4-178-.7l16-10.7L20 64.3z"/>' +
    '<path class="p-fish-mouth-close" fill="none" stroke="#000"  d="M18.2 75.2C72.5-16.5 147 22.8 198.7 64.4c8.5-12.1 17.9-22.9 36-21.3-9.7 16.5-18.8 32.6-14.7 40l13.3 21.3c-14.3-.6-26.7-4.8-34.7-17.3-55.6 47.3-136.8 45.7-179.8-9.8l17.8-1.5-18.4-.6z"/>' +
    '<ellipse class="eye-lid" fill="#fff" stroke="#000" cx="62.3" cy="57.2" rx="6" ry="8.5"/>' +
    '<ellipse class="eye-ball" fill="#000" cx="62.2" cy="59.3" rx="3" ry="4"/>' +
    '<path id="XMLID_5_" fill="none" stroke="#000" d="M71 114.5c19-10.4 24.6-24.7 13-43.8 22.6-16.9 17.1-33.9-8.8-47.8"/>' +
    '<g class="bubbles">' +
    '<ellipse  cx="198.2" cy="69.6" rx="1.2" ry="1.7"/>' +
    '<ellipse  cx="200" cy="68.1" rx="1.5" ry="1.8"/>' +
    '<ellipse  cx="197.6" cy="68" rx="1.6" ry="1.9"/>' +
    '<ellipse  cx="198.4" cy="66.6" rx="1.9" ry="2.1"/>' +
    '<ellipse  cx="200.3" cy="67.6" rx="1.4" ry="1.5"/>' +
    '<ellipse  cx="196.8" cy="68.3" rx="1.6" ry="1.7"/>' +
    '<ellipse  cx="197.8" cy="66.5" rx="1.9" ry="2.1"/>' +
    '</g>' +
    '<g class="stool">' +
    '<path  d="M196.8 89c0 .8-.1.4-.9.4s-1.8.3-1.5-.4c.3-.8.6-1.3 1.3-1 .6.3 1.1.2 1.1 1z"/>' +
    '<path  d="M198.4 89c0 .8-.1.4-.9.4s-1.8.3-1.5-.4c.3-.8.6-1.3 1.3-1 .6.3 1.1.3 1.1 1z"/>' +
    '<path  d="M196.9 90c0 .8-.4.1-1.1.1-.8 0-1.1.6-.9-.1.3-.8.2-1.3.9-1 .6.3 1.1.2 1.1 1z"/>' +
    '<path  d="M197.9 90.5c0 .8.4.3-.3.3-.8 0-1.3.3-1-.4.3-.8.1-1.3.8-1 .6.4.5.3.5 1.1z"/>' +
    '<path  d="M199.2 89.2c0 .8-.1.4-.9.4s-1.8.3-1.5-.4c.3-.8.6-1.3 1.3-1 .6.3 1.1.2 1.1 1z"/>' +
    '<path  d="M197.6 89.2c0 .8-.1.4-.9.4s-1.8.3-1.5-.4c.3-.8.6-1.3 1.3-1 .6.3 1.1.2 1.1 1z"/>' +
    '<path  d="M198.3 89.6c0 .8-.2.2-1 .2s-1.1.4-.8-.3c.3-.8.1-.9.8-.6.6.3 1 0 1 .7z"/>' +
    '<path  d="M197.4 89.1c0 .8-.1.4-.9.4s-1.8.3-1.5-.4c.3-.8.8-1.3 1.5-1 .6.3.9.3.9 1z"/>' +
    '</g>' +
    '</svg>' +
    '</div>',
  props: ['score', 'maxeatlimit', 'direction'],
  data: function() {
    return {
      scaleVal: 1
    };
  },
  mounted: function() {
    TweenLite.set(this.$el.querySelector('.eye-ball'), { x: -1, y: -3 });

    //TweenLite.delayedCall(5,this.generateBubbles)
  },
  methods: {
    // Animation
    scoreAnimation: function() {
      new TimelineLite()
        .fromTo(
          this.$el.querySelector('.score-notifier'),
          0.8,
          {
            autoAlpha: 0,
            y: 0,
            scale: 1
          },
          {
            autoAlpha: 1,
            y: -50,
            scale: 3,
            transformPerspective: 600,
            ease: Back.easeOut
          }
        )
        .to(
          this.$el.querySelector('.score-notifier'),
          0.2,
          {
            autoAlpha: 0,
            ease: Linear.easeNone
          },
          0.5
        );
    },
    fishAnimation: function() {
      new TimelineMax().fromTo(
        this.$el.querySelector('.p-fish-mouth-close'),
        0.2,
        {
          morphSVG: {
            shape: this.$el.querySelector('.p-fish-mouth-close')
          }
        },
        {
          morphSVG: {
            shape: this.$el.querySelector('.p-fish-mouth-open')
          },
          repeat: 3,
          yoyo: true,
          ease: Linear.easeNone
        }
      );
    },
    bubbles: function() {
      return new TimelineLite()
        .staggerFromTo(
          this.$el.querySelectorAll('.fish>.bubbles>ellipse'),
          2,
          {
            autoAlpha: 0,
            x: 0,
            y: 0,
            scale: 1
          },
          {
            autoAlpha: 0.2,
            cycle: {
              x: function() {
                return -(Math.random() * 20 + 10);
              },
              y: function() {
                return -(Math.random() * 100 + 50);
              },
              scale: function() {
                return Math.random() * 3 + 1.5;
              }
            },
            ease: Power4.easeOut
          },
          0.1
        )
        .staggerTo(
          this.$el.querySelectorAll('.fish>.bubbles>ellipse'),
          0.2,
          {
            autoAlpha: 0,
            ease: Linear.easeNone
          },
          0.1,
          0.8
        );
    },
    stool: function() {
      return new TimelineLite()
        .staggerFromTo(
          this.$el.querySelectorAll('.fish>.stool>path'),
          2,
          {
            autoAlpha: 0,
            x: 0,
            y: -10,
            scale: 2
          },
          {
            autoAlpha: 1,
            y: 50,
            scale: 3,
            ease: Back.easeOut
          },
          0.1
        )
        .staggerTo(
          this.$el.querySelectorAll('.fish>.stool>path'),
          1,
          {
            cycle: {
              x: function() {
                return Math.random() * 50 + 20;
              },
              y: function() {
                return '+=' + Math.random() * 20 + 10;
              }
            },
            autoAlpha: 0,
            ease: Linear.easeNone
          },
          0.3,
          0.5
        );
    },
    difficating: function() {
      var el = this;
      new TimelineMax({
        onComplete: function() {
          el.$emit('enablemouseevent');
        }
      })
        .to(this.$el.querySelector('.eye-lid'), 0.2, {
          attr: {
            ry: 0
          },
          repeat: 5,
          yoyo: true,
          transformOrigin: '50% 50%',
          ease: Linear.easeNone
        })
        .to(this.$el.querySelector('.eye-ball'), 0.5, {
          x: 0,
          y: 0,
          ease: Linear.easeNone
        })
        .to(this.$el, 2, {
          x: 0,
          y: -50,
          delay: 0.4,
          ease: Back.easeInOut
        })
        .to(this.$el.querySelector('.eye-lid'), 0.2, {
          attr: {
            ry: 0
          },
          transformOrigin: '50% 50%',
          ease: Linear.easeNone
        })
        .add(function() {
          el.scaleVal = 1;
        })
        .add(this.stool(), 'stool')
        .add(this.bubbles(), 'stool+=0.1')
        .to(this.$el.querySelector('.eye-lid'), 0.2, {
          attr: {
            ry: 8.5
          },
          transformOrigin: '50% 50%',
          ease: Linear.easeNone
        })
        .to(this.$el.querySelector('.eye-ball'), 0.2, {
          x: -1,
          y: -3,
          ease: Linear.easeNone
        });
    },

    // Fish enlargin logic
    fishEnlarge: function() {
      //alert(this.scaleVal);

      if (this.score != this.maxeatlimit) {
        this.scaleVal += 0.2;
      } else {
        this.$emit('disablemouseevent');
        this.$emit('incrementmaxeatlimit');
        this.difficating();
      }
    }
  },
  // Watch
  watch: {
    score: function(val) {
      this.scoreAnimation();
      this.fishAnimation();
      this.fishEnlarge();
    },

    scaleVal: function(val) {
      TweenLite.to(this.$el.querySelector('.fish'), 2, {
        scale: val,
        ease: Linear.easeNone
      });
    },

    direction: function(val) {
      if (val == 'right') {
        TweenLite.set('#p-fish>svg', { rotationY: 180 });
      } else if (val == 'left') {
        TweenLite.set('#p-fish>svg', { rotationY: 0 });
      }
    }
  }
};

// GAme
var Game = new Vue({
  el: '#fish-game',
  data: {
    cursorDirection: '',
    oldX: 0,
    elX: 0,
    elY: 0,
    fish: '',

    sFishInterval: 5,
    score: 0,
    maxEatLimit: 5,
    mouseMoveEnable: true
  },
  components: {
    'predator-fish': pFish
  },
  mounted: function() {
    this.waves();
    this.bubbles();
    setInterval(this.generateBubbles, 10000);
    this.coreGaming();
  },
  methods: {
    // Waves
    waves: function() {
      var waveLayers = this.$el.querySelectorAll('.water-layer > div');
      // for (var i = 0; i < waveLayers.length; i++) {
      // 	waveLayers[i]
      // }
      TweenMax.staggerTo(
        waveLayers,
        2,
        {
          cycle: {
            y: function(i, el) {
              return i + 1 * 20 * -1;
            }
          },
          ease: Back.easeIn,
          repeat: -1,
          yoyo: true
        },
        0.1
      );
    },
    // For Bubbles
    bubbles: function() {
      el = this;
      var bubbles = 10,
        stones = document.querySelectorAll('.stone'),
        canvasHt = document.querySelector('.game-canvas').clientHeight,
        canvasWt = document.querySelector('.game-canvas').clientWidth;

      //console.log(canvas);

      for (var i = 0; i < stones.length; i++) {
        var stonePosition = getComputedStyle(stones[i]);
        var tl = new TimelineMax();
        for (var j = 0; j < bubbles; j++) {
          var bubble = document.createElement('span');
          bubble.classList.add('bubble');
          TweenLite.set(bubble, {
            left: stonePosition.left,
            top: stonePosition.top,
            scale: 0
          });
          el.$el.getElementsByClassName('water-bottom')[0].appendChild(bubble);
          TweenMax.fromTo(
            bubble,
            Math.random() * 4 + 2,
            { x: -20 },
            { x: 20, repeat: -1, yoyo: true, ease: Linear.easeNone }
          );

          tl.to(
            bubble,
            Math.random() * 3 + 2,
            {
              y: -Math.random() * (canvasHt / 2),
              scale: Math.random() * 1,
              repeat: -1,
              ease: Linear.easeNone
            },
            0
          );
        }
      }
    },

    // Coregaming method
    coreGaming: function() {
      // Creating draggable
      this.createDraggable();

      // Creating small fishes
      this.createSmallFish();
      //setInterval(this.createSmallFish,this.sFishInterval)

      // Mouse events
      this.$el
        .getElementsByClassName('prey-fish-wrapper')[0]
        .addEventListener('mousemove', this.mousemovemethod);
    },

    // Creating draggable
    createDraggable: function() {
      var el = this;
      this.fish = Draggable.create('#p-fish', {
        bounds: '.water-layer-3',
        onDrag: el.hitTest
      });
    },

    // Testing hits
    hitTest: function() {
      var sFish = this.$el.querySelectorAll('.s-fish'),
        overlapThreshold = '60%';
      if (sFish.length) {
        for (var i = 0; i < sFish.length; i++) {
          if (this.fish[0].hitTest(sFish[i], overlapThreshold)) {
            this.score += 1;
            sFish[i].remove();
          }
        }
      }

      //console.log(this.fish[0]);
    },

    // Disable MouseMove
    disableMouseMove: function() {
      this.mouseMoveEnable = false;
    },
    enableMouseMove: function() {
      this.mouseMoveEnable = true;
    },

    //Checking mouse Dierection
    mousemovemethod: function(e) {
      if (this.mouseMoveEnable) {
        if (e.pageX < this.oldx) {
          this.cursorDirection = 'left';
        } else if (e.pageX > this.oldx) {
          this.cursorDirection = 'right';
        }

        this.oldx = e.pageX;
        this.elX = e.offsetX;
        this.elY = e.offsetY;
        var el = this.$el,
          x = e.offsetX - parseInt(getComputedStyle(el.querySelector('#p-fish')).left),
          y = e.offsetY - parseInt(getComputedStyle(el.querySelector('#p-fish')).top) + 10;
        TweenLite.to('#p-fish', 0.5, { x: x, y: y });
        this.hitTest();

        this.fish[0].update();
      }
    },
    // Generatebubbles
    generateBubbles: function() {
      var obj = this,
        el = this.$el,
        elWt = this.$el.clientWidth,
        elHt = this.$el.clientHeight,
        bubbles = el.querySelectorAll('.fish-bubble'),
        tl = new TimelineMax();

      for (var i = 0; i < bubbles.length; i++) {
        bubbles[i].remove();
      }
      for (var i = 0; i < 10; i++) {
        var bubble = document.createElement('span');
        bubble.classList.add('fish-bubble');
        TweenLite.set(bubble, {
          top: obj.elY - 50,
          left: obj.elX,
          scale: 0
          //autoAlpha : 0
        });

        el.querySelector('.prey-fish-wrapper').appendChild(bubble);
      }

      tl.staggerTo(
        el.querySelectorAll('.prey-fish-wrapper > .fish-bubble'),
        2,
        {
          cycle: {
            x: function() {
              return Math.random() * 20 + 10;
            },
            scale: function() {
              return Math.random() * 0.6;
            }
          },
          y: -50,
          autoAlpha: 0.5,
          ease: Back.easeOut
        },
        0.1
      ).staggerTo(
        el.querySelectorAll('.prey-fish-wrapper > .fish-bubble'),
        4,
        {
          cycle: {
            x: function() {
              return Math.random() * 50 + 20;
            },
            y: function() {
              return -(Math.random() * 200 + 100);
            }
          },
          autoAlpha: 0,
          ease: Linear.easeNone
        },
        0.1,
        0.5
      );
    },

    // Creating small fishes
    createSmallFish: function() {
      var el = this.$el,
        elHt = this.$el.clientHeight,
        elWt = this.$el.clientWidth,
        sFish = document.createElement('span');

      sFish.classList.add('s-fish');
      TweenLite.set(sFish, {
        left: Math.random() < 0.5 ? 0 : elWt,
        top: Math.random() * elHt
        //scale : 0,
        //autoAlpha : 0
      });

      el.getElementsByClassName('prey-fish-wrapper')[0].appendChild(sFish);
      TweenLite.set(sFish, {
        rotationY: parseInt(getComputedStyle(sFish).left) ? 0 : 180
      });
      TweenMax.to(sFish, 0.5, { y: 20, repeat: -1, yoyo: true, ease: Linear.easeNone });
      TweenLite.to(sFish, Math.ceil(elWt / 100), {
        x: parseInt(getComputedStyle(sFish).left) ? -elWt : elWt,
        ease: Linear.easeNone,
        onComplete: function() {
          this.target.remove();
        }
      });

      TweenLite.delayedCall(this.sFishInterval, this.createSmallFish);
    },

    // INcrement max eat limit
    incrementMaxEatLimit: function() {
      this.maxEatLimit += 5;
    }
  }
});
