<?php

$boolConj = function($a, $b = null) use (&$boolConj) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$boolConj) {

            return $boolConj(...array_merge($__args, $more));
        };
    }
    return $a && $b;
};
$boolDisj = function($a, $b = null) use (&$boolDisj) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$boolDisj) {

            return $boolDisj(...array_merge($__args, $more));
        };
    }
    return $a || $b;
};
$boolNot = function($a) use (&$boolNot) { return !$a; };

$exports['boolConj'] = $boolConj;
$exports['boolDisj'] = $boolDisj;
$exports['boolNot'] = $boolNot;
return $exports;
