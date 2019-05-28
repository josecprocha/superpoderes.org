$(document).ready(function(){
  $("#myModal").modal("show");
});
var globals = {};
var turn, movesMadeByAI,gameStage;
var positions = [1,2,3,4,5,6,7,8,9]; // available positions at a given time
var allpositions = [1,2,3,4,5,6,7,8,9];
var nr, correct = 0;
var playerCombo= [], computerCombo = [];
var winningCombos = [[1,2,3], [1,4,7], [1,5,9], [2,5,8], [3,5,7], [3,6,9], [4,5,6], [7,8,9]];
var playerSymbol, computerSymbol;
var playerWins=0, computerWins= 0, draws= 0;

/*
//Game With Blind AI  -  With this format, losing player will always begin first.

function computerMove(){
    // By a blind AI that takes random moves
    nr = positions[Math.floor(Math.random()*positions.length)]; //console.log(nr);
    computerCombo.push(nr);
    if (positions.length === 0){
      setTimeout(function() { restart(); }, 1000);//calling restart with 1 sec delay
      }else{
        positions.splice(positions.indexOf(nr), 1); //removing picked position from array
        $("#square"+nr).html(computerSymbol);
                                                        //console.log(positions);
                                                        //console.log(computerCombo);
         checkWinner(computerCombo);
      }
    if (positions.length === 0){
      setTimeout(function() { restart(); }, 1000);
    }
}
//End of computerMove


//Adding players choices
function clickHandler(event){
  if (event.target.textContent === "X" || event.target.textContent === "O"){
  alert("Position taken");
      }else{
       $("#"+event.target.id).html(playerSymbol);
       nr = (event.target.id).slice(-1);
       playerCombo.push(Number(nr));
       positions.splice(positions.indexOf(Number(nr)), 1);//removing picked position from array
       checkWinner(playerCombo);
       setTimeout(function() {computerMove();}, 100);
      }
}


 // Adding restart and auto-restart on a full board
$("#restart").click(restart);
function restart (){
  for (var i = 1; i <= 9; i++){
   $("#square"+i).html("");
   positions = [];
  } // end of for loop
  positions = positions.concat(allpositions);
  playerCombo= [];
  computerCombo = [];
  correct = 0;
}//End of restart Function


function checkWinner(combo){
   //console.log(playerCombo);
if (combo.length >= 3){
  for (var j = 0 ; j < 8; j++){
    for (var z= 0; z < combo.length; z++){
          if (winningCombos[j].indexOf(combo[z]) > -1){
          correct++;
              if (correct >= 3){
                displayWinner(combo);
                return;
              }
         }
      }correct = 0; //restarting counter
   }
     if (positions.length === 0 ){
      draws++;
      $("#draws").html(draws);
     alert("It is a draw !");}
  }

 function displayWinner(who){
        if (who === playerCombo ){
          playerWins++;
          $("#pwins").html(playerWins);
          alert("Player Wins !");
        }else{
          computerWins++;
          $("#cwins").html(computerWins);
          alert("Computer Wins !");
        }
        restart();
  }
}

// Player picking the symbol:
$("#Pick1").click(pickSymbol1);
$("#Pick2").click(pickSymbol2);

function pickSymbol1(){
      $('#myModal').modal('hide');
      playerSymbol="X";
      computerSymbol="O";
      restart();
  }
function pickSymbol2(){
      $('#myModal').modal('hide');
      playerSymbol="O";
      computerSymbol="X";
      restart();
  }
*/
            // Building the invicible AI
//OTHER INTRO:

// Player picking the symbol:
$("#Pick1").click(pickSymbol1);
$("#Pick2").click(pickSymbol2);

function pickSymbol1(){
      $('#myModal').modal('hide');
      playerSymbol="X";
      computerSymbol="O";
      restart();
  }
function pickSymbol2(){
      $('#myModal').modal('hide');
      playerSymbol="O";
      computerSymbol="X";
      restart();
  }

// Adding restart and auto-restart on a full board
$("#restart").click(restart);

