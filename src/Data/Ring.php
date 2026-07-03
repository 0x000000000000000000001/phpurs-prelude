<?php

$Data_Ring_intSub = function ($a) {
    return function ($b) use (&$a) {
        return $a - $b;
    };
};

$Data_Ring_numSub = $Data_Ring_intSub;
