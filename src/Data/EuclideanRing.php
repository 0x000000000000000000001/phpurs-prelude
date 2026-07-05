<?php

$Data_EuclideanRing_intDegree = function($x) { return abs($x); };
$Data_EuclideanRing_intDiv = function($x, $y = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_EuclideanRing_intDiv;
            return $Data_EuclideanRing_intDiv(...array_merge($__args, $more));
        };
    }
    return (int)($x / $y);
};
$Data_EuclideanRing_intMod = function($x, $y = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_EuclideanRing_intMod;
            return $Data_EuclideanRing_intMod(...array_merge($__args, $more));
        };
    }
    return $x % $y;
};
$Data_EuclideanRing_numDiv = function($x, $y = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_EuclideanRing_numDiv;
            return $Data_EuclideanRing_numDiv(...array_merge($__args, $more));
        };
    }
    return $x / $y;
};