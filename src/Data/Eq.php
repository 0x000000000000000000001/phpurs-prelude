<?php

$Data_Eq_eqIntImpl = function ($a) {
    return function ($b) use (&$a) {
        return $a === $b;
    };
};

$Data_Eq_eqStringImpl = $Data_Eq_eqIntImpl;
$Data_Eq_eqNumberImpl = $Data_Eq_eqIntImpl;
$Data_Eq_eqCharImpl = $Data_Eq_eqIntImpl;
$Data_Eq_eqBooleanImpl = $Data_Eq_eqIntImpl;
