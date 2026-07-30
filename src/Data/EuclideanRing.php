<?php

$intDegree = function($x) use (&$intDegree) { return abs($x); };
$intDiv = function($x, $y) use (&$intDiv) {
    return (int)($x / $y);
};
$intMod = function($x, $y) use (&$intMod) {
    return $x % $y;
};
$numDiv = function($x, $y) use (&$numDiv) {
    return $x / $y;
};

$exports['intDegree'] = $intDegree;
$exports['intDiv'] = $intDiv;
$exports['intMod'] = $intMod;
$exports['numDiv'] = $numDiv;
return $exports;
