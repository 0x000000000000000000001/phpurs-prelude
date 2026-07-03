<?php

$Data_HeytingAlgebra_boolConj = function ($a) {
    return function ($b) use (&$a) {
        return $a && $b;
    };
};

$Data_HeytingAlgebra_boolDisj = function ($a) {
    return function ($b) use (&$a) {
        return $a || $b;
    };
};

$Data_HeytingAlgebra_boolNot = function ($a) {
    return !$a;
};
