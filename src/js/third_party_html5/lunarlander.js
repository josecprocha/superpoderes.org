const seed = 5625463739 + 20;
const gravityForce = 0.1;
const shipThrust = 0.00004;
const turnForce = 0.03;

const random = (() => {
  let s = seed;
  return () => alea(s++)();
})();

setTimeout(() => {
  const canvasId = 'js-canvas-container';
  const width = 410;
  const height = 410;
  const background = 'transparent';
  const engine = MatterEngine.create(canvasId, { width, height, background, wireframes: false });
  engine.loadScene(seed, mainSceneFactory, { canvasId, width, height });
}, 0);

const mainSceneFactory = {
  create: (seed, matter, options) => {
    [matter.world.gravity.x, matter.world.gravity.y] = [0, gravityForce];
    const state = MatterEngine.SceneFactory.create(mainSceneFactory, matter);
    state.input = {
      up: false,
      right: false,
      down: false,
      left: false
    };

    state.options = options;
    state.mainContainer = new PIXI.Container();
    state.worldContainer = new PIXI.Container();
    state.background = mainSceneFactory.createBackground(options.width, options.height);
    // state.mainContainer.addChild(state.background.graphics);
    state.mainContainer.addChild(state.worldContainer);
    state.mainContainer.pivot = { x: 205, y: 205 };
    state.mainContainer.position = { x: 205, y: 205 };
    matter.render.container.addChild(state.background.graphics);
    matter.render.container.addChild(state.mainContainer);
    state.ground = mainSceneFactory.createGround(
      options.width / 2,
      options.height + 60,
      options.width * 5,
      options.height / 2,
      options.width
    );
    state.worldContainer.addChild(state.ground.graphics);
    state.ship = mainSceneFactory.createShip(options.width / 2 + 200, 30, state.input);
    state.minimap = mainSceneFactory.createMinimap(options.width - 130, 10);
    state.mainContainer.addChild(state.minimap.graphics);
    state.worldContainer.addChild(state.ship.graphics);
    mainSceneFactory.createMatter(state);
    setupEventListeners(state.input);
    state.iteration = 0;
    return state;
  },

  update: state => {
    mainSceneFactory.handleKeys(state);
    const { position } = state.ship.matterBody;
    [state.worldContainer.position.x, state.worldContainer.position.y] = [
      0 - position.x + state.options.width / 2,
      0 - position.y + state.options.height / 2
    ];

    state.minimap.render(state.ground, state.ship);
    const { bounds } = state.ground.matterBody;
    state.ship.matterBody.position.x = Math.min(
      bounds.max.x - state.options.width / 2,
      Math.max(bounds.min.x + state.options.width / 2, position.x)
    );
    state.background.render(state.ship.matterBody.velocity);
    state.iteration++;
  },

  createBackground: (width, height) => {
    return backgroundFactory.create(width, height);
  },

  createMinimap: (x, y) => {
    return minimapFactory.create(x, y);
  },

  createGround: (x, y, width, height) => {
    return groundFactory.create(x, y, width, height);
  },

  createShip: (x, y, input) => {
    return shipFactory.create(x, y, 30, 0, input);
  },

  handleKeys: ({ ship, input }) => {
    if (input.left) {
      ship.turnForce = -turnForce;
      document.getElementById('left').className = 'key left is-down';
    }
    if (input.right) {
      ship.turnForce = turnForce;
      document.getElementById('right').className = 'key right is-down';
    }
    if (input.up) {
      const angle = (ship.matterBody.angle - Math.PI / 2) % (Math.PI * 2);
      const { force, velocity } = ship.matterBody;
      force.x += Math.cos(angle) * shipThrust;
      force.y += Math.sin(angle) * shipThrust;
      Matter.Body.setAngularVelocity(ship.matterBody, 0);
      document.getElementById('up').className = 'key up is-down';
    }
    if (input.down) {
      document.getElementById('down').className = 'key down is-down';
    }
  },

  createMatter: state => {
    state.addMatter([state.ground, state.ship]);
  }
};