function restart (){
  for (var i = 1; i <= 9; i++){
   $("#square"+i).html("");
   $("#square"+i).css("background", "transparent");
   positions = [];
  } // end of for loop
  positions = positions.concat(allpositions);
  playerCombo= [];
  computerCombo = [];
  correct = 0;
  var next = new State();
  globals = {};
 // console.log(next.board);
  startGameFunction();
}//End of restart Function

// Game Start :
$("#startGame").click(startGameFunction);

function startGameFunction (){
  if (playerSymbol === undefined){
    alert("Pick a symbol, Human!");
    return
  }
  var aiPlayer = new AI("master");
  globals.game = new Game(aiPlayer);
  aiPlayer.plays(globals.game);
  globals.game.start();
}

//End of start

// USING Minimax and board states


//2. ==================================HUMAN PLAYER=====================================

function clickHandler(event){
  if (event.target.textContent === "X" || event.target.textContent === "O"){
  alert("Position taken");
      }else{
        if (playerSymbol === undefined){
          return;
        }
       $("#"+event.target.id).html("<p>"+playerSymbol+"</p>");
       nr = (event.target.id).slice(-1);
       positions.splice(positions.indexOf(Number(nr)), 1);
            var indx = nr-1;
            var next = new State(globals.game.currentState);
            next.board[indx] = "X";
            console.log(next.board);
            next.advanceTurn();
           globals.game.advanceTo(next);
      }
}

//3. ==================================AI PART=======================================
/*
 * Constructs an action that the ai player could make
 * @param pos [Number]: the cell position the ai would make its action in
 * made that action
 */
var AIAction = function(pos) {

    // public : the position on the board that the action would put the letter on
    this.movePosition = pos;

    //public : the minimax value of the state that the action leads to when applied
    this.minimaxVal = 0;

    /*
     * public : applies the action to a state to get the next state
     * @param state [State]: the state to apply the action to
     * @return [State]: the next state
     */
    this.applyTo = function(state) {
        var next = new State(state);

        //put the letter on the board
        next.board[this.movePosition] = state.turn;

        if(state.turn === "O")
            next.oMovesCount++;

        next.advanceTurn();

        return next;
    }
};

/*
 * public static function that defines a rule for sorting AIActions in ascending manner
 * @param firstAction [AIAction] : the first action in a pairwise sort
 * @param secondAction [AIAction]: the second action in a pairwise sort
 * @return [Number]: -1, 1, or 0
 */
AIAction.ASCENDING = function(firstAction, secondAction) {
    if(firstAction.minimaxVal < secondAction.minimaxVal)
        return -1; //indicates that firstAction goes before secondAction
    else if(firstAction.minimaxVal > secondAction.minimaxVal)
        return 1; //indicates that secondAction goes before firstAction
    else
        return 0; //indicates a tie
}

/*
 * public static function that defines a rule for sorting AIActions in descending manner
 * @param firstAction [AIAction] : the first action in a pairwise sort
 * @param secondAction [AIAction]: the second action in a pairwise sort
 * @return [Number]: -1, 1, or 0
 */
AIAction.DESCENDING = function(firstAction, secondAction) {
    if(firstAction.minimaxVal > secondAction.minimaxVal)
        return -1; //indicates that firstAction goes before secondAction
    else if(firstAction.minimaxVal < secondAction.minimaxVal)
        return 1; //indicates that secondAction goes before firstAction
    else
        return 0; //indicates a tie
}


/*
 * Constructs an AI player with a specific level of intelligence
 * @param level [String]: the desired level of intelligence
 */
