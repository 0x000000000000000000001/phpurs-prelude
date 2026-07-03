<?php

$Data_EuclideanRing_intDegree = function ($x) {
    return abs($x);
};

$Data_EuclideanRing_intDiv = function ($x, $y) {
        return (int)($x / $y);
};

$Data_EuclideanRing_intMod = function ($x, $y) {
        return $x % $y;
};

$Data_EuclideanRing_numDiv = function ($x, $y) {
        return $x / $y;
};
