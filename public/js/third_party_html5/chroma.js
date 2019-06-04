/**
 * A JQuery version of Blendoku
 * by Melissa Cabral
 * uses JQuery color plugin and jQuery UI
 */

//========== CONFIG ==============
//true will show stats and info for debugging,
//false is normal play mode
var debug = false;

// var unlockedLevels = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];
var unlockedLevels = [1];
//======== end config =========

//parameters for each level (values come from external data)
var currentLevel, width, height, difficulty, color1, color2, color3, color4;
var presetKeys = ['top', 'bottom', 'left', 'right'];

//for scoring and tracking when the game is finished
//how many chips total?
var chipCounter = 0;
//count how many targets have been filled correctly
var correctChips = 0,
  incorrectMoves = 0;
var stars = 0;
//counter for how many times the user has clicked a chip
var moveCounter = 0;

var $startScreen = $('#start-screen');
var $levelsScreen = $('#levels-screen');
var $gameScreen = $('#game-screen');
var $feedbackScreen = $('#feedback-screen');
var $currentScreen;

var $feedbackTitle = $('#feedback-screen h1');
var $feedbackBody = $('#feedback-screen p');
var $feedbackStars = $('.stars');

//arrays to hold all the chips on all sides
var colorList = [];
var colorListSide = [];

//Setup SOUNDS
//define sounds. Audio is part of vanilla JS
var url = 'http://melissacabral.com/demos/javascript/sounds/';
var bubbleUp = new Audio(url + 'bubbleup.mp3');
var bubbleDown = new Audio(url + 'bubbledown.mp3');
var pop = new Audio(url + 'pop.mp3');
var blop = new Audio(url + 'Blop.mp3');
var success = new Audio(url + 'success.mp3');
var lose = new Audio(url + 'lose.mp3');

//for the on/off button
var sound = true;

//START EVERYTHING!
setupStartScreen();
showScreen($startScreen);

setupEvents();

//get the external data list
$.getJSON("https://codepen.io/melissacabral/pen/VmGEaa.js", setupLevelsScreen);

if (debug) {
  reportStats();
  $('body').addClass('debug');
}

function setupLevelsScreen(data) {
  // success!
  $('<ul class="levels-list">').appendTo($levelsScreen);
  hintsList = data.hints;
  $.each(data.levels, function(i) {
    var level = $(this);
    var name = level[0].name;
    var difficulty = level[0].difficulty;
    var difficultyEnglish = '';
    var width = level[0].width;
    var height = level[0].height;

    switch (difficulty) {
      case 4:
        difficultyEnglish = 'easy';
        break;
      case 3:
        difficultyEnglish = 'medium';
        break;
      case 2:
        difficultyEnglish = 'hard';
        break;
      case 1:
        difficultyEnglish = 'insane';
        break;
    }
    var color1 = level[0].color1,
      color2 = level[0].color2,
      color3 = level[0].color3,
      color4 = level[0].color4;

    var $listItem = $('<li id="level-' + name + '" class="level locked-level">')
      .addClass(difficultyEnglish)
      .appendTo($('.levels-list'))
      .html('<i class="fa fa-lock"></i>')
      .attr('data-name', name)
      .attr('data-color1', color1)
      .attr('data-color2', color2)
      .attr('data-color3', color3)
      .attr('data-color4', color4)
      .attr('data-difficulty', difficulty)
      .attr('data-width', width)
      .attr('data-height', height);

    //unlock any levels in the Unlocked list
    if (unlockedLevels.indexOf(parseInt(name)) != -1) {
      $listItem.removeClass('locked-level')
        .addClass('unlocked-level');
    }

  }); //end each level square

  //change the text on the face of the unlocked levels
  $('.unlocked-level').each(function() {
    var name = $(this).data('name');
    var color1 = $(this).data('color1');

    $(this).text(name)
      .css({
        background: color1
      });
  });

}