var AI = function(level) {

    //private attribute: level of intelligence the player has
    var levelOfIntelligence = level;

    //private attribute: the game the player is playing
    var game = {};

    /*
     * private recursive function that computes the minimax value of a game state
     * @param state [State] : the state to calculate its minimax value
     * @returns [Number]: the minimax value of the state
     */
    function minimaxValue(state) {
        if(state.isTerminal()) {
            //a terminal game state is the base case
            return Game.score(state);
        }
        else {
            var stateScore; // this stores the minimax value we'll compute

            if(state.turn === "X")
            // X wants to maximize --> initialize to a value smaller than any possible score
                stateScore = -1000;
            else
            // O wants to minimize --> initialize to a value larger than any possible score
                stateScore = 1000;

            var availablePositions = state.emptyCells();

            //enumerate next available states using the info form available positions
            var availableNextStates = availablePositions.map(function(pos) {
                var action = new AIAction(pos);

                var nextState = action.applyTo(state);

                return nextState;
            });

            /* calculate the minimax value for all available next states
             * and evaluate the current state's value */
            availableNextStates.forEach(function(nextState) {
                var nextScore = minimaxValue(nextState);
                if(state.turn === "X") {
                    // X wants to maximize --> update stateScore iff nextScore is larger
                    if(nextScore > stateScore)
                        stateScore = nextScore;
                }
                else {
                    // O wants to minimize --> update stateScore iff nextScore is smaller
                    if(nextScore < stateScore)
                        stateScore = nextScore;
                }
            });

            return stateScore;
        }
    }

    /*
     * private function: make the ai player take a blind move
     * that is: choose the cell to place its symbol randomly
     * @param turn [String]: the player to play, either X or O
     */
    function takeABlindMove(turn) {
        var available = game.currentState.emptyCells();
        var randomCell = available[Math.floor(Math.random() * available.length)];
        var action = new AIAction(randomCell);

        var next = action.applyTo(game.currentState);

        ui.insertAt(randomCell, turn);

        game.advanceTo(next);
    }

    /*
     * private function: make the ai player take a novice move,
     * that is: mix between choosing the optimal and suboptimal minimax decisions
     * @param turn [String]: the player to play, either X or O
     */
    function takeANoviceMove(turn) {
        var available = game.currentState.emptyCells();

        //enumerate and calculate the score for each available actions to the ai player
        var availableActions = available.map(function(pos) {
            var action =  new AIAction(pos); //create the action object
            var nextState = action.applyTo(game.currentState); //get next state by applying the action

            action.minimaxVal = minimaxValue(nextState); //calculate and set the action's minimax value

            return action;
        });

        //sort the enumerated actions list by score
        if(turn === "X")
        //X maximizes --> sort the actions in a descending manner to have the action with maximum minimax at first
            availableActions.sort(AIAction.DESCENDING);
        else
        //O minimizes --> sort the actions in an ascending manner to have the action with minimum minimax at first
            availableActions.sort(AIAction.ASCENDING);

        /*
         * take the optimal action 40% of the time, and take the 1st suboptimal action 60% of the time
         */
        var chosenAction;
        if(Math.random()*100 <= 40) {
            chosenAction = availableActions[0];
        }
        else {
            if(availableActions.length >= 2) {
                //if there is two or more available actions, choose the 1st suboptimal
                chosenAction = availableActions[1];
            }
            else {
                //choose the only available actions
                chosenAction = availableActions[0];
            }
        }
        var next = chosenAction.applyTo(game.currentState);

        //ui.insertAt(chosenAction.movePosition, turn);

        game.advanceTo(next);
    };

    /*
     * private function: make the ai player take a master move,
     * that is: choose the optimal minimax decision
     * @param turn [String]: the player to play, either X or O
     */

  // ============================== Master Move OF INTEREST =====
    function takeAMasterMove(turn) {

        var available = game.currentState.emptyCells();

        //enumerate and calculate the score for each avaialable actions to the ai player
        var availableActions = available.map(function(pos) {
            var action =  new AIAction(pos); //create the action object
            var next = action.applyTo(game.currentState); //get next state by applying the action

            action.minimaxVal = minimaxValue(next); //calculate and set the action's minmax value

            return action;
        });

        //sort the enumerated actions list by score
        if(turn === "X")
        //X maximizes --> sort the actions in a descending manner to have the action with maximum minimax at first
            availableActions.sort(AIAction.DESCENDING);
        else
        //O minimizes --> sort the actions in an ascending manner to have the action with minimum minimax at first
            availableActions.sort(AIAction.ASCENDING);


        //take the first action as it's the optimal
        var chosenAction = availableActions[0];
        var next = chosenAction.applyTo(game.currentState);

        console.log(chosenAction.movePosition+1);
        var nr = chosenAction.movePosition+1;
        $("#square"+nr).html("<p>"+computerSymbol+"</p>");
        //ui.insertAt(chosenAction.movePosition, turn);  - Post value
        game.advanceTo(next);
    }


    /*
     * public method to specify the game the ai player will play
     * @param _game [Game] : the game the ai will play
     */
    this.plays = function(_game){
        game = _game;
    };

    /*
     * public function: notify the ai player that it's its turn
     * @param turn [String]: the player to play, either X or O
     */
    this.notify = function(turn) {
        switch(levelOfIntelligence) {
            //invoke the desired behavior based on the level chosen
            case "blind": takeABlindMove(turn); break;
            case "novice": takeANoviceMove(turn); break;
            case "master": takeAMasterMove(turn); break;
        }
    };
};






