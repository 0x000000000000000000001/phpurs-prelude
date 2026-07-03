<?php

$Data_EuclideanRing_intDegree = function ($x) {
    return abs($x);
};

$Data_EuclideanRing_intDiv = function ($x) {
    return function ($y) use (&$x) {
        return (int)($x / $y);
    };
};

$Data_EuclideanRing_intMod = function ($x) {
    return function ($y) use (&$x) {
        return $x % $y;
    };
};

$Data_EuclideanRing_numDiv = function ($x) {
    return function ($y) use (&$x) {
        return $x / $y;
    };
};