function updateUnlockedLevels() {
  $('.locked-level').each(function() {

    var name = $(this).data('name');
    var color1 = $(this).data('color1');

    if (unlockedLevels.indexOf(parseInt(name)) != -1) {
      $(this).removeClass('locked-level')
        .addClass('unlocked-level')
        .text(name)
        .css({
          background: color1
        });

    }
  });

}

function setupStartScreen() {
  var c1 = $.Color(getRandomHex());
  var c2 = $.Color(getRandomHex());
  renderColoredText(c1, c2, $('.blend-it'));

  //make the button the same color as the first letter
  var firstLetterColor = $.Color($('.letter-3'), 'color');

  //animate the onboarding
  var duration = 300;

  $('.onboarding div').each(function(i) {
    $(this).delay(i * (duration / 2)).animate({
      top: 0,
      left: 0,
      opacity: 1
    }, duration);
  });
  //proceed to levelsScreen!
  $('#start')
    .css({
      backgroundColor: firstLetterColor
    })
    .click(function() {
      showScreen($levelsScreen);
    });
}

//generic - show the next screen and hide the previous screen
function showScreen(screen) {
  if ($currentScreen == screen) {
    return false;
  }
  if ($currentScreen) {
    $currentScreen.fadeOut(300);

  }
  if (screen == $feedbackScreen && stars === 0) {
    playSound(lose);
  } else if (screen == $feedbackScreen || screen == $startScreen) {
    playSound(success);
  } else {
    playSound(pop);
  }
  screen.fadeIn(500);
  $currentScreen = screen;
  // console.log('the current screen is', $currentScreen);
}

function startLevel() {
  //layout the color chips and targets
  resetLayout();
}

function resetLayout() {
  //reset the lists of chips on all sides
  colorList = [];
  colorListSide = [];
  correctChips = 0;
  incorrectMoves = 0;
  moveCounter = 0;
  stars = 0;
  $feedbackStars.empty();

  $feedbackScreen.hide();
  $('#scramble').empty();
  $('#color-container').empty();

  //show a hint or tip for this level
  if (hintsList[currentLevel - 1] !== undefined) {
    $('.hints h2').html(hintsList[currentLevel - 1].title);
    $('.hints p').html(hintsList[currentLevel - 1].text);
  }

  //4 lists of colors for the 4 sides
  makeColorChips(color1, color2, width, 'top');
  makeColorChips(color2, color3, height, 'right');
  makeColorChips(color3, color4, width, 'bottom');
  makeColorChips(color4, color1, height, 'left');

  combineColorChips();
  layOutColorChips();

  setFirstKeys();
  setupEvents();
}

function setupEvents() {
  //remove all old events so they don't stack up
  $('*').off();

  $('#start').click(function() {
    showScreen($levelsScreen);

  });

  $('.lights').click(function() {
    $('body').toggleClass('lights-on');
    playSound(pop);
  });

  $('.sound').click(function() {
    if (sound) {
      sound = false;
      $(this).children('.fa').removeClass('fa-volume-up').addClass('fa-volume-off');
    } else {
      sound = true;
      $(this).children('.fa').addClass('fa-volume-up').removeClass('fa-volume-off');
      playSound(pop);
    }
  });

  $('.reset').click(function() {
    showScreen($gameScreen);
    resetLayout();
  });

  $('.next').click(function() {
    showScreen($levelsScreen);
  });

  //drag and drop to allow only one color-chip to be dragged into each target-chip
  //http://stackoverflow.com/a/22211268
  $('.color-chip').draggable({
    helper: 'clone',
    start: function(ev, ui) {
      playSound(bubbleUp);
      $('.ui-droppable').each(function(i, el) {
        if (!$(el).find('.ui-draggable').length) $(el).droppable('enable');
      });
    }
  });

  $('.droppable').droppable({
    drop: function(ev, ui) {

      $(ev.target).droppable('disable');
      var $chip = ui.draggable;
      var $target = $(this);
      $chip.appendTo($target);
      $chip.css({
        top: 1,
        left: 0
      });
      if ($target.parents('#color-container').length) {
        playSound(blop);
        moveCounter++;
      } else {
        playSound(bubbleDown);
      }
      checkAllChipsforWin();
      reportStats();
    }
  });

  $('.close').click(function() {
    showScreen($gameScreen);
  });

  $('body').on('click', '.unlocked-level', function() {
    showScreen($gameScreen);
    currentLevel = $(this).data('name');
    width = $(this).data('width');
    height = $(this).data('height');
    difficulty = $(this).data('difficulty');
    color1 = $.Color($(this).data('color1'));
    color2 = $.Color($(this).data('color2'));
    color3 = $.Color($(this).data('color3'));
    color4 = $.Color($(this).data('color4'));
    startLevel();
  });

}