// BULINDING STATE AND GAME ===============================================
/* private recursive function that computes the minimax value of a game state
 * @param state [State] : the state to calculate its minimax value
 * @returns [Number]: the minimax value of the state*/


/*
 * Represents a state in the game
 * @param old [State]: old state to intialize the new state
 */
var State = function(old) {

    /*
     * public : the player who has the turn to player
     */
    this.turn = "";

    /*
     * public : the number of moves of the AI player
     */
    this.oMovesCount = 0;

    /*
     * public : the result of the game in this State
     */
    this.result = "still running";

    /*
     * public : the board configuration in this state
     */
    this.board = [];

    /* Begin Object Construction */
    if(typeof old !== "undefined") {
        // if the state is constructed using a copy of another state
        var len = old.board.length;
        this.board = new Array(len);
        for(var itr = 0 ; itr < len ; itr++) {
            this.board[itr] = old.board[itr];
        }

        this.oMovesCount = old.oMovesCount;
        this.result = old.result;
        this.turn = old.turn;
    }
    /* End Object Construction */

    /*
     * public : advances the turn in a the state
     */
    this.advanceTurn = function() {
        this.turn = this.turn === "X" ? "O" : "X";
    }

    /*
     * public function that enumerates the empty cells in state
     * @return [Array]: indices of all empty cells
     */
    this.emptyCells = function() {
        var indxs = [];
        for(var itr = 0; itr < 9 ; itr++) {
            if(this.board[itr] === "E") {
                indxs.push(itr);
            }
        }
        return indxs;
    }

    /*
     * public  function that checks if the state is a terminal state or not
     * the state result is updated to reflect the result of the game
     * @returns [Boolean]: true if it's terminal, false otherwise
     */

    this.isTerminal = function() {
        var B = this.board;

        //check rows
        for(var i = 0; i <= 6; i = i + 3) {
            if(B[i] !== "E" && B[i] === B[i + 1] && B[i + 1] == B[i + 2]) {
                this.result = B[i] + "-won"; //update the state result
                return true;
            }
        }

        //check columns
        for(var i = 0; i <= 2 ; i++) {
            if(B[i] !== "E" && B[i] === B[i + 3] && B[i + 3] === B[i + 6]) {
                this.result = B[i] + "-won"; //update the state result
                return true;
            }
        }

        //check diagonals
        for(var i = 0, j = 4; i <= 2 ; i = i + 2, j = j - 2) {
            if(B[i] !== "E" && B[i] == B[i + j] && B[i + j] === B[i + 2*j]) {
                this.result = B[i] + "-won"; //update the state result
                return true;
            }
        }

        var available = this.emptyCells();
        if(available.length == 0) {
            //the game is draw
            this.result = "draw"; //update the state result
            return true;
        }
        else {
            return false;
        }
    };

};

/*
 * Constructs a game object to be played
 * @param autoPlayer [AIPlayer] : the AI player to be play the game with
 */
