// wrapping container for all our rows
var runway = document.getElementById('runway');

// keep track of active elements
// this array should be populated in the order they appear
// eg/ unshift top and push bottom
var elementsActive = [];

// we're gonna recycle things so the GC doesn't have a frickin meltdown :P
var elementPool = [];

// track our viewport limits to save some constant calculations
var viewportUpper, viewportLower;
setViewportLimits();

// track scroll positions so we can detect scroll direction
var prevScrollTop = window.scrollY;

// we need to know all the game tiles in our world
var worldTiles = [];

// maintain a reference to how many tiles in a row
var worldWidth = 20;

// track score
var playerScore = 0;

// track progress
var gameIsOver = false;

// add initial game section
resetGame();

// and lets detect if the user has scrolled so we can update stuff

// probably wanna know if the window gets resized too
window.addEventListener('resize', handleWindowResized);

function resetGame() {
  window.scrollY = 0;
  elementPool = elementPool.concat(elementsActive);
  for (var i in elementPool) {
    resetRow(elementPool[i]);
  }
  runway.innerHTML = '';
  elementsActive = [];
  worldTiles = [];
  playerScore = 0;
  gameIsOver = false;
  document.body.className -= ' game-over';
  fillWindow(1, true);
  startGame();
}

function startGame() {
  window.addEventListener('scroll', handleWindowScroll);
}

function handleWindowScroll() {
  // calculate direction and update scroll position
  let direction = Math.sign(window.scrollY - prevScrollTop);
  prevScrollTop = window.scrollY;

  // handle viewport
  clearExcess(direction);
  fillWindow(direction);
}

function handleWindowResized() {
  // recalculate viewport
  setViewportLimits();
  // assume window has scrolled
  handleWindowScroll();
}

// set upper / lower limits of viewport space, allow some padding
function setViewportLimits() {
  var viewportUpper = -(window.innerHeight * 0.25);
  var viewportLower = window.innerHeight * 1.25;
}

/*
        ================================================================================================
            POPULATE VIEWPORT ROWS
        ================================================================================================
        */

// quick fill window method, calls relevant method based on direction
// if direction is down, we populate downwards and vica-versa
function fillWindow(direction) {
  direction >= 0 ? fillWindowDown() : fillWindowUp();
}

// add rows to the bottom until desired height has been reached
function fillWindowDown() {
  // grab the row ID and current position of the bottom element
  let rowID =
    elementsActive.length > 0
      ? parseInt(elementsActive[elementsActive.length - 1].getAttribute('rowID'))
      : 0;
  let currentBottom =
    elementsActive.length > 0
      ? elementsActive[elementsActive.length - 1].getBoundingClientRect().bottom
      : 0;

  // loop until desired height is reached
  while (currentBottom < window.innerHeight * 1.25) {
    // increment row ID so we grab 'next row'
    rowID++;
    // add the row, padd direction for bottom
    addRow(rowID, 1);
    // recalculate bottom
    currentBottom = elementsActive[elementsActive.length - 1].getBoundingClientRect().bottom;
  }
}

function fillWindowUp() {
  // grab the row ID and current position of the top element
  let rowID = elementsActive.length > 0 ? parseInt(elementsActive[0].getAttribute('rowID')) : 0;
  let currentTop = elementsActive[0].getBoundingClientRect().top;

  // loop until desired height is reached
  while (currentTop > -window.innerHeight * 0.25) {
    // increment row ID so we grab 'previous row'
    // in the case of this demo - it just populates element with a row number
    rowID--;

    // this is only infinite in one direction, so break at 0
    if (rowID < 0) {
      break;
    }

    // add the row, padd direction for top
    addRow(rowID, -1);

    // recalculate top
    currentTop = elementsActive[0].getBoundingClientRect().top;
  }
}

// remove any rows that drift too far from viewport
function clearExcess(direction) {
  for (var i = 0; i < elementsActive.length; i++) {
    if (
      // of the row is too high or too low
      (direction > 0 &&
        elementsActive[i].getBoundingClientRect().bottom < -(window.innerHeight * 0.25)) ||
      (direction < 0 && elementsActive[i].getBoundingClientRect().top > window.innerHeight * 1.25)
    ) {
      // byebye
      removeRow(elementsActive[i]);
    }
  }
}

/*
        ================================================================================================
            ADD / CREATE / REMOVE ROWS
        ================================================================================================
        */

function addRow(rowID, direction) {
  // grab an available row ( hopefully from the object pool )
  var row = getAvailableRow();

  // set it's rowID attribute, we use this for lookups
  row.setAttribute('rowID', rowID);

  // get game tiles for row
  var worldRowTiles = getTilesInRow(rowID - 1);

  // update all tiles in row
  var domRowTiles = row.getElementsByClassName('tile');
  for (var i = 0; i < domRowTiles.length; i++) {
    worldRowTiles[i].element = domRowTiles[i];
    domRowTiles[i].setAttribute('world-tile', worldRowTiles[i].index);
    if (worldRowTiles[i].revealed) {
      domRowTiles[i].className += ' revealed';
      if (worldRowTiles[i].mineCount > 0) {
        domRowTiles[i].innerHTML = '<span>' + worldRowTiles[i].mineCount + '</span>';
      }
    }
  }

  // if direction is down
  if (direction > 0) {
    // add row to bottom of DOM tree and push to end of array
    runway.appendChild(row);
    elementsActive.push(row);
  } else {
    // otherwise rows goes at top of DOM tree and front of array
    runway.insertBefore(row, elementsActive[0]);
    elementsActive.unshift(row);
  }
}