//put the automatic keys on the board
function setFirstKeys() {
  var side;
  for (var i = 0; i < difficulty; i++) {
    side = presetKeys[i];

    $('.target-chip[data-side=' + side + '][data-id=0]').removeClass('droppable').prepend($('.color-chip[data-side=' + side + '][data-id=0]').addClass('locked'));
    correctChips++;
    moveCounter++;
  }
  reportStats();
}

function playSound(track) {
  if (sound) {
    var tempSound = track.cloneNode();
    tempSound.play();
  }
}

function makeColorChips(startColor, endColor, steps, side) {

  for (var counter = 0; counter < steps; counter++) {
    var percentage = 1 / (steps - 1);
    var step = counter * percentage;

    var oneColor = startColor.transition(endColor, step);
    var oneChip = {
      id: counter,
      color: oneColor.toRgbaString(),
      side: side
    };
    colorListSide.push(oneChip);

  }
  //drop the last key to avoid duplicates on the corners
  colorListSide.pop();
}

function combineColorChips() {
  colorList = colorList.concat(colorListSide);
  //count the chips
  chipCounter = colorList.length;
  //shuffle the color chips for this side
  //colorList = shuffle(colorList);
  for (i = 0, l = colorList.length; i < l; i++) {
    //add the shuffled color chips to the container
    var id = colorList[i].id;
    var color = colorList[i].color;
    var side = colorList[i].side;

    $('#color-container').append("<div style='background-color:" + color + "' data-side='" + side + "' data-id='" + id + "' class='color-chip chip-" + id + "'>" + id + ' ' + side + "</div>");

  }

}

function layOutColorChips() {
  $('[data-side=top]').wrapAll('<div id="top"></div>');
  $('[data-side=right]').wrapAll('<div id="right"></div>');
  $('[data-side=bottom]').wrapAll('<div id="bottom"></div>');
  $('[data-side=left]').wrapAll('<div id="left"></div>');

  //flip the order of the left and bottom sections, otherwise they will seem "backwards" in the clockwise layout
  $('[data-side=bottom]').each(function() {
    $(this).prependTo(this.parentNode);
  });
  $('[data-side=left]').each(function() {
    $(this).prependTo(this.parentNode);
  });

  var chipwidth = $('.color-chip').outerWidth();
  var actualNumberofChipsWide = $('#top div').length + 1;
  var actualNumberofChipsHigh = $('#left div').length + 1;

  // console.log(actualNumberofChipsWide + ' chips wide');

  $('#color-container').css({
    width: actualNumberofChipsWide * chipwidth,
    height: actualNumberofChipsHigh * chipwidth,
  });
  $('#top, #bottom').css({
    width: (actualNumberofChipsWide - 1) * chipwidth
  });

  var rightposition = $('#top').outerWidth();
  var topposition = $('#left').outerHeight();
  $('#right').css({
    left: rightposition,
  });
  $('#bottom').css({
    top: topposition,
    left: chipwidth,
  });
  $('#left').css({
    top: chipwidth,
  });

  //scramble the choices
  var $chips = $('.color-chip');
  $chips.each(function() {
    $(this).clone().appendTo("#scramble");
  });
  $("#scramble .color-chip").wrap('<div class="target-chip droppable">');

  //mix up the chips
  var parent = $("#scramble");
  var divs = parent.children();
  while (divs.length) {
    parent.append(divs.splice(Math.floor(Math.random() * divs.length), 1)[0]);
  }

  //replace the perfect chips with target chips
  $('#color-container .color-chip').each(function() {
    var theSide = $(this).data('side');
    var theId = $(this).data('id');
    $(this).replaceWith('<div class="target-chip droppable" data-id="' + theId + '" data-side="' + theSide + '">' + theId + '</div>');
  });

  //add extra droppable targets to the scramble so its always even rows of 6 targets
  var remainder = 6 - (chipCounter % 6);
  for (i = 0; i < remainder; i++) {
    $("#scramble").append("<div class='target-chip droppable'></div>");
  }

}

