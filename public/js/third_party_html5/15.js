console.clear();
// Global variables:
var numBlocksX = 4,
    numBlocksY, // is set to numBlocksX
    numBlocks,
    gameBorder = 10,
    gamePadding = 10,
    gameInnerSpacing = 2,
    gameSize,
    wdt,
    hgt,
    moves,
    shuffleMoves,
    isShuffling,
    blockSize,
    blockArray = [],
    noMoves = false,
    lastSound = -1;
$(function() {
  startup();
  initiate_input();
});
function startup(){
  set_start_sizes();
  adjust_css();
  generate_blocks();
  position_blocks();
  shuffle_blocks();
}
function set_start_sizes() {
  numBlocksY = numBlocksX;
  numBlocks = numBlocksX * numBlocksY;
  shuffleMoves = numBlocks * 20;
  extraSize = $('.text').height();
  wdt = $(document).width();
  hgt = $(document).height() - extraSize -10;
  min = Math.min(wdt,hgt);
  //min = 360;
  wdt = min - ((gameBorder + gamePadding + gameInnerSpacing) * 2);
  hgt = wdt;
  $('.game-wrapper').width(wdt + ((gameBorder + gamePadding + gameInnerSpacing) * 2));
  gameSize = hgt + gameInnerSpacing * 2;
  blockSize = wdt / numBlocksX;
  //console.log(wdt, blockSize);
}
function adjust_css() {
  var rules;
  rules = 'padding:' + gamePadding + 'px;';
  rules += 'width:' + gameSize + 'px;';
  rules += 'height:' + gameSize +'px;';
  rules += 'top: -' + gameInnerSpacing +'px;';
  rules += 'left: -' + gameInnerSpacing +'px;';
  rules += 'border:' + gameBorder +'px solid;';
  addCSSRule(document.styleSheets[0], '.outer-wrapper', rules, 0);
  rules = 'width:' + wdt + 'px;';
  rules += 'height:' + hgt + 'px;';
  addCSSRule(document.styleSheets[0], '.wrapper', rules, 0);
  rules = 'width:' + blockSize + 'px;';
  rules += 'height:' + blockSize + 'px;';
  rules += 'line-height:' + blockSize + 'px;';
  addCSSRule(document.styleSheets[0], '.fg-both', rules, 1);
}
function generate_blocks() {
  $block = '<div class="fg-block fg-both color" pos="P0" id="block-ID" data-x="X0" data-y="Y0"><div>text</div></div>';
  var newBlock, i = 0, color;
  for (var y = 0; y < numBlocksY; y++) {
    for (var x = 0; x < numBlocksX; x++) {
      i++;
      blockArray.push(i);
      newBlock = $block.replace(/X0/g, x);
      newBlock = newBlock.replace(/Y0/g, y);
      newBlock = newBlock.replace(/ID/g, i);
      newBlock = newBlock.replace(/P0/g, i);
      newBlock = newBlock.replace(/text/g, i);
      if (is_even(y)) { flip = true; } else { flip = false; }
      if (flip) {
        if (is_even(x)) { color = 'red'; } else {color = 'white'; }
      } else {
        if (is_odd(x)) { color = 'red'; } else {color = 'white'; }
      }
      newBlock = newBlock.replace(/color/g, color);
      $('.wrapper').append(newBlock);
    }
  }
  // Convert the last block to the hole
  var blocks = $('.fg-block');
  num = blocks.length -1;
  $(blocks[num]).removeClass('fg-block').addClass('fg-hole');
  $(blocks[num]).text('');
}
function shuffle_blocks() {
  isShuffling = true;
  moves = 0;
  var r, lastR, random,
      holeX, holeY,
      possibleMoves = [],
      up, down, left, right;

  for (var i = 0; i < shuffleMoves; i++) {

    possibleMoves = [];

    holeX = $('.fg-hole').attr('data-x');
    holeY = $('.fg-hole').attr('data-y');

    left = true; right = true; up = true; down = true;

    if (holeY == numBlocksY - 1 || lastR === 'down')  { up = false; }
    if (holeY == 0 || lastR == 'up')                  { down = false; }
    if (holeX == numBlocksX - 1 || lastR === 'right') { left = false; }
    if (holeX == 0 || lastR == 'left')                { right = false; }

    if (left === true)  { possibleMoves.push('left'); }
    if (right === true) { possibleMoves.push('right'); }
    if (up === true)    { possibleMoves.push('up'); }
    if (down === true)  { possibleMoves.push('down'); }

    random = Math.floor(Math.random(1) * possibleMoves.length);

    r = possibleMoves[random];
    lastR = r;

    move_blocks([1,r]);
    reposition_blocks();
  }
  isShuffling = false;
  moves = 0;
  noMoves = false;
}
function position_blocks() {
  var i = 0;
  $('.fg-both').each(function() {
    i++;
    var x = $(this).attr('data-x');
    var y = $(this).attr('data-y');
    $(this).attr('pos', i);
    x *= wdt / numBlocksX;
    y *= hgt / numBlocksY;
    $(this).css('left', x).css('top', y);
  });
}
function initiate_input() {
//  console.log('initiate_input');
  $('#restart').click(function() {
    shuffle_blocks();
    $('.text').text('Moves: 0');
  })
  $('.fg-block').on('click touchstart', function() {
    event.stopPropagation();
    event.preventDefault();
    var x = $(this).attr('data-x'),
        y = $(this).attr('data-y'),
        cx = check_hole_x(x, y),
        cy = check_hole_y(x, y);

    if (!cx && !cy) { return false; }
    if (noMoves) { return false; }

    if (cx) { move_blocks(cx); }
    if (cy) { move_blocks(cy); }
      reposition_blocks();
      var check_win = function() {
        var winFlag = true;
        for (i=1; i <= blockArray.length; i++) {

          if (i != Math.round(blockArray[i-1])) {
            winFlag = false;
          }
          //        console.log(i, blockArray[i-1], blockArray.length, winFlag);
        }
        return winFlag;
      }
    if (check_win()) {
      noMoves = true;
      setTimeout(function(){
        $('.message .text').html('Congratulations!<br>You won in ' + moves + ' moves!').show();
      },200);
    }
  });
}

