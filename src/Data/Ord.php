<?php

$Data_Ord_ordIntImpl = function($lt, $eq = null, $gt = null, $x = null, $y = null) {
    if (func_num_args() < 5) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Ord_ordIntImpl;
            return $Data_Ord_ordIntImpl(...array_merge($__args, $more));
        };
    }
    return $x < $y ? $lt : ($x === $y ? $eq : $gt);
};
$Data_Ord_ordStringImpl = $Data_Ord_ordIntImpl;
$Data_Ord_ordNumberImpl = $Data_Ord_ordIntImpl;
$Data_Ord_ordCharImpl = $Data_Ord_ordIntImpl;
$Data_Ord_ordBooleanImpl = $Data_Ord_ordIntImpl;