//go through each placed chip and determine how many of them are in the right spot.
function checkAllChipsforWin() {
  // console.log('checkallchipsforwin called');
  correctChips = 0;
  //grab all the chips on the puzzle board, right or wrong
  $('#color-container .color-chip').each(function() {
    //read their data attributes
    var thisChipId = $(this).data('id');
    var thisChipSide = $(this).data('side');
    var targetId = $(this).parent().data('id');
    var targetSide = $(this).parent().data('side');
    //check to see if this chip has the same data attrs as its parent target
    if (thisChipSide == targetSide && thisChipId == targetId) {
      //this chip is in the right place. increase the count of correct chips
      correctChips++;
    }
  }); //end each

  incorrectMoves = moveCounter - correctChips;
  // console.log('final incorrect:' + incorrectMoves + 'moveCount ' + moveCounter + 'correctChips: ' + correctChips);

  if (chipCounter == correctChips) {
    endTheLevel();
  }
}

function endTheLevel() {
  // console.log('endTheLevel called');

  var starOutput = '';
  //assign a number of stars based on number of mistakes and set up contextual feedback
  if (incorrectMoves === 0) {
    stars = 3;
    $feedbackTitle.text('Perfect!');
    $feedbackBody.html('Good job. Play another level?');
  } else if (incorrectMoves / chipCounter < 0.15) {
    stars = 2;
    $feedbackTitle.text('Good Job!');
    $feedbackBody.html('You completed the level in ' + moveCounter + ' moves. Can you do it in ' + chipCounter + '?');
  } else if (incorrectMoves / chipCounter < 0.4) {
    stars = 1;
    $feedbackTitle.text('Level Complete!');
    $feedbackBody.html('You solved the puzzle, but made ' + incorrectMoves + ' mistakes. Keep practicing!');
  } else {
    stars = 0;
    $feedbackTitle.text('Level Complete.');
    $feedbackBody.html('You solved the puzzle, but made ' + incorrectMoves + ' mistakes. Keep practicing so you can earn stars!');
  }
  //Unlock the next level
  if (stars !== 0) {
    var nextLevel = parseInt(currentLevel);
    nextLevel++;
    if (unlockedLevels.indexOf(nextLevel) == -1) {
      unlockedLevels.push(nextLevel);
      updateUnlockedLevels();
      // console.log(unlockedLevels);
    }
  }

  //UI - show blank remainder stars
  var blankStars = 3 - stars;
  for (i = 0; i < stars; i++) {
    starOutput += '<i class="fa fa-star"></i>';
  }
  for (i = 0; i < blankStars; i++) {
    starOutput += '<i class="fa fa-star-o"></i>';
  }
  //show feedback
  $feedbackStars.append(starOutput);
  $feedbackStars.children('i').css({
    opacity: 0,
    position: 'relative',
    top: '20px',
    left: '-10px;'
  });
  $feedbackScreen.css({
    backgroundImage: 'radial-gradient(circle at 0% 0,' + color1 + ', rgba(0,0,0,0) 70%),radial-gradient(circle at 100% 0, ' + color2 + ',  rgba(0,0,0,0) 80%), radial-gradient(circle at 100% 100%, ' + color3 + ',  rgba(0,0,0,0) 90%),	 radial-gradient(circle at 0 100%,  ' + color4 + ',  rgba(150,150,150,1) 100%)'
  });
  addStarsToLevel(currentLevel, stars);
  showScreen($feedbackScreen);

  //animate stars
  $('.stars i').each(function(i) {
    var timer = 150 * (i + 1);
    $(this).delay(timer).animate({
      opacity: 1,
      top: 0,
      left: 0
    }, 200);
  });

  $('.target-chip').off();
  $('.color-chip').off();

}

