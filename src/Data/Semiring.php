<?php

$Data_Semiring_intAdd = function ($a, $b) {
        return $a + $b;
};

$Data_Semiring_intMul = function ($a, $b) {
        return $a * $b;
};

$Data_Semiring_numAdd = $Data_Semiring_intAdd;
$Data_Semiring_numMul = $Data_Semiring_intMul;
