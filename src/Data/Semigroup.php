<?php

$Data_Semigroup_concatString = function ($x) {
    return function ($y) use (&$x) {
        return $x . $y;
    };
};

$Data_Semigroup_concatArray = function ($x) {
    return function ($y) use (&$x) {
        return array_merge($x, $y);
    };
};