function addStarsToLevel(level, starNumber) {
  // console.log('add ' + starNumber + 'to level ' + level);
  var $theLevelSquare = $('#level-' + level);

  //delete old stars
  $theLevelSquare.children('.starbox').remove();

  var $starbox = $('<div class="starbox">');
  for (i = 0; i < starNumber; i++) {
    $starbox.append('<i class="fa fa-star">');
  }
  //UI - show blank remainder stars
  var blankStars = 3 - starNumber;
  for (i = 0; i < blankStars; i++) {
    $starbox.append('<i class="fa fa-star-o">');
  }

  $theLevelSquare.addClass('complete');
  $theLevelSquare.append($starbox);
}

function renderColoredText(startColor, endColor, element) {

  var numberOfSteps = element.text().length;

  // split each letter into a span
  var characters = element.text().split("");
  element.empty();
  $.each(characters, function(i, el) {
    element.append('<span class="letter-' + i + '">' + el + '</span>');
  });

  for (var counter = 0; counter < numberOfSteps; counter++) {
    var percentage = 1 / (numberOfSteps - 1);
    var step = counter * percentage;

    var theColor = startColor.transition(endColor, step);
    theColor = theColor.toRgbaString();

    //paint each letter
    $('.letter-' + counter).css({
      'color': theColor
    });
    $('.onboarding').append("<div style='background:" + theColor + "' class='fake-color-chip'>");
  }
}

function getRandomHex() {
  var hexValues = '1234567890ABCDEF'; //characters available in a hex value
  hexValues = hexValues.split(''); //turns each character in the string into an array item
  //console.log(hexValues);
  var hexColor = '#';
  for (var i = 0; i < 6; i++) {
    //goes 6 times
    var newVal = hexValues[getRandomInt(0, hexValues.length - 1)];
    hexColor += newVal;
    //console.log(hexColor);
  } //end for loop
  return hexColor; //returns value where it came from
}

//generate a random integer
function getRandomInt(min, max) {
  return Math.round(Math.random() * (max - min)) + min;
}

//shuffle any array
//@link http://stackoverflow.com/questions/2450954/how-to-randomize-shuffle-a-javascript-array
function shuffle(array) {
  var currentIndex = array.length,
    temporaryValue, randomIndex;

  // While there remain elements to shuffle...
  while (0 !== currentIndex) {

    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    // And swap it with the current element.
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }
  return array;
}

/**
 * @link http://stackoverflow.com/questions/698301/is-there-a-native-jquery-function-to-switch-elements
 */
jQuery.fn.swapWith = function(to) {
  return this.each(function() {
    var copy_to = $(to).clone(true);
    var copy_from = $(this).clone(true);
    $(to).replaceWith(copy_from);
    $(this).replaceWith(copy_to);
  });
};

function reportStats() {
  incorrectMoves = moveCounter - correctChips;
  if ($("#stats").length === 0) {
    $('body').prepend('<div id="stats"></div>');
  }

  $('#stats').html('<h3>Debug Mode = ON</h3> width: ' +
    width +
    '<br> height: ' + height +
    '<br> ChipCounter: ' + chipCounter +
    '<br> Move Counter: ' + moveCounter +
    '<br> Correct Chips: ' + correctChips +
    '<br> Incorrect Moves: ' + incorrectMoves);
}