var Game = function(autoPlayer) {

    //public : initialize the ai player for this game
    this.ai = autoPlayer;

    // public : initialize the game current state to empty board configuration
    this.currentState = new State();

    //"E" stands for empty board cell
    this.currentState.board = ["E", "E", "E",
                               "E", "E", "E",
                               "E", "E", "E"];

    this.currentState.turn = "X"; //X plays first

    /*
     * initialize game status to beginning
     */
    this.status = "beginning";

    /*
     * public function that advances the game to a new state
     * @param _state [State]: the new state to advance the game to
     */
  this.advanceTo = function (_state) {
    this.currentState = _state;

         if(_state.isTerminal()) {
            this.status = "ended";

            if(_state.result === "X-won"){
                  playerWins++;
                  $("#pwins").html(playerWins);
                  alert("You won, Human !");
                  restart();
                    /*...*/
            }else if(_state.result === "O-won"){
                  computerWins++;
                  $("#cwins").html(computerWins); //update leaderboard score

                  //Adding highlight for winner
                  var comboOfWinner=[];
                  for (var i = 0; i <_state.board.length; i++){
                    if (_state.board[i]=== "O"){
                      comboOfWinner.push(i+1);
                    }
                  }
                                        //console.log(comboOfWinner.length)
                        if (comboOfWinner.length === 3){
                          $("#square"+comboOfWinner[0]).css("background-color", "red");
                          $("#square"+comboOfWinner[1]).css("background-color", "red");
                          $("#square"+comboOfWinner[2]).css("background-color", "red");
                        }else{
                            for (var j = 0 ; j < 8; j++){
                              for (var z= 0; z < comboOfWinner.length; z++){
                                    if (winningCombos[j].indexOf(comboOfWinner[z]) > -1){
                                    correct++;
                                        if (correct >= 3){
                                          console.log(winningCombos[j]);                                                   $("#square"+winningCombos[j][0]).css("background-color", "red");
                          $("#square"+winningCombos[j][1]).css("background-color", "red");
                          $("#square"+winningCombos[j][2]).css("background-color", "red");
                                        }
                                   }
                                }correct = 0; //restarting counter
                             }
                        }
                  // end of highligh
                  //alert("Computer Wins!");
                  $("#winnerDisplay").html("Computer Wins!");
                  setTimeout(function () {restart(); $("#winnerDisplay").html("??? ??? ???");  }, 1500);
                  /*...*/
            }else{
                draws++;
                $("#draws").html(draws);
               //alert("It is a draw !");
                $("#winnerDisplay").html("It is a draw !");
                setTimeout(function () {restart(); $("#winnerDisplay").html("??? ??? ???");  }, 1500);
            }
         }else{
           //game is still running
           if (this.currentState.turn === "X"){
             $("#displayTurn").html("Your turn, Human!");
             console.log("Your turn, Human!");
           }else{
            //$("#displayTurn").html("AI is making a move!");
             console.log("AI is making a move!");
             this.ai.notify("O");
           }
         }
  }

    /*
     * starts the game
     */
    this.start = function() {
        if(this.status = "beginning") {
            //invoke advanceTo with the initial state
            this.advanceTo(this.currentState);
            this.status = "running";
        }
    }

};

/*
 * public static function that calculates the score of the x player in a given terminal state
 * @param _state [State]: the state in which the score is calculated
 * @return [Number]: the score calculated for the human player
 */

//============================= GAME SCORE FUNCTION ========================================

Game.score = function(_state) {
    if(_state.result === "X-won"){
        // the x player won
        return 10 - _state.oMovesCount;
    }
    else if(_state.result === "O-won") {
        //the x player lost
        return - 10 + _state.oMovesCount;
    }
    else {
        //it's a draw
        return 0;
    }
}

//================================ DISCLAIMER ===============================================
/* A significant part of the code covering the AI algorithm, Game State and MiniMax function belongs to Mostafa Samir: https://mostafa-samir.github.io/Tic-Tac-Toe-AI/ . For the completion of the project, I worked on his code structure, I modified and added the necessary parts for aditional functionality and synergy with the UI.*/
