<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/EvanWard/pen/iCxzF.

A quick remake of an old Madagascan board game
-->

<!--
Copyright (c) 2019 by EvanWard (https://codepen.io/EvanWard/pen/iCxzF)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Fanorona WIP</title>
</head>

<body>

  <!-- FANORONA

  I recently played Assassin's Creed: Black Flag, which introduced me to the game fanorona. It's an old board game from Madagascar, and it's pretty fun. Not sure if I have all the rules right but here's the gist:

  On your turn, move a token towards an opponents token, or away from an adjacent opponents token along the lines. A token moved towards an opponents must end adjacent to that token. Remove the opponents token that your token moved towards or away from and any consecutive opponent tokens along the line, in the direction of the opponents token.

  You may move a token again if there is another legal move where the token does not return to a previously visited intersection or move in the same direction twice.

  If you move towards AND away from two respective opponent tokens, you choose which one you want to remove (click)

  Sorry if these rules sound a little funky, I'm not the best at explaining things.

  -->

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="{!! asset('js/third_party_html5/fanorona.js') !!}"></script>

</body>
</html>
