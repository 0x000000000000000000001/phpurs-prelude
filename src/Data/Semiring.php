<?php

$intAdd = function($a, $b) use (&$intAdd) {
    return (($a + $b) << 32) >> 32;
};
$intMul = function($a, $b) use (&$intMul) {
    return (($a * $b) << 32) >> 32;
};
$numAdd = function($a, $b) use (&$numAdd) {
    return (float)($a + $b);
};
$numMul = function($a, $b) use (&$numMul) {
    return (float)($a * $b);
};

$exports['intAdd'] = $intAdd;
$exports['intMul'] = $intMul;
$exports['numAdd'] = $numAdd;
$exports['numMul'] = $numMul;
return $exports;
