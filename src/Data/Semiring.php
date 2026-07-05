<?php

$Data_Semiring_intAdd = function($a, $b = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Semiring_intAdd;
            return $Data_Semiring_intAdd(...array_merge($__args, $more));
        };
    }
    return $a + $b;
};
$Data_Semiring_intMul = function($a, $b = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Semiring_intMul;
            return $Data_Semiring_intMul(...array_merge($__args, $more));
        };
    }
    return $a * $b;
};
$Data_Semiring_numAdd = $Data_Semiring_intAdd;
$Data_Semiring_numMul = $Data_Semiring_intMul;