const minimapFactory = {
  create: (x, y) => {
    const graphics = new PIXI.Graphics();
    const state = {
      x,
      y,
      graphics,
      render: (ground, ship) => {
        minimapFactory.render(state, ground, ship);
      }
    };

    return state;
  },

  renderGround: (state, ground) => {
    const { graphics } = state;
    const { matterBody } = ground;
    const scaleFactor = 0.1;
    matterBody.parts.forEach(({ vertices }, index) => {
      if (index === 0) {
        return;
      }
      graphics.beginFill(0xffdede);
      graphics.lineStyle(2, 0xffdede);
      let xPos = vertices[0].x;
      let yPos = vertices[0].y;
      graphics.moveTo(xPos * scaleFactor + state.x, yPos * scaleFactor + state.y);
      for (let index = 1; index < vertices.length; index++) {
        let xPos = vertices[index].x;
        let yPos = vertices[index].y;
        graphics.lineTo(xPos * scaleFactor + state.x, yPos * scaleFactor + state.y);
      }
      xPos = vertices[0].x;
      yPos = vertices[0].y;
      graphics.lineTo(xPos * scaleFactor + state.x, yPos * scaleFactor + state.y);
      graphics.endFill();
    });
  },

  renderShip: (state, ship) => {
    const { graphics } = state;
    const { x, y } = ship.matterBody.position;
    const scaleFactor = 0.1;
    graphics.beginFill(0x00ff00);
    graphics.lineStyle(2, 0x00ff00);
    graphics.drawRect(state.x + x * scaleFactor - 2.5, state.y + y * scaleFactor - 2.5, 5, 5);
    graphics.endFill();
  },

  render: (state, ground, ship) => {
    state.graphics.clear();
    if (state.graphics.cacheAsBitmap) {
      return;
    }
    minimapFactory.renderGround(state, ground);
    minimapFactory.renderShip(state, ship);
    // state.graphics.cacheAsBitmap = true;
  }
};

const groundFactory = {
  create: (x, y, width, height, screenWidth) => {
    const graphics = new PIXI.Graphics();
    const state = {
      width,
      height,
      screenWidth,
      x,
      y,
      graphics,
      update: options => {
        return groundFactory.update(state, options);
      },
      vertices: groundFactory.generateVertices(width, height, 30, 40),
      matterOptions: {
        friction: 1,
        airFriction: 0,
        restitution: 0.1,
        isStatic: true
      }
    };

    return state;
  },

  generateVertices: (width, height, stepCount, elevationVariance) => {
    const stepSize = Math.floor(width / stepCount);
    const groundVertices = Array(...Array(stepCount)).map((_, index) => {
      return [
        stepSize * index + stepSize / 2 + -width / 2,
        -height / 2 - Math.floor(random() * 5) * elevationVariance
      ];
    });
    return [
      [-width / 2, -height / 2],
      ...groundVertices,
      [width / 2, -height / 2],
      [width / 2, height / 2],
      [-width / 2, height / 2]
    ].map(([x, y]) => ({ x, y }));
  },

  update: (state, options) => {
    const { graphics, matterBody } = state;
    const { vertices, parts } = matterBody;
    const { x, y } = matterBody.position;
    graphics.rotation = matterBody.angle;
    [graphics.position.x, graphics.position.y] = [x, y];
    if (graphics.cacheAsBitmap) {
      return;
    }
    graphics.clear();
    graphics.lineStyle(2, 0x999999);
    graphics.moveTo(-state.width / 2 + 135, -800);
    graphics.lineTo(-state.width / 2 + 135, state.height / 2);
    graphics.moveTo(state.width / 2 - 254, -800);
    graphics.lineTo(state.width / 2 - 254, state.height / 2);
    parts.forEach(({ vertices }, index) => {
      if (index === 0) {
        return;
      }
      graphics.beginFill(0xdedede);
      graphics.lineStyle(1, 0xdedede);
      graphics.moveTo(vertices[0].x - x, vertices[0].y - y);
      for (let index = 1; index < vertices.length; index++) {
        graphics.lineTo(vertices[index].x - x, vertices[index].y - y);
      }
      graphics.lineTo(vertices[0].x - x, vertices[0].y - y);
      graphics.endFill();
    });
    graphics.cacheAsBitmap = true;
  }
};

