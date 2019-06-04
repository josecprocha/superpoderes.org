<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/desandro/pen/ezNawy.

How to play: Drag cub to star, Drag grid to rotate.

Also available at [cubnpup.com](http://cubnpup.com)

This is a proof-of-concept for a game. Basic art, no sound, no options, no polish. But the core game-play is there. It's more of a mobile game, focused on dragging — inspired by Threes. I'm looking to see if its any fun. Let me know!

I've always wanted to make a video game. This could be the one. My previous attempts never got past isolated demos because they were aiming for bigger ideas. They grew complex and unwieldy. So this game is designed to be simple. A game that I can actually make.

-------------------------------------------------------------------------------

Copyright (c) 2019 by Dave DeSandro (https://codepen.io/desandro/pen/ezNawy)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Cub n Pup - puzzle game demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/cubnpup.css') !!}" />
</head>

<body>


<div class="top-bar">
  <button class="button level-select-button">Levels</button>
</div>

<ol class="level-list"></ol>

<canvas></canvas>
<p class="instruction"></p>
<button class="button next-level-button">Next level</button>

<div class="levels">

<pre id="intro-fixed1" data-blurb="Tutorial">
blurb: Tutorial
instruction: Drag cub to star
---
*=.=.
    !
. . .
    !
@=.=.
</pre>

<pre id="intro-fixed2" data-blurb="Tutorial">
blurb: Tutorial
instruction: Drag grid to rotate. Cub and star moves with grid. Orange links stay in place.
---
* . .
    !
. . .
    !
@=.=.
</pre>

<pre id="intro-fixed3" data-blurb="★">
blurb: ★
---
@=. .

. . .
    !
*=. .
</pre>

<pre id="intro-free1" data-blurb="Tutorial">
blurb: Tutorial
instruction: Blue links move with grid. Rotate grid to connect blue and orange links in different ways.
---
@-. .
!   |
. . .
    |
*-.-.
</pre>

<pre id="m3x3-2-med" data-blurb="★">
blurb: ★
---
. . *
| | |
. . .
| | |
@ .=.
</pre>

<pre id="m3x3-fixed-switch" data-blurb="★">
blurb: ★
---
*=.-.

. . .
    |
@-. .
</pre>

<pre id="m4x4-2" data-blurb="★">
blurb: ★
---
. .=. .
  | !
. . .-*
  |
. . . .

. @-. .
</pre>

<pre id="m4x4-1" data-blurb="★">
blurb: ★
---
. . . .

* . . @
  | ! |
. . . .
  !
. . . .
</pre>

<pre id="m4x4-3" data-blurb="★">
blurb: ★
---
. @ . .
! |
. . . .
      |
.=.=.-.
|
. * . .
</pre>

<pre id="m4x4-4" data-blurb="★">
blurb: ★
---
. . . .

* . . .
    !
. . .-.
!
.=.=. @
</pre>

<pre id="m4x4-5" data-blurb="★">
blurb: ★
---
.-.-.-.
|
@ .-.-.

* .=. .
!   |
.-.-. .
</pre>

<pre id="m4x4-6-med" data-blurb="★">
blurb: ★
---
. * . .

.-.=. .
  |
. . . .
!   |
.=. @ .
</pre>

<pre id="m4x4-7-hard1" data-blurb="★★">
blurb: ★★
---
. . *-.

.-.=. .
      |
.=. . .
  | |
@-.-.=.
</pre>

<pre id="m4x4-8-hard2" data-blurb="★★">
blurb: ★★
---
.-@ .=.

. . . .
    |
.-. .-*
  |
. .=.-.
</pre>

<pre id="m4x4-9-hard1" data-blurb="★★">
blurb: ★★
---
. . .=.
  !
@-. .-.

. .=. .

. . * .
</pre>

<pre id="m4x4-10-hard1" data-blurb="★★">
blurb: ★★
---
. @=. .
  |
. .-.-.

.-.-.-.
!     !
. * . .
</pre>

<pre id="m5x5-3" data-blurb="★">
. . . . .
  | !
. . .-. .
  |
. . . . *
  |
. . .=. .
  |
. @ . . .
</pre>

<pre id="m5x5-1" data-blurb="★">
@-.-. .-.
    |
. . . . .

. . .=. .

. . . .=.
    |
. .=.-* .
</pre>

<pre id="m5x5-2" data-blurb="★★">
. . . . .

. .=.-. @
|       !
. . . .-.

.=. . .=.
!
* . . . .
</pre>

<pre id="m5x5-4" data-blurb="★★">
. . . .-.
      !
. .-. . .
  !     |
.=. . . .
|
. . . . *
|
.-@=. .=.
</pre>

<pre id="m5x5-5" data-blurb="★★">
. . . . .

. . .-. *
    !
. . .-. .

.=. . . .
    |
. @-. . .
</pre>

<pre id="m5x5-6" data-blurb="★★">
. . .-.-.
!   !
. .=.-. .
|
. .-. .-@
!
* .=. . .
      |
.=. .-.=.
</pre>

<pre id="m5x5-7" data-blurb="★★★">
.=* . @=.
|
. .=. . .
|   | |
.=. . .-.
        |
. . . .=.
!
. .-.-. .
</pre>

<pre id="m5x5-8" data-blurb="★★★">
. * . .-.
  |
. . .=.-.
!       |
. . . . .

. .-. .=.
        |
. . .=.-@
</pre>

<pre id="m5x5-9" data-blurb="★★★">
.-.-. . .
    |
. . . .-@
  !
* . .-. .
|   !
.-. . .=.
    |   !
. . .=. .
</pre>

<pre id="m5x5-10" data-blurb="★★">
. . . . .

. . . .-@
  !
* . .=. .
|   !
.-. . . .

. . . . .
</pre>

<pre id="m5x5-11" data-blurb="★★★">
. . . .=.
  |
. . . .=.
|
. . .-. .
! |
. .=. . .
|   !   !
.-@ . * .
</pre>

<pre id="m5x5-12" data-blurb="★★">
. . .=.=.

. . . . .

. . . . @

. . . . .

* . .=.=.
</pre>

<pre id="m6x6-1-hard1" data-blurb="★★★">
. . * . . .
  ! | |
. .-. .-. .
          |
. . . . .-.
      | ! |
. . .=. . .
    |
@-.-. .-. .
          |
. .=. . .-.
</pre>

<pre id="m6x6-2" data-blurb="★★★">
@ .=. . .=.
  | | !
. . . .=. .
  |     |
. . . .-. .
|   !
. . . . . *
|     |
.=. .-. . .
  |   | |
.-. . . .=.
</pre>

<pre id="m6x6-3" data-blurb="★★★">
.=. .=.-.-*
  |
.-. . . . .
        | !
. . .-.-. .
!
.-. .=.=. .

@ .=. . . .
  |     !
. .-. .-. .
</pre>

<pre id="pivot-4x4-intro" data-blurb="Tutorial">
instruction: Green links pivot with grid, but point in the same direction
---
. .-* .
  |
. . . .

. .>. .

. @ . .
</pre>

<pre id="pivot-5x5-2" data-blurb="★★">
. . .-.-@

. .<. . .

.>. . . .
| !
.-.-. . *
  !
. . . . .
</pre>

<pre id="pivot-5x5-swirly" data-blurb="★★★">
. . . . .
      ^
.<. . . *

. . . . .

@ . . .>.
  v
. . . . .
</pre>

<pre id="pivot-5x5-1" data-blurb="★★★">
. .-. . .
      ^
. .<.=.=.

.>. . .-@

* . . .=.

. . . . .
</pre>

<pre id="pivot-5x5-3" data-blurb="★★">
.=. . .-*
    v
. . . . .

. . .-.J.

@-. . . .
    v
.<. . . .
</pre>

<pre id="pivot-5x5-4" data-blurb="★★★">
.-.-. @>.
!     ^
. . . . .
  |
. . . . .
  |
. . . .=*
    ^
. . .-. .>
</pre>

<pre id="pivot-5x5-5" data-blurb="★★★">
.-. . . *

. .>. . .
|       v
.-. . . .
  ^
. . .-. .
      v
@=.=. . .
</pre>

<pre id="pivot-5x5-6" data-blurb="★★★">
. . .>. .
  ! |
@=. .-. .

. . . .=.>

. . . . .

. *>.<. .
</pre>

<pre id="pivot-5x5-7" data-blurb="★★★">
* . @ . .
v   |
. . . . .
      !
. . . . .
^     ! !
. .-. . .
  !
. . . . .
    v
</pre>

<pre id="pivot-6x6-1" data-blurb="★★★">
. . . . . .
| v
@ . . . . *
  | |
. . . . . .
| !   ^ | K
. . . .-.=.
|
. .-. . . .
v
.>. . . . .
</pre>

<pre id="pivot-6x6-3" data-blurb="★★★">
. @-. .>.-.

. . . . . .
          |
* .>. .=. .
    !
. . . . . .>
      |   ^
. . . .=. .

. .=. . .=.>
</pre>

<pre id="pivot-6x6-2" data-blurb="★★★">
. .-.-. .=.
      v
. . . . . .
  |     ! v
.>. . . . *
    ^
. . . . . .
|
. .-.<. . .
! |       |
. . . .>.-@
</pre>

<pre id="m44" data-blurb="★★">
. .=. *-.

. . .=. .
!
. . . . .
  |   !
. . . . .
  |     |
. @ . .=.
</pre>

<pre id="m45" data-blurb="★★">
@ * .>. .

. .=.=. .
|     |
.>. . . .

. . . .>.
|
.=. . .-.
</pre>

<pre id="m46" data-blurb="★★★">
.-. . .
    ^
. . . .

.L. . .
      !
@ . .-*
</pre>

<pre id="m47" data-blurb="★★">
@ . . . . .
v v v v v v
. . . . . .

. . . . . .

. . . . . .
  v v v v v
. . . . . .

. . . .=. *
v v v v   v
</pre>

<pre id="m48" data-blurb="★">
.-.<.>.=. .
W !       |
. . .A. . *
    |   |
. .=. . . .
^ !
. .D.-.=.=@
          |
. . .-.-. .
|
.#.=. .<. .
    v     v
</pre>

<pre id="m49" data-blurb="★★★">
. . .-@ .
    |
. . . .J.

* . . . .
| !     !
. . . . .
    v   !
. . . .-.
</pre>

<pre id="m50" data-blurb="★★★">
*=. . .
    v
. . . .
^     |
. . . .
  ^   |
@ .>. .
</pre>

<pre id="rotate-tut" data-blurb="Tutorial">
instruction: Red links are fixed in place, but rotate with grid
---
. . . .

@ .4. .
  |
. . .-*

. . . .
</pre>

<pre id="rotate1" data-blurb="★">
. . .-*
    |
. . . .
    5
.4. . .
|
@ . . .
</pre>

<pre id="rotate2" data-blurb="★★">
@ .-.=.
    |
. . .4.
    |
* . . .
|   |
. . . .
</pre>

<pre id="rotate3" data-blurb="★★">
. . * .
! 5 v
. . . @
  |
. .4. .
  !
. . . .
</pre>

<pre id="rotate3b" data-blurb="★★">
* . . .
! 5
. . . @
  |
. .4. .
  !
. . . .
</pre>

<pre id="rotate-5x5-1" data-blurb="★★">
. . . .-@
      8
. .=. . .

*=. . . .

. .-. . .

. . . . .
</pre>

<pre id="rotate-5x5-2" data-blurb="★★">
. . . . .

. . . .6*
  |
. . . .=.
  |
.4. . . .
        |
. . . .-@
</pre>

<pre id="rotate-5x5-2b" data-blurb="★★★">
. . . . .
  !   |
.-.-. . .
  v   |
. . .-. .

@ . . . .
    5
. . .=* .
</pre>

<pre id="rotate-6x6-1" data-blurb="★★★">
@4.=. . . .

. . . . . .
      v 8 |
.-.-. . . .
!   !   ^
. . . . . .

. .>. . . .
!
* . .4. . .
</pre>

<pre id="rotate-6x6-2" data-blurb="★★★">
. . *<. . .

.=. .-. . .
        5
. . . .-. .
        |
. . . . . .

. . . . . .
    5     |
. .=. . @-.
</pre>

<pre id="rotate-6x6-3" data-blurb="★★★">
.4. . . . @
!
.-. . .=. .
!
. . . . . .
!
.>.6. . . .
!
. . . .=.-.
      ^
. . . . * .
</pre>

  </div>
  <script src="{!! asset('js/third_party_html5/cubnpup.js') !!}"></script>
</body>
</html>
