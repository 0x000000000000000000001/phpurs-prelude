<?php

$concatString = function($x, $y = null) use (&$concatString) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$concatString) {

            return $concatString(...array_merge($__args, $more));
        };
    }
    return $x . $y;
};
$concatArray = function($x, $y = null) use (&$concatArray) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$concatArray) {

            return $concatArray(...array_merge($__args, $more));
        };
    }
    return array_merge($x, $y);
};

$exports['concatString'] = $concatString;
$exports['concatArray'] = $concatArray;
return $exports;