const backgroundFactory = {
  create: (width, height) => {
    const graphics = new PIXI.Graphics();
    const stars = Array(...Array(100)).map((_, index) => {
      const speed = random() * 1.5;
      const x = random() * width;
      const y = random() * height;
      return {
        x,
        y,
        speed
      };
    });
    const state = {
      stars,
      width,
      height,
      graphics,
      render: vector => {
        backgroundFactory.render(state, vector);
      }
    };

    return state;
  },

  render: (state, vector) => {
    const { graphics } = state;
    graphics.clear();
    state.stars.forEach(star => {
      const { x, y, speed } = star;
      const particleSpeed = speed / 3;
      graphics.beginFill(0xffffff);
      graphics.drawCircle(x, y, speed);
      graphics.endFill();
      [star.x, star.y] = vec2.add(
        [],
        [star.x, star.y],
        [-vector.x * particleSpeed, -vector.y * particleSpeed]
      );
      [star.x, star.y] = [
        (star.x + state.width) % state.width,
        (star.y + state.height) % state.height
      ];
    });
  }
};

const shipFactory = {
  create: (x, y, size, rotation, input) => {
    const graphics = new PIXI.Graphics();
    const state = {
      input,
      graphics,
      rotation,
      size,
      x,
      y,
      update: options => {
        return shipFactory.update(state, options);
      },
      turnForce: 0,
      vertices: shipFactory.generateVertices(size),
      flameVertices: shipFactory.generateFlameVertices(size),
      lastDown: false,
      matterOptions: {
        friction: 1,
        airFriction: 0,
        resitution: 0.1
      }
    };

    return state;
  },

  generateVertices: size => {
    return [[0, -0.4], [0.4, 0.4], [0, 0.2], [-0.4, 0.4]].map(([x, y]) => ({
      x: x * size,
      y: y * size - 4
    }));
  },

  generateFlameVertices: size => {
    return [[-0.2, 0.3], [0, 0.6], [0.2, 0.3], [0, 0.2]].map(([x, y]) => ({
      x: x * size,
      y: y * size - 4
    }));
  },

  update: state => {
    const { graphics, matterBody, vertices, flameVertices } = state;
    const { x, y } = matterBody.position;
    if (state.input.up !== state.lastDown) {
      graphics.cacheAsBitmap = false;
      state.lastDown = state.input.up;
    }
    Matter.Body.setAngle(state.matterBody, state.matterBody.angle + state.turnForce);
    state.turnForce *= 0.8;
    graphics.rotation = matterBody.angle;
    [graphics.position.x, graphics.position.y] = [x, y];
    graphics.clear();
    graphics.beginFill(0x3b3251);
    graphics.lineStyle(2, 0xdedede);
    graphics.moveTo(vertices[0].x, vertices[0].y);
    for (let index = 1; index < vertices.length; index++) {
      graphics.lineTo(vertices[index].x, vertices[index].y);
    }
    graphics.lineTo(vertices[0].x, vertices[0].y);
    graphics.endFill();
    if (state.input.up) {
      graphics.beginFill(0xdedede);
      graphics.moveTo(flameVertices[0].x, flameVertices[0].y);
      for (let index = 1; index < flameVertices.length; index++) {
        graphics.lineTo(flameVertices[index].x, flameVertices[index].y);
      }
      graphics.lineTo(flameVertices[0].x, flameVertices[0].y);
      graphics.endFill();
    }
    graphics.cacheAsBitmap = true;
  }
};

// start controls
function setupEventListeners(input) {
  window.addEventListener('keydown', handleKeyDown(input));
  window.addEventListener('keyup', handleKeyUp(input));
}

function handleKeyUp(input) {
  return ({ keyCode }) => {
    document.getElementById('left').className = 'key left';
    document.getElementById('right').className = 'key right';
    document.getElementById('up').className = 'key up';
    document.getElementById('down').className = 'key down';
    switch (keyCode) {
      case 38:
        input.up = false;
        break;
      case 39:
        input.right = false;
        break;
      case 40:
        input.down = false;
        break;
      case 37:
        input.left = false;
        break;
    }
  };
}

function handleKeyDown(input) {
  return e => {
    const { keyCode } = e;
    switch (keyCode) {
      case 38:
        e.preventDefault();
        input.up = true;
        break;
      case 39:
        input.right = true;
        break;
      case 40:
        e.preventDefault();
        input.down = true;
        break;
      case 37:
        input.left = true;
        break;
    }
  };
}
// end controls

