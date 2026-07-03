<?php

$Data_Ord_ordIntImpl = function ($lt) {
    return function ($eq) use ($lt) {
        return function ($gt) use ($lt, $eq) {
            return function ($x) use ($lt, $eq, $gt) {
                return function ($y) use ($lt, $eq, $gt, $x) {
                    return $x < $y ? $lt : ($x === $y ? $eq : $gt);
                };
            };
        };
    };
};

$Data_Ord_ordStringImpl = $Data_Ord_ordIntImpl;
$Data_Ord_ordNumberImpl = $Data_Ord_ordIntImpl;
$Data_Ord_ordCharImpl = $Data_Ord_ordIntImpl;
$Data_Ord_ordBooleanImpl = $Data_Ord_ordIntImpl;
