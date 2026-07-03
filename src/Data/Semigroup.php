<?php

$Data_Semigroup_concatString = function ($x, $y) {
        return $x . $y;
};

$Data_Semigroup_concatArray = function ($x, $y) {
        return array_merge($x, $y);
};
