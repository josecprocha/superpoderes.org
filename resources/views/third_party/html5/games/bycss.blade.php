<!--
A Pen created at CodePen.io. You can find this one at https://codepen.io/KimTom/pen/OVPZex.
-->

<!--
Copyright (c) 2019 by Tomoya KIMURA (https://codepen.io/KimTom/pen/OVPZex)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

{{--
Scripts found only externaly:
https://fonts.googleapis.com/css?family=Open+Sans:700
--}}

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="{!! asset('css/third_party_html5/bycss.css') !!}" />
  <title>A Pen by Tomoya KIMURA - Pure CSS Game - Bycss -</title>
</head>

<body>
  <div id="important"></div>
  <input type="checkbox" name="gamestart" id="start">
  <input type="radio" name="modeselect" id="mode_color">
  <input type="radio" name="modeselect" id="mode_retro">
  <div class="stage">
    <!-- a-sq -->
    <input type="checkbox" name="a-select" id="putF-a_P-1_B-sq_N-1">
    <input type="checkbox" name="a-select" id="putF-a_P-2_B-sq_N-1">
    <input type="checkbox" name="a-select" id="putF-a_P-3_B-sq_N-1">
    <input type="checkbox" name="a-select" id="putF-a_P-4_B-sq_N-1">
    <input type="checkbox" name="a-select" id="putF-a_P-5_B-sq_N-1">
    <input type="checkbox" name="a-select" id="putF-a_P-6_B-sq_N-1">
    <input type="checkbox" name="a-select" id="putF-a_P-7_B-sq_N-1">
    <input type="checkbox" name="a-select" id="putF-a_P-8_B-sq_N-1">
    <input type="checkbox" name="a-select" id="putF-a_P-9_B-sq_N-1">
    <!-- a-lg -->
    <input type="checkbox" name="a-select" id="putF-a_P-4_B-lg_N-1">
    <input type="checkbox" name="a-select" id="putF-a_P-5_B-lg_N-1">
    <input type="checkbox" name="a-select" id="putF-a_P-6_B-lg_N-1">
    <input type="checkbox" name="a-select" id="putF-a_P-7_B-lg_N-1">
    <input type="checkbox" name="a-select" id="putF-a_P-8_B-lg_N-1">
    <input type="checkbox" name="a-select" id="putF-a_P-9_B-lg_N-1">
    <!-- a-wd -->
    <input type="checkbox" name="a-select" id="putF-a_P-1_B-wd_N-1">
    <input type="checkbox" name="a-select" id="putF-a_P-2_B-wd_N-1">
    <input type="checkbox" name="a-select" id="putF-a_P-4_B-wd_N-1">
    <input type="checkbox" name="a-select" id="putF-a_P-5_B-wd_N-1">
    <input type="checkbox" name="a-select" id="putF-a_P-7_B-wd_N-1">
    <input type="checkbox" name="a-select" id="putF-a_P-8_B-wd_N-1">
    <!-- a-el -->
    <input type="checkbox" name="a-select" id="putF-a_P-4_B-el_N-1">
    <input type="checkbox" name="a-select" id="putF-a_P-5_B-el_N-1">
    <input type="checkbox" name="a-select" id="putF-a_P-7_B-el_N-1">
    <input type="checkbox" name="a-select" id="putF-a_P-8_B-el_N-1">
    <!-- a-rv -->
    <input type="checkbox" name="a-select" id="putF-a_P-2_B-rv_N-1">
    <input type="checkbox" name="a-select" id="putF-a_P-3_B-rv_N-1">
    <input type="checkbox" name="a-select" id="putF-a_P-5_B-rv_N-1">
    <input type="checkbox" name="a-select" id="putF-a_P-6_B-rv_N-1">
    <!-- b-sq -->
    <input type="checkbox" name="b-select" id="putF-b_P-1_B-sq_N-1">
    <input type="checkbox" name="b-select" id="putF-b_P-2_B-sq_N-1">
    <input type="checkbox" name="b-select" id="putF-b_P-3_B-sq_N-1">
    <input type="checkbox" name="b-select" id="putF-b_P-4_B-sq_N-1">
    <input type="checkbox" name="b-select" id="putF-b_P-5_B-sq_N-1">
    <input type="checkbox" name="b-select" id="putF-b_P-6_B-sq_N-1">
    <input type="checkbox" name="b-select" id="putF-b_P-7_B-sq_N-1">
    <input type="checkbox" name="b-select" id="putF-b_P-8_B-sq_N-1">
    <input type="checkbox" name="b-select" id="putF-b_P-9_B-sq_N-1">
    <!-- b-lg -->
    <input type="checkbox" name="b-select" id="putF-b_P-4_B-lg_N-1">
    <input type="checkbox" name="b-select" id="putF-b_P-5_B-lg_N-1">
    <input type="checkbox" name="b-select" id="putF-b_P-6_B-lg_N-1">
    <input type="checkbox" name="b-select" id="putF-b_P-7_B-lg_N-1">
    <input type="checkbox" name="b-select" id="putF-b_P-8_B-lg_N-1">
    <input type="checkbox" name="b-select" id="putF-b_P-9_B-lg_N-1">
    <!-- b-wd -->
    <input type="checkbox" name="b-select" id="putF-b_P-1_B-wd_N-1">
    <input type="checkbox" name="b-select" id="putF-b_P-2_B-wd_N-1">
    <input type="checkbox" name="b-select" id="putF-b_P-4_B-wd_N-1">
    <input type="checkbox" name="b-select" id="putF-b_P-5_B-wd_N-1">
    <input type="checkbox" name="b-select" id="putF-b_P-7_B-wd_N-1">
    <input type="checkbox" name="b-select" id="putF-b_P-8_B-wd_N-1">
    <!-- b-el -->
    <input type="checkbox" name="b-select" id="putF-b_P-4_B-el_N-1">
    <input type="checkbox" name="b-select" id="putF-b_P-5_B-el_N-1">
    <input type="checkbox" name="b-select" id="putF-b_P-7_B-el_N-1">
    <input type="checkbox" name="b-select" id="putF-b_P-8_B-el_N-1">
    <!-- b-rv -->
    <input type="checkbox" name="b-select" id="putF-b_P-2_B-rv_N-1">
    <input type="checkbox" name="b-select" id="putF-b_P-3_B-rv_N-1">
    <input type="checkbox" name="b-select" id="putF-b_P-5_B-rv_N-1">
    <input type="checkbox" name="b-select" id="putF-b_P-6_B-rv_N-1">
    <!-- c-sq -->
    <input type="checkbox" name="c-select" id="putF-c_P-1_B-sq_N-1">
    <input type="checkbox" name="c-select" id="putF-c_P-2_B-sq_N-1">
    <input type="checkbox" name="c-select" id="putF-c_P-3_B-sq_N-1">
    <input type="checkbox" name="c-select" id="putF-c_P-4_B-sq_N-1">
    <input type="checkbox" name="c-select" id="putF-c_P-5_B-sq_N-1">
    <input type="checkbox" name="c-select" id="putF-c_P-6_B-sq_N-1">
    <input type="checkbox" name="c-select" id="putF-c_P-7_B-sq_N-1">
    <input type="checkbox" name="c-select" id="putF-c_P-8_B-sq_N-1">
    <input type="checkbox" name="c-select" id="putF-c_P-9_B-sq_N-1">
    <!-- c-lg -->
    <input type="checkbox" name="c-select" id="putF-c_P-4_B-lg_N-1">
    <input type="checkbox" name="c-select" id="putF-c_P-5_B-lg_N-1">
    <input type="checkbox" name="c-select" id="putF-c_P-6_B-lg_N-1">
    <input type="checkbox" name="c-select" id="putF-c_P-7_B-lg_N-1">
    <input type="checkbox" name="c-select" id="putF-c_P-8_B-lg_N-1">
    <input type="checkbox" name="c-select" id="putF-c_P-9_B-lg_N-1">
    <!-- c-wd -->
    <input type="checkbox" name="c-select" id="putF-c_P-1_B-wd_N-1">
    <input type="checkbox" name="c-select" id="putF-c_P-2_B-wd_N-1">
    <input type="checkbox" name="c-select" id="putF-c_P-4_B-wd_N-1">
    <input type="checkbox" name="c-select" id="putF-c_P-5_B-wd_N-1">
    <input type="checkbox" name="c-select" id="putF-c_P-7_B-wd_N-1">
    <input type="checkbox" name="c-select" id="putF-c_P-8_B-wd_N-1">
    <!-- c-el -->
    <input type="checkbox" name="c-select" id="putF-c_P-4_B-el_N-1">
    <input type="checkbox" name="c-select" id="putF-c_P-5_B-el_N-1">
    <input type="checkbox" name="c-select" id="putF-c_P-7_B-el_N-1">
    <input type="checkbox" name="c-select" id="putF-c_P-8_B-el_N-1">
    <!-- c-rv -->
    <input type="checkbox" name="c-select" id="putF-c_P-2_B-rv_N-1">
    <input type="checkbox" name="c-select" id="putF-c_P-3_B-rv_N-1">
    <input type="checkbox" name="c-select" id="putF-c_P-5_B-rv_N-1">
    <input type="checkbox" name="c-select" id="putF-c_P-6_B-rv_N-1">
    <!-- G-sq -->
    <input type="checkbox" name="g-select" id="putF-g_P-1_B-sq_N-1">
    <input type="checkbox" name="g-select" id="putF-g_P-2_B-sq_N-1">
    <input type="checkbox" name="g-select" id="putF-g_P-3_B-sq_N-1">
    <input type="checkbox" name="g-select" id="putF-g_P-4_B-sq_N-1">
    <input type="checkbox" name="g-select" id="putF-g_P-5_B-sq_N-1">
    <input type="checkbox" name="g-select" id="putF-g_P-6_B-sq_N-1">
    <input type="checkbox" name="g-select" id="putF-g_P-7_B-sq_N-1">
    <input type="checkbox" name="g-select" id="putF-g_P-8_B-sq_N-1">
    <input type="checkbox" name="g-select" id="putF-g_P-9_B-sq_N-1">
    <!-- G-lg -->
    <input type="checkbox" name="g-select" id="putF-g_P-4_B-lg_N-1">
    <input type="checkbox" name="g-select" id="putF-g_P-5_B-lg_N-1">
    <input type="checkbox" name="g-select" id="putF-g_P-6_B-lg_N-1">
    <input type="checkbox" name="g-select" id="putF-g_P-7_B-lg_N-1">
    <input type="checkbox" name="g-select" id="putF-g_P-8_B-lg_N-1">
    <input type="checkbox" name="g-select" id="putF-g_P-9_B-lg_N-1">
    <!-- G-wd -->
    <input type="checkbox" name="g-select" id="putF-g_P-1_B-wd_N-1">
    <input type="checkbox" name="g-select" id="putF-g_P-2_B-wd_N-1">
    <input type="checkbox" name="g-select" id="putF-g_P-4_B-wd_N-1">
    <input type="checkbox" name="g-select" id="putF-g_P-5_B-wd_N-1">
    <input type="checkbox" name="g-select" id="putF-g_P-7_B-wd_N-1">
    <input type="checkbox" name="g-select" id="putF-g_P-8_B-wd_N-1">
    <!-- G-el -->
    <input type="checkbox" name="g-select" id="putF-g_P-4_B-el_N-1">
    <input type="checkbox" name="g-select" id="putF-g_P-5_B-el_N-1">
    <input type="checkbox" name="g-select" id="putF-g_P-7_B-el_N-1">
    <input type="checkbox" name="g-select" id="putF-g_P-8_B-el_N-1">
    <!-- G-rv -->
    <input type="checkbox" name="g-select" id="putF-g_P-2_B-rv_N-1">
    <input type="checkbox" name="g-select" id="putF-g_P-3_B-rv_N-1">
    <input type="checkbox" name="g-select" id="putF-g_P-5_B-rv_N-1">
    <input type="checkbox" name="g-select" id="putF-g_P-6_B-rv_N-1">

    <!-- Next Block -->
    <input type="checkbox" name="a-next" id="nextF-a_B-sq_N-1">
    <input type="checkbox" name="a-next" id="nextF-a_B-sq_N-2">
    <input type="checkbox" name="a-next" id="nextF-a_B-sq_N-3">
    <input type="checkbox" name="a-next" id="nextF-a_B-sq_N-4">
    <input type="checkbox" name="a-next" id="nextF-a_B-sq_N-5">
    <input type="checkbox" name="a-next" id="nextF-a_B-sq_N-6">
    <input type="checkbox" name="a-next" id="nextF-a_B-sq_N-7">
    <input type="checkbox" name="a-next" id="nextF-a_B-sq_N-8">
    <input type="checkbox" name="a-next" id="nextF-a_B-sq_N-9">
    <input type="checkbox" name="a-next" id="nextF-a_B-lg_N-1">
    <input type="checkbox" name="a-next" id="nextF-a_B-lg_N-2">
    <input type="checkbox" name="a-next" id="nextF-a_B-lg_N-3">
    <input type="checkbox" name="a-next" id="nextF-a_B-wd_N-1">
    <input type="checkbox" name="a-next" id="nextF-a_B-wd_N-2">
    <input type="checkbox" name="a-next" id="nextF-a_B-wd_N-3">
    <input type="checkbox" name="a-next" id="nextF-a_B-el_N-1">
    <input type="checkbox" name="a-next" id="nextF-a_B-el_N-2">
    <input type="checkbox" name="a-next" id="nextF-a_B-rv_N-1">
    <input type="checkbox" name="a-next" id="nextF-a_B-rv_N-2">
    <input type="checkbox" name="a-next" id="nextF-b_B-sq_N-1">
    <input type="checkbox" name="a-next" id="nextF-b_B-sq_N-2">
    <input type="checkbox" name="a-next" id="nextF-b_B-sq_N-3">
    <input type="checkbox" name="a-next" id="nextF-b_B-sq_N-4">
    <input type="checkbox" name="a-next" id="nextF-b_B-sq_N-5">
    <input type="checkbox" name="a-next" id="nextF-b_B-sq_N-6">
    <input type="checkbox" name="a-next" id="nextF-b_B-sq_N-7">
    <input type="checkbox" name="a-next" id="nextF-b_B-sq_N-8">
    <input type="checkbox" name="a-next" id="nextF-b_B-sq_N-9">
    <input type="checkbox" name="a-next" id="nextF-b_B-lg_N-1">
    <input type="checkbox" name="a-next" id="nextF-b_B-lg_N-2">
    <input type="checkbox" name="a-next" id="nextF-b_B-lg_N-3">
    <input type="checkbox" name="a-next" id="nextF-b_B-wd_N-1">
    <input type="checkbox" name="a-next" id="nextF-b_B-wd_N-2">
    <input type="checkbox" name="a-next" id="nextF-b_B-wd_N-3">
    <input type="checkbox" name="a-next" id="nextF-b_B-el_N-1">
    <input type="checkbox" name="a-next" id="nextF-b_B-el_N-2">
    <input type="checkbox" name="a-next" id="nextF-b_B-rv_N-1">
    <input type="checkbox" name="a-next" id="nextF-b_B-rv_N-2">
    <input type="checkbox" name="a-next" id="nextF-c_B-sq_N-1">
    <input type="checkbox" name="a-next" id="nextF-c_B-sq_N-2">
    <input type="checkbox" name="a-next" id="nextF-c_B-sq_N-3">
    <input type="checkbox" name="a-next" id="nextF-c_B-sq_N-4">
    <input type="checkbox" name="a-next" id="nextF-c_B-sq_N-5">
    <input type="checkbox" name="a-next" id="nextF-c_B-sq_N-6">
    <input type="checkbox" name="a-next" id="nextF-c_B-sq_N-7">
    <input type="checkbox" name="a-next" id="nextF-c_B-sq_N-8">
    <input type="checkbox" name="a-next" id="nextF-c_B-sq_N-9">
    <input type="checkbox" name="a-next" id="nextF-c_B-lg_N-1">
    <input type="checkbox" name="a-next" id="nextF-c_B-lg_N-2">
    <input type="checkbox" name="a-next" id="nextF-c_B-lg_N-3">
    <input type="checkbox" name="a-next" id="nextF-c_B-wd_N-1">
    <input type="checkbox" name="a-next" id="nextF-c_B-wd_N-2">
    <input type="checkbox" name="a-next" id="nextF-c_B-wd_N-3">
    <input type="checkbox" name="a-next" id="nextF-c_B-el_N-1">
    <input type="checkbox" name="a-next" id="nextF-c_B-el_N-2">
    <input type="checkbox" name="a-next" id="nextF-c_B-rv_N-1">
    <input type="checkbox" name="a-next" id="nextF-c_B-rv_N-2">
    <div class="nextblock_btn">
      <label for="nextF-a_B-sq_N-1" class="buttonnextF-a_B-sq_N-1"></label>
      <label for="nextF-a_B-sq_N-2" class="buttonnextF-a_B-sq_N-2"></label>
      <label for="nextF-a_B-sq_N-3" class="buttonnextF-a_B-sq_N-3"></label>
      <label for="nextF-a_B-sq_N-4" class="buttonnextF-a_B-sq_N-4"></label>
      <label for="nextF-a_B-sq_N-5" class="buttonnextF-a_B-sq_N-5"></label>
      <label for="nextF-a_B-sq_N-6" class="buttonnextF-a_B-sq_N-6"></label>
      <label for="nextF-a_B-sq_N-7" class="buttonnextF-a_B-sq_N-7"></label>
      <label for="nextF-a_B-sq_N-8" class="buttonnextF-a_B-sq_N-8"></label>
      <label for="nextF-a_B-sq_N-9" class="buttonnextF-a_B-sq_N-9"></label>
      <label for="nextF-a_B-lg_N-1" class="buttonnextF-a_B-lg_N-1"></label>
      <label for="nextF-a_B-lg_N-2" class="buttonnextF-a_B-lg_N-2"></label>
      <label for="nextF-a_B-lg_N-3" class="buttonnextF-a_B-lg_N-3"></label>
      <label for="nextF-a_B-wd_N-1" class="buttonnextF-a_B-wd_N-1"></label>
      <label for="nextF-a_B-wd_N-2" class="buttonnextF-a_B-wd_N-2"></label>
      <label for="nextF-a_B-wd_N-3" class="buttonnextF-a_B-wd_N-3"></label>
      <label for="nextF-a_B-el_N-1" class="buttonnextF-a_B-el_N-1"></label>
      <label for="nextF-a_B-el_N-2" class="buttonnextF-a_B-el_N-2"></label>
      <label for="nextF-a_B-rv_N-1" class="buttonnextF-a_B-rv_N-1"></label>
      <label for="nextF-a_B-rv_N-2" class="buttonnextF-a_B-rv_N-2"></label>
      <label for="nextF-b_B-sq_N-1" class="buttonnextF-b_B-sq_N-1"></label>
      <label for="nextF-b_B-sq_N-2" class="buttonnextF-b_B-sq_N-2"></label>
      <label for="nextF-b_B-sq_N-3" class="buttonnextF-b_B-sq_N-3"></label>
      <label for="nextF-b_B-sq_N-4" class="buttonnextF-b_B-sq_N-4"></label>
      <label for="nextF-b_B-sq_N-5" class="buttonnextF-b_B-sq_N-5"></label>
      <label for="nextF-b_B-sq_N-6" class="buttonnextF-b_B-sq_N-6"></label>
      <label for="nextF-b_B-sq_N-7" class="buttonnextF-b_B-sq_N-7"></label>
      <label for="nextF-b_B-sq_N-8" class="buttonnextF-b_B-sq_N-8"></label>
      <label for="nextF-b_B-sq_N-9" class="buttonnextF-b_B-sq_N-9"></label>
      <label for="nextF-b_B-lg_N-1" class="buttonnextF-b_B-lg_N-1"></label>
      <label for="nextF-b_B-lg_N-2" class="buttonnextF-b_B-lg_N-2"></label>
      <label for="nextF-b_B-lg_N-3" class="buttonnextF-b_B-lg_N-3"></label>
      <label for="nextF-b_B-wd_N-1" class="buttonnextF-b_B-wd_N-1"></label>
      <label for="nextF-b_B-wd_N-2" class="buttonnextF-b_B-wd_N-2"></label>
      <label for="nextF-b_B-wd_N-3" class="buttonnextF-b_B-wd_N-3"></label>
      <label for="nextF-b_B-el_N-1" class="buttonnextF-b_B-el_N-1"></label>
      <label for="nextF-b_B-el_N-2" class="buttonnextF-b_B-el_N-2"></label>
      <label for="nextF-b_B-rv_N-1" class="buttonnextF-b_B-rv_N-1"></label>
      <label for="nextF-b_B-rv_N-2" class="buttonnextF-b_B-rv_N-2"></label>
      <label for="nextF-c_B-sq_N-1" class="buttonnextF-c_B-sq_N-1"></label>
      <label for="nextF-c_B-sq_N-2" class="buttonnextF-c_B-sq_N-2"></label>
      <label for="nextF-c_B-sq_N-3" class="buttonnextF-c_B-sq_N-3"></label>
      <label for="nextF-c_B-sq_N-4" class="buttonnextF-c_B-sq_N-4"></label>
      <label for="nextF-c_B-sq_N-5" class="buttonnextF-c_B-sq_N-5"></label>
      <label for="nextF-c_B-sq_N-6" class="buttonnextF-c_B-sq_N-6"></label>
      <label for="nextF-c_B-sq_N-7" class="buttonnextF-c_B-sq_N-7"></label>
      <label for="nextF-c_B-sq_N-8" class="buttonnextF-c_B-sq_N-8"></label>
      <label for="nextF-c_B-sq_N-9" class="buttonnextF-c_B-sq_N-9"></label>
      <label for="nextF-c_B-lg_N-1" class="buttonnextF-c_B-lg_N-1"></label>
      <label for="nextF-c_B-lg_N-2" class="buttonnextF-c_B-lg_N-2"></label>
      <label for="nextF-c_B-lg_N-3" class="buttonnextF-c_B-lg_N-3"></label>
      <label for="nextF-c_B-wd_N-1" class="buttonnextF-c_B-wd_N-1"></label>
      <label for="nextF-c_B-wd_N-2" class="buttonnextF-c_B-wd_N-2"></label>
      <label for="nextF-c_B-wd_N-3" class="buttonnextF-c_B-wd_N-3"></label>
      <label for="nextF-c_B-el_N-1" class="buttonnextF-c_B-el_N-1"></label>
      <label for="nextF-c_B-el_N-2" class="buttonnextF-c_B-el_N-2"></label>
      <label for="nextF-c_B-rv_N-1" class="buttonnextF-c_B-rv_N-1"></label>
      <label for="nextF-c_B-rv_N-2" class="buttonnextF-c_B-rv_N-2"></label>
    </div>
    <!-- Labels -->
    <label for="putF-a_P-1_B-sq_N-1" class="selectF-a_P-1_B-sq_N-1"></label>
    <label for="putF-a_P-2_B-sq_N-1" class="selectF-a_P-2_B-sq_N-1"></label>
    <label for="putF-a_P-3_B-sq_N-1" class="selectF-a_P-3_B-sq_N-1"></label>
    <label for="putF-a_P-4_B-sq_N-1" class="selectF-a_P-4_B-sq_N-1"></label>
    <label for="putF-a_P-5_B-sq_N-1" class="selectF-a_P-5_B-sq_N-1"></label>
    <label for="putF-a_P-6_B-sq_N-1" class="selectF-a_P-6_B-sq_N-1"></label>
    <label for="putF-a_P-7_B-sq_N-1" class="selectF-a_P-7_B-sq_N-1"></label>
    <label for="putF-a_P-8_B-sq_N-1" class="selectF-a_P-8_B-sq_N-1"></label>
    <label for="putF-a_P-9_B-sq_N-1" class="selectF-a_P-9_B-sq_N-1"></label>
    <label for="putF-a_P-4_B-lg_N-1" class="selectF-a_P-4_B-lg_N-1"></label>
    <label for="putF-a_P-5_B-lg_N-1" class="selectF-a_P-5_B-lg_N-1"></label>
    <label for="putF-a_P-6_B-lg_N-1" class="selectF-a_P-6_B-lg_N-1"></label>
    <label for="putF-a_P-7_B-lg_N-1" class="selectF-a_P-7_B-lg_N-1"></label>
    <label for="putF-a_P-8_B-lg_N-1" class="selectF-a_P-8_B-lg_N-1"></label>
    <label for="putF-a_P-9_B-lg_N-1" class="selectF-a_P-9_B-lg_N-1"></label>
    <label for="putF-a_P-1_B-wd_N-1" class="selectF-a_P-1_B-wd_N-1"></label>
    <label for="putF-a_P-2_B-wd_N-1" class="selectF-a_P-2_B-wd_N-1"></label>
    <label for="putF-a_P-4_B-wd_N-1" class="selectF-a_P-4_B-wd_N-1"></label>
    <label for="putF-a_P-5_B-wd_N-1" class="selectF-a_P-5_B-wd_N-1"></label>
    <label for="putF-a_P-7_B-wd_N-1" class="selectF-a_P-7_B-wd_N-1"></label>
    <label for="putF-a_P-8_B-wd_N-1" class="selectF-a_P-8_B-wd_N-1"></label>
    <label for="putF-a_P-4_B-el_N-1" class="selectF-a_P-4_B-el_N-1"></label>
    <label for="putF-a_P-5_B-el_N-1" class="selectF-a_P-5_B-el_N-1"></label>
    <label for="putF-a_P-7_B-el_N-1" class="selectF-a_P-7_B-el_N-1"></label>
    <label for="putF-a_P-8_B-el_N-1" class="selectF-a_P-8_B-el_N-1"></label>
    <label for="putF-a_P-2_B-rv_N-1" class="selectF-a_P-2_B-rv_N-1"></label>
    <label for="putF-a_P-3_B-rv_N-1" class="selectF-a_P-3_B-rv_N-1"></label>
    <label for="putF-a_P-5_B-rv_N-1" class="selectF-a_P-5_B-rv_N-1"></label>
    <label for="putF-a_P-6_B-rv_N-1" class="selectF-a_P-6_B-rv_N-1"></label>
    <label for="putF-b_P-1_B-sq_N-1" class="selectF-b_P-1_B-sq_N-1"></label>
    <label for="putF-b_P-2_B-sq_N-1" class="selectF-b_P-2_B-sq_N-1"></label>
    <label for="putF-b_P-3_B-sq_N-1" class="selectF-b_P-3_B-sq_N-1"></label>
    <label for="putF-b_P-4_B-sq_N-1" class="selectF-b_P-4_B-sq_N-1"></label>
    <label for="putF-b_P-5_B-sq_N-1" class="selectF-b_P-5_B-sq_N-1"></label>
    <label for="putF-b_P-6_B-sq_N-1" class="selectF-b_P-6_B-sq_N-1"></label>
    <label for="putF-b_P-7_B-sq_N-1" class="selectF-b_P-7_B-sq_N-1"></label>
    <label for="putF-b_P-8_B-sq_N-1" class="selectF-b_P-8_B-sq_N-1"></label>
    <label for="putF-b_P-9_B-sq_N-1" class="selectF-b_P-9_B-sq_N-1"></label>
    <label for="putF-b_P-4_B-lg_N-1" class="selectF-b_P-4_B-lg_N-1"></label>
    <label for="putF-b_P-5_B-lg_N-1" class="selectF-b_P-5_B-lg_N-1"></label>
    <label for="putF-b_P-6_B-lg_N-1" class="selectF-b_P-6_B-lg_N-1"></label>
    <label for="putF-b_P-7_B-lg_N-1" class="selectF-b_P-7_B-lg_N-1"></label>
    <label for="putF-b_P-8_B-lg_N-1" class="selectF-b_P-8_B-lg_N-1"></label>
    <label for="putF-b_P-9_B-lg_N-1" class="selectF-b_P-9_B-lg_N-1"></label>
    <label for="putF-b_P-1_B-wd_N-1" class="selectF-b_P-1_B-wd_N-1"></label>
    <label for="putF-b_P-2_B-wd_N-1" class="selectF-b_P-2_B-wd_N-1"></label>
    <label for="putF-b_P-4_B-wd_N-1" class="selectF-b_P-4_B-wd_N-1"></label>
    <label for="putF-b_P-5_B-wd_N-1" class="selectF-b_P-5_B-wd_N-1"></label>
    <label for="putF-b_P-7_B-wd_N-1" class="selectF-b_P-7_B-wd_N-1"></label>
    <label for="putF-b_P-8_B-wd_N-1" class="selectF-b_P-8_B-wd_N-1"></label>
    <label for="putF-b_P-4_B-el_N-1" class="selectF-b_P-4_B-el_N-1"></label>
    <label for="putF-b_P-5_B-el_N-1" class="selectF-b_P-5_B-el_N-1"></label>
    <label for="putF-b_P-7_B-el_N-1" class="selectF-b_P-7_B-el_N-1"></label>
    <label for="putF-b_P-8_B-el_N-1" class="selectF-b_P-8_B-el_N-1"></label>
    <label for="putF-b_P-2_B-rv_N-1" class="selectF-b_P-2_B-rv_N-1"></label>
    <label for="putF-b_P-3_B-rv_N-1" class="selectF-b_P-3_B-rv_N-1"></label>
    <label for="putF-b_P-5_B-rv_N-1" class="selectF-b_P-5_B-rv_N-1"></label>
    <label for="putF-b_P-6_B-rv_N-1" class="selectF-b_P-6_B-rv_N-1"></label>
    <label for="putF-c_P-1_B-sq_N-1" class="selectF-c_P-1_B-sq_N-1"></label>
    <label for="putF-c_P-2_B-sq_N-1" class="selectF-c_P-2_B-sq_N-1"></label>
    <label for="putF-c_P-3_B-sq_N-1" class="selectF-c_P-3_B-sq_N-1"></label>
    <label for="putF-c_P-4_B-sq_N-1" class="selectF-c_P-4_B-sq_N-1"></label>
    <label for="putF-c_P-5_B-sq_N-1" class="selectF-c_P-5_B-sq_N-1"></label>
    <label for="putF-c_P-6_B-sq_N-1" class="selectF-c_P-6_B-sq_N-1"></label>
    <label for="putF-c_P-7_B-sq_N-1" class="selectF-c_P-7_B-sq_N-1"></label>
    <label for="putF-c_P-8_B-sq_N-1" class="selectF-c_P-8_B-sq_N-1"></label>
    <label for="putF-c_P-9_B-sq_N-1" class="selectF-c_P-9_B-sq_N-1"></label>
    <label for="putF-c_P-4_B-lg_N-1" class="selectF-c_P-4_B-lg_N-1"></label>
    <label for="putF-c_P-5_B-lg_N-1" class="selectF-c_P-5_B-lg_N-1"></label>
    <label for="putF-c_P-6_B-lg_N-1" class="selectF-c_P-6_B-lg_N-1"></label>
    <label for="putF-c_P-7_B-lg_N-1" class="selectF-c_P-7_B-lg_N-1"></label>
    <label for="putF-c_P-8_B-lg_N-1" class="selectF-c_P-8_B-lg_N-1"></label>
    <label for="putF-c_P-9_B-lg_N-1" class="selectF-c_P-9_B-lg_N-1"></label>
    <label for="putF-c_P-1_B-wd_N-1" class="selectF-c_P-1_B-wd_N-1"></label>
    <label for="putF-c_P-2_B-wd_N-1" class="selectF-c_P-2_B-wd_N-1"></label>
    <label for="putF-c_P-4_B-wd_N-1" class="selectF-c_P-4_B-wd_N-1"></label>
    <label for="putF-c_P-5_B-wd_N-1" class="selectF-c_P-5_B-wd_N-1"></label>
    <label for="putF-c_P-7_B-wd_N-1" class="selectF-c_P-7_B-wd_N-1"></label>
    <label for="putF-c_P-8_B-wd_N-1" class="selectF-c_P-8_B-wd_N-1"></label>
    <label for="putF-c_P-4_B-el_N-1" class="selectF-c_P-4_B-el_N-1"></label>
    <label for="putF-c_P-5_B-el_N-1" class="selectF-c_P-5_B-el_N-1"></label>
    <label for="putF-c_P-7_B-el_N-1" class="selectF-c_P-7_B-el_N-1"></label>
    <label for="putF-c_P-8_B-el_N-1" class="selectF-c_P-8_B-el_N-1"></label>
    <label for="putF-c_P-2_B-rv_N-1" class="selectF-c_P-2_B-rv_N-1"></label>
    <label for="putF-c_P-3_B-rv_N-1" class="selectF-c_P-3_B-rv_N-1"></label>
    <label for="putF-c_P-5_B-rv_N-1" class="selectF-c_P-5_B-rv_N-1"></label>
    <label for="putF-c_P-6_B-rv_N-1" class="selectF-c_P-6_B-rv_N-1"></label>
    <label for="putF-g_P-1_B-sq_N-1" class="selectF-g_P-1_B-sq_N-1"></label>
    <label for="putF-g_P-2_B-sq_N-1" class="selectF-g_P-2_B-sq_N-1"></label>
    <label for="putF-g_P-3_B-sq_N-1" class="selectF-g_P-3_B-sq_N-1"></label>
    <label for="putF-g_P-4_B-sq_N-1" class="selectF-g_P-4_B-sq_N-1"></label>
    <label for="putF-g_P-5_B-sq_N-1" class="selectF-g_P-5_B-sq_N-1"></label>
    <label for="putF-g_P-6_B-sq_N-1" class="selectF-g_P-6_B-sq_N-1"></label>
    <label for="putF-g_P-7_B-sq_N-1" class="selectF-g_P-7_B-sq_N-1"></label>
    <label for="putF-g_P-8_B-sq_N-1" class="selectF-g_P-8_B-sq_N-1"></label>
    <label for="putF-g_P-9_B-sq_N-1" class="selectF-g_P-9_B-sq_N-1"></label>
    <label for="putF-g_P-4_B-lg_N-1" class="selectF-g_P-4_B-lg_N-1"></label>
    <label for="putF-g_P-5_B-lg_N-1" class="selectF-g_P-5_B-lg_N-1"></label>
    <label for="putF-g_P-6_B-lg_N-1" class="selectF-g_P-6_B-lg_N-1"></label>
    <label for="putF-g_P-7_B-lg_N-1" class="selectF-g_P-7_B-lg_N-1"></label>
    <label for="putF-g_P-8_B-lg_N-1" class="selectF-g_P-8_B-lg_N-1"></label>
    <label for="putF-g_P-9_B-lg_N-1" class="selectF-g_P-9_B-lg_N-1"></label>
    <label for="putF-g_P-1_B-wd_N-1" class="selectF-g_P-1_B-wd_N-1"></label>
    <label for="putF-g_P-2_B-wd_N-1" class="selectF-g_P-2_B-wd_N-1"></label>
    <label for="putF-g_P-4_B-wd_N-1" class="selectF-g_P-4_B-wd_N-1"></label>
    <label for="putF-g_P-5_B-wd_N-1" class="selectF-g_P-5_B-wd_N-1"></label>
    <label for="putF-g_P-7_B-wd_N-1" class="selectF-g_P-7_B-wd_N-1"></label>
    <label for="putF-g_P-8_B-wd_N-1" class="selectF-g_P-8_B-wd_N-1"></label>
    <label for="putF-g_P-4_B-el_N-1" class="selectF-g_P-4_B-el_N-1"></label>
    <label for="putF-g_P-5_B-el_N-1" class="selectF-g_P-5_B-el_N-1"></label>
    <label for="putF-g_P-7_B-el_N-1" class="selectF-g_P-7_B-el_N-1"></label>
    <label for="putF-g_P-8_B-el_N-1" class="selectF-g_P-8_B-el_N-1"></label>
    <label for="putF-g_P-2_B-rv_N-1" class="selectF-g_P-2_B-rv_N-1"></label>
    <label for="putF-g_P-3_B-rv_N-1" class="selectF-g_P-3_B-rv_N-1"></label>
    <label for="putF-g_P-5_B-rv_N-1" class="selectF-g_P-5_B-rv_N-1"></label>
    <label for="putF-g_P-6_B-rv_N-1" class="selectF-g_P-6_B-rv_N-1"></label>
    <!-- Floor A -->
    <div class="floor-a">
      <div class="block9">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
      <div class="block7">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
          </div>
      </div>
      <div class="block3">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
      <div class="block1">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
      <div class="block8">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
      <div class="block6">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
      <div class="block4">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
      <div class="block2">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
      <div class="block5">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
    </div>
    <div class="aclear"></div>
    <!-- Floor B -->
    <div class="floor-b">
      <div class="block9">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
      <div class="block7">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
          </div>
      </div>
      <div class="block3">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
      <div class="block1">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
      <div class="block8">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
      <div class="block6">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
      <div class="block4">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
      <div class="block2">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
      <div class="block5">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
    </div>
    <div class="bclear"></div>
    <!-- Floor C -->
    <div class="floor-c">
      <div class="block9">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
      <div class="block7">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
          </div>
      </div>
      <div class="block3">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
      <div class="block1">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
      <div class="block8">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
      <div class="block6">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
      <div class="block4">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
      <div class="block2">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
      <div class="block5">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
    </div>
    <div class="cclear"></div>
    <!-- Floor-g -->
    <div class="floor-g">
      <div class="block9">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
      <div class="block7">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
          </div>
      </div>
      <div class="block3">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
      <div class="block1">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
      <div class="block8">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
      <div class="block6">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
      <div class="block4">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
      <div class="block2">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
      <div class="block5">
        <div class="cube">
          <div class="side_front"></div>
          <div class="side_bottom"></div>
          <div class="side_top"></div>
          <div class="side_back"></div>
          <div class="side_right"></div>
          <div class="side_left"></div>
        </div>
      </div>
    </div>
    <!-- surface -->
    <div class="temae"></div>
    <div class="UI">
      <div class="UI-move1">
        <div class="score_left"></div>
        <div class="score_bottom"></div>
        <div class="score_front">
          <div class="score_front_name">SCORE</div>
          <div class="score_front_num"></div>
        </div>
      </div>
      <div class="UI-move2">
        <div class="next_left"></div>
        <div class="next_front">
          <div class="next_front_name">BLOCK</div>
          <div class="next_front_main">
            <div class="next_front_bsq"></div>
            <div class="next_front_blg"></div>
            <div class="next_front_bwd"></div>
            <div class="next_front_bel"></div>
            <div class="next_front_brv"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="help"></div>
    <div class="manual"></div>
    <div class="wall">
      <div class="oku"></div>
      <div class="ue1"></div>
      <div class="ue2"></div>
      <div class="ue3"></div>
      <div class="hidari1"></div>
      <div class="hidari2"></div>
      <div class="hidari3"></div>
      <div class="migi1"></div>
      <div class="migi2"></div>
      <div class="migi3"></div>
      <div class="shita1"></div>
      <div class="shita2"></div>
      <div class="shita3"></div>
      <div class="fog1"></div>
      <div class="fog2"></div>
      <div class="fog3"></div>
    </div>
    <div class="cover1"></div>
    <div class="cover2"></div>
    <div class="result">
      <div class="result_comp"></div>
      <div class="result_score"></div>
    </div>
    <div class="futa1"></div>
    <div class="futa2"></div>
    <div class="mode">
      <label for="mode_color" class="mode_co">COLOR</label>
      <label for="mode_retro" class="mode_re">RETRO</label>
    </div>
  </div>
  <div class="background">
    <div class="title">
      <div class="logo">
        <div class="b1"></div>
        <div class="b2"></div>
        <div class="b3"></div>
        <div class="b4"></div>
        <div class="b5"></div>
        <div class="b6"></div>
        <div class="y1"></div>
        <div class="y2"></div>
        <div class="y3"></div>
        <div class="y4"></div>
        <div class="c1"></div>
        <div class="c2"></div>
        <div class="c3"></div>
        <div class="sa1"></div>
        <div class="sa2"></div>
        <div class="sa3"></div>
        <div class="sa4"></div>
        <div class="sa5"></div>
        <div class="sb1"></div>
        <div class="sb2"></div>
        <div class="sb3"></div>
        <div class="sb4"></div>
        <div class="sb5"></div>
      </div>
      <div class="text"></div>
      <label for="start" class="start"></label>
    </div>
  </div>

</body>
</html>
