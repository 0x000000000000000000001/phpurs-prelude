<?php

$Data_HeytingAlgebra_boolConj = function($a, $b = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_HeytingAlgebra_boolConj;
            return $Data_HeytingAlgebra_boolConj(...array_merge($__args, $more));
        };
    }
    return $a && $b;
};
$Data_HeytingAlgebra_boolDisj = function($a, $b = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_HeytingAlgebra_boolDisj;
            return $Data_HeytingAlgebra_boolDisj(...array_merge($__args, $more));
        };
    }
    return $a || $b;
};
$Data_HeytingAlgebra_boolNot = function($a) { return !$a; };