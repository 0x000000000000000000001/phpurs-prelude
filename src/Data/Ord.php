<?php

$ordIntImpl = function($lt, $eq = null, $gt = null, $x = null, $y = null) use (&$ordIntImpl) {
    if (\func_num_args() < 5) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$ordIntImpl) {

            return $ordIntImpl(...\array_merge($__args, $more));
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

$ordArrayImpl = function($f, $xs = null, $ys = null) use (&$ordArrayImpl) {
    if (\func_num_args() < 3) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$ordArrayImpl) {
            return $ordArrayImpl(...\array_merge($__args, $more));
        };
    }
    
    $i = 0;
    $xlen = \count($xs);
    $ylen = \count($ys);
    while ($i < $xlen && $i < $ylen) {
        $x = $xs[$i];
        $y = $ys[$i];
        $o = $f($x, $y);
        if ($o !== 0) {
            return $o;
        }
        $i++;
    }
    if ($xlen === $ylen) {
        return 0;
    } else if ($xlen > $ylen) {
        return -1;
    } else {
        return 1;
    }
};

$exports['ordArrayImpl'] = $ordArrayImpl;
return $exports;
