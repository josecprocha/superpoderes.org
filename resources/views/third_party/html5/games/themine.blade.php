<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/jcoulterdesign/pen/NOMeEb.

My contribution to the Codepen Halloween challenge. Lot's of stuff going on here. The concept initially started off as a simple 'Walk down a corridor and avoid traps' game, but it just kinda escalated from there. I decided i wanted to go up and down, solve puzzles etc.

The logic behind it is actually relatively simple and uses a 7+ year old technique. By clicking on an arrow (in this case a label), it checks the relevant input and then using the : checked pseudo selector, we can traverse down the DOM the correct amount of iterations and shift the entire viewport a whole 'segment' over. The lifts work entirely the same way except instead when we click down, we are actually checking the segment below.

As for game logic, we use the same concept again. The pickaxe for example is a label for a checkbox. When we click it, the checkbox is checked, then, when we click the boulder, we tell css to see if *both* the boulder and pickaxe inputs are checked. If it is, display it none, otherwise show a message.

Don't ask how i did the lock mechanism....i kinda fluked it somehow. Just a bunch of check boxes overlayed on top of each other. They hide when clicked to show the one underneath. As for how the code is checked, take a look at the checkCode mixin.

Everything else is pretty standard. Bunch of animations, a circular clipping mask for the game viewport etc.

I added a bunch of mixins to help add animated sprites, object comparisons and interactive items into the grid. Things like makeInteractiveObjectAt($objectID, $Segment, $Tile)

The sprites were drawn by me in Pyxel (would not have been able to do this if i hadnt bought it). Unfortunately i'm not a pixel artist, i really wish i was because this would really have the quality feel i wanted. If you're a pixel artist and would like to contribute though.... :)

I had some potential pitfalls along the way. One of them being an intermittent 413 error from Codepen. I think this had something to do with the compiled SASS being too large. It forced me to rethink some of the ways things were written. It is however, still very very un-optimised. It started off being extremely versatile, change a few numbers here and boom different sized level, all inputs and label generated for you. But now if i change a digit somewhere it will more than likely destroy the massive chain of interactions.
-->

