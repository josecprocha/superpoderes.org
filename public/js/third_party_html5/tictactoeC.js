var tictactoeApp = (function() {
  var numPlayers = 1;
  var playerXScore = 0;
  var playerOScore = 0;
  var xMoves = [];
  var oMoves = [];
  var aiLetter = 'O';
  var playerLetter = 'X';
  var activeLetter = 'X';
  var gameOver = false;
  var aiMoves = ["midM", "topL", "botR", "topR", "botL", "topM", "botM", "midL", "midR"];
  var wins = [
    ["topL", "midL", "botL"], //vert 1
    ["topM", "midM", "botM"], //vert 2
    ["topR", "midR", "botR"], //vert 3
    ["topL", "topM", "topR"], //horiz 1
    ["midL", "midM", "midR"], //horiz 2
    ["botL", "botM", "botR"], //horiz 3
    ["topL", "midM", "botR"], // diag 1
    ["topR", "midM", "botL"] // diag 2
  ];

  function switchActiveLetter() {
    if(activeLetter === 'X') {
      activeLetter = 'O';
    }else if(activeLetter === 'O') {
      activeLetter = 'X';
    }
    console.log('switch active letter: ' + activeLetter);
  }

  function ai() {
    console.log('ai triggered');
    if(playerLetter === 'X') {
      var square = "#" + aiMoves[0];
      oMoves.push(aiMoves[0]);
      aiMoves.shift();
      $(square).trigger('click');
      checkWin(oMoves);
      switchActiveLetter();
    } else if (playerLetter === 'O') {
      var square = "#" + aiMoves[0];
      xMoves.push(aiMoves[0]);
      aiMoves.shift();
      $(square).trigger('click');
      checkWin(xMoves);
      switchActiveLetter();
    }
    console.log('oMoves: ' + oMoves)
  }

  function resetGame() {
    console.log("Resetting game.");
    gameOver = false;
    xMoves = [];
    oMoves = [];
    aiMoves = ["midM", "topL", "botR", "topR", "botL", "topM", "botM", "midL", "midR"];
    $('.square').html('<h1>&nbsp</h1>');
    $('.square').removeClass('X').removeClass('O');
    if(numPlayers === 1 && playerLetter !== activeLetter) {
      ai();
    }
  }

  resetGame();

  function endGame() {
    $('#endGame').css('display', 'inline');
    $('#winnerDisplay').removeClass('red').removeClass('blue')
    if (activeLetter === 'X') {
      playerXScore++;
      $('#winnerDisplay').text(activeLetter).addClass('red');
      $('#xScore').text(playerXScore);
    } else if (activeLetter === 'O') {
      playerOScore++;
      $('#winnerDisplay').text(activeLetter).addClass('blue');
      $('#oScore').text(playerOScore);
    }
    $('.resetEnd').on('click', function() {
      $('#endGame').css('display', 'none');
      resetGame();
    });
  }

  function endGameDraw() {
    $('#endGameDraw').css('display', 'inline');
    $('.resetEnd').on('click', function() {
      $('#endGameDraw').css('display', 'none');
      resetGame();
    });
  }



  function checkWin(moves) {
    console.log('check: '+ activeLetter + ": " + moves);
    if (moves.length >= 3) { // can't win with less than 3 squares
      for (i = 0; i < wins.length; i++) { //iterate through all win conditions
        var confirmWin = 0;
        for (j = 0; j < wins[i].length; j++) {
          if (moves.includes(wins[i][j])) {
            confirmWin++;
          }
        }
        if (confirmWin === 3) {
          gameOver = true;
          endGame();
          break;
        }
      }
      if (moves.length === 5 && confirmWin < 3) { //Draw Game
         endGameDraw();
      }
    } //endif
  } //end checkWin

  function updateAiMoves(square) {
    console.log("updateAi: " + square);
    aiMoves = aiMoves.filter(function(value) {
      return value !== square;
    });
  }

  function updateAiMovesList(updateAi) {
    if(oMoves.includes(updateAi) === false && xMoves.includes(updateAi) === false) { // make sure square hasn't been played yet
      aiMoves.unshift(updateAi);                                                     // then push it to the beginning of our moves list.
    }
  }

  function adaptLoop(moves) {
    for (i = 0; i < wins.length; i++) { //iterate through all win conditions
      var numWin = 0;
      for (j = 0; j < wins[i].length; j++) {
        if (moves.includes(wins[i][j])) {
          numWin++;
        }
      }
      if (numWin === 2) {// 2 squares within a win line have been played find the missing piece for a win.
        var updateAi = wins[i];
        for(j = 0; j < moves.length; j++) {
          updateAi = updateAi.filter(function(value) {
            return value !== moves[j];
           });
        }
        updateAi = updateAi[0];
        updateAiMovesList(updateAi);
      }
    }
  }

  function adaptAi(aiMoves, playerMoves, ourMoves) {
    console.log('ai is learning');
    // Find any potential player wins and block them
    adaptLoop(playerMoves);
    // Find any potential ai wins and block them
    adaptLoop(ourMoves);
  }

  function gameCycle(square, letter) {
    if (numPlayers === 1 && gameOver === false) { // One Player Game
      if (playerLetter === 'X') {
          xMoves.push(square.id);
          checkWin(xMoves);
          updateAiMoves(square.id);
          adaptAi(aiMoves, xMoves, oMoves);
          switchActiveLetter();
        } else if (playerLetter === 'O') {
          oMoves.push(square.id);
          checkWin(oMoves);
          updateAiMoves(square.id);
          adaptAi(aiMoves, oMoves, xMoves);
          switchActiveLetter();
        }
      } else if (numPlayers === 2) { // Two Player Game
      if (activeLetter === 'X') {
        xMoves.push(square.id);
        checkWin(xMoves);
        switchActiveLetter();
      } else if (activeLetter === 'O') {
        oMoves.push(square.id);
        checkWin(oMoves);
        switchActiveLetter();
      }
    }
  }

  $('.square').on('click', function() {
    if ($(this).html() === '<h1>&nbsp;</h1>') {
      console.log('click: ' + this.id);
      $(this).html('<h1>' + activeLetter + '</h1>');
      $(this).addClass(activeLetter);
      if(playerLetter === activeLetter && numPlayers === 1) {
        gameCycle(this, activeLetter);
        if(gameOver === false){
          ai();
        }
      } else if (numPlayers === 2) {
        gameCycle(this, activeLetter);
      }
    }
  });

  $('#reset').on('click', resetGame);

  $('#color').on('click', function() {
    if(playerLetter === 'X') {
      playerLetter = 'O'
      $('#playerColor').text(playerLetter).removeClass('red').addClass('blue');
    } else {
      playerLetter = 'X'
      $('#playerColor').text(playerLetter).removeClass('blue').addClass('red');
    }
    $('#playerColor').text(playerLetter);
    resetGame();
  });

  $('#players').on('click', function() {
    if (numPlayers === 1) {
      numPlayers = 2;
      $('#playerNumber').text(numPlayers);
    } else {
      numPlayers = 1;
      $('#playerNumber').text(numPlayers);
    }
    resetGame();
  });

}); // end tictactoeApp

$(document).ready(function() {
  var game = new tictactoeApp();
});
