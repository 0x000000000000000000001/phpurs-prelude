<?php

$concatString = function($x, $y) use (&$concatString) {
    return $x . $y;
};
$concatArray = function($x, $y) use (&$concatArray) {
    return \array_merge($x, $y);
};

$exports['concatString'] = $concatString;
$exports['concatArray'] = $concatArray;
return $exports;
