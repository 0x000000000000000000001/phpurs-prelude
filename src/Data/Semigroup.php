<?php

$Data_Semigroup_concatString = function($x, $y = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Semigroup_concatString;
            return $Data_Semigroup_concatString(...array_merge($__args, $more));
        };
    }
    return $x . $y;
};
$Data_Semigroup_concatArray = function($x, $y = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Semigroup_concatArray;
            return $Data_Semigroup_concatArray(...array_merge($__args, $more));
        };
    }
    return array_merge($x, $y);
};