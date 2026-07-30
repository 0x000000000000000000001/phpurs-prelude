<?php

$intAdd = function($a, $b) use (&$intAdd) {
    return $a + $b;
};
$intMul = function($a, $b) use (&$intMul) {
    return $a * $b;
};
$numAdd = $intAdd;
$numMul = $intMul;

$exports['intAdd'] = $intAdd;
$exports['intMul'] = $intMul;
$exports['numAdd'] = $numAdd;
$exports['numMul'] = $numMul;
return $exports;