function check_hole_x(x, y) {
  if (x === $('.fg-hole').attr('data-x')) {
    var yMoves = y - $('.fg-hole').attr('data-y');
    var output = [];
    output[0] = Math.abs(yMoves);
    var direction = 'down';
    if (yMoves > 0) {
      direction = 'up';
    }
    output[1] = direction;
    return output;
  } else {
    return false;
  }
}
function check_hole_y(x, y) {
  if (y === $('.fg-hole').attr('data-y')) {
    var xMoves = x - $('.fg-hole').attr('data-x');
    var output = [];
    output[0] = Math.abs(xMoves);
    var direction = 'right';
    if (xMoves > 0) {
      direction = 'left';
    }
    output[1] = direction;
    return output;
  } else {
    return false;
  }
}
function move_blocks(input) {
  var numBlocksToMove = Math.abs(input[0]);
  var direction = input[1];
  var oldHolePos;
  var holePosX = Math.abs($('.fg-hole').attr('data-x')),
      holePosY = Math.abs($('.fg-hole').attr('data-y')),
      holePosition = (holePosY * numBlocksX) + holePosX + 1,
      newHolePos;

  var swapArrayElements = function(arr, indexA, indexB) {
    var temp = arr[indexA];
    arr[indexA] = arr[indexB];
    arr[indexB] = temp;
  };

  for (var i = 1; i <= numBlocksToMove; i++) {
    if (direction == 'left')  { newHolePos = holePosition + 1; }
    if (direction == 'right') { newHolePos = holePosition - 1; }
    if (direction == 'up')    { newHolePos = holePosition + numBlocksX; }
    if (direction == 'down')  { newHolePos = holePosition - numBlocksX; }
    swapArrayElements(blockArray,newHolePos-1,holePosition-1);
    holePosition = newHolePos;
  }
  if (!isShuffling) {
    playSound(1);
    moves++;
    $('.text').text('Moves: '+ moves);
  }
}
function reposition_blocks() {
//  console.log('reposition_blocks');
  var i = 0;

  for (i = 0; i < numBlocks; i++) {
    var numberBlock = blockArray[i];

    var y = Math.floor(i / numBlocksX);
    var x = i - (y * numBlocksX);
    var posX = blockSize * x;
    var posY = blockSize * y;

    $('#block-'+numberBlock).attr('pos', i + 1);
    $('#block-'+numberBlock).attr('data-x', x);
    $('#block-'+numberBlock).attr('data-y', y);
    $('#block-'+numberBlock).css('left', posX);
    $('#block-'+numberBlock).css('top', posY);
  }
}
// is_even and is_odd taken from here:
//http://stackoverflow.com/questions/6211613/testing-whether-a-value-is-odd-or-even
function is_even(n) {
//  console.log('is_even');
  return n % 2 == 0;
}
function is_odd(n) {
//  console.log('is_odd');
  return Math.abs(n % 2) == 1;
}
var sheet = (function() {
	// Create the <style> tag
	var style = document.createElement("style");

	// Add a media (and/or media query) here if you'd like!
	// style.setAttribute("media", "screen")
	// style.setAttribute("media", "only screen and (max-width : 1024px)")

	// WebKit hack :(
	style.appendChild(document.createTextNode(""));

	// Add the <style> element to the page
	document.head.appendChild(style);

	return style.sheet;
})();
function addCSSRule(sheet, selector, rules, index) {
	if("insertRule" in sheet) {
		sheet.insertRule(selector + "{" + rules + "}", index);
	}
	else if("addRule" in sheet) {
		sheet.addRule(selector, rules, index);
	}
}
function playSound(number){
  if (number) {randomSound = number;} else {
    var randomSound = -1;
    while (randomSound == -1 || randomSound == lastSound) {
      var randomSound = Math.floor(Math.random(1)*2);
    }
  }
  console.log(randomSound);
  if (randomSound == 0){ audio00.play(); }
  if (randomSound == 1){ audio01.play(); }
  lastSound = randomSound;
}
