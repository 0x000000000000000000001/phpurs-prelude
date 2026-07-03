<?php

$Data_Semiring_intAdd = function ($a) {
    return function ($b) use (&$a) {
        return $a + $b;
    };
};

$Data_Semiring_intMul = function ($a) {
    return function ($b) use (&$a) {
        return $a * $b;
    };
};

$Data_Semiring_numAdd = $Data_Semiring_intAdd;
$Data_Semiring_numMul = $Data_Semiring_intMul;