<!--
Copyright (c) 2019 by Jamie Coulter (https://codepen.io/jcoulterdesign/pen/NOMeEb)


Fork of an original work that is now private.



Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>The Mine: No JS, CSS only adventure game</title>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/themine.css') !!}" />

</head>

<body>

  <div class='game'>
    <div class='game_loader'>
      <div class='game_loader__inner'>
        <div class='logo'>
          <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/mineLogo.gif'>
        </div>
        <div class='subtitle'>
          <h1>A no JS Adventure game</h1>
        </div>
        <div class='bar'>
          <div class='bar_inner'></div>
        </div>
        <span>Loading checkboxes...</span>
      </div>
    </div>
    <div class='game_intro'>
      <input checked='checked' class='dialogue' id='intro-1' name='intro' type='radio'>
      <div class='dialogue'>
        Ahhhhhhh!!
        <label for='intro-2'>
          <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
        </label>
      </div>
      <input class='dialogue' id='intro-2' name='intro' type='radio'>
      <div class='dialogue'>
        The floor just collapsed under me
        <label for='intro-3'>
          <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
        </label>
      </div>
      <input class='dialogue' id='intro-3' name='intro' type='radio'>
      <div class='dialogue'>
        Geez it sure is dark in here
        <label for='intro-4'>
          <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
        </label>
      </div>
      <input class='dialogue' id='intro-4' name='intro' type='radio'>
      <div class='dialogue'>
        Let me light my torch...
        <label for='intro-5'>
          <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
        </label>
      </div>
      <input class='dialogue' id='intro-5' name='intro' type='radio'>
      <div class='dialogue end'>
        Better. Need to find a way out.
      </div>
      <input class='dialogue' id='intro-6' name='intro' type='radio'>
      <div class='overlay'></div>
    </div>
    <input id='interactiveObject--lock' type='checkbox'>
    <div class='padlock'>
      <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/padlockBig.png'>
    </div>
    <input id='padlock1-1' type='checkbox' value='1'>
      <span id='span-1'>9</span>
    </input>
    <input id='padlock1-2' type='checkbox' value='2'>
      <span id='span-1'>8</span>
    </input>
    <input id='padlock1-3' type='checkbox' value='3'>
      <span id='span-1'>7</span>
    </input>
    <input id='padlock1-4' type='checkbox' value='4'>
      <span id='span-1'>6</span>
    </input>
    <input id='padlock1-5' type='checkbox' value='5'>
      <span id='span-1'>5</span>
    </input>
    <input id='padlock1-6' type='checkbox' value='6'>
      <span id='span-1'>4</span>
    </input>
    <input id='padlock1-7' type='checkbox' value='7'>
      <span id='span-1'>3</span>
    </input>
    <input id='padlock1-8' type='checkbox' value='8'>
      <span id='span-1'>2</span>
    </input>
    <input checked='checked' id='padlock1-9' type='checkbox' value='9'>
      <span id='span-1'>1</span>
    </input>
    <input id='padlock2-1' type='checkbox' value='1'>
      <span id='span-2'>9</span>
    </input>
    <input id='padlock2-2' type='checkbox' value='2'>
      <span id='span-2'>8</span>
    </input>
    <input id='padlock2-3' type='checkbox' value='3'>
      <span id='span-2'>7</span>
    </input>
    <input id='padlock2-4' type='checkbox' value='4'>
      <span id='span-2'>6</span>
    </input>
    <input id='padlock2-5' type='checkbox' value='5'>
      <span id='span-2'>5</span>
    </input>
    <input id='padlock2-6' type='checkbox' value='6'>
      <span id='span-2'>4</span>
    </input>
    <input id='padlock2-7' type='checkbox' value='7'>
      <span id='span-2'>3</span>
    </input>
    <input id='padlock2-8' type='checkbox' value='8'>
      <span id='span-2'>2</span>
    </input>
    <input checked='checked' id='padlock2-9' type='checkbox' value='9'>
      <span id='span-2'>1</span>
    </input>
    <input id='padlock3-1' type='checkbox' value='1'>
      <span id='span-3'>9</span>
    </input>
    <input id='padlock3-2' type='checkbox' value='2'>
      <span id='span-3'>8</span>
    </input>
    <input id='padlock3-3' type='checkbox' value='3'>
      <span id='span-3'>7</span>
    </input>
    <input id='padlock3-4' type='checkbox' value='4'>
      <span id='span-3'>6</span>
    </input>
    <input id='padlock3-5' type='checkbox' value='5'>
      <span id='span-3'>5</span>
    </input>
    <input id='padlock3-6' type='checkbox' value='6'>
      <span id='span-3'>4</span>
    </input>
    <input id='padlock3-7' type='checkbox' value='7'>
      <span id='span-3'>3</span>
    </input>
    <input id='padlock3-8' type='checkbox' value='8'>
      <span id='span-3'>2</span>
    </input>
    <input checked='checked' id='padlock3-9' type='checkbox' value='9'>
      <span id='span-3'>1</span>
    </input>
    <label class='check' for='interactiveObject--lock'>check</label>
    <input data-debug='Empty box 1' data-reference='1' id='interactiveObject1' type='radio'>
    <input data-debug='Pickaxe' data-reference='2' id='interactiveObject2' type='radio'>
    <input data-debug='Boulder' data-reference='3' id='interactiveObject3' type='checkbox'>
    <input data-debug='Dynamite plunger' data-reference='4' id='interactiveObject4' type='radio'>
    <input data-debug='Dynamite door' data-reference='5' id='interactiveObject5' type='checkbox'>
    <input data-debug='Planks' data-reference='6' id='interactiveObject6' type='radio'>
    <input data-debug='Plank gap' data-reference='7' id='interactiveObject7' type='checkbox'>
    <input data-debug='Note 1' data-reference='8' id='interactiveObject8' type='radio'>
    <input data-debug='Note 2' data-reference='9' id='interactiveObject9' type='radio'>
    <input data-debug='Note 3' data-reference='10' id='interactiveObject10' type='radio'>
    <input data-debug='Lock door' data-reference='11' id='interactiveObject11' type='radio'>
    <input data-debug='Handle' data-reference='12' id='interactiveObject12' type='radio'>
    <input data-debug='Cog' data-reference='13' id='interactiveObject13' type='checkbox'>
    <input data-debug='Waterfall' data-reference='14' id='interactiveObject14' type='checkbox'>
    <input data-debug='Dynamite' data-reference='15' id='interactiveObject15' type='radio'>
    <input data-debug='Fuses' data-reference='16' id='interactiveObject16' type='radio'>
    <input data-debug='End door' data-reference='17' id='interactiveObject17' type='checkbox'>
    <input data-debug='Empty box 2' data-reference='18' id='interactiveObject18' type='radio'>
    <input data-debug='Empty box 3' data-reference='19' id='interactiveObject19' type='radio'>
    <input data-debug='Empty box 4' data-reference='20' id='interactiveObject20' type='radio'>
    <input data-debug='Empty box 5' data-reference='21' id='interactiveObject21' type='radio'>
    <input data-debug='Empty box 6' data-reference='22' id='interactiveObject22' type='radio'>
    <input id='indexRow1-1' name='trigger' type='radio'>
    <input checked='checked' id='indexRow1-2' name='trigger' type='radio'>
    <input id='indexRow1-3' name='trigger' type='radio'>
    <input id='indexRow1-4' name='trigger' type='radio'>
    <input id='indexRow1-5' name='trigger' type='radio'>
    <input id='indexRow1-6' name='trigger' type='radio'>
    <input id='indexRow1-7' name='trigger' type='radio'>
    <input id='indexRow1-8' name='trigger' type='radio'>
    <input id='indexRow1-9' name='trigger' type='radio'>
    <input id='indexRow1-10' name='trigger' type='radio'>
    <input id='indexRow1-11' name='trigger' type='radio'>
    <input id='indexRow1-12' name='trigger' type='radio'>
    <input id='indexRow2-1' name='trigger' type='radio'>
    <input id='indexRow2-2' name='trigger' type='radio'>
    <input id='indexRow2-3' name='trigger' type='radio'>
    <input id='indexRow2-4' name='trigger' type='radio'>
    <input id='indexRow2-5' name='trigger' type='radio'>
    <input id='indexRow2-6' name='trigger' type='radio'>
    <input id='indexRow2-7' name='trigger' type='radio'>
    <input id='indexRow2-8' name='trigger' type='radio'>
    <input id='indexRow2-9' name='trigger' type='radio'>
    <input id='indexRow2-10' name='trigger' type='radio'>
    <input id='indexRow2-11' name='trigger' type='radio'>
    <input id='indexRow2-12' name='trigger' type='radio'>
    <input id='indexRow3-1' name='trigger' type='radio'>
    <input id='indexRow3-2' name='trigger' type='radio'>
    <input id='indexRow3-3' name='trigger' type='radio'>
    <input id='indexRow3-4' name='trigger' type='radio'>
    <input id='indexRow3-5' name='trigger' type='radio'>
    <input id='indexRow3-6' name='trigger' type='radio'>
    <input id='indexRow3-7' name='trigger' type='radio'>
    <input id='indexRow3-8' name='trigger' type='radio'>
    <input id='indexRow3-9' name='trigger' type='radio'>
    <input id='indexRow3-10' name='trigger' type='radio'>
    <input id='indexRow3-11' name='trigger' type='radio'>
    <input id='indexRow3-12' name='trigger' type='radio'>
    <input id='indexRow4-1' name='trigger' type='radio'>
    <input id='indexRow4-2' name='trigger' type='radio'>
    <input id='indexRow4-3' name='trigger' type='radio'>
    <input id='indexRow4-4' name='trigger' type='radio'>
    <input id='indexRow4-5' name='trigger' type='radio'>
    <input id='indexRow4-6' name='trigger' type='radio'>
    <input id='indexRow4-7' name='trigger' type='radio'>
    <input id='indexRow4-8' name='trigger' type='radio'>
    <input id='indexRow4-9' name='trigger' type='radio'>
    <input id='indexRow4-10' name='trigger' type='radio'>
    <input id='indexRow4-11' name='trigger' type='radio'>
    <input id='indexRow4-12' name='trigger' type='radio'>
    <div class='game_character'></div>
    <div class='game_key'></div>
    <div class='viewport'>
      <img class='level' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tilemaps.png'>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow1-1'>
          <div class='game_segment__control'>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow1-1'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow0-1'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow1-2'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow1-2'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow0-2'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'>
            <label data-reference='1' for='interactiveObject1'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/creepyCorridor-24.png'>
              <div class='response'>
                Nothing useful in here
              </div>
            </label>
          </div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow1-3'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow1-3'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow0-3'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow1-4'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow1-4'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow0-4'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow1-5'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow1-5'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow0-5'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'>
            <label data-reference='8' for='interactiveObject8'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/creepyCorridor-_094.png'>
              <div class='response'>
                A strange note
              </div>
            </label>
          </div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow1-6'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow1-6'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow0-6'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'>
            <label data-reference='3' for='interactiveObject3'>
              <img class='forced' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/creepyCorridor-_062.png'>
              <div class='responseSuccess'>
                Ha! That got it
              </div>
              <div class='forcedResponse'>
                I need a tool to get past this
                <label for='interactiveObject3'>
                  <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
                </label>
              </div>
            </label>
          </div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow1-7'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow1-7'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow0-7'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'>
            <label data-reference='4' for='interactiveObject4'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/creepyCorridor-_166.png'>
              <div class='response'>
                That seemed to do something...
              </div>
            </label>
          </div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow1-8'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow1-8'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow0-8'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow1-9'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow1-9'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow0-9'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'>
            <label data-reference='9' for='interactiveObject9'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/creepyCorridor-24.png'>
              <div class='response'>
                A strange note
              </div>
            </label>
          </div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow1-10'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow1-10'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow0-10'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow1-11'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow1-11'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow0-11'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'>
            <label data-reference='21' for='interactiveObject21'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/creepyCorridor-25.png'>
              <div class='response'>
                Nothing i can use
              </div>
            </label>
          </div>
          <div class='tile'></div>
          <div class='tile'>
            <label data-reference='2' for='interactiveObject2'>
              <img class='object' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/creepyCorridor-_035.png'>
              <div class='response'>
                A pickaxe. This should come in handy
              </div>
            </label>
          </div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow1-12'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow1-12'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow0-12'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow2-1'>
          <div class='game_segment__control'>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow2-1'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow1-1'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow2-2'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow2-2'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow1-2'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'>
            <label data-reference='15' for='interactiveObject15'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/creepyCorridor-_161.png'>
              <div class='response'>
                Dynamite sticks
              </div>
            </label>
          </div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow2-3'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow2-3'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow1-3'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow2-4'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow2-4'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow1-4'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow2-5'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow2-5'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow1-5'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'>
            <label data-reference='6' for='interactiveObject6'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/creepyCorridor-_094.png'>
              <div class='response'>
                A Plank of wood
              </div>
            </label>
          </div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow2-6'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow2-6'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow1-6'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'>
            <label data-reference='18' for='interactiveObject18'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/creepyCorridor-24.png'>
              <div class='response'>
                Nothing useful in here
              </div>
            </label>
          </div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow2-7'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow2-7'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow1-7'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow2-8'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow2-8'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow1-8'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow2-9'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow2-9'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow1-9'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'>
            <label data-reference='19' for='interactiveObject19'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/creepyCorridor-_094.png'>
              <div class='response'>
                Full of junk
              </div>
            </label>
          </div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow2-10'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow2-10'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow1-10'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow2-11'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow2-11'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow1-11'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'>
            <label data-reference='17' for='interactiveObject17'>
              <img class='forced' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/creepyCorridor-_168.png'>
              <div class='forcedResponse'>
                If only i had some dynamite &amp; fuses
                <label for='interactiveObject17'>
                  <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
                </label>
              </div>
            </label>
          </div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow2-12'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow2-12'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow1-12'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow3-1'>
          <div class='game_segment__control'>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow3-1'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow2-1'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'>
            <label data-reference='12' for='interactiveObject12'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/creepyCorridor-_094.png'>
              <div class='response'>
                Cog handle
              </div>
            </label>
          </div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow3-2'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow3-2'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow2-2'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow3-3'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow3-3'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow2-3'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile door'>
            <label data-reference='11' for='interactiveObject--lock'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/doorLocked.png'>
              <div class='response'>
                A locked door
              </div>
            </label>
          </div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow3-4'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow3-4'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow2-4'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'>
            <label data-reference='7' for='interactiveObject7'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/creepyCorridor-_169.png'>
              <div class='responseSuccess'>
                planks on
              </div>
              <div class='forcedResponse'>
                CSS won't let me jump this
                <label for='interactiveObject7'>
                  <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
                </label>
              </div>
            </label>
          </div>
          <div class='tile'></div>
          <div class='tile'>
            <label data-reference='10' for='interactiveObject10'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/creepyCorridor-24.png'>
              <div class='response'>
                A strange note
              </div>
            </label>
          </div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow3-5'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow3-5'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow2-5'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow3-6'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow3-6'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow2-6'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile beam'>
            <label data-reference='5' for='interactiveObject5'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/beam.gif'>
              <div class='responseSuccess'>
                door gone
              </div>
              <div class='forcedResponse'>
                Something must blow this up
                <label for='interactiveObject5'>
                  <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
                </label>
              </div>
            </label>
          </div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow3-7'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow3-7'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow2-7'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow3-8'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow3-8'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow2-8'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'>
            <label data-reference='20' for='interactiveObject20'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/creepyCorridor-24.png'>
              <div class='response'>
                Just an empty box
              </div>
            </label>
          </div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow3-9'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow3-9'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow2-9'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow3-10'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow3-10'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow2-10'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow3-11'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow3-11'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow2-11'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow3-12'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow3-12'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow2-12'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow4-1'>
          <div class='game_segment__control'>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow4-1'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow3-1'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow4-2'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow4-2'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow3-2'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow4-3'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow4-3'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow3-3'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow4-4'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow4-4'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow3-4'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow4-5'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow4-5'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow3-5'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow4-6'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow4-6'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow3-6'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow4-7'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow4-7'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow3-7'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'>
            <label data-reference='22' for='interactiveObject22'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/creepyCorridor-_094.png'>
              <div class='response'>
                Nope empty
              </div>
            </label>
          </div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow4-8'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow4-8'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow3-8'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow4-9'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow4-9'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow3-9'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'>
            <label data-reference='13' for='interactiveObject13'>
              <img class='forced' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/creepyCorridor-_148.png'>
              <div class='responseSuccess'>
                That turned off the water
              </div>
              <div class='forcedResponse'>
                There's no handle
                <label for='interactiveObject13'>
                  <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
                </label>
              </div>
            </label>
          </div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow4-10'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow4-10'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow3-10'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile water'>
            <label data-reference='14' for='interactiveObject14'>
              <img class='forced' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/waterOn.gif'>
              <div class='forcedResponse'>
                Cant get through here
                <label for='interactiveObject14'>
                  <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
                </label>
              </div>
            </label>
          </div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow4-11'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
            <div class='backward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow4-11'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow3-11'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
      <div class='game_segment'>
        <div class='drip_container'>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
          <div class='drip'></div>
        </div>
        <div class='tiles'>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'>
            <label data-reference='16' for='interactiveObject16'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/creepyCorridor-_094.png'>
              <div class='response'>
                Box of fuses
              </div>
            </label>
          </div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
          <div class='tile'></div>
        </div>
        <label for='indexRow4-12'>
          <div class='game_segment__control'>
            <div class='forward'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow4-12'>
          <div class='game_segment__control'>
            <div class='down'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
        <label for='indexRow3-12'>
          <div class='game_segment__control'>
            <div class='up'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowMovement.png'>
            </div>
          </div>
        </label>
      </div>
    </div>
    <div class='game_inventory'>
      <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/creepyBackpack.png'>
      <div class='game_inventory__item'>
        <div class='item pickaxe' data-reference='0'>
          <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/apple.gif'>
          <div class='details'>A healthy snack</div>
          <div class='name'>Apple</div>
        </div>
        <div class='item pickaxe' data-reference='2'>
          <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/pickInventory.gif'>
          <div class='details'>A sturdy looking pickaxe</div>
          <div class='name'>Pickaxe</div>
        </div>
        <div class='item pickaxe' data-reference='6'>
          <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/plankInventory.gif'>
          <div class='details'>A thick plank of wood</div>
          <div class='name'>Plank</div>
        </div>
        <div class='item pickaxe' data-reference='8'>
          <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/note1.gif'>
          <div class='details'>A mysterious note</div>
          <div class='name'>Note 1</div>
        </div>
        <div class='item pickaxe' data-reference='9'>
          <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/note2.gif'>
          <div class='details'>A mysterious note</div>
          <div class='name'>Note 2</div>
        </div>
        <div class='item pickaxe' data-reference='10'>
          <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/note3.gif'>
          <div class='details'>A mysterious note</div>
          <div class='name'>Note 3</div>
        </div>
        <div class='item pickaxe' data-reference='12'>
          <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/handleInventory.gif'>
          <div class='details'>Looks like its used to turn something</div>
          <div class='name'>Handle</div>
        </div>
        <div class='item pickaxe' data-reference='15'>
          <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/dynamiteInventory.gif'>
          <div class='details'>No good without any fuses</div>
          <div class='name'>Dynamite sticks</div>
        </div>
        <div class='item pickaxe' data-reference='16'>
          <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/fusesInventory.gif'>
          <div class='details'>Some fuses for dynamite</div>
          <div class='name'>Fuses</div>
        </div>
      </div>
    </div>
    <div class='game_win'>
      <div class='game_win__inner'>
        <div class='character'></div>
        <p>Thanks for playing</p>
        <a href='https://www.codepen.io/jcoulterdesign' target='_blank'>Follow me on codepen</a>
        <span>for more shenanigans</span>
      </div>
    </div>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

</body>
</html>
