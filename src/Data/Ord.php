<?php

$ordIntImpl = function($lt, $eq = null, $gt = null, $x = null, $y = null) use (&$ordIntImpl) {
    if (func_num_args() < 5) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$ordIntImpl) {

            return $ordIntImpl(...array_merge($__args, $more));
        };
    }
    return $x < $y ? $lt : ($x === $y ? $eq : $gt);
};
$ordStringImpl = $ordIntImpl;
$ordNumberImpl = $ordIntImpl;
$ordCharImpl = $ordIntImpl;
$ordBooleanImpl = $ordIntImpl;

$exports['ordIntImpl'] = $ordIntImpl;
$exports['ordStringImpl'] = $ordStringImpl;
$exports['ordNumberImpl'] = $ordNumberImpl;
$exports['ordCharImpl'] = $ordCharImpl;
$exports['ordBooleanImpl'] = $ordBooleanImpl;
return $exports;
