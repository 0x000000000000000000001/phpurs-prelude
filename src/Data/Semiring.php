<?php

$intAdd = function($a, $b = null) use (&$intAdd) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$intAdd) {

            return $intAdd(...\array_merge($__args, $more));
        };
    }
    return $a + $b;
};
$intMul = function($a, $b = null) use (&$intMul) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$intMul) {

            return $intMul(...\array_merge($__args, $more));
        };
    }
    return $a * $b;
};
$numAdd = $intAdd;
$numMul = $intMul;

$exports['intAdd'] = $intAdd;
$exports['intMul'] = $intMul;
$exports['numAdd'] = $numAdd;
$exports['numMul'] = $numMul;
return $exports;