const d =
  'm -104.875,-92.09375 0,768.1875 1045.40625,0 0,-768.1875 z m 792,112.875 34.65625,11.90625 20.78125,0.96875 7.9375,27.71875 14.84375,-0.96875 1,27.71875 -19.8125,2.96875 -17.83323,10.88861 -0.97927,19.79889 -21.76826,41.59622 -16.82611,38.61541 -21.8125,-11.90625 -34.625,-3.9375 -24.78125,5.9375 -7.90625,-2 -24.75,0 -25.73329,-0.98391 -15.31378,13.83209 11.32832,18.83963 40.12327,-2.25028 32.87302,18.58819 19.19178,26.29536 26.63402,26.66748 -32.39197,7.92422 -27.00314,8.90591 -51.49567,-1.96968 -28.71875,-23.76392 -38.59931,-21.77166 -33.50197,0.84141 -15.01258,17.95902 22.03906,12.99888 31.72405,3.22072 -12.59415,20.3177 1.40096,23.85627 -34.66386,2.83963 -34.48373,-10.07244 -21.94059,13.16875 -29.70203,-16.81589 -33.52512,4.78517 -17.95385,-15.67626 6.9233,-24.75342 -6.9375,-22.78588 18.82117,-31.6612 -60.41058,16.83385 -12.875,8.90625 -13.84379,-10.90625 -2.96875,15.84375 -14.84375,7.9375 -10.90625,-2 -14.84375,15.84375 -22.78125,7.9375 -14.84375,6.90625 -12.875,15.84375 25.75,6.9375 22.75,13.875 0,10.875 14.875,2 2.96875,31.6875 14.84375,-1 -2.96875,-17.8125 21.78125,0.96875 3.96875,6.9375 0.96875,21.78125 -0.96875,14.84375 8.90625,8.90625 18.8125,0 30.6875,-18.8125 25.75,4.96875 14.84375,-6.9375 21.78125,8.90625 24.75,4.96875 20.78125,-8.9375 14.875,-0.96875 0.96875,12.875 21.78125,12.875 1,-28.71875 9.90625,0 3.96875,12.875 16.8125,7.90625 c 33.27463,-18.73251 24.47258,-18.82094 53.4734,17.82147 l 26.73948,-24.75556 24.74257,-0.9951 3.96071,21.78218 22.77135,2.98236 12.88861,18.80662 16.81714,-20.79115 21.77351,-15.84158 18.80879,-27.71659 21.81095,-9.90934 16.82334,-16.82457 13.85055,15.85303 8.92605,20.78775 -3.96968,21.78651 15.85056,12.86974 0.96875,21.78125 5.9375,9.90625 2.987,21.76764 -23.75247,1.97091 14.84777,16.84159 6.9177,18.79486 -11.875,12.875 -49.5,2 -17.84375,-10.90625 0,-31.6875 -13.84375,0 -15.84375,13.875 -27.71875,9.90625 -46.53125,22.75 -65.34375,0 -14.875,-16.8125 -17.8125,1 0,23.75 -28.71875,6.9375 -26.71875,-8.90625 3.95204,-23.76578 -28.70668,-0.9901 -22.77228,16.82612 -36.62933,-12.88274 -16.84375,-19.78125 -13.84375,0 -22.78496,11.86603 1.99195,30.68471 -53.4706,7.93843 -18.82766,-22.78744 -32.67018,-22.75371 -42.57859,-16.83168 -7.90625,-14.875 -22.78125,-9.875 -5.9375,-11.90625 -26.730195,-40.57952 -3.96875,-29.71875 -43.5625,-4.9375 L 49.5,318.8125 l -14.84375,-2.96875 0,-11.875 19.804765,-26.75248 28.721225,-2.95266 2.956374,-33.67698 -21.773824,-85.1284 39.59375,-18.8125 14.84375,4.9375 18.8125,-10.875 14.875,13.84375 10.875,-19.8125 30.6875,2 19.8125,-3.96875 6.9375,-19.8125 20.78125,-6.90625 32.6875,-21.78125 45.52073,11.875928 25.73948,40.572092 19.8125,-5.9375 23.75,7.9375 L 400,118.8125 430.6875,112.875 465.34375,97.03125 500,79.21875 l 27.71875,0.96875 22.78125,1 29.6875,-12.875 L 601,51.5 617.82457,77.231745 645.53125,78.21875 648.5,38.625 z';