function removeRow(row) {
  // pop the row off the DOM tree
  runway.removeChild(row);
  // push is back into the objet pool
  elementPool.push(row);
  // remove it for the active list
  elementsActive.splice(elementsActive.indexOf(row), 1);

  resetRow();
}

function resetRow(row) {
  // get game tiles for row
  var worldRowTiles = getTilesInRow(row.getAttribute('rowID') - 1);
  // update all tiles in row
  var domRowTiles = row.getElementsByClassName('tile');
  // reset DOM tiles
  for (var i = 0; i < domRowTiles.length; i++) {
    worldRowTiles[i].element = null;
    domRowTiles[i].setAttribute('world-tile', null);
    domRowTiles[i].className = 'tile';
    domRowTiles[i].innerHTML = '';
  }
}

function getAvailableRow(index) {
  // attempt to grab apremade row from the object pool
  let row = elementPool.shift();
  if (!row) {
    // that sucks - create a new element instead
    // this will eventually balance out
    row = document.createElement('div');

    var tiles = 20;
    while (tiles--) {
      var tile = document.createElement('div');
      tile.className = 'tile';
      tile.addEventListener('click', handleTileClick);
      row.appendChild(tile);
    }

    row.className = 'row';
  }
  // return our new found element
  return row;
}

/*
        ================================================================================================
            ADD MINESWEEPER SECTION
        ================================================================================================
        */

// adds a new set of tiles to the game world
function addSection() {
  // we're building the game in 'chunks' of X tiles
  // this is so we can place the mines collectively within a chunk
  // giving us control over how many mines are in a chunk
  // the other option would be a random() on each tile, which can leave messy results imo

  // so each new section is 400 tiles ( 20 X 20 )
  let tiles = [];
  while (tiles.length < 400) {
    // create the tile object
    tile = {
      x: (worldTiles.length + tiles.length) % worldWidth,
      y: Math.floor((worldTiles.length + tiles.length) / worldWidth),
      index: worldTiles.length + tiles.length,
      mine: false,
      surroundingMines: 0
    };
    tiles.push(tile);
  }

  // and now we populate our 'world' with the new batch
  worldTiles = worldTiles.concat(tiles);

  // so we need to add mines, X mines per section
  let mineCount = 100;
  while (mineCount--) {
    // choose a radom tile
    let tile = tiles[Math.floor(Math.random() * tiles.length)];
    // if it doesn;t already have a mine, add one
    if (!tile.mine) {
      tile.mine = true;
    }
  }
}

// get neighbour tiles in the game grid
function getNeighbourTiles(tile) {
  let neighbours = [];
  if (tile.y != 0) {
    // there's is a row above this tile
    neighbours.push(worldTiles[tile.index - worldWidth]); // top
    if (tile.x != 0) neighbours.push(worldTiles[tile.index - worldWidth - 1]); // top left
    if (tile.x != worldWidth - 1) neighbours.push(worldTiles[tile.index - worldWidth + 1]); // top right
  }

  if (tile.y < Math.floor(worldTiles.length / worldWidth) - 1) {
    // there's a row below this one
    neighbours.push(worldTiles[tile.index + worldWidth]); // bottom
    if (tile.x != 0) neighbours.push(worldTiles[tile.index + worldWidth - 1]); // bottom left
    if (tile.x != worldWidth - 1) neighbours.push(worldTiles[tile.index + worldWidth + 1]); // bottom right
  }

  if (tile.x != 0) neighbours.push(worldTiles[tile.index - 1]); // left
  if (tile.x != worldWidth - 1) neighbours.push(worldTiles[tile.index + 1]); // right

  return neighbours;
}

// returns a row of word tiles
function getTilesInRow(row) {
  var startIndex = row * worldWidth;
  var endIndex = startIndex + worldWidth;
  var tiles = [];

  while (endIndex >= worldTiles.length) {
    addSection();
  }

  for (var i = startIndex; i < endIndex; i++) {
    tiles.push(worldTiles[i]);
  }

  return tiles;
}

/*
        ================================================================================================
            USER INTERACTION
        ================================================================================================
        */

function handleTileClick(e) {
  var worldTileIndex = e.currentTarget.getAttribute('world-tile');
  var worldTile = worldTiles[worldTileIndex];
  revealTile(worldTile);
}

function revealTile(worldTile) {
  // flag tile as revealed
  worldTile.revealed = true;

  if (worldTile.mine) {
    gameOver(worldTile);
  } else {
    playerScore++;

    // grab neighbours and set mineCount
    var neighbours = getNeighbourTiles(worldTile);
    var mineCount = 0;

    // count how many mines are in the neighbours
    for (var i in neighbours) {
      if (neighbours[i].mine) {
        mineCount++;
      }
    }

    // if no mines are near by
    // game spreads out until it encounters one
    if (mineCount === 0) {
      for (var i in neighbours) {
        if (!neighbours[i].revealed) {
          revealTile(neighbours[i]);
        }
      }
    }

    // set tile mine count for DOM reference
    worldTile.mineCount = mineCount;

    // if the tile has an element attached, set revealed flag
    if (worldTile.element) {
      worldTile.element.className += ' revealed';
      if (worldTile.mineCount > 0) {
        worldTile.element.innerHTML = '<span>' + worldTile.mineCount + '</span>';
      }
    }
  }
}

function gameOver(worldTile) {
  window.removeEventListener('scroll', handleWindowScroll);
  gameIsOver = true;
  worldTile.element.className += ' mine';

  // trigger screen
  document.body.className = 'game-over';
  document.getElementById('score').innerHTML = playerScore;
}
