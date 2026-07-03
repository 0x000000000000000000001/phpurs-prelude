<?php

$Data_Ord_ordIntImpl = function ($lt, $eq = null, $gt = null, $x = null, $y = null) {
    if (func_num_args() === 3) return function ($x, $y = null) use ($lt, $eq, $gt) {
        if (func_num_args() === 1) return function ($y) use ($lt, $eq, $gt, $x) {
            return $x < $y ? $lt : ($x === $y ? $eq : $gt);
        };
        return $x < $y ? $lt : ($x === $y ? $eq : $gt);
    };
    return $x < $y ? $lt : ($x === $y ? $eq : $gt);
};

$Data_Ord_ordStringImpl = $Data_Ord_ordIntImpl;
$Data_Ord_ordNumberImpl = $Data_Ord_ordIntImpl;
$Data_Ord_ordCharImpl = $Data_Ord_ordIntImpl;
$Data_Ord_ordBooleanImpl = $Data_Ord_ordIntImpl;
