<div ng-app="app" ng-controller="ctrl">
    <div class="bg-1">
      <div class="list l1"></div>
      <div class="list l2"></div>
      <div class="list l3"></div>
      <div class="list l4"></div>
      <div class="list l5"></div>
    </div>
    <div class="bg-2">
      <div class="list l1"></div>
      <div class="list l2"></div>
      <div class="list l3"></div>
      <div class="list l4"></div>
      <div class="list l5"></div>
    </div>
    <!-- container main-->
    <div ng-cloak id="container" class="centralize animated bounceIn">
      <div id="presentation">
        <h1 class="title animated" ng-class="className" ng-mouseenter="className = 'jello'" ng-mouseleave="className = 'pulse'">Mathematics</h1>
        <form class="level centralize">
          <h5>choose a difficulty</h5>
          <label for="easy" ng-class="{'active' : lvl.name == 'easy'}">
            <input id="easy" type="radio" ng-model="lvl.name" value="easy"> Easy
          </label>
          <label for="normal" ng-class="{'active' : lvl.name == 'normal'}">
            <input id="normal" type="radio" ng-model="lvl.name" value="normal"> Normal
          </label>
          <label for="hard" ng-class="{'active' : lvl.name == 'hard'}">
            <input id="hard" type="radio" ng-model="lvl.name" value="hard"> Hard
          </label>
        </form>
        <div>
          <button class="btn btn-play bg1 centralize" type="button" ng-click="play(lvl.name)" name="button">Play</button>
        </div>
        <div id="info">
          <div><span>{{info.correct}}</span> correct answers</div>
          <div><span>{{info.wrong}}</span> wrong answers</div>
          <div><span>{{info.hit}}</span> hits</div>
        </div>
      </div>

      <div id="calc">
        <div class="operation">
          <span class="important">{{numberRandom1}}</span> <span>{{operator}}</span> <span class="important">{{numberRandom2}}</span> = <span class="important">? <!--{{currentNumber}}--></span>
        </div>
        <div class="buttons">
          <span class="alternative numberA" ng-class="{'current' : currentNumber == numberA && showCurrentNumber}" ng-click="chooseAlternative(numberA)">{{numberA}}</span>
          <span class="alternative numberB" ng-class="{'current' : currentNumber == numberB && showCurrentNumber}" ng-click="chooseAlternative(numberB)">{{numberB}}</span>
          <span class="alternative numberC" ng-class="{'current' : currentNumber == numberC && showCurrentNumber}" ng-click="chooseAlternative(numberC)">{{numberC}}</span>
          <span class="alternative numberD" ng-class="{'current' : currentNumber == numberD && showCurrentNumber}" ng-click="chooseAlternative(numberD)">{{numberD}}</span>
        </div>
        <div class="help">
          <button class="btn-help" ng-click="help($event)">help</button>
          <span>{{countHelp}} remaining</span>
        </div>
        <div class="message">
          <span>{{message}}</span>
        </div>
        <div class="current-level">
          level {{lvl.name}}
        </div>
        <div class="info">
          <div><span>{{info.correct}}</span> correct answers</div>
          <div><span>{{info.wrong}}</span> wrong answers</div>
          <div><span>{{info.hit}}</span> hits</div>
        </div>
        <timer autostart="false" interval="1000" countdown="30">
          <div id="clockAnimation" class="clock">
            <div class="rotatePont rot1">
              <div class="pont1"></div>
            </div>
            <div class="rotatePont rot2">
              <div class="pont2"></div>
            </div>
          </div>
          <span class="countdown">{{countdown}}</span>
        </timer>
      </div>
    </div>
  </div> <!-- ng-app -->
  <a href="https://github.com/interaminense/mathematics" target="_blank" class="view-on-github">View this project on github @interaminense</a>


