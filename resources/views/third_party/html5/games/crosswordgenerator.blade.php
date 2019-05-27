<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/REast/pen/asJqc.

Enter some words and hit generate.

WIP... Still working on 'Play' mode and the 'Clue' area
-->

<!--
Copyright (c) 2019 by Rich East (https://codepen.io/REast/pen/asJqc)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Crossword Generator</title>
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/crosswordgenerator.css') !!}" />
</head>

<body>

  <div class="container">
    <button class="btn" id="btnCreate">Create</button>
    <button class="btn" id="btnPlay">Play</button>
    <br/>
    <br/>

    <div class="center crossword" id="crossword"></div><br/>
    <div class="center">

      <div class="line">
        <input class="word" type="text" value="Tucan" />
        <input class="clue" value="A tropical bird with a large beak" />
      </div>

      <div class="line">
        <input class="word" type="text" value="Dingo" />
        <input class="clue" value="This free-ranging dog is at home in the outback." />
      </div>

      <div class="line">
        <input class="word" type="text" value="Dolphin" />
        <input class="clue" value="A friendly finned non-fish" />
      </div>

      <div class="line">
        <input class="word" type="text" value="Pig"/>
        <input class="clue" value="Bosses of the farm in Orwell's world" />
      </div>

      <div class="line">
        <input class="word" type="text" value="Kangaroo"/>
        <input class="clue" value="Boxing champions of the outback" />
      </div>

      <div class="line">
        <input class="word" type="text" value="Octopus"/>
        <input class="clue" value="Eight legged sea creature" />
      </div>

      <div class="line">
        <input class="word" type="text" value="Hamster"/>
        <input class="clue" value="Furry rodent whose teeth never stop growing" />
      </div>

      <div class="line">
        <input class="word" type="text" value="Alligator"/>
        <input class="clue" value="Dating back further than the T-rex, this reptile is a modern day dinosaur" />
      </div>

      <div class="line">
        <input class="word" type="text" value="Ostrich"/>
        <input class="clue" value="Flightless bird not know for its people skills" />
      </div>

      <div class="line">
        <input class="word" type="text" value="Koala"/>
        <input class="clue" value="Friendly version of the infamous Australian tourist terrorizing tree-dwellers" />
      </div>

      <div class="line">
        <input class="word" type="text" value="Mouse"/>
        <input class="clue" value="This poor animal is often the victim of feline aggression and human experimentation"/>
      </div>

      <div class="line">
        <input class="word" type="text" value="Antelope"/>
        <input class="clue" value="The victim of every lion documentary clip you've ever seen." />
      </div>

    </div>
  </div>
  {{-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> --}}
  <script src="{!! asset('js/jquery.min.js') !!}"></script>
  <script src="{!! asset('js/third_party_html5/crosswordgenerator.js') !!}"></script>
</body>
</html>
