<?php

$boolConj = function($a, $b) use (&$boolConj) {
    return $a && $b;
};
$boolDisj = function($a, $b) use (&$boolDisj) {
    return $a || $b;
};
$boolNot = function($a) use (&$boolNot) { return !$a; };

$exports['boolConj'] = $boolConj;
$exports['boolDisj'] = $boolDisj;
$exports['boolNot'] = $boolNot;
return $exports;
