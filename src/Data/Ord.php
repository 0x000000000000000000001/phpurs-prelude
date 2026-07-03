<?php

$Data_Ord_ordIntImpl = function ($lt, $eq, $gt, $x, $y) {
    return $x < $y ? $lt : ($x === $y ? $eq : $gt);
};

$Data_Ord_ordStringImpl = $Data_Ord_ordIntImpl;
$Data_Ord_ordNumberImpl = $Data_Ord_ordIntImpl;
$Data_Ord_ordCharImpl = $Data_Ord_ordIntImpl;
$Data_Ord_ordBooleanImpl = $Data_Ord_ordIntImpl;
