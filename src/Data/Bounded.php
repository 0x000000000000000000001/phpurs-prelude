<?php

$topInt = 2147483647;
$bottomInt = -2147483648;
$topChar = "\u{10FFFF}";
$bottomChar = "\u{0000}";
$topNumber = INF;
$bottomNumber = -INF;

$exports['topInt'] = $topInt;
$exports['bottomInt'] = $bottomInt;
$exports['topChar'] = $topChar;
$exports['bottomChar'] = $bottomChar;
$exports['topNumber'] = $topNumber;
$exports['bottomNumber'] = $bottomNumber;
return $exports